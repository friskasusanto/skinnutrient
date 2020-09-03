<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\ProductGambar;
use App\Model\Chart;
use App\Model\Checkout;
use Auth;

class DetailController extends Controller
{
    public function detail (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$gambar = ProductGambar::where('product_id', $product->id)->get();
    	// dd($gambar);

    	return view('frontend.detailProduct', compact('product', 'gambar'));
    }

    public function addCart (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$cek = Chart::where('product_id', $product->id)->count();

    	// dd($request->quantity);
    	if ($cek <= 0){
    		$cart = new Chart;
    		$cart->user_id = Auth::user()->id;
    		$cart->product_id = $product->id;

    		if ($request->quantity == null){
    			$cart->jumlah = 1;
    		}else {
    			$cart->jumlah = $request->quantity;
    		}

    		$cart->total_amount = $product->price * $cart->jumlah;
    		$cart->status = 0;
    		$cart->save();

    		$status = 200;
        	$message = "Berhasil Menambahkan ke Cart";

        	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
        }else{

        	if ($request->quantity != null){
        		$cart = Chart::where('product_id', $product->id)->first();
        		$cart->jumlah = $request->quantity;
        		$cart->save();
        	}
        	
        	$status = 200;
        	$message = "Product sudah ada di cart";

        	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
        }
    }

    public function buy (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$cek = Checkout::where('product_id', $product->id)->count();
    	// dd($cek);

    	if ($cek <= 0){
    		$buy = new Checkout;
    		$buy->date_entry = date('Y-m-d H:i:s');    
    		$buy->product_id = $product->id;
    		$buy->user_id = Auth::user()->id;
    		$buy->total_item = $request->quantity;
    		$buy->total_amount = $request->quantity * $product->price;
    		$buy->status = 0;
    		$buy->save();

    		$cart = new Chart;
	    	$cart->user_id = Auth::user()->id;
	    	$cart->product_id = $product->id;
	    	$cart->jumlah = $request->quantity;
	    	$cart->total_amount = $product->price * $cart->jumlah;
	    	$cart->status = 1;
	    	$cart->save();

        	return redirect('/checkout');
    	}else{
    		$cart = Chart::where('product_id', $product->id)->first();
    		$cart->status = 1;
    		$cart->save();

        	return redirect('/checkout');
    	}
    }
}
