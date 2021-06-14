<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
    	$pengaduan = Pengaduan::paginate(10);
    	return view('backend.admin.pengaduan.index', compact('pengaduan'));
    }
}
