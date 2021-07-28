<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BotanicController extends Controller
{
    public function sessionCart (Request $request) {
		$request->session()
		->put('user_id','Diki Alfarabi Hadi');
		echo "Data telah ditambahkan ke session.";
	}
}
