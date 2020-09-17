@extends('backend.layout.index', ['active' => 'list_gudang'])
@section('title', 'Gudang')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Gudang List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Gudang</li>
                    <li class="breadcrumb-item active">Gudang List</li>
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
            <h5>User Details</h5>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Product</th>
                                <th>Tgl Masuk</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($gudang) != 0)
                            @foreach ($gudang as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->product->name}}</td>
                                <td>{{$u->tgl_input}}</td>
                            @if ($u->status == 0)
                                <td><p style="color: green ">aktif</p></td>
                            @elseif ($u->status == 1)
                                <td><p style="color: red ">tidak aktif</p></td>
                            @else
                                <td></td>
                            @endif
                                <td>
                                <center>
                                    <a class="btn btn-warning btn-icon-split btn-sm" type="button" data-toggle="modal" data-target="#modalEdit{{$u->id}}" >
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="btn btn-info btn-icon-split btn-sm" type="button" data-toggle="modal" data-target="#modalDetail{{$u->id}}" >
                                            <i class="fa fa-eye"></i>

                                    <a class="btn btn-success btn-icon-split btn-sm" type="button" data-toggle="modal" data-target="#modalMasuk{{$u->id}}" >
                                            <i class="fa fa-truck"></i>

                                    <a href="{{url('/admin/gudang/delete', $u->id)}}" class="btn btn-danger btn-icon-split btn-sm" >
                                        <i class="fa fa-trash" ></i>
                                    </a>
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
                    {{$gudang->render()}}
                </div>
            </div>
        </div>
    </div>
</div>


@if(isset($gudang))
@foreach( $gudang as $u )
<div class="modal" id="modalMasuk{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Stock Data Product</h5>
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
                <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/admin/gudang/log', $u->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Product</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <p>{{$u->product->name}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Total Stock Sekarang</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <p>{{$u->jumlah}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jenis Stock</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="jenis_stock" type="text" class="form-control pull-right select2" style="width: 100%">
                                          <option value="">--pilih stock--</option>
                                          <option value= "0">barang keluar</option>
                                          <option value= "1">barang masuk</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Stock Keluar/Masuk</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" placeholder="stock keluar/masuk" name="stock" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Stock User</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" placeholder="stock user" name="stock_user" required value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Stock Distributor</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" placeholder="stoxk distributor" name="stock_distributor" required value="">
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


@if(isset($gudang))
@foreach( $gudang as $u )
<div class="modal" id="modalDetail{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Data Gudang</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Nama Product</th>
                    <td>: {{ $u->product->name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Total Stock</th>
                    <td>: {{ $u->jumlah }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Stock User</th>
                    <td>: {{ $u->stock_user }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Stock Distributor</th>
                    <td>: {{ $u->stock_distributor }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Harga Distributor</th>
                    <td>: {{ $u->harga_distributor }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Status</th>
                @if ($u->status == 1)
                    <td>: Ditampilkan</td>
                @else
                    <td>: Disembunyikan</td>
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

@if(isset($gudang))
@foreach( $gudang as $u )
<div class="modal" id="modalEdit{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Product</h5>
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
                <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/admin/gudang/edit', $u->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Product</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="product_id" type="text" class="form-control pull-right select2" style="width: 100%">
                                          <option value="">--pilih product--</option>
                                          <option value="">--{{$u->product->name}}--</option>
                                          @foreach ($product as $p)
                                            <option value= "{{$p->id}}">{{$p->name}}</option>
                                          @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Total Stock</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" placeholder="total stock" name="total_stock" required value="{{$u->jumlah}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Stock User</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" placeholder="stock user" name="stock_user" required value="{{$u->stock_user}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Stock Distributor</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" placeholder="total distributor" name="stock_distributor" required value="{{$u->stock_distributor}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Harga Distributor</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="number" class="form-control pull-right" id="" placeholder="harga distributor" name="harga_distributor" required value="{{$u->harga_distributor}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea class="form-control" name="keterangan" id="summernote" value="{!$u->keterangan!}"></textarea>
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
                                          <option value="">--ditampilkan--</option>
                                          @else
                                          <option value="">--disembunyikan--</option>
                                          @endif
                                          <option value= "1">sembunyikan</option>
                                          <option value= "0">tampilkan</option>
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

