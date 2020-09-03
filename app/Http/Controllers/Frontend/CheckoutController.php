<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Checkout;
use Auth;

class CheckoutController extends Controller
{
    public function checkout ()
    {
    	$cek = Checkout::where('user_id', Auth::user()->id)->get();
    	$total = Checkout::where('user_id', Auth::user()->id)->pluck('total_amount')->sum();
    	// dd($total);
    	return view('frontend.checkout', compact('cek', 'total'));
    }
}
