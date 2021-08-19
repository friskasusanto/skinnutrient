<?php

namespace App\Http\Controllers\Frontend;

use App\Order;
use App\OrderItem;
use Carbon\Carbon;
use App\Model\Chart;
use App\checkoutItem;
use App\Model\Product;
use App\Model\Checkout;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Factory\OrderHistoryFactory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;


class CheckoutController extends Controller
{
    private $rajaongkirKey = 'ba13aac922f8f8048088396b13baf303';


    public function checkout ()
    {
        $total = Chart::where('user_id', Auth::user()->id)->pluck('total_amount')->sum();
        $cart = Chart::where('user_id', Auth::user()->id)->get();

        // dd($total);
        return view('frontend.layout.frontend.checkout', compact( 'total','cart'));
    }

    public function checkout_store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'alamat' => 'required',
            'phone' => 'required|min:11',
            'provinsi' => 'required',
            'kota' => 'required',
            'tipe' => 'required',
            'email' => 'required|string|email|max:255',
        ]);

        $totalan = Cart::instance('shopping')->subtotal(0);
        $totalan = str_replace(",","",$totalan);

        // $carts = Chart::with('product')->where('user_id', Auth::user()->id)->get();
        $carts = Cart::instance('shopping')->content();
        
        $orderId = null;

        DB::transaction(function() use ($request,$carts,&$orderId,$totalan)
        {
            $order = new Order();
            $order->user_id         = null; //Auth::user()->id
            $order->name            = $request->nama;
            $order->provinsi        = $request->provinsi_name;
            $order->kota            = $request->kota_name;
            $order->address         = $request->alamat;
            $order->phone_number    = $request->phone;
            $order->courier         = 'JNE';
            $order->courier_paket   = $request->tipe_name;
            $order->courier_price   = $request->tipe;
            $order->total_amount    = $totalan;
            $order->save();
            $orderId = $order->id;

            foreach ($carts as $cart) {
                $item = new OrderItem();
                $item->product_id   = $cart->id;
                $item->product_name = $cart->name;
                $item->price        = $cart->price;
                $item->qty          = $cart->qty;
                $item->total        = $cart->price * $cart->qty;
                $item->order_id     = $order->id;
                $item->save();
            }
           
        });
       
        
        // remove item cart
        // Cart::destroy();

        // midtrans

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
                'gross_amount' => ($totalan + $request->tipe),
            ),
            'customer_details' => array(
                'first_name' => $request->nama,
                'email' => $request->email,
                'phone' => $request->phone,
            ),
        );

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
            $checkout = Order::where('id',$request->order_id)->first();   
            $checkout->status = 1;
            $checkout->payment_date = $request->transaction_time;
            $checkout->update();
            OrderHistoryFactory::PaidOrder($request->order_id);
        }

        Log::debug($request->all());

        return new Response(['status' => 'success'], 200);
    }
    
    public function kota_ongkir(Request $request)
    {
        $response = Http::withHeaders(['key' => $this->rajaongkirKey])
                    ->get('https://api.rajaongkir.com/starter/city?province='.$request->provinsi);
            
        $hasil = $response->json();
        $data = $hasil['rajaongkir']['results'];
            
        return new Response(['kota' => $data], 200);
    }

    public function ongkir_total(Request $request)
    {
        $response = Http::asForm()->withHeaders(['key' => $this->rajaongkirKey])
                    ->post('https://api.rajaongkir.com/starter/cost',[
                        'origin' => '399', //kota semarang
                        'destination' => $request->kota,
                        'weight' => '1000',
                        'courier' => 'jne',
                    ]);

        $hasil = $response->json();
        $data = $hasil['rajaongkir']['results'][0]['costs'];

        return new Response(['jenis' => $data], 200);
    }
}
