@extends('backend.layout.index', ['active' => 'list_log'])
@section('title', 'Log')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Log Admins List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Log</li>
                    <li class="breadcrumb-item active">Log Admin List</li>
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
            <h5>Log Admin List</h5>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Aksi</th>
                                <th>User Id</th>
                                <th>Controller</th>
                                <th>Fungsi</th>
                                <th>Keterangan</th>
                                <th>Tgl Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($log) != 0)
                            @foreach ($log as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->mutasi_action}}</td>
                                <td>{{$u->user_id}}</td>
                                <td>{{$u->controller}}</td>
                                <td>{{$u->function}}</td>
                                <td>{{$u->keterangan}}</td>
                                <td>{{$u->tgl_action}}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7"><center>KOSONG</center></td>
                            </tr>
                        @endif 
                        </tbody>
                    </table>
                    {{$log->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection