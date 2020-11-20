@extends('backend.layout.index', ['active' => 'list_banner'])
@section('title', 'Banner')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Banner List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Banner</li>
                    <li class="breadcrumb-item active">BannerS List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Banner List</h5>
            <a type="button" class="btn btn btn-secondary btn-rounded btn-rounded pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Banner</a>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Banner</th>
                                <th>Gambar</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($banner) != 0)
                            @foreach ($banner as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->nama_banner}}</td>
                                <td>
                                    <img src="{{url('banner/'.$u->image)}}" alt="..." style="width: 20%">
                                </td>
                                <td>{{$u->link}}</td>
                                <td>
                                    <a type="btn" data-toggle="modal" data-target="#modalEdit{{$u->id}}" class="btn btn-success btn-circle btn-sm" style="font-size: xx-small;">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5"><center>KOSONG</center></td>
                            </tr>
                        @endif 
                        </tbody>
                    </table>
                    {{$banner->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($banner))
@foreach( $banner as $u )
<div class="modal" id="modalEdit{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/admin/editBanner', $u->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nama Banner</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="nama_banner" type="text" class="form-control pull-right select2" style="width: 100%">
                                          <option value="">--pilih banner--</option>
                                          <option value="">--{{$u->nama_banner}}--</option>
                                          @foreach ($banner as $p)
                                            <option value= "{{$p->nama_banner}}">{{$p->nama_banner}}</option>
                                          @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Link</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" placeholder="link banner" name="link" required value="{{$u->link}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Gambar Banner</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="file" class="form-control pull-right" id="" placeholder="" name="image" required value="{{$u->image}}">
                                    <img src="{{url('banner/'.$u->image)}}" alt="..." style="width: 20%">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info" id="btn_submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@if(isset($banner))
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Tambah Banner</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate="novalidate" method="POST" action= "{{url('/admin/addBanner')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama Banner</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       
                                       <select name="nama_banner" type="text" class="form-control" style="width: 100%">
                                            <option value="">--pilih nama banner--</option>
                                            @foreach ($banner as $m)
                                            <option value= "{{$m->nama_banner}}">{{$m->nama_banner}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Link</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="link" required style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gambar</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="file" class="form-control" id="" name="image" required style="width: 100%">
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
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
@endif

@endsection