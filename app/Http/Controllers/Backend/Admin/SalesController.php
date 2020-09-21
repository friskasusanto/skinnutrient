<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Sales;
use App\Model\Log;
use Auth;

class SalesController extends Controller
{
    public function index ()
    {
    	$sales = Sales::paginate(10);
    	return view('backend.admin.sales.index', compact('sales'));
    }

    public function edit (Request $request, $id)
    {
    	$edit = Sales::find($id);
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

    	$add = new Sales;
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
    	$delete = Sales::find($id);
    	$delete->delete();

    	$status = 200;
        $message = "Berhasil menghapus sales";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
