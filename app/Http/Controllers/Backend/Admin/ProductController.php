<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Product;
use App\Model\ProductGambar;
use App\Model\Category;
use App\Model\Log;
use App\Model\ProductJenis;
use App\Model\Checkout;
use Auth;

class ProductController extends Controller
{
    public function deleteProduct_gambar(Request $request, $id)
    {
        $status = 200;
        $message = "Data Berhasil di Hapus";
        $delete = ProductGambar::find($id);
        $delete->delete();

        $log = new Log;
        $log->mutasi_action = "delete product ". $request->name;
        $log->user_id = Auth::user()->id;
        $log->controller = "ProductController";
        $log->function = "delete_product";
        $log->keterangan = "hapus product berhasil";
        $log->tgl_action = date('Y-m-d H:i:s');
        $log->save();

        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function gambar_product_view ()
    {
        $gambar = Product::with('product_image')->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.admin.product.gambar_product', compact(['gambar']));
    }


	public function index_product ()
    {
    	$search = \Request::get('search');
    	$product = Product::where('name', 'like', '%'.$search.'%')->orderBy('created_at', 'desc')->paginate(10);
        $category = Category::all();
        $jenis = ProductJenis::all();

    	return view('backend.admin.product.index', compact(['product', 'category', 'jenis']));
    }

    public function add_view_product()
    {
    	$category = Category::all();
        $jenis = ProductJenis::all();
    	return view('backend.admin.product.add', compact(['category', 'jenis']));
    }

    public function add_product (Request $request)
    {

    	$status = 200;
        $message = "Data Product Berhasil di Tambahkan";

        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'price' => 'required', 
            'image' => 'required', 
            'description' => 'required',
            'category' => 'required',
        ]);

        if($request->hasFile('photos'))
        {
            $allowedfileExtension=['JPG','PNG', 'JPEG', 'WEBP', 'jpg', 'png', 'jpeg', 'webp'];
            $files = $request->file('photos');
            // dd($allowedfileExtension);

            foreach($files as $file){

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            // dd($check);

                if($check)
                {
                    $add= new Product;
                    $add->name = $request->name;

                    $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
                    $request->image->move(public_path('product'), $fileName);
                    $add->image = $fileName;

                    $add->category_id = $request->category;

                    
                    $add->jenis_id = null;
                    $add->price = $request->price;
                    $add->title = null;
                    $add->description = $request->description;
                    $add->detail = $request->detail;
                    $add->ingredients = $request->ingredients;
                    $add->how_to_use = $request->how;
                    $add->shipping_police = $request->shipping;
                    $add->step = $request->step;
                    $add->composition = $request->composition;
                    $add->stock = null;
                    $add->min_price = null;
                    $add->max_price = null;
                    $add->discount = $request->discount;

                    if ($request->bestseller != null){
                        $add->best_seller = 1;
                    }
                    
                    $add->status = 0;
                    $add->slug = Str::slug($request->name, '-');
                    $add->save();
                    // dd($add);

                    foreach ($request->photos as $photo) {
                    $filename = $photo->store('');
                    $photo->move(public_path('product'), 'product/'.$filename);
                    // dd($photo);
                    ProductGambar::create([
                    'product_id' => $add->id,
                    'image' => $filename
                    ]);
                }
                    $log = new Log;
                    $log->mutasi_action = "tambah product ". $request->name;
                    $log->user_id = Auth::user()->id;
                    $log->controller = "ProductController";
                    $log->function = "add_product";
                    $log->keterangan = "tambah product berhasil";
                    $log->tgl_action = date('Y-m-d H:i:s');
                    $log->save();

                    return redirect()->back()->with(['flash_status' => 200,'flash_message' => 'Berhasil Menyimpan Data']);
                }else{
                    return redirect()->back()->with(['flash_status' => 500,'flash_message' => 'gagal']);
                }
            }
        } else {
            $add= new Product;
            $add->name = $request->name;
            $add->category_id = $request->category;
            
            $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
            $request->image->move(public_path('product'), $fileName);
            $add->image = $fileName;

            if ($request->jenis != null ){
                $add->jenis_id = $request->jenis;
            }else{
                $add->jenis_id = null;
            }

            $add->price = $request->price;
            $add->title = $request->title;
            $add->description = $request->description;
            $add->min_price = $request->min_price;
            $add->max_price = $request->max_price;
            $add->status = 0;
            $add->slug = Str::slug($request->name, '-');
            $add->save();

            $log = new Log;
            $log->mutasi_action = "tambah product ". $request->name;
            $log->user_id = Auth::user()->id;
            $log->controller = "ProductController";
            $log->function = "add_product";
            $log->keterangan = "tambah product berhasil";
            $log->tgl_action = date('Y-m-d H:i:s');
            $log->save();

            return redirect()->back()->with(['flash_status' => 200,'flash_message' => 'Berhasil Menyimpan Data']);
        }

