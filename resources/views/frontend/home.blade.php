@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

<!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
            <div>
                <div class="home text-center">
                    <img src="{{asset('backends/assets/images/banner/banner1.jpg')}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <!--<h4>special offer</h4>
                                        <h1>men shoes</h1>-->
                                        <a href="{{route('shop', ['name' => 'Skin+Nutrient™+Goat%27s+Milk+Magic™+Moment'])}}" class="btn btn-solid black-btn">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home text-center">
                    <img src="{{asset('backends/assets/images/banner/banner2.jpg')}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <!--<h4>special offer</h4>
                                        <h1>men shoes</h1>-->
                                        <a href="{{route('shop', ['name' => 'Skin+Nutrient™+Goat%27s+Milk+Magic™+Sleep+Cream'])}}" class="btn btn-solid black-btn">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->

    <!-- category -->
    <div class="category-bg ratio_square">
        <div class="container-fluid p-0">
            <div class="row order-section">
                <div class="col-sm-6 p-0">
                    <div class="contain-block even new-block">
                        <div>
                            <h3 class="h3-new">Learn How To Layer Our Skincare Products</h3>
                            <h6 class="h6-new">Layering basically means to apply your skincare products in a specific order of application, to achieve optimum efficacy from each active.</h6>
                            <a href="{{url('/blogs')}}" class="btn btn-solid-new category-btn">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-0">
                    <a href="#" class="image-block new-image-banner"><img alt="" src="{{asset('backends/assets/images/banner/banner3.jpg')}}" class="img-fluid lazyload bg-img"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- category end -->

        <!-- instagram section -->
        <section class="instagram ratio_square">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-borderless">INGREDIENT INDEX</h2>
                    <h6 class="title-borderless">Learn about the ingredients in our products</h6>
                    <a href="#">
                        <h5 class="title-borderless"><strong>READ MORE</strong></h5>
                    </a>
                    <div class="slide-5 no-arrow slick-instagram">
                        <div>
                            <div class="instagram-box"><img src="{{asset('backends/assets/images/banner/tab1.jpg')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box"><img src="{{asset('backends/assets/images/banner/tab2.jpg')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box"><img src="{{asset('backends/assets/images/banner/tab3.jpg')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box"><img src="{{asset('backends/assets/images/banner/tab4.jpg')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box"><img src="{{asset('backends/assets/images/banner/tab5.jpg')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                            </div>
                        </div>
                        <div>
                            <div class="instagram-box"><img src="{{asset('backends/assets/images/banner/tab6.jpg')}}" class="bg-img"
                                    alt="Avatar" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->

    <!-- slider tab  -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title2">
                            <li class="btn btn-solid white-btn current"><a href="tab-1">Best Seller</a></li>
                            <li class="btn btn-solid black-btn"><a href="tab-2">What s New</a></li>
                            <!--<li class=""><a href="tab-3">trends of week</a></li>-->
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-1" class="tab-content active default">
                                <div class="product-4 product-m no-arrow">
                                @foreach ($best as $b)
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="{{url('/detailProduct', $b->slug)}}">
                                                    <img src="{{url('product/'.$b->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="{{url('/detailProduct', $b->slug)}}">
                                                    <img src="{{url('product/'.$b->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                            <div class="cart-info">
                                                <a href="{{url('/cart', $b->slug)}}" title="Add to cart">
                                                    <i class="ti-shopping-cart" aria-hidden="true"></i>
                                                </a> 
                                                <a href="{{url('/wishlist', $b->slug)}}" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a> 
                                                <a href="#" data-toggle="modal" data-target="#quick-view{{$b->slug}}" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a> 
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                        <?php
                                            $category = App\Model\ProductCategory::where('product_id', $b->id)->get();
                                        ?>
                                        @if (count($category) != 0)
                                            @foreach ($category as $c) 
                                                <h4>{{$c->category->category_name}},</h4> 
                                            @endforeach
                                        @else
                                            <h4>{{$b->category->category_name}}</h4>
                                        @endif
                                            <div class="rating">
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page.php">
                                                <h5>{{$b->name}}</h5>
                                            </a>
                                            <!-- <h6><strong>Membantu dengan:</strong>{!!substr($b->detail,0,50)!!} ...</h6> -->
                                            <br>
                                        @if ($b->comming_soon == 1)
                                            <center><h3>
                                                Comming Soon
                                            </h3></center>
                                        @elseif ($b->stock_user == null || $b->stock_user == 0)
                                            <center><h3>
                                                Sold Out
                                            </h3></center>
                                        @else
                                            <h3>Rp. {{$b->price}}
                                                <!-- <del>$600.00</del> -->
                                            </h3>
                                        @endif
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>

                            <div id="tab-2" class="tab-content">
                                <div class="product-4 product-m no-arrow">
                                @foreach ($new as $n)
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="{{url('/detailProduct', $n->slug)}}">
                                                    <img src="{{url('product/'.$n->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="{{url('/detailProduct', $n->slug)}}">
                                                    <img src="{{url('product/'.$n->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                </a>
                                            </div>
                                            <div class="cart-info">
                                                <a href="{{url('/cart', $n->slug)}}" title="Add to cart">
                                                    <i class="ti-shopping-cart" aria-hidden="true"></i>
                                                </a> 
                                                <a href="{{url('/wishlist', $n->slug)}}" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a> 
                                                <a href="#" data-toggle="modal" data-target="#quick-view{{$n->slug}}" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a> 
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <?php
                                                $category = App\Model\ProductCategory::where('product_id', $n->id)->get();
                                            ?>
                                            @if (count($category) != 0)
                                                @foreach ($category as $c) 
                                                    <h4>{{$c->category->category_name}},</h4> 
                                                @endforeach
                                            @else
                                                <h4>{{$n->category->category_name}}</h4>
                                            @endif
                                            <div class="rating">
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i> 
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="{{url('/detailProduct', $n->slug)}}">
                                                <h5>{{$n->name}}</h5>
                                            </a>
                                            <!-- <h6><strong>Membantu dengan:</strong>{!!substr($n->detail,0,50)!!} ...</h6> -->
                                            <br>
                                        @if ($n->comming_soon == 1)
                                            <center><h3>
                                                Comming Soon
                                            </h3></center>
                                        @elseif ($n->stock_user == null || $n->stock_user == 0)
                                            <center><h3>
                                                Sold Out
                                            </h3></center>
                                        @else
                                            <h3>Rp. {{$n->price}}
                                                <!-- <del>$600.00</del> -->
                                            </h3>
                                        @endif
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider tab end -->

