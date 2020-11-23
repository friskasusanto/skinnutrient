@extends('backend.layout.index', ['active' => 'tambah_product'])
@section('title', 'Product')
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
                    <li class="breadcrumb-item active">Ubah Product</li>
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
                            <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/admin/edit/product', $product->id)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form">
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Nama Product :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="" name="name" value="{{ucfirst($product->name)}}">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Category Product :</label>

                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                        @if(count($productCategory) != 0)
                                            <p>
                                                @foreach ($productCategory as $c)
                                                {{$c->category->category_name}},
                                                @endforeach
                                            </p>
                                        @else
                                            <p>
                                                {{$u->category->category_name}}
                                            </p>
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
                                    <!-- <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Jenis Product :</label>

                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <select name="jenis" type="text" class="form-control" style="width: 100%">
                                                <option value="">--pilih jenis product--</option>
                                                @foreach ($jenis as $p)
                                                    <option value= "{{$p->id}}">{{$p->jenis}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div> -->
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Harga User:</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="number" required="" name="price" value="{{ucfirst($product->price)}}">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Discount :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="number" required="" name="discount" value="{{ucfirst($product->discount)}}">
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Keterangan :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="description" id="summernoteDescription">{!!$product->description!!}</textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Detail :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="detail" id="summernoteDetail">{!!$product->detail!!}</textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Ingredients :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="ingredients" id="summernoteIngredients">{!!$product->ingredients!!}</textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">How To Use :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="how" id="summernoteHow">{!!$Product->how_to_use!!}</textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Shipping Police :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="shipping" id="summernoteShipping">{!!$product->shipping_police!!}</textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Step :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="composition" id="summernoteStep">{!!$product->step!!}</textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Composition :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="composition" id="summernoteComposition">{!!$product->composition!!}</textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
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
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Best Seller :</label>
                                        <div class="add-product">
                                            <div class="row">
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <input class="file" type="checkbox" name="bestseller" multiple required>
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
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Comming Soon :</label>
                                        <div class="add-product">
                                            <div class="row">
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <input class="file" type="checkbox" name="comming_soon" multiple required>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <div class="offset-xl-3">
                                    <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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