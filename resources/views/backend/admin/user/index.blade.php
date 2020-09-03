@extends('backend.layout.index', ['active' => 'list_user'])
@section('title', 'User')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>User List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">User List</li>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Tipe User</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($user) != 0)
                                @foreach ($user as $key =>$u)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                @if ($u->hasRole('Admin'))
                                    <td>Admin</td>
                                @elseif ($u->hasRole('Dropshiper'))
                                    <td>Dropshiper</td>
                                @elseif ($u->hasRole('Reseller'))
                                    <td>Reseller</td>
                                @else
                                    <td>-</td>
                                @endif
                                    <td>
                                        <center>
                                            <a href="{{url('/admin/delete', $u->id)}}"class="btn btn-danger btn-circle btn-sm" style="font-size: xx-small;">
                                                <i class="fa fa-trash" aria-hidden="true"></i> 
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
                    {{$user->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection