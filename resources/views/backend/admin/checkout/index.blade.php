@extends('backend.layout.index', ['active' => 'list_checkout'])
@section('title', 'Checkout')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Checkout List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Checkout</li>
                    <li class="breadcrumb-item active">Checkout List</li>
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
            <h5>Checkout Details</h5>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Tanggal Masuk</th>
                                <th>User Pemesan</th>
                                <th>Total Harga</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Product</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($checkout) != 0)
                            @foreach ($checkout as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->entry_date}}</td>
                                <td>{{$u->user->name}}</td>
                                <td>{{$u->total_price}}</td>
                                <td>{{$u->payment_date}}</td>
                                <td>{{$u->product->name}}</td>
                            @if ($u->status == 1)
                                <td>Order Baru</td>
                            @elseif ($u->status == 2)
                                <td>Order dalam Pengiriman</td>
                            @elseif ($u->status == 0)
                                <td>Order di tolak</td>
                            @endif
                                <td>
                                <center>
                                @if ($u->status == 1)
                                    <a href="{{action('backend\admin\CheckoutController@approve_admin', $u->id)}}" class="btn btn-icon-split" >
                                        <i class="fa fa-check" aria-hidden="true" style="padding: 2px;"></i>
                                    </a>
                                    <a href="{{action('backend\admin\CheckoutController@reject_admin', $u->id)}}" class="btn btn-icon-split" >
                                        <i class="fa fa fa-times" aria-hidden="true" style="padding: 2px;"></i>
                                    </a>
                                    <a type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter{{$u->id}}">
                                        <i class="fa fa-eye btn-icon-split"></i>
                                    </a>

                                @elseif ($u->status == 2)
                                    <a href="{{action('backend\admin\CheckoutController@pengiriman_barang', $u->id)}}" class="btn btn-icon-split">
                                        <i class="fa fa-truck" style="padding: 2px;"></i>
                                    </a>
                                    <a type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter{{$u->id}}">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                @elseif ($u->status == 0)
                                    <a type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter{{$u->id}}">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                @endif
                                </center>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8"><center>KOSONG</center></td>
                            </tr>
                        @endif 
                        </tbody>
                    </table>
                    {{$checkout->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($checkout))
@foreach( $checkout as $u )
<div class="modal" id="exampleModalCenter{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Barang</th>
                                <th>: {{$u->product->name}}</th>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <th>: {{$u->entry_date}}</th>
                            </tr>
                            <tr>
                                <th>Nama Pemesan</th>
                                <th>: {{$u->user->name}}</th>
                            </tr>
                            <tr>
                                <th>Nama Penerima</th>
                                <th>: {{$u->receiver_id}}</th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>: {{$u->address}}</th>
                            </tr>
                            <tr>
                                <th>No HP</th>
                                <th>: {{$u->phone_number}}</th>
                            </tr>
                            <tr>
                                <th>Total Tagihan</th>
                                <th>: {{$u->Total_amount}}</th>
                            </tr>
                            <tr>
                                <th>Payment</th>
                                <th>: </th>
                            </tr>
                            <tr>
                                <th>Tanggal payment</th>
                                <th>: </th>
                            </tr>
                            <tr>
                                <th>Courier</th>
                                <th>: {{$u->courier}}</th>
                            </tr>
                            <tr>
                                <th>Harga Courier</th>
                                <th>: {{$u->courier_price}}</th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>: {{$u->status}}</th>
                            </tr>


                        </tbody>
                    </table>
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