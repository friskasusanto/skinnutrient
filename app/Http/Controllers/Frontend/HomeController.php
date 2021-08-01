<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\Chart;
use App\Model\Wishlist;
use App\Model\Product;
use App\Model\Checkout;
use App\Model\Blog;
use App\Model\ProductJenis;
use App\Model\Banner;
use App\Model\Ingredient;

class HomeController extends Controller
{
    public function home()
    {
    	$new = Product::orderBy('created_at', 'asc')->where('category_id', 1)->get();
        $last = Product::orderBy('created_at', 'desc')->limit(8)->get();
    	$best = Product::where('best_seller', '1')->limit(8)->get();
    	$blog = Blog::orderBy('created_at', 'desc')->limit(3)->get();
    	$banner = Banner::where('nama_banner', 'banner utama')->get();
    	$all = Product::orderBy('created_at', 'desc')->where('category_id', 1)->get();
        $ingredient = Ingredient::get();
        // dd(Cart::instance('shopping')->content());

    	return view('frontend.layout.frontend.index', compact('new', 'best', 'last', 'blog', 'banner', 'all', 'ingredient'));
    }
}
