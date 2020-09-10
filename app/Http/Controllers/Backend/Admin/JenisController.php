<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ProductJenis;
use App\Model\Log;
use Auth;

class JenisController extends Controller
{
    public function index (Request $request)
    {
        $jenis = ProductJenis::orderBy('created_at', 'desc')->paginate(10);

    	return view('backend.admin.jenisProduct.index', compact(['jenis']));
    }
    public function edit (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Update";
    	$edit = ProductJenis::find($id);
    	$edit->jenis = $request->jenis;

    if ($request->image == null){
        $edit->image = $edit->image;
    }elseif($request->image != null){
        $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('jenisProduct'), $fileName);
        $edit->image = $fileName;
    }

    if ($request->status == null){
        $edit->status = $edit->status;
    }elseif($request->status != null){
        $edit->status = $request->status;
    }
    	$edit->save();

        $log = new Log;
        $log->mutasi_action = "edit jenis product ";
        $log->user_id = Auth::user()->id;
        $log->controller = "JenisController";
        $log->function = "edit";
        $log->keterangan = "edit jenis product berhasil, nama jenis ". $edit->jenis;
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function add (Request $request)
    {
    	$status = 200;
        $message = "Data Berhasil di Tambah";

        $this->validate($request, [
            'category_name' => 'required',
            'menu_id' => 'required',
        ]);

    	$add = new ProductJenis;
    	$add->jenis = $request->jenis;

        $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
        $request->image->move(public_path('jenisProduct'), $fileName);
        $add->image = $fileName;

        $add->status = 1;
    	$add->save();

        $log = new Log;
        $log->mutasi_action = "tambah jenis product ";
        $log->user_id = Auth::user()->id;
        $log->controller = "jenisController";
        $log->function = "add";
        $log->keterangan = "tambah jenis product berhasil, nama jenis ". $add->jenis;
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function deleteCategory (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Hapus";
    	$delete = ProductJenis::find($id);
    	$delete->delete();

        $log = new Log;
        $log->mutasi_action = "hapus jenis product ";
        $log->user_id = Auth::user()->id;
        $log->controller = "JenisController";
        $log->function = "delete";
        $log->keterangan = "hapus jenis product berhasil dengan nama jenis product ". $delete->jenis;
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
