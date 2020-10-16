<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Distributor;
use App\Model\Log;
use App\Model\PenjualanDistributor
;
use Auth;

class PenjualanDistributorController extends Controller
{
    public function index ()
    {
    	$penjualan = PenjualanDistributor::paginate(10);
    	$distributor = Distributor::all();
    	$product = Product::all();
    	return view('backend.admin.penjualanDistributor.index', compact('toko', 'distributor', 'product', 'toko'));
    }

    public function edit (Request $request, $id)
    {
    	$edit = PenjualanDistributor::find($id);
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
    	$edit->jumlah_barang = $request->jumlah_barang;
    	$edit->harga_barang = $request->harga_barang;
    	$edit->total_harga = $request->total_harga;
    	$edit->harga_dibayar = $edit->harga_dibayar + $request->harga_dibayar;
    	$edit->harga_belumDibayar = $edit->harga_belumDibayar - $request->harga_belumDibayar;
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
            'jumlah_barang' => 'required|numeric',
            'harga_barang' => 'required|numeric',
            'total_harga' => 'required|numeric',
            'harga_dibayar' => 'required|numeric',
            'harga_belumDibayar' => 'required|numeric',
            'tgl_tenggang' => 'required',
        ]);

    	$add = new PenjualanDistributor;
    	$add->distributor_id = $request->distributor_id;
    	$add->product_id = $request->product_id;
    	$add->jumlah_barang = $request->jumlah_barang;
    	$add->harga_barang = $request->harga_barang;
    	$add->total_harga = $request->total_harga;
    	$add->harga_dibayar = $request->harga_dibayar;
    	$add->harga_belumDibayar = $request->harga_belumDibayar;
    	$add->tgl_tenggang = $request->tgl_tenggang;
    	$add->status = $request->status;
    	$add->save();

    	$status = 200;
        $message = "Berhasil menambahkan data";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delete (Request $request, $id)
    {
    	$delete = PenjualanDistributor::find($id);
    	$delete->delete();

    	$status = 200;
        $message = "Berhasil menghapus data";

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
