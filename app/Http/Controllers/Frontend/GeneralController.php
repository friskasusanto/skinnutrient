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
// use Request;

class GeneralController extends Controller
{
    public function concern ()
    {
        return view('frontend.layout.frontend.concern');
    }
    public function category ($id)
    {
        $category = Category::find($id);
        $all = Product::all();
        $product = Product::where('category_id', $category->id)->paginate(12);
        // dd($category->id);
        return view('frontend.layout.frontend.category', compact('category', 'all', 'product'));
    }
    public function categ ()
    {
        $categ = Category::all();
        return view('frontend.layout.frontend.categ', compact('categ'));
    }
    public function compare (Request $request)
    {
        // dd($request->ip());
            session(['key' => 'value']);
        // $request->session()->forget('name');

        echo $request->session()->get('name');

        return view('frontend.layout.frontend.compare');
    }
    public function botanic ()
    {
        $mask = Product::where('category_id', 1)->paginate(12);
        return view('frontend.layout.frontend.botanic', compact('mask'));
    }
    public function pengaduan ()
    {
        return view('frontend.layout.frontend.pengaduan');
    }
    public function contact ()
    {
        return view('frontend.layout.frontend.contact');
    }
    public function sitemap ()
    {
        return view('frontend.layout.frontend.sitemap');
    }

    public function privacyPolicy ()
    {
        return view('frontend.layout.frontend.faq');
    }
    public function faq ()
    {
        return view('frontend.layout.frontend.faq');
    }

    public function aboutUs ()
    {
        return view('frontend.layout.frontend.about');
    }

    public function bestSeller ()
    {
        $cek = Product::orderBy('created_at', 'desc')->where('best_seller', 1)->paginate('12');
        return view('frontend.layout.frontend.best', compact('cek'));
    }

    public function new ()
    {
        $product = Product::orderBy('created_at', 'desc')->paginate('12');
        return view('frontend.layout.frontend.new', compact('product'));
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
                        $category = Category::with('product')->get();
            // dd($product);
        }elseif ($request->jenis) {
            $product = Product::orWhere('jenis_id', $request->jenis)->orderBy('created_at', 'desc')->paginate(16);
        }


        return view('frontend.layout.frontend.shopSearch', compact('product', 'category'));
    }

    public function subscribe (Request $request)
    {
    	$status = 200;
        $message = "Selamat, kami akan mengirimkan notif berita terbaru Skin Nutrient melalui via email anda";

    	$subscribe = new Subscribe;
    	$subscribe->email = $request->email;
    	$subscribe->status = 1;
    	$subscribe->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }
    
}
