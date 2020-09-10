<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Subscribe;
use App\Model\Category;
use App\Model\Product;
use App\Model\Checkout;
use Auth;

class GeneralController extends Controller
{
    public function bestSeller ()
    {
        $cek = Checkout::orderBy('created_at', 'desc')->paginate('12');
        return view('frontend.bestSeller', compact('cek'));
    }

    public function new ()
    {
        $product = Product::orderBy('created_at', 'desc')->paginate('12');
        return view('frontend.new', compact('product'));
    }
    
    public function product (Request $request)
    {
        if ($request->category) {
            $product = Product::orWhere('category_id', $request->category)->orderBy('created_at', 'desc')->paginate(16);
            $category = Category::with('product')->get();
        }elseif ($request->name) {
            $product = Product::orWhere('name', 'like', '%'.$request->name.'%')->orderBy('created_at', 'desc')->paginate(16);
            $category = Category::with('product')->get();
        }elseif ($request->jenis) {
            $product = Product::orWhere('jenis_id', $request->jenis)->orderBy('created_at', 'desc')->paginate(16);
        }

        return view('frontend.product', compact('product', 'category'));
    }

    public function subscribe (Request $request)
    {
    	$status = 200;
        $message = "Selamat, kami akan mengirimkan berita terbaru Skinnutrient melalui email anda";

    	$subscribe = new Subscribe;
    	$subscribe->email = $request->email;
    	$subscribe->status = 1;
    	$subscribe->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }
    
}
