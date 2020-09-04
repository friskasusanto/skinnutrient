<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Chart;
use App\Model\Wishlist;

class HomeController extends Controller
{
    public function home()
    {
    	$terbaik = Chart::orderBy('jumlah', 'desc')->limit(8)->get();
    	$featured = Wishlist::orderBy('created_at', 'desc')->limit(8)->get();
    	$new = Product::orderBy('created_at', 'desc')->limit(8)->get();
    	$best = Checkout::orderBy('total_item', 'desc')->limit(8)->get();

    	return view('frontend.home', compact('terbaik', 'featured', 'new', 'best'));
    }
}
