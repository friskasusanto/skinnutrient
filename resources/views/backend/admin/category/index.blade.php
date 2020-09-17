@extends('backend.layout.index', ['active' => 'list_category'])
@section('title', 'Category')
@section('content')


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Category List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Category</li>
                    <li class="breadcrumb-item active">Category List</li>
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
            <h5>Category Details</h5>
            <a type="button" class="btn btn btn-secondary btn-rounded btn-rounded pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Category</a>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
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
                                    <a type="button" class="btn btn-circle btn-warning btn-icon-split btn-sm" data-toggle="modal" data-target="#modalEdit{{$u->id}}"><i class="fa fa-edit" ></i></a> 

                                    <a type="button" class="btn btn-circle btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#modalDetail{{$u->id}}"><i class="fa fa-eye" ></i></a> 

                                    <a href="{{url('/delete_category', $u->id)}}" class="btn btn-circle btn-danger btn-icon-split btn-sm"><i class="fa fa-trash"></i></a>
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

@if(isset($category))
@foreach( $category as $u )
<div class="modal" id="modalDetail{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Detail Category</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Menu Category</th>
                    <td>: {{ $u->menu->name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Nama Category</th>
                    <td>: {{ $u->category_name }}</td>
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