<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Wishlist;
use App\Model\Chart;
use App\Model\Product;
use Auth;

class WishlistController extends Controller
{
    public function wishlist ()
    {
    	$wishlist = Wishlist::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

    	return view('frontend.wishlist', compact('wishlist'));
    }

    public function delete (Request $request, $id)
    {
    	$status = 200;
        $message = "Product Berhasil di Hapus";

    	$wishlist = Wishlist::find($id);
    	// dd($wishlist);
    	$wishlist->delete();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function addCart (Request $request, $id)
    {
    	$wishlist = Wishlist::find($id)->where('user_id', Auth::user()->id)->first();
    	$cek = Chart::where('product_id', $wishlist->product_id)->where('user_id', Auth::user()->id)->first();
    	// dd($cek);

    	$status = 200;
        $message = "Product Berhasil di Tambahkan ke Cart";

    	if (! $cek) {
    		$cart = new Chart;
    		$cart->user_id = Auth::user()->id;
    		$cart->product_id = $wishlist->product_id;
    		$cart->jumlah = 1;
    		$cart->total_amount = $wishlist->amount;
    		$cart->status = 1;
    		$cart->save();

    		$wishlist = Wishlist::find($id);
    		$wishlist->delete();
    		
    	}else {

    		$wishlist = Wishlist::find($id);
    		$wishlist->delete();
    	}
    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }
}
