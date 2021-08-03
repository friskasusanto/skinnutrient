<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
use App\Model\Log;
use Auth;

class BlogController extends Controller
{
    public function index ()
    {
    	$search = \Request::get('search');
    	$blog = Blog::where('judul', 'like', '%'.$search.'%')->paginate(10);

    	return view('backend.admin.blog.index', compact(['blog']));
    }

    public function add_view ()
    {
    	return view('backend.admin.blog.add');
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
    	$add = new Blog;
    	$add->judul = $request->judul;
    	$add->text = $request->text;
    	$add->tgl_input = date('Y-m-d H:i:s');
    	$add->user_post = Auth::user()->id;

    	$fileName = time().'.'.$request->images->getClientOriginalExtension(); 
        $request->images->move(public_path('blog'), $fileName);
        $add->images= $fileName;
        $add->status= 0;
        $add->love= null;

        // dd($add);

    	$add->save();

        $log = new Log;
        $log->mutasi_action = "add blog ". $add->judul;
        $log->user_id = Auth::user()->id;
        $log->controller = "BlogController";
        $log->function = "add";
        $log->keterangan = "edit blog berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect('/admin/blog')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function edit_view (Request $request, $id)
    {
    	$blog = Blog::find($id);
    	return view('backend.admin.blog.edit', compact(['blog']));
    }

    public function edit (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Update";
    	$edit = Blog::find($id);
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
            $edit->images= $fileName;
        }

        // dd($request->text);
    	$edit->save();

        $log = new Log;
        $log->mutasi_action = "edit blog ". $edit->judul;
        $log->user_id = Auth::user()->id;
        $log->controller = "BlogController";
        $log->function = "edit";
        $log->keterangan = "edit blog berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect('/admin/blog')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function delete (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Hapus";
    	$delete = Blog::find($id);
    	$delete->delete();

        $log = new Log;
        $log->mutasi_action = "hapus blog ". $delete->judul;
        $log->user_id = Auth::user()->id;
        $log->controller = "BlogController";
        $log->function = "delete";
        $log->keterangan = "hapus blog berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

    	return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);

    }
}
