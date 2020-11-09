<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Chart;
use App\Model\Wishlist;
use App\Model\Product;
use App\Model\Checkout;
use App\Model\Blog;
use App\Model\ProductJenis;

class HomeController extends Controller
{
    public function home()
    {
    	$new = Product::orderBy('created_at', 'asc')->where('status', '==', 1)->limit(8)->get();
        $last = Product::orderBy('created_at', 'desc')->where('status', '==', 1)->limit(8)->get();
    	$best = Product::where('best_seller', '1')->where('status', '==', 1)->limit(8)->get();
    	$blog = Blog::orderBy('created_at', 'desc')->limit(3)->get();

    	return view('frontend.home', compact('new', 'best', 'last', 'blog'));
    }
}
