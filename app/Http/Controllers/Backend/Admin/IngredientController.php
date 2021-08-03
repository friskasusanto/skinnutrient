<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Ingredient;
use App\Model\Log;
use Auth;

class IngredientController extends Controller
{
    public function index ()
    {
    	$search = \Request::get('search');
    	$ingredient = Ingredient::where('judul', 'like', '%'.$search.'%')->paginate(10);

    	return view('backend.admin.ingredient.index', compact(['ingredient']));
    }

    public function add_view ()
    {
    	return view('backend.admin.ingredient.add');
    }

    public function add (Request $request)
    {
    	$this->validate($request, [
            'judul' => 'required',
            'text' => 'required',
            'images' => 'required', 
        ]);

    	$status = 200;
        $message = "Data Berhasil di Tambahkan";
    	$add = new Ingredient;
    	$add->judul = $request->judul;
    	$add->text = $request->text;
    	$add->tgl_input = date('Y-m-d H:i:s');
    	$add->user_post = Auth::user()->id;

    	$fileName = time().'.'.$request->images->getClientOriginalExtension(); 
        $request->images->move(public_path('blog'), $fileName);
        $add->images= $fileName;
        $add->status= 0;

        // dd($add);

    	$add->save();

        $log = new Log;
        $log->mutasi_action = "add ingredient ". $add->judul;
        $log->user_id = Auth::user()->id;
        $log->controller = "IngredientController";
        $log->function = "add";
        $log->keterangan = "edit ingredient berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect('/admin/ingredient')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function edit_view (Request $request, $id)
    {
    	$ingredient = Ingredient::find($id);
    	return view('backend.admin.ingredient.edit', compact(['ingredient']));
    }

    public function edit (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Update";
    	$edit = Ingredient::find($id);
    	$edit->judul = $request->judul;

        if ($request->text == null) {
    	   $edit->text = $edit->text;
        }elseif ($request->text != null) {
            $edit->text = $request->text;
        }

        if ($request->images == null){
            $edit->images = $edit->images;
        }elseif ($request->images != null){
            $fileName = time().'.'.$request->images->getClientOriginalExtension(); 
            $request->images->move(public_path('blog'), $fileName);
            $add->images= $fileName;
        }

        // dd($request->text);
    	$edit->save();

        $log = new Log;
        $log->mutasi_action = "edit ingredient ". $edit->judul;
        $log->user_id = Auth::user()->id;
        $log->controller = "IngredientController";
        $log->function = "edit";
        $log->keterangan = "edit ingredient berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect('/admin/ingredient')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delete (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Hapus";
    	$delete = Ingredient::find($id);
    	$delete->delete();

        $log = new Log;
        $log->mutasi_action = "hapus ingredient ". $delete->judul;
        $log->user_id = Auth::user()->id;
        $log->controller = "IngredientController";
        $log->function = "delete";
        $log->keterangan = "hapus ingredient berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }
}
