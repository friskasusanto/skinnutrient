@extends('backend.layout.index', ['active' => 'list_category'])
@section('title', 'Category')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Jenis Category List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Category</li>
                    <li class="breadcrumb-item active">Jenis Category List</li>
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
            <h5>Jenis Category List</h5>
            <a type="button" class="btn btn btn-secondary btn-rounded btn-rounded pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Jenis Product</a>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>jenis Product</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($jenis) != 0)
                            @foreach ($jenis as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->jenis}}</td>
                                <td><img src="{{url('jenisProduct/'.$u->image)}}" style="width: 50%"></td>
                                @if ($u->status == 0)
                                    <td style="color: red">jenis tidak aktif</td>
                                @else
                                    <td style="color: green">jenis aktif</td>
                                @endif
                                <td>
                                <center>
                                    <a type="button" class="btn btn-circle btn-warning btn-icon-split btn-sm" style="font-size: xx-small;" data-toggle="modal" data-target="#modalEdit{{$u->id}}"><i class="fa fa-edit" style="padding: 5px; color: #000"></i></a> 

                                    <a href="{{url('/admin/hapusjenisProduct', $u->id)}}" class="btn btn-circle btn-danger btn-icon-split btn-sm" style="font-size: xx-small;"><i class="fa fa-trash" style="padding: 5px; color: #000"></i></a>
                                </center>
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
                    {{$jenis->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($jenis))
@foreach( $jenis as $u )
<div class="modal" id="modalEdit{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Edit Jenis Product</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate="novalidate" method="POST" action= "{{url('/admin/editjenisProduct', $u->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jenis Product</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="jenis" required style="width: 100%" value="{{$u->jenis}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gambar Jenis Product</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="file" class="form-control" id="" name="image" required style="width: 100%">
                                       <img src="{{url('jenisProduct/'.$u->image)}}" style="width: 50%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <select name="status" type="text" class="form-control" style="width: 100%">
                                        @if ($u->status == 1)
                                            <option value="">--aktif--</option>
                                        @else 
                                            <option value="">--tidak aktif--</option>
                                        @endif
                                            <option value="">--pilih status--</option>
                                            <option value= "1">aktif</option>
                                            <option value= "0">tidak aktif</option>
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
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
@endforeach
@endif

@if(isset($jenis))
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Tambah Jenis Product</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate="novalidate" method="POST" action= "{{url('/admin/addjenisProduct')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jenis Product</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="jenis" required style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gambar Jenis Product</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="file" class="form-control" id="" name="image" required style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <select name="status" type="text" class="form-control" style="width: 100%">
                                              <option value="">--pilih status--</option>
                                              <option value= "1">aktif</option>
                                              <option value= "0">tidak aktif</option>
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
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
@endif

@endsection