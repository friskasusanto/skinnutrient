@extends('backend.layout.index', ['active' => 'tambah_product'])
@section('title', 'Product')
@section('content')


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
                                    <div class="form-group mb-3 row">
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
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Harga :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom02" type="number" required="" name="price">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Stock :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="number" required="" name="stock">
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Harga Minimal :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="number" required="" name="min_price">
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Harga Maksimal :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="number" required="" name="max_price">
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Discount :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="number" required="" name="discount">
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Keterangan :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea id="editor1" name="description" cols="81" rows="4"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Gambar Utama :</label>
                                        <div class="add-product">
                                            <div class="row">
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <div class="box-input-file">
                                                            <input class="upload" type="file" name="image" multiple required><i class="fa fa-plus"></i>
                                                        </div>
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
                                                        <div class="box-input-file">
                                                            <input class="upload" type="file" name="photos[]" multiple required><i class="fa fa-plus"></i>
                                                        </div>
                                                    </li>
                                                    <li>(bisa pilih lebih dari 1 gambar)</li>
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