<br>

    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-center p-left">
            <img src="{{asset('backends/assets/images/banner/background.jpg')}}" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h3>BLUE SKIES AHEAD</h3>
                            <h5>Learn how Skin Nutrient™ is supporting our community during this uncertain time.</h5>
                            <a href="#"><h5><strong>READ MORE</strong></h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->

<br>
<br>
<br>

    <!-- product-box 1 -->
    <section class="section-b-space p-t-0 ratio_asos">
        <div class="container">
            <!--<div class="title3">
                <h4>our collection</h4>
                <h2 class="title-inner3">special products</h2>
                <div class="line"></div>
            </div>-->
            <div class="row">
                <div class="col">
                    <div class="product-4 product-m no-arrow">
                    @foreach ($last as $l)
                        <div class="product-box">
                            <div class="img-block">
                                <div class="front">
                                    <a href="{{url('/detailProduct', $l->slug)}}">
                                        <img src="{{url('product/'.$l->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{url('/detailProduct', $l->slug)}}">
                                        <img src="{{url('product/'.$l->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>
                                </div>
                                <div class="cart-info">
                                    <a href="{{url('/cart', $l->slug)}}" title="Add to cart">
                                        <i class="ti-shopping-cart" aria-hidden="true"></i>
                                    </a> 
                                    <a href="{{url('/wishlist', $l->slug)}}" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a> 
                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$l->slug}}" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a> 
                                </div>
                            </div>
                            <div class="product-detail">
                                <br>
                                <?php
                                    $category = App\Model\ProductCategory::where('product_id', $l->id)->get();
                                ?>
                                @if (count($category) != 0)
                                    @foreach ($category as $c) 
                                        <h4>{{$c->category->category_name}},</h4> 
                                    @endforeach
                                @else
                                    <h4>{{$l->category->category_name}}</h4>
                                @endif
                                <div class="rating">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="{{url('/detailProduct', $l->slug)}}">
                                    <h5>Skin Nutrient™ {{$l->name}}</h5>
                                </a>
                                @if ($l->comming_soon == 1)
                                    <center><h3>
                                        Comming Soon
                                    </h3></center>
                                @elseif ($l->stock_user == null || $l->stock_user == 0)
                                    <center><h3>
                                        Sold Out
                                    </h3></center>
                                @else
                                    <h3>Rp. {{$l->price}}
                                        <!-- <del>$600.00</del> -->
                                    </h3>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-box 1 end -->

    <div class="black-layout upper-footer">
            <div class="container">
                <section class="small-section ">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subscribe">
                                <div>
                                    <h4>Sign up for exclusive offers</h4>
                                    <p class="font-white">Be the first to know about our new product releases</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form class="form-inline subscribe-form" novalidate="novalidate" method="POST" action= "{{url('/subscribe')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group mx-sm-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter your email" name="email">
                                </div>
                                <button type="submit" class="btn btn-solid black-btn">subscribe</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    <!-- collection banner -->
    <section class="section-b-space p-t-0 ratio_40">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-12">
                    <a href="#">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part">
                                <img src="{{asset('backends/assets/images/banner/background-2.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                    alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h3 class="font-background-white">THE SKIN NUTRIENT DIFFERENCE</h3>
                                    <h6 class="font-background-white">Our goal is simple, to nutritionally boost the skin by improving skin immunity, fighting off free radicals and supporting the natural barrier function. By doing this we are creating products that address all skin concerns for every skin type!</h6>
                                    <h5 class="font-background-white"><strong>READ MORE</strong></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->

    <!-- blog section -->
    <section class="blog blog-bg section-b-space ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--<div class="title3">
                        <h4>our collection</h4>
                        <h2 class="title-inner3">special products</h2>
                        <div class="line"></div>
                    </div>-->
                    <div class="slide-3 no-arrow">
                    @if (count ($blog) != 0)
                        @foreach ($blog as $b)
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{url('blog/'.$b->images)}}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>SKINNUTRIENT NEWS</h4>
                                <a href="#">
                                    <p>{{$b->judul}}</p>
                                </a>
                                <!--<hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>-->
                                <br>
                                <a href="{{url('/blogsDetail', $b->judul)}}" class="btn btn-solid black-btn">LEARN MORE</a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

    <!-- Quick-view modal popup start-->
    @if(isset($last))
    @foreach( $last as $l )
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view{{$l->slug}}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{url('product/'.$l->image)}}" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{$l->name}}</h2>

                            @if ($l->comming_soon == 1)
                                <center><h3>
                                    Comming Soon
                                </h3></center>
                            @elseif ($l->stock_user == null || $l->stock_user == 0)
                                <center><h3>
                                    Sold Out
                                </h3></center>
                            @else
                                <h3>Rp. {{$l->price}}
                                    <!-- <del>$600.00</del> -->
                                </h3>
                            @endif
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>{!!$l->description!!}</p>
                                </div>

                                <form class="d-inline-block" novalidate="novalidate" method="POST" action= "{{url('/addCart', $l->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="product-description border-product">
                                        <h6 class="product-title">quantity</h6>
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                    <div class="product-buttons">
                                        <button type="submit" class="btn btn-solid"> add to cart</button>
                                        <a href="{{url('/detailProduct', $l->slug)}}" class="btn btn-solid">view detail</a>
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

    @if(isset($new))
    @foreach( $new as $l )
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view{{$l->slug}}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{url('product/'.$l->image)}}" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{$l->name}}</h2>
                            @if ($l->comming_soon == 1)
                                <center><h3>
                                    Comming Soon
                                </h3></center>
                            @elseif ($l->stock_user == null || $l->stock_user == 0)
                                <center><h3>
                                    Sold Out
                                </h3></center>
                            @else
                                <h3>Rp. {{$l->price}}
                                    <!-- <del>$600.00</del> -->
                                </h3>
                            @endif
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>{!!$l->description!!}</p>
                                </div>

                                <form class="d-inline-block" novalidate="novalidate" method="POST" action= "{{url('/addCart', $l->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="product-description border-product">
                                        <h6 class="product-title">quantity</h6>
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                    <div class="product-buttons">
                                        <button type="submit" class="btn btn-solid"> add to cart</button>
                                        <a href="{{url('/detailProduct', $l->slug)}}" class="btn btn-solid">view detail</a>
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

    @if(isset($best))
    @foreach( $best as $l )
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view{{$l->slug}}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{url('product/'.$l->image)}}" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{$l->name}}</h2>
                            @if ($l->comming_soon == 1)
                                <center><h3>
                                    Comming Soon
                                </h3></center>
                            @elseif ($l->stock_user == null || $l->stock_user == 0)
                                <center><h3>
                                    Sold Out
                                </h3></center>
                            @else
                                <h3>Rp. {{$l->price}}
                                    <!-- <del>$600.00</del> -->
                                </h3>
                            @endif
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>{!!$l->description!!}</p>
                                </div>

                                <form class="d-inline-block" novalidate="novalidate" method="POST" action= "{{url('/addCart', $l->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="product-description border-product">
                                        <h6 class="product-title">quantity</h6>
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                    <div class="product-buttons">
                                        <button type="submit" class="btn btn-solid"> add to cart</button>
                                        <a href="{{url('/detailProduct', $l->slug)}}" class="btn btn-solid">view detail</a>
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