@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>cart</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">action</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($cart) != 0)
                            @foreach ($cart as $c)
                            <tr>
                                <td>
                                    <a href="{{url('/detailProduct', $c->product->slug)}}">
                                        <img src="{{url('product/'.$c->product->image)}}" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('/detailProduct', $c->product->slug)}}">{{$c->product->name}}</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">Rp. {{$c->product->price}}</h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">
                                                <a href="{{url('/cartDelete', $c->id)}}" class="icon">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2>Rp. {{$c->product->price}}</h2>
                                </td>
                                <td>
                                    <form novalidate="novalidate" method="POST" action= "{{url('/cartQuantity', $c->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="jumlah" class="form-control input-number" value="{{$c->jumlah}}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">ubah</button>
                                </td>
                                <td><a href="{{url('/cartDelete', $c->id)}}" class="icon"><i class="ti-close"></i></a></td>
                                <td>
                                    <h2 class="td-color">Rp. {{$c->total_amount}}</h2>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6"><center>KOSONG</center></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                            <tr>
                                <td>total price :</td>
                                <td>
                                    <h2>Rp. {{$cart->sum('total_amount')}}</h2>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="{{url('/whatsNew')}}" class="btn btn-solid">continue shopping</a></div>
                <div class="col-6"><a href="{{url('/cartTocheckout')}}" class="btn btn-solid">check out</a></div>
            </div>
        </div>
    </section>
    <!--section end-->

@endsection