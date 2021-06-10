@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')


<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>wishlist</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">wishlist</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="wishlist-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Product</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($wishlist) != 0)
                            @foreach ($wishlist as $w)
                            <tr>
                                <td>
                                    <a href="{{url('/detailProduct', $w->product->slug)}}"><img src="{{url('product/'.$w->product->image)}}" alt=""></a>
                                </td>
                                <td><a href="{{url('/detailProduct', $w->product->slug)}}">{{$w->product->name}}</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                        @if ($w->product->stock >= 1)
                                            <p>in stock</p>
                                        @else
                                            <p>out of stock</p>
                                        @endif
                                        </div>
                                        <div class="col-xs-3">
                                            @if ($w->product->discount != null)
                                            <h2 class="td-color">{{($w->product->price) - (($w->product->discount / 100) * $w->product->price)}}</h2>
                                            @else
                                            <h2 class="td-color">{{$w->product->price}}</h2>
                                            @endif
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">
                                                <a href="{{url('wishlistDelete', $w->id)}}" class="icon mr-1">
                                                    <i class="ti-close"></i>
                                                </a>
                                                <a href="{{url('addWishlistCart', $w->id)}}" class="cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($w->product->discount != null)
                                    <h2>Rp. {{number_format(($w->product->price) - (($w->product->discount / 100) * $w->product->price), 0, ',', '.')}}</h2>
                                    @else
                                    <h2>Rp. {{number_format($w->product->price, 0, ',', '.')}}</h2>
                                    @endif
                                </td>
                                <td>
                                @if ($w->product->stock >= 1)
                                    <p>in stock</p>
                                @else
                                    <p>out of stock</p>
                                @endif
                                </td>
                                <td>
                                    <a href="{{url('wishlistDelete', $w->id)}}" class="icon mr-3">
                                        <i class="ti-close"></i> 
                                    </a>
                                    <a href="{{url('addWishlistCart', $w->id)}}" class="cart">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
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
                </div>
            </div>
            <div class="row wishlist-buttons">
                <div class="col-12">
                    <a href="{{url('/')}}" class="btn btn-solid">continue shopping</a> 
                    <a href="{{url('/checkoutWishlist')}}" class="btn btn-solid">continue cart</a>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->

@endsection