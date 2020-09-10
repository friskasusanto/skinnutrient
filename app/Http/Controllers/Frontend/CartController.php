<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Chart;
use App\Model\Product;
use Auth;

class CartController extends Controller
{
    public function cart ()
    {
    	$cart = Chart::where('user_id', Auth::user()->id)->get();

    	return view('frontend.cart', compact('cart'));
    }

    public function delete (Request $request, $id)
    {
    	$status = 200;
        $message = "Product Berhasil di Hapus dari Cart";

    	$delete = Chart::find($id);
    	$delete->delete();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function checkout ()
    {
    	
    	$status = 200;
        $message = "Berhasil, menunggu pembayaran barang. Terimakasih.";
        $wish = Wishlist::where('user_id', Auth::user()->id)->get();
        foreach ($wish as $key => $value) {
            $data[] = array(
                'date_entry'=>  date('Y-m-d H:i:s'),
                'user_id'=> Auth::user()->id,
                'receiver_name'=> $request->receiver_name,
                'address'=> $request->address,
                'phone_number'=> $request->phone_number,
                'total_amount'=> $value->total_amount,
                'payment_id'=> $request->payment_id,
                'payment_date'=> null,
                'courier'=> null,
                'courier_price'=> null,
                'status'=> 0,
                'product_id'=> $value->product_id
            );
        }
        Checkout::insert($data);
        $status = Wishlist::where('user_id', Auth::user()->id)->where('status', '0')->update(['status'=>1]);

        return redirect('/home')->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
