<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Wishlist;
use App\Model\Chart;
use App\Model\Category;
use Auth;

class SaleController extends Controller
{

    public function index ()
    {
    	$sale = Product::where('discount', '!=', null)->orderBy('created_at', 'desc')->paginate('12');
    	return view('frontend.sale', compact('sale'));
    }

    public function wishlist (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();

    	if (Auth::check()){
            $cek = Wishlist::where('product_id', $product->id)->where('user_id', Auth::user()->id)->count();
            // dd($cek);
            if ($cek == 0){
        	
                $status = 200;
                $message = "Berhasil Menambahkan Wishlist";

    	    	$wishlist = new Wishlist;
    	    	$wishlist->user_id = Auth::user()->id;
    	    	$wishlist->product_id = $product->id;
    	    	$wishlist->item = 0;
    	    	$wishlist->amount = $product->price;
    	    	$wishlist->status = 0;
    	    	$wishlist->save();
            }else{

                $status = 200;
                $message = "Berhasil Menambahkan Wishlist";
            }
	    } else {
	    	$status = 500;
        	$message = "Silahkan login terlebih dahulu sebelum melanjutkan !";
	    }

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }

    public function cart (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	if (Auth::check()){
            $cek = Chart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
        	if (! $cek){
            	$status = 200;
            	$message = "Berhasil menambahkan ke cart";

    	    	$cart = new Chart;
    	    	$cart->user_id = Auth::user()->id;
    	    	$cart->product_id = $product->id;
    	    	$cart->jumlah = 1;
    	    	$cart->total_amount = $product->price * $cart->jumlah;
    	    	$cart->status = 0;
    	    	$cart->save();
            }else{
                $status = 500;
                $message = "Berhasil menambahkan ke cart";
            }

	    } else {
	    	$status = 200;
        	$message = "Silahkan login terlebih dahulu sebelum melanjutkan !";
	    }
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }

}
