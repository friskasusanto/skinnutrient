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
                    <h3>Add Blog
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active">Tambah Blog</li>
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
                    <h5>Add Blog</h5>
                </div>
                <div class="card-body">
                    <div class="row product-adding">
                        <div class="col-xl-7">
                            <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/admin/addBlog')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form">
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Judul Blog :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom01" type="text" required="" name="judul">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Isi Blog :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea id="summernote" name="text" cols="81" rows="4"></textarea>
                                        </div>
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Gambar Blog :</label>
                                        <div class="add-product">
                                            <div class="row">
                                                <ul class="file-upload-product">
                                                    <li>
                                                        <input type="file" name="images" multiple required>
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
    $('#summernote').summernote({
        height: 200
    });
</script>
@endsection