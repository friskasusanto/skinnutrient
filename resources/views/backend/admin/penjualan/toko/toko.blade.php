@extends('backend.layout.index', ['active' => 'penjualan_toko'])
@section('title', 'Sales')
@section('content')


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Penjualan Toko
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Toko</li>
                    <li class="breadcrumb-item active">Penjualan</li>
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
            <h5>Penjualan Toko</h5>
            <a type="button" class="btn btn btn-secondary btn-rounded btn-rounded pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i>Tambah Daftar Penjualan Toko</a>
        </div>
        <div class="card-body">
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
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Distributor</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($toko) != 0)
                            @foreach ($toko as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->alamat}}</td>
                            @if ($u->status == 1)
                                <td><p style="color: green ">toko aktif</p></td>
                            @elseif ($u->status == 0)
                                <td><p style="color: red ">toko tidak aktif</p></td>
                            @else
                                <td></td>
                            @endif
                                <td>
                                <center>
                                <ul>
                                    <li>
                                        <a class="btn btn-warning btn-icon-split btn-sm" type="button" data-toggle="modal" data-target="#modalEdit{{$u->id}}" >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="btn btn-info btn-icon-split btn-sm" type="button" data-toggle="modal" data-target="#modalDetail{{$u->id}}" >
                                                <i class="fa fa-eye"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('/admin/gudang/delete', $u->id)}}" class="btn btn-danger btn-icon-split btn-sm" >
                                            <i class="fa fa-trash" ></i>
                                        </a>
                                    </li>
                                </ul>
                                </center>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7"><center>KOSONG</center></td>
                            </tr>
                        @endif 
                        </tbody>
                    </table>
                    {{$toko->render()}}
                </div>
            </div>
        </div>
    </div>
</div>


@if(isset($toko))
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Tambah Toko</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate="novalidate" method="POST" action= "{{url('/admin/addToko')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Distributor</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <select name="distributor" type="text" class="form-control" style="width: 100%">
                                              <option value="">--pilih distributor--</option>
                                            @foreach ($distributor as $d)
                                              <option value= "{{$d->id}}">{{$d->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama Toko</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="name" required style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Alamat Toko</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="alamat" required style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="email" required style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kontak Toko</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="phone" required style="width: 100%">
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
                                              <option value= "1">toko aktif</option>
                                              <option value= "0">toko tidak aktif</option>
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


@if(isset($toko))
@foreach( $toko as $u )
<div class="modal" id="modalDetail{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Data Toko</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Nama Toko</th>
                    <td>: {{ $u->name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Alamat</th>
                    <td>: {{ $u->alamat }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Email</th>
                    <td>: {{ $u->email }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Kontak Toko</th>
                    <td>: {{ $u->phone }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Status</th>
                @if ($u->status == 1)
                    <td>: Sales Aktif</td>
                @else
                    <td>: Sales Tidak Aktif</td>
                @endif
                </tr>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@if(isset($toko))
@foreach( $toko as $u )
<div class="modal" id="modalEdit{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Toko</h5>
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
                <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/admin/editToko', $u->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nama Toko</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" name="name" required value="{{$u->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Alamat Toko</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" name="alamat" required value="{{$u->alamat}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-right" id="" name="email" required value="{{$u->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kontak Toko</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" name="phone" required value="{{$u->phone}}">
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
                                    <select name="status" type="text" class="form-control pull-right select2" style="width: 100%">
                                          <option value="">--pilih status--</option>
                                          @if ($u->status == 1)
                                          <option value="">--toko aktif--</option>
                                          @else
                                          <option value="">--toko tidak aktif--</option>
                                          @endif
                                          <option value= "1">toko aktif</option>
                                          <option value= "0">toko tidak aktif</option>
                                    </select>
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




@endsection

