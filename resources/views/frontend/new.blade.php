@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')


<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>collection</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">collection</li>
                            <li class="breadcrumb-item active" aria-current="page">product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"><img src="{{asset('backends/assets/images/via/BANNER-NEW.jpg')}}" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="container-fluid p-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="product-filter-content">
                                                            <div class="collection-view">
                                                                <ul>
                                                                    <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                    <li><i class="fa fa-list-ul list-layout-view"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="collection-grid-view">
                                                                <ul>
                                                                    <li><img src="{{asset('backends/assets/images/icon/2.png')}}" alt="" class="product-2-layout-view"></li>
                                                                    <li><img src="{{asset('backends/assets/images/icon/3.png')}}" alt="" class="product-3-layout-view"></li>
                                                                    <li><img src="{{asset('backends/assets/images/icon/4.png')}}" alt="" class="product-4-layout-view"></li>
                                                                    <li><img src="{{asset('backends/assets/images/icon/6.png')}}" alt="" class="product-6-layout-view"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @if(count($product) != 0)
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                            @foreach($product as $s)
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="{{url('/detailProduct', $s->slug)}}">
                                                                @if ($s->image == null)
                                                                	<img src="{{asset('backends/assets/images/pro3/35.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                @else
                                                                	<img src="{{url('product/'.$s->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                @endif
                                                                </a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="{{url('/detailProduct', $s->slug)}}">
                                                                @if ($s->image == null)
                                                                	<img src="{{asset('backends/assets/images/pro3/36.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                @else
                                                                	<img src="{{url('product/'.$s->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                @endif
                                                               	</a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <a href="{{url('/cart', $s->slug)}}" title="Add to cart">
                                                                    <i class="ti-shopping-cart" aria-hidden="true"></i>
                                                                </a> 
                                                                <a href="{{action('Frontend\SaleController@wishlist', $s->slug)}}" title="Add to Wishlist">
                                                                	<i class="ti-heart" aria-hidden="true"></i>
                                                                </a> 
                                                                <a href="#" data-toggle="modal" data-target="#quick-view{{$s->slug}}" title="Quick View">
                                                                	<i class="ti-search" aria-hidden="true"></i>
                                                                </a> 
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="product-detail">
                                                            <div>
                                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                                <a href="product-page(no-sidebar).html">
                                                                    <h6>{{$s->name}}</h6>
                                                                </a>
                                                                @if ($s->coming_soon == 1)
                                                                    <center><h4>
                                                                        Coming Soon
                                                                    </h4></center>
                                                                @elseif ($s->stock_user == null || $s->stock_user == 0)
                                                                    <center><h4>
                                                                        Sold Out
                                                                    </h4></center>
                                                                @else
                                                                    <h4>Rp. {{$s->price}}
                                                                        <!-- <del>$600.00</del> -->
                                                                    </h4>
                                                                @endif
                                                            </div>
                                                        </div>
                                                   
                                                    </div>
                                                </div>
                                             @endforeach
                                            </div>
                                        </div>
                                        {{$product->render()}}
                                    @else
                                    	<br/><br/><br/>
                                    	<center><h5>~ Product Kosong ~</h5></center>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->
    <!-- Quick-view modal popup start-->
    @if(isset($product))
    @foreach( $product as $s )
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view{{$s->slug}}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{url('product/'.$s->image)}}" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{$s->name}}</h2>
                                @if ($s->coming_soon == 1)
                                    <center><h3>
                                        Coming Soon
                                    </h3></center>
                                @elseif ($s->stock_user == null || $s->stock_user == 0)
                                    <center><h3>
                                        Sold Out
                                    </h3></center>
                                @else
                                    <h3>Rp. {{$s->price}}
                                        <!-- <del>$600.00</del> -->
                                    </h3>
                                @endif
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>{!!$s->description!!}</p>
                                </div>

                                <form class="d-inline-block" novalidate="novalidate" method="POST" action= "{{url('/addCart', $s->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="product-description border-product">
                                        <h6 class="product-title">quantity</h6>
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                    <div class="product-buttons">
                                        <button type="submit" class="btn btn-solid"> add to cart</button>
                                        <a href="{{url('/detailProduct', $s->slug)}}" class="btn btn-solid">view detail</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    <!-- Quick-view modal popup end-->

@endsection
