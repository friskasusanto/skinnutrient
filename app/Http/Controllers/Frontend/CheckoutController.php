<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Model\Chart;
use App\checkoutItem;
use App\Model\Product;
use App\Model\Checkout;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class CheckoutController extends Controller
{
    public function checkout ()
    {
    	$total = Chart::where('user_id', Auth::user()->id)->pluck('total_amount')->sum();
        $cart = Chart::where('user_id', Auth::user()->id)->get();

        // dd($total);
    	return view('frontend.checkout', compact( 'total','cart'));
    }

    public function checkout_store(Request $request)
    {
        

        $checkout = new Checkout();
        $checkout->user_id = Auth::user()->id;
        $checkout->date_entry = Carbon::now();
        $checkout->receiver_name = $request->first_name.' '.$request->last_name;
        $checkout->address = $request->alamat;
        $checkout->phone_number = $request->phone;
        $checkout->total_amount = $request->total;
        $checkout->status = 0;
        $checkout->total_item = 0;
        $checkout->save();

        // input cart item ke checkout item
        $carts = Chart::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart ) {
            $item = new checkoutItem();
            $item->product_id = $cart->product_id;
            $product = Product::where('id',$cart->product_id)->first();
            $item->name = $product->name;
            $item->price = $product->price;

            $item->qty = $cart->jumlah;
            $item->total = $cart->total_amount;
            $item->checkout_id = $checkout->id;
            $item->save();
        }
        // remove item cart

       $params = array(
            'transaction_details' => array(
                'order_id' => $checkout->id,
                'gross_amount' => $request->total,
            ),
            'customer_details' => array(
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => Auth::user()->email,
                'phone' => $request->phone,
            ),
        );


        // Set your Merchant Server Key



        \Midtrans\Config::$serverKey = getenv('MD_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $snapToken = \Midtrans\Snap::createTransaction($params);

        return Redirect::away($snapToken->redirect_url);
    }

    public function midtrans_ipn(Request $request)
    {

        $transaction_status = $request->transaction_status;

        if ( $transaction_status == 'capture' || $transaction_status == 'settlement') {
            $checkout = Checkout::where('id',$request->order_id)->first();   
            $checkout->status = 1;
            $checkout->payment_date = $request->transaction_time;
            $checkout->update();
            Log::debug($request->all());
        }

        return new Response(['status' => 'success'], 200);
    }
}
