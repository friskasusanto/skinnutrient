@extends('backend.layout.index', ['active' => 'tambah_product'])
@section('title', 'Product')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add Products
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Tambah Product</li>
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
                    <h5>Add Product</h5>
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
                            <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/admin/add/product')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form">
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Nama Product :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="" name="name">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Category Product :</label>

                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <select name="category" type="text" class="form-control" style="width: 100%">
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
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="number" required="" name="price">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Discount :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="number" required="" name="discount">
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Keterangan :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="description" id="summernoteDescription"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Detail :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="detail" id="summernoteDetail"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Ingredients :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="ingredients" id="summernoteIngredients"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">How To Use :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="how" id="summernoteHow"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Shipping Police :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="shipping" id="summernoteShipping"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Step :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="composition" id="summernoteStep"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Composition :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea class="form-control" name="composition" id="summernoteComposition"></textarea>
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


@endsection