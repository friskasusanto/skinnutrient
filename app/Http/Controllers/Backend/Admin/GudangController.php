<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Gudang;
use App\Model\GudangLog;
use App\Model\Product;
use App\Model\Log;
use Auth;

class GudangController extends Controller
{
    //GUDANG
    
    public function keluarMasuk (Request $request, $id)
    {
        $gudang = Gudang::find($id);
        $product = Product::where('id', $gudang->product_id)->first();

        $data = new GudangLog;
        $data->product_id = $gudang->product_id;

        if ($request->jenis_stock == 0) {
            $data->keluar = $request->stock;
            $data->masuk = 0;
            $data->stock_sebelumnya = $gudang->jumlah;
            $data->stock = $gudang->jumlah - $request->stock;

            $gudang->jumlah = $data->stock;
            $gudang->stock_user = $gudang->stock_user - $request->stock_user;
            $gudang->stock_distributor = $gudang->stock_distributor - $request->stock_distributor;
            $gudang->save();

            $product->stock = $data->stock;
            $product->stock_user = $gudang->stock_user - $request->stock_user;
            $product->stock_distributor = $gudang->stock_distributor - $request->stock_distributor;
            $product->save();


        }else{
            $data->masuk = $request->stock;
            $data->keluar = 0;
            $data->stock_sebelumnya = $gudang->jumlah;
            $data->stock = $gudang->jumlah + $request->stock;

            $gudang->jumlah = $data->stock;
            $gudang->stock_user = $gudang->stock_user + $request->stock_user;
            $gudang->stock_distributor = $gudang->stock_distributor + $request->stock_distributor;
            $gudang->save();

            $product->stock = $data->stock;
            $product->stock_user = $gudang->stock_user + $request->stock_user;
            $product->stock_distributor = $gudang->stock_distributor + $request->stock_distributor;
            $product->save();
        }

        $data->stock_user = $request->stock_user;
        $data->stock_distributor = $request->stock_distributor;
        $data->status = 1;
        $data->save();


        $status = 200;
        $message = "Berhasil Menyimpan Log Gudang";

        return redirect('/admin/gudang/index')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function index ()
    {
    	$gudang = Gudang::paginate(10);
        $product = Product::all();
    	return view('backend.admin.gudang.index', compact('gudang', 'product'));
    }

    public function edit (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Update";

    	$edit = Gudang::find($id);
        
    if ($request->product_id == null){
        $edit->product_id = $edit->product_id;
    }elseif ($request->status != null){
        $edit->product_id = $request->product_id;
    }
    	$edit->jumlah = $request->total_stock;
        $edit->stock_user = $request->stock_user;
        $edit->stock_distributor = $request->stock_distributor;
        $edit->harga_distributor = $request->harga_distributor;
    	$edit->keterangan = $request->keterangan;
    	$edit->tgl_input = date('Y-m-d H:i:s');

    if ($request->status == null){
        $edit->status = $edit->status;
    }elseif ($request->status != null){
    	$edit->status = $request->status;
    }
    	$edit->save();

    	$product = Product::where('id', $edit->product_id)->first();
        // dd($product);
    	$product->stock = $edit->jumlah;
        $product->stock_user = $request->stock_user;
        $product->stock_distributor = $request->stock_distributor;
        $product->distributor_price = $request->harga_distributor;
    	$product->save();

        $log = new Log;
        $log->mutasi_action = "edit gudang ";
        $log->user_id = Auth::user()->id;
        $log->controller = "GudangController";
        $log->function = "edit";
        $log->keterangan = "edit guadang berhasil, user id ". Auth::user()->id;
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect('/admin/gudang/index')->with(['flash_status' => $status,'flash_message' => $message]);
    }
    public function add_view (Request $request)
    {
    	$product = Product::all();
    	return view('backend.admin.gudang.add', compact(['product']));
    }

    public function add (Request $request)
    {

        $this->validate($request, [
            'product_id' => 'required',
            'total_stock' => 'required',
            'stock_user' => 'required',
            'stock_distributor' => 'required',
        ]);

        $cek = Gudang::where('product_id', $request->product_id)->first();

        if (! $cek){

            $status = 200;
            $message = "Data Berhasil di Tambah";

            if ($request->stock_user + $request->stock_distributor == $request->total_stock){
            	$add = new Gudang;
            	$add->product_id = $request->product_id;
            	$add->user_id = Auth::user()->id;
            	$add->status = $request->status;
            	$add->jumlah = $request->total_stock;
                $add->stock_user = $request->stock_user;
                $add->stock_distributor = $request->stock_distributor;
                $add->harga_distributor = $request->harga_distributor;
            	$add->tgl_input = date('Y-m-d H:i:s');
            	$add->keterangan = $request->keterangan;
            	$add->save();

                $product = Product::where('id', $add->product_id)->first();
                $product->stock = $add->jumlah;
                $product->stock_user = $add->stock_user;
                $product->stock_distributor = $add->stock_distributor;
                $product->distributor_price = $add->harga_distributor;
                $product->save();

                $log = new Log;
                $log->mutasi_action = "tambah gudang ";
                $log->user_id = Auth::user()->id;
                $log->controller = "GudangController";
                $log->function = "add";
                $log->keterangan = "tambah gudang berhasil, user id ". Auth::user()->id;
                $log->tgl_action = date('Y-m-d H:i:s');
                $log->save();
            }else {
                $status = 500;
                $message = "Jumlah stock user dan stock distributor tidak balance dengan stock total";
            }
        }else{
            $status = 500;
            $message = "Product Sudah Ada di Gudang";
        }

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delete (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Hapus";
    	$delete = Gudang::find($id);
    	$delete->delete();

        $log = new Log;
        $log->mutasi_action = "hapus gudang ";
        $log->user_id = Auth::user()->id;
        $log->controller = "GudangController";
        $log->function = "delete";
        $log->keterangan = "hapus Gudang berhasil dengan product id ". $delete->product_id;
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }
}
