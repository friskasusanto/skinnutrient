@extends('backend.layout.index', ['active' => 'edit_product'])
@section('title', 'Admin')
@section('content') 


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
 

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Edit Products
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Product</h5>
                </div>
                <div class="card-body">
                    <div class="row product-adding">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="col-xl-7">
                            <form novalidate="novalidate" method="POST" action= "{{url('/admin/edit/product', $product->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Nama Product :</label>
                                    <input required="" class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text"  name="name" value="{{$product->name}}">
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Category Product :</label>

                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                    @if (count($productCategory) == 0)
                                        <p>{{$product->category->category_name}}</p>
                                    @elseif (count($productCategory) != 0)
                                        @foreach ($productCategory as $p)
                                            <a href="{{url('/admin/delete/productCategory', $p->id)}}" class="btn close" onclick="return confirm('Anda yakin menghapus category ini ?')">
                                                <span aria-hidden="true">
                                                    <h6 style="border-style: groove;">{{$p->category->category_name}} &times;</h6>
                                                </span>
                                            </a>
                                        @endforeach
                                    @endif
                                        <select id="category" name="category[]" type="text" class="form-control" style="width: 100%" multiple="multiple">
                                            <option value="">--pilih category--</option>
                                            @foreach ($category as $p)
                                                <option value= "{{$p->id}}">{{$p->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Harga User:</label>
                                    <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="number" required="" name="price" value="{{$product->price}}">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Discount :</label>
                                    <input class="form-control col-xl-8 col-sm-7" id="" type="number" required="" name="discount" value="{{$product->discount}}">
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Keterangan :</label>
                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                        <textarea class="form-control" name="description" id="summernoteDescription">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Detail :</label>
                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                        <textarea class="form-control" name="detail" id="summernoteDetail">{{$product->detail}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Ingredients :</label>
                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                        <textarea class="form-control" name="ingredients" id="summernoteIngredients">{{$product->ingredients}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">How To Use :</label>
                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                        <textarea class="form-control" name="how" id="summernoteHow">{{$product->how}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Shipping Police :</label>
                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                        <textarea class="form-control" name="shipping" id="summernoteShipping">{{$product->shipping}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Composition :</label>
                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                        <textarea class="form-control" name="composition" id="summernoteComposition">{{$product->composition}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Gambar Utama :</label>
                                    <div class="add-product">
                                        <div class="row">
                                            <ul class="file-upload-product">
                                                <li>
                                                    <input class="file" type="file" name="image" multiple required>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-product">
                                        <div class="row">
                                            <ul class="file-upload-product">
                                                <li>
                                                    <img src="{{url('product/'.$product->image)}}" alt="">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Gambar Lain :</label>
                                    <div class="add-product">
                                        <div class="row">
                                            <ul class="file-upload-product">
                                                <li>
                                                    <input class="file" type="file" name="photos[]" multiple required>
                                                </li>
                                                <li>(bisa pilih lebih dari 1 gambar)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-product">
                                        <div class="row">
                                            <ul style="margin-left: 20%">
                                                <li>
                                                    <?php 
                                                        $gambar = App\Model\ProductGambar::where('product_id', $product->id)->get();
                                                    ?>
                                                    @if (count($gambar) != 0)
                                                        @foreach ($gambar as $g)
                                                            <a href="{{url('/admin/delete/productGambar', $g->id)}}" class="btn close" onclick="return confirm('Anda yakin menghapus gambar ini ?')">
                                                                <span aria-hidden="true">
                                                                    <img src="{{url('product/'.$g->image)}}" alt="..." style="width: 50% ; border-style: groove;"> &times;
                                                                </span>
                                                            </a>
                                                        @endforeach
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Status Product :</label>
                                    <div class="add-product">
                                        <div class="row">
                                            <select name="status" type="text" class="form-control" style="width: 100%">
                                                  <option value="">--pilih status--</option>
                                                  <option value= "1">tampilkan</option>
                                                  <option value= "0">sembunyikan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Best Seller :</label>
                                    <div class="add-product">
                                        <div class="row">
                                            <select name="bestseller" type="text" class="form-control" style="width: 100%">
                                                @if ($product->best_seller == 1)
                                                <option value="">--product best seller--</option>
                                                @endif

                                                  <option value="">--pilih aktifasi--</option>
                                                  <option value= "1">product bestseller</option>
                                                  <option value= "0">hilangkan bestseller</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Comming Soon :</label>
                                    <div class="add-product">
                                        <div class="row">
                                            <select name="comming_soon" type="text" class="form-control" style="width: 100%">
                                                @if ($product->comming_soon == 1)
                                                <option value="">--product comming soon--</option>
                                                @endif
                                                  <option value="">--pilih aktifasi--</option>
                                                  <option value= "1">product coming soon</option>
                                                  <option value= "0">hilangkan coming soon</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info" id="btn_submit">Simpan</button>
                                    </div>
                                </div>
                            </div>
        				</form>
                    </div>
                </div>
			</div> <!-- /content -->
		</div>
	</div>
</div>
@endsection

@section('script')
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
    $('#summernoteDescription').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteDetail').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteIngredients').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteHow').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteShipping').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteStep').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteComposition').summernote({
        height: 200
    });
</script>
<script type="text/javascript">

    $(document).ready(function () {

        $("#category").select2({

            placeholder: "--pilih category--"

        });

    });

</script>


@endsection