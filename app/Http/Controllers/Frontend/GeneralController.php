<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Subscribe;
use Illuminate\Database\Eloquent\Builder;
use App\Model\Category;
use App\Model\Product;
use App\Model\Checkout;
use App\Model\ProductCategory;
use Auth;

class GeneralController extends Controller
{
    public function contact ()
    {
        return view('frontend.contact');
    }
    public function sitemap ()
    {
        return view('frontend.sitemap');
    }

    public function privacyPolicy ()
    {
        return view('frontend.faq');
    }
    public function faq ()
    {
        return view('frontend.faq');
    }

    public function aboutUs ()
    {
        return view('frontend.about');
    }

    public function bestSeller ()
    {
        $cek = Product::orderBy('created_at', 'desc')->where('best_seller', 1)->paginate('12');
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
            // $product = Product::orWhere('category_id', $request->category)->orderBy('created_at', 'desc')->paginate(16);
            $product = ProductCategory::with('product')->orWhere('category_id', $request->category)->orderBy('created_at', 'desc')->paginate(16);
            $category = Category::with('product')->get();
        }elseif ($request->name) {
            // $product = Product::orWhere('name', 'like', '%'.$request->name.'%')->orderBy('created_at', 'desc')->paginate(16);
            $product = ProductCategory::whereHas('product', function (Builder $query) use ($request){
                        $query->where('name', 'like', '%'.$request->name.'%');
                    })->paginate(16);
            dd($product);
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
