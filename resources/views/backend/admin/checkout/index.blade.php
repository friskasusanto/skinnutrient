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
                                <th>Penerima</th>
                                <th>Total</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->total_amount + $order->courier_price }}</td>
                                    <td>{{ is_null($order->payment_date) ? '-' : $order->payment_date }}</td>
                                    <td>{{ $order->status == 0 ? 'pending' : 'paid' }}</td>
                                    <td>
                                        <a href="{{ route('admin_detail_checkout',$order->id) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    {{$orders->render()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection