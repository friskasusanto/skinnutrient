<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Distributor;
use App\Model\Log;
use Auth;

class DistributorController extends Controller
{
    public function index ()
    {
    	$distributor = Distributor::paginate(10);
    	return view('backend.admin.distributor.index', compact('distributor'));
    }

    public function edit (Request $request, $id)
    {
    	$edit = Distributor::find($id);
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
        $message = "Berhasil memperbaharui data distributor";

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

    	$add = new Distributor;
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
        $message = "Berhasil menambahkan distributor";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delete (Request $request, $id)
    {
    	$delete = Distributor::find($id);
    	$delete->delete();

    	$status = 200;
        $message = "Berhasil menghapus distributor";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
