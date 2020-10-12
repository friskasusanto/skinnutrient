<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\ProductGambar;
use App\Model\Chart;
use App\Model\Checkout;
use App\Model\Comment;
use App\Model\Wishlist;
use App\Model\Rating;
use App\User;
use Auth;

class DetailController extends Controller
{
    public function review (Request $request, $slug)
    {

        $this->validate($request, [
            'name' => 'required',
            'judul' => 'required',
            'email' => 'required', 
            'comment' => 'required', 
            'star' => 'required', 
        ]);

        if (Auth::check()) {
            $product = Product::where('slug', $slug)->first();
            $cek = Comment::where('user_id', Auth::user()->id)->where('product_id', $product->id)->count();
            
            if (Auth::user()->email == $request->email) {

                if ($request->star != null) {
                    if ($cek <= 0) {
                        $status = 200;
                        $message = "Terimakasih Atas Partisipasi anda";
                        
                        $rating = new Rating;
                        $rating->user_id = Auth::user()->id;
                        $rating->product_id = $product->id;
                        $rating->jumlah = $request->star;
                        $rating->save();

                        $comment = new Comment;
                        $comment->product_id = $product->id;
                        $comment->blog_id = null;
                        $comment->name = $request->name;
                        $comment->email = $request->email;
                        $comment->judul = $request->judul;
                        $comment->comment = $request->comment;
                        $comment->save();

                    } else {
                        $cekUlang = Rating::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();

                        if ($cekUlang >= $request->star){
                            $rating = $cekUlang->id;
                            $rating->jumlah = $request->star;
                            $rating->save();

                            $comment = Comment::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
                            $comment->judul = $request->judul;
                            $comment->comment = $request->comment;
                            $comment->save();
                        }
                    }
                }else {
                    $status = 500;
                    $message = "Mohon Berikan Rating Untuk Product Ini";
                }
            }else{
                $status = 500;
                $message = "Email yang anda gunakan bukan member Skinnutrient";
            }

        } else {
            $status = 200;
            $message = "Silahkan Login Terlebih Dahulu Untuk Melanjutkan";
        }
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);


    }

    public function detail (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$gambar = ProductGambar::where('product_id', $product->id)->get();
        // $status = Checkout::where('user_id', Auth::user()->id)->where('product_id', $product->id)->orderBy('updated_at', 'desc')->where('status', 1)->get();
        $related = Product::with('category')->where('category_id', $product->category_id)->orderBy('created_at', 'desc')->limit('6')->get();
        $comment = Comment::where('product_id', $product->id)->orderBy('created_at', 'desc')->paginate(5);
    	// dd($status);

    	return view('frontend.detailProductnew', compact('product', 'gambar', 'related', 'comment'));
    }

    public function addCart (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$cek = Chart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
        $cekWish = Wishlist::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();

    	// dd($request->quantity);
        if (Auth::check()) {
        	if (! $cek){
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


                if ($cekWish){
                    $wishlist = Wishlist::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
                    $wishlist->delete();
                }

        		$status = 200;
            	$message = "Berhasil Menambahkan ke Cart";

            	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
        
            }else{

            	if ($request->quantity != null){
            		$cart = Chart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
            		$cart->jumlah = $request->quantity;
            		$cart->save();
            	}
                if ($cekWish){
                    $wishlist = Wishlist::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
                    $wishlist->delete();
                }
            	
            	$status = 200;
            	$message = "Product sudah ada di cart";

            	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
            }
        }else{
            $status = 200;
            $message = "Silahkan Login Terlebih Dahulu";

            return redirect('/login');
        }
    }

    public function buy (Request $request, $slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	$cek = Checkout::where('product_id', $product->id)->where('user_id', Auth::user()->id)->count();
        $cekCart = Chart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
    	// dd($cek);

        if (Auth::check()) {
        	if ($cek <= 0){
        		$buy = new Checkout;
        		$buy->date_entry = date('Y-m-d H:i:s');    
        		$buy->product_id = $product->id;
        		$buy->user_id = Auth::user()->id;
        		$buy->total_item = $request->quantity;
        		$buy->total_amount = $request->quantity * $product->price;
        		$buy->status = 0;
        		$buy->save();

        		if ($cekCart){
                    $cart = Chart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
                    $cart->delete();
                }

            	return redirect('/checkout');
        	}else{
        		if ($cekCart){
                    $cart = Chart::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first();
                    $cart->delete();
                }

            	return redirect('/checkout');
        	}
        }else{
            $status = 200;
            $message = "Silahkan Login Terlebih Dahulu";

            return redirect('/login');
        }

    }
}