      	// return redirect('/admin/index/product')->with(['flash_status' => $status,'flash_message' => $message]);
    }

    public function edit_view_product (Request $request, $id)
    {
    	$category = Category::all();
    	$product = Product::find($id);
        $gambar = ProductGambar::where('product_id', $product->id)->get();
        $jenis = ProductJenis::all();
        // dd($gambar);
    	return view('backend.admin.product.edit', compact(['product', 'category', 'gambar', 'jenis']));
    }

    public function edit_product (Request $request, $id)
    {
    	$status = 200;
        $message = "Data Berhasil di Update";
    	if($request->hasFile('photos'))
        {
            $allowedfileExtension=['JPG','PNG', 'JPEG', 'jpg', 'png', 'jpeg'];
            $files = $request->file('photos');

            foreach($files as $file){

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);

                if($check)
                {
                    $edit= Product::find($id);
                    $edit->name = $request->name;
                    $edit->price = $request->price;
                    $edit->title = null;

                    if ($request->category != null ){
                        $edit->category_id = $request->category;
                    }else{
                        $edit->category_id = $edit->category_id;
                    }
                    
                    if ($request->image != null ){
                        $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
                        $request->image->move(public_path('product'), $fileName);
                        $edit->image = $fileName;
                    }else{
                        $edit->image = $edit->image;
                    }

                    $edit->discount = $request->discount;
                    $edit->description = $request->description;
                    $edit->detail = $request->detail;
                    $edit->ingredients = $request->ingredients;
                    $edit->how_to_use = $request->how;
                    $edit->shipping_police = $request->shipping_police;
                    $edit->step = $request->step;
                    $edit->composition = $request->composition;

                    $edit->min_price = null;
                    $edit->max_price = null;

                    if ($request->status != null ){
                        $edit->status = $request->status;
                    }else{
                        $edit->status = $edit->status;
                    }
                    $edit->save();

                    foreach ($request->photos as $photo) {
                    $filename = $photo->store('');
                    $photo->move(public_path('product'), 'product/'.$filename);
                    ProductGambar::create([
                    'product_id' => $edit->id,
                    'image' => $filename
                    ]);

                }
                    $log = new Log;
                    $log->mutasi_action = "tambah product ". $request->name;
                    $log->user_id = Auth::user()->id;
                    $log->controller = "ProductController";
                    $log->function = "add_product";
                    $log->keterangan = "tambah product berhasil";
                    $log->tgl_action = date('Y-m-d H:i:s');
                    $log->save();

                    return redirect()->back()->with(['flash_status' => 200,'flash_message' => 'Berhasil Menyimpan Data']);
                }
                else
                {
                    return redirect()->back()->with(['flash_status' => 500,'flash_message' => 'gagal']);
                }
            }
        } else {
                $edit= Product::find($id);
                $edit->name = $request->name;
                $edit->price = $request->price;
                $edit->title = null;

                if ($request->category != null ){
                    $edit->category_id = $request->category;
                }else{
                    $edit->category_id = $edit->category_id;
                }
                
                if ($request->image != null ){
                    $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
                    $request->image->move(public_path('product'), $fileName);
                    $edit->image = $fileName;
                }else{
                    $edit->image = $edit->image;
                }
                // dd($fileName);

                $edit->description = $request->description;
                $edit->discount = $request->discount;
                $edit->description = $request->description;
                $edit->detail = $request->detail;
                $edit->ingredients = $request->ingredients;
                $edit->how_to_use = $request->how;
                $edit->shipping_police = $request->shipping_police;
                $edit->step = $request->step;
                $edit->composition = $request->composition;

                $edit->min_price = null;
                $edit->max_price = null;

                if ($request->status != null ){
                    $edit->status = $request->status;
                }else{
                    $edit->status = $edit->status;
                }
                $edit->save();

                $log = new Log;
                $log->mutasi_action = "tambah product ". $request->name;
                $log->user_id = Auth::user()->id;
                $log->controller = "ProductController";
                $log->function = "add_product";
                $log->keterangan = "tambah product berhasil";
                $log->tgl_action = date('Y-m-d H:i:s');
                $log->save();

                return redirect()->back()->with(['flash_status' => 200,'flash_message' => 'Berhasil Menyimpan Data']);
        }
    }

    public function delete_product (Request $request, $id)
    {
    	$product = Product::find($id);
        $cek = Checkout::where('product_id', $product->id)->count();

        if ($cek <= 0){
            $status = 200;
            $message = "Data Berhasil di Hapus";

            $delete = Product::find($id);
            $delete->delete();

            $log = new Log;
            $log->mutasi_action = "delete product ". $request->name;
            $log->user_id = Auth::user()->id;
            $log->controller = "ProductController";
            $log->function = "delete_product";
            $log->keterangan = "hapus product berhasil";
            $log->tgl_action = date('Y-m-d H:i:s');
            $log->save();

            return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
        } else {
            $status = 500;
            $message = "Data Tidak Bisa di Hapus, Pembelian Sedang Berlangsung";

            return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
        }

    	



        

    	

    }
}
