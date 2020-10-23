@extends('backend.layout.index', ['active' => 'list_user'])
@section('title', 'User')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Blog List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active">Blog List</li>
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
            <h5>Blog Details</h5>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
            <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Judul</th>
                                    <th>Gambar Blog</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($blog) != 0)
                                @foreach ($blog as $key =>$u)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$u->judul}}</td>
                                    <td>
                                        <img src="{{url('blog/'.$u->images)}}" style="width: 50%">
                                    </td>
                                    <td>
                                        <center>
                                            <a href="{{url('/admin/delete', $u->id)}}"class="btn btn-danger btn-circle btn-sm" style="font-size: xx-small;">
                                                <i class="fa fa-trash" aria-hidden="true"></i> 
                                            </a>
                                            <a type="btn" data-toggle="modal" data-target="#modalDetail{{$u->id}}" class="btn btn-success btn-circle btn-sm" style="font-size: xx-small;">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                </button>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9"><center>KOSONG</center></td>
                                </tr>
                            @endif 
                        </tbody>
                    </table>
                    {{$blog->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($blog))
@foreach( $blog as $u )
<div class="modal" id="modalDetail{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Data Blog</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Judul Blog</th>
                    <td>: {{ $u->judul }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Gambar Blog</th>
                    <td>: <img src="{{url('blog/'.$u->images)}}" style="width: 50%"></td>
                </tr>
                <br/>
                <tr>
                    <th>Isi Blog</th>
                    <td>: {!!$u->text!!}</td>
                </tr>
                <br/>
                <tr>
                    <th>Tgl Input</th>
                    <td>: {{$u->tgl_input}}</td>
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

@endsection