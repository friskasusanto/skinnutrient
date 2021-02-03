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
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
        ]);

        $carts = Chart::where('user_id', Auth::user()->id)->get();
        // dd($carts);
        foreach ($carts as $key => $value) {
            $data[] = array(
                'user_id' => Auth::user()->id,
                'date_entry' => Carbon::now(),
                'receiver_name' => $request->nama.' '.$request->last_name,
                'address' => $request->alamat,
                'phone_number' => $request->phone,
                'total_amount' => $request->total,
                'status' => 0,
                'total_item' => $value->jumlah,
                'product_id' => $value->product_id
            );
            // $value->delete();
        }
        $checkout = Checkout::insert($data);
        // dd($data);

        // input cart item ke checkout item
        
        $check = Checkout::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->where('status', 0)->get();

        // dd($check);
        foreach ($check as $checks => $value) {
            $item[] = array(
                'product_id' => $value->product_id,
                'name' => $value->receiver_name,
                'price' => $value->product->price,
                'qty' => $value->total_item,
                'total' => $value->total_amount,
                'checkout_id' => $value->id
                
            );

            $params = array(
                'transaction_details' => array(
                    'order_id' => $value->id,
                    'gross_amount' => $request->total,
                ),
                'customer_details' => array(
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => Auth::user()->email,
                    'phone' => $request->phone,
                ),
            );
        }
        checkoutItem::insert($item);

        foreach ($carts as $key => $value) {
            $value->delete();
        }

        // remove item cart

       


        // Set your Merchant Server Key



        \Midtrans\Config::$serverKey = getenv('MD_SERVER_KEY');
        \Midtrans\Config::$isProduction = true;
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
