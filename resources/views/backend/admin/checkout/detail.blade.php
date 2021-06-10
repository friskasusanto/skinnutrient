@extends('backend.layout.index', ['active' => 'detail_checkout'])
@section('title', 'Checkout')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Order</h1>
            <button class="btn btn-primary">Terima Order</button>
        </div>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <td>Penerima : {{ $order->name }}</td>
                        <td>No. Telp: {{ $order->phone_number }}</td>
                    </tr>
                    <tr>
                        <td>tanggal bayar : {{ is_null($order->payment_date) ? '-' : $order->payment_date }}</td>
                        <td>Status Pembayaran : {{ $order->status == 0 ? 'pending' : 'paid' }}</td>
                    </tr>

                    <tr>
                        <td>Provinsi : {{ $order->provinsi }}</td>
                        <td>kota: {{ $order->kota }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Alamat: {{ $order->address }}</td>
                    </tr>

                </tbody>
            </table>

            <p>Item Order</p>
            <hr>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $total = 0;
                    @endphp
                    @foreach ($orderitems as $item)
                        <tr>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->total }}</td>
                        </tr>
                        @php
                         $total += $item->total;   
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan="3">Total</td>
                        <td>{{ $total }}</td>
                    </tr>
                </tbody>
            </table>

            <p>Resi Pengiriman</p>
            <hr>
            <form action="#" method="post">
                <label for="">Resi</label>
                <input type="text" name="resi" id="" class="form-control">
                <br>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>


        </div>
    </div>
</div>

@endsection