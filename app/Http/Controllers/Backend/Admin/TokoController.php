<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Toko;
use App\Model\Distributor;
use App\Model\Log;
use Auth;

class TokoController extends Controller
{
    public function index ()
    {
    	$toko = Toko::paginate(10);
    	$distributor = Distributor::all();
    	return view('backend.admin.toko.index', compact('toko', 'distributor'));
    }

    public function edit (Request $request, $id)
    {
    	$edit = Toko::find($id);
    	if ($request->distributor_id == null){
    		$edit->distributor_id = $edit->distributor_id;
    	}else{
    		$edit->distributor_id = $request->distributor_id;
    	}
    	$edit->name = $request->name;
    	$edit->alamat = $request->alamat;
    	$edit->email = $request->email;
    	$edit->phone = $request->phone;

    	if ($request->status == null){
    		$edit->status = $edit->status;
    	}else{
    		$edit->status = $request->status;
    	}

    	$edit->save();

    	$status = 200;
        $message = "Berhasil memperbaharui data sales";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function add (Request $request)
    {
    	$this->validate($request, [
            'name' => 'required',
            'alamat' => 'required',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric',
        ]);

    	$add = new Toko;
    	$add->distributor_id = $request->distributor_id;
    	$add->name = $request->name;
    	$add->alamat = $request->alamat;
    	$add->email = $request->email;
    	$add->phone = $request->phone;

    	if ($request->status != null){
    		$add->status = $request->status;
    	}else{
    		$add->status = 1;
    	}

    	$add->save();

    	$status = 200;
        $message = "Berhasil menambahkan sales";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delete (Request $request, $id)
    {
    	$delete = Toko::find($id);
    	$delete->delete();

    	$status = 200;
        $message = "Berhasil menghapus sales";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
