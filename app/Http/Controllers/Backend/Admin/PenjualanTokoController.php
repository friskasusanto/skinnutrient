<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Toko;
use App\Model\Distributor;
use App\Model\Log;
use App\Model\PenjualanToko;
use Auth;

class PenjualanTokoController extends Controller
{
    public function index ()
    {
    	$penjualan = PenjualanToko::paginate(10);
    	$distributor = Distributor::all();
    	$product = Product::all();
    	$toko = Toko::all();
    	return view('backend.admin.penjualanToko.index', compact('toko', 'distributor', 'product', 'toko'));
    }

    public function edit (Request $request, $id)
    {
    	$edit = PenjualanToko::find($id);
    	if ($request->distributor_id == null){
    		$edit->distributor_id = $edit->distributor_id;
    	}else{
    		$edit->distributor_id = $request->distributor_id;
    	}
    	if ($request->product_id == null){
    		$edit->product = $edit->product_id;
    	}else{
    		$edit->product_id = $request->product_id;
    	}
    	if ($request->toko_id == null){
    		$edit->product = $edit->toko_id;
    	}else{
    		$edit->toko_id = $request->toko_id;
    	}
    	$edit->jumlah_barang = $request->jumlah_barang;
    	$edit->harga_barang = $request->harga_barang;
    	$edit->tgl_tenggang = $request->tgl_tenggang;

    	if ($request->status == null){
    		$edit->status = $edit->status;
    	}else{
    		$edit->status = $request->status;
    	}

    	$edit->save();

    	$status = 200;
        $message = "Berhasil memperbaharui data";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function add (Request $request)
    {
    	$this->validate($request, [
            'product_id' => 'required',
            'distributor_id' => 'required',
            'toko_id' => 'required',
            'jumlah_barang' => 'required|numeric',
            'harga_barang' => 'required|numeric',
            'tgl_tenggang' => 'required',
        ]);

    	$add = new PenjualanToko;
    	$add->distributor_id = $request->distributor_id;
    	$add->product_id = $request->product_id;
    	$add->toko_id = $request->toko_id;
    	$add->jumlah_barang = $request->jumlah_barang;
    	$add->harga_barang = $request->harga_barang;
    	$add->tgl_tenggang = $request->tgl_tenggang;
    	$add->status = $request->status;
    	$add->save();

    	$status = 200;
        $message = "Berhasil menambahkan data";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delete (Request $request, $id)
    {
    	$delete = PenjualanToko::find($id);
    	$delete->delete();

    	$status = 200;
        $message = "Berhasil menghapus data";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
