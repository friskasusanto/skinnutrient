@extends('backend.layout.index', ['active' => 'list_category'])
@section('title', 'Category')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Menu Category List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Menu</li>
                    <li class="breadcrumb-item active">Menu Category List</li>
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
            <h5>Daftar Menu</h5>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Menu</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($menu) != 0)
                            @foreach ($menu as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->name}}</td>
                                @if ($u->status == 0)
                                    <td style="color: red">menu tidak aktif</td>
                                @else
                                    <td style="color: green">menu aktif</td>
                                @endif
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3"><center>KOSONG</center></td>
                            </tr>
                        @endif 
                        </tbody>
                    </table>
                    {{$menu->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection