<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\Model\Product;
use App\Model\Chart;
use Session;

class SessionController extends Controller
{
	public function sessionBeliSekarang (Request $request, $slug)
	{
		$status = 200;
        $message = "Product Berhasil di Tambahkan ke Cart";
        $product = Product::where('slug', $slug)->first();

       	if ($request->quantity == null){

	        Cart::instance('shopping')
	        ->add(
	            $product->id, // product id
	            $product->name, // nama product
	            1, // qty
	            $product->price // harga
	        );
	    } else {
	    	Cart::instance('shopping')
	        ->add(
	            $product->id, // product id
	            $product->name, // nama product
	            $request->quantity, // qty
	            $product->price // harga
	        );
	    }

	    return redirect()->back('/session/checkout/{$product->slug}');

	}
	public function sessionUbahValue (Request $request, $id)
	{
		$status = 200;
        $message = "Quantity Berhasil di Ubah";

    	$cart = Cart::instance('shopping')->content()->where('id', $id)->first();
    	Cart::update($cart->rowId, $request->quantity);

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
	}
	public function sessionWishlist ()
	{
		$status = 200;
        $message = "Silahkan Login Terlebih Dahulu";
		return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
	}
	public function sessionCheckout ()
	{
		$cart = Cart::instance('shopping')->content();
		return view('frontend.layout.frontend.checkout', compact('cart'));
	}
	public function sessionCart ()
	{
		$cart = Cart::instance('shopping')->content();
		return view('frontend.layout.frontend.cart', compact('cart'));
	}
    public function tambahKeranjang (Request $request, $slug)
    {

		$status = 200;
        $message = "Product Berhasil di Tambahkan ke Cart";
        $product = Product::where('slug', $slug)->first();

       	if ($request->quantity == null){

	        Cart::instance('shopping')
	        ->add(
	            $product->id, // product id
	            $product->name, // nama product
	            1, // qty
	            $product->price // harga
	        );
	    } else {
	    	Cart::instance('shopping')
	        ->add(
	            $product->id, // product id
	            $product->name, // nama product
	            $request->quantity, // qty
	            $product->price // harga
	        );
	    }
        // dd(Cart::instance('shopping')->content());


		// $request->session()->forget('product_id');
		// $session = $request->session()->get('product_id');
		// dd(array($session));

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delSessionCart ($id)
    {
    	$status = 200;
        $message = "Product Berhasil di Hapus dari Cart";

    	$cart = Cart::instance('shopping')->content()->where('id', $id)->first();
    	Cart::remove($cart->rowId);

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
