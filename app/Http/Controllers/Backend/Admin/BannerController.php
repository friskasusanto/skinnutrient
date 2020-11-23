<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Banner;
use App\Model\Log;
use Auth;

class BannerController extends Controller
{
    public function index()
    {
    	$banner = Banner::paginate(10);
    	return view('backend.admin.banner.index', compact('banner'));
    }

    public function add (Request $request)
    {
    	$status = 200;
        $message = "Data Product Berhasil di Tambah";

        $add = new Banner;
        $add->nama_banner = $request->nama_banner;
        $add->link = $request->link;

        $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
    	$request->image->move(public_path('banner'), $fileName);
        $add->image = $fileName;

        $add->save();

        $log = new Log;
        $log->mutasi_action = "add banner ". $request->name_banner;
        $log->user_id = Auth::user()->id;
        $log->controller = "BannerController";
        $log->function = "add";
        $log->keterangan = "add banner berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => 200,'flash_message' => 'Berhasil Menyimpan Data']);
    }

    public function edit (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Product Berhasil di Ubah";

    	$edit = Banner::find($id);
    	$edit->nama_banner = $request->nama_banner;

    	if ($request->image != null){
    		$fileName = time().'.'.$request->image->getClientOriginalExtension(); 
        	$request->image->move(public_path('banner'), $fileName);
        	$edit->image= $fileName;
    	} else {
    		$edit->image = $edit->image;
    	}

    	$edit->link = $request->link;
    	$edit->save();

    	$log = new Log;
        $log->mutasi_action = "edit banner ". $request->name_banner;
        $log->user_id = Auth::user()->id;
        $log->controller = "BannerController";
        $log->function = "edit";
        $log->keterangan = "edit banner berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => 200,'flash_message' => 'Berhasil Menyimpan Data']);
    }
}