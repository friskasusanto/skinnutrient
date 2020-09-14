<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Chart;
use App\Model\Wishlist;
use App\Model\Product;
use App\Model\Checkout;
use App\Model\Blog;
use App\Model\ProductJenis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $terbaik = Chart::orderBy('jumlah', 'desc')->limit(12)->get();
        $featured = Wishlist::orderBy('created_at', 'desc')->limit(12)->get();
        $new = Product::orderBy('created_at', 'desc')->limit(12)->get();
        $best = Checkout::orderBy('total_item', 'desc')->limit(12)->get();
        $blog = Blog::orderBy('created_at', 'desc')->limit(5)->get();
        $jenis = ProductJenis::orderBy('created_at', 'desc')->get();

        return view('frontend.home', compact('terbaik', 'featured', 'new', 'best', 'blog', 'jenis'));
    }
}
