@extends('backend.layout.index', ['active' => 'list_category'])
@section('title', 'Category')
@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Category</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Category</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Daftar Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <form action="" method="GET">
                    <div class="customize-input">
                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                            type="search" placeholder="cari nama product" aria-label="Search" name="search">
                        <i class="form-control-icon" data-feather="search" type="submit"></i>
                    </div>
                </form>
            </div>
        </div> -->
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a type="button" class="btn btn btn-secondary btn-rounded btn-rounded" style="margin-bottom: 2%; background: linear-gradient(to bottom, #f70411 16%, #8f0222 44%, #f70018 99%); color: #fff" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Category</a>

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

                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Category</th>
                                    <th>Menu By</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($category) != 0)
                                @foreach ($category as $key =>$u)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$u->category_name}}</td>
                                    <td>{{$u->menu->name}}</td>
                                    @if ($u->status == 0)
                                        <td style="color: red">menu tidak aktif</td>
                                    @else
                                        <td style="color: green">menu aktif</td>
                                    @endif
                                    <td>
                                    <center>
                                        <a type="button" class="btn btn-circle btn-warning btn-icon-split btn-sm" style="font-size: xx-small;" data-toggle="modal" data-target="#modalEdit{{$u->id}}"><i class="fa fa-edit" style="padding: 5px; color: #000"></i></a> 

                                        <a href="{{url('/delete_category', $u->id)}}" class="btn btn-circle btn-danger btn-icon-split btn-sm" style="font-size: xx-small;"><i class="fa fa-trash" style="padding: 5px; color: #000"></i></a>
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
                        {{$category->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($category))
@foreach( $category as $u )
<div class="modal" id="modalEdit{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Edit Category Menu</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate="novalidate" method="POST" action= "{{url('/edit_category', $u->id)}}">
                    {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Category Menu</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="category_name" required style="width: 100%" value="{{$u->category_name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Menu By</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <select name="menu_id" type="text" class="form-control" style="width: 100%">
                                            <option value="">--{{$u->menu->name}}--</option>
                                            @foreach ($menu as $m)
                                            <option value= "{{$m->id}}">{{$m->name}}</option>
                                            @endforeach
                                        </select>
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
                                                <option value="">--status aktif--</option>
                                            @else 
                                                <option value="">--status tidak aktif--</option>
                                            @endif
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

@if(isset($menu))
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Tambah Category</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate="novalidate" method="POST" action= "{{url('/add_category')}}">
                    {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Menu By</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       
                                       <select name="menu_id" type="text" class="form-control" style="width: 100%">
                                            <option value="">--pilih menu by--</option>
                                            @foreach ($menu as $m)
                                            <option value= "{{$m->id}}">{{$m->name}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Category Menu</label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="" name="category_name" required style="width: 100%">
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