<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function dasboard()
    {
    	return view('backend.dasboard.dasboard');
    }
}
