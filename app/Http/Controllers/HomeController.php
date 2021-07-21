<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Chart;
use App\Model\Wishlist;
use App\Model\Product;
use App\Model\Checkout;
use App\Model\Blog;
use App\Model\ProductJenis;
use App\Model\Banner;

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
        $new = Product::orderBy('created_at', 'asc')->get();
        $last = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $best = Product::where('best_seller', '1')->limit(8)->get();
        $blog = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        $banner = Banner::where('nama_banner', 'banner utama')->get();
        $all = Product::orderBy('created_at', 'desc')->get();

        return view('frontend.layout.frontend.index', compact('new', 'best', 'last', 'blog', 'banner', 'all'));
    }
}
