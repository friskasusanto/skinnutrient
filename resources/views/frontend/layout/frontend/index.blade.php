<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.layout.head')
</head>

<body>

<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

    <!-- loader start -->
    <div class="loader_skeleton">
        <header class="header-2 header-6">
            <div class="top-header d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-contact">
                                <ul>
                                    <li>Pesan melalui WhatsApp <a href="https://api.whatsapp.com/send?phone=+6281215770449" class="putih" target="_blank">(+62) 812-1577-0449</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <ul class="header-dropdown">
                                <li class="mobile-wishlist">
                                    <a href="{{url('/wishlist')}}">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        wishlist
                                    </a>
                                </li>
                                <li class="onhover-dropdown mobile-account">
                                    <i class="fa fa-user" aria-hidden="true"></i> Akun Saya
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu border-section border-top-0">
                            <div class="brand-logo layout2-logo">
                                <a href="#"><img src="{{asset('frontend/assets/images/icon/logo/14.png')}}" class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                            <div>
                                <form class="form_search" role="form">
                                    <input id="query search-autocomplete" type="search" placeholder="Cari produk..." class="nav-search nav-search-field" aria-expanded="true">
                                    <button type="submit" name="nav-submit-button" class="btn-search">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="menu-right pull-right">
                                <div class="icon-nav d-none d-sm-block">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="{{asset('frontend/assets/images/icon/search.png')}}" class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-search"></i></div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="{{asset('frontend/assets/images/icon/setting.png')}}" class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-settings"></i></div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="{{asset('frontend/assets/images/icon/cart.png')}}" class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-shopping-cart"></i></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="main-nav-center">
                            <nav id="main-nav">
                                <div class="toggle-nav">
                                    <i class="fa fa-bars sidebar-bar"></i>
                                </div>
                                <!-- Sample menu definition -->
                                <ul class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">shop</a>
                                    </li>
                                    <li>
                                        <a href="#">product</a>
                                    </li>
                                    <li class="mega"><a href="#">features
                                            <div class="lable-nav">new</div>
                                        </a>
                                    </li>
                                    <li><a href="#">pages</a>
                                    </li>
                                    <li>
                                        <a href="#">blog</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="home-slider">
            <div class="home"></div>
        </div>
        <section class="container category-ldr">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="category-block col-2">
                            <a href="#">
                                <div class="category-image svg-image">
                                </div>
                            </a>
                        </div>
                        <div class="category-block col-2">
                            <a href="#">
                                <div class="category-image svg-image">
                                </div>
                            </a>
                        </div>
                        <div class="category-block col-2">
                            <a href="#">
                                <div class="category-image svg-image">
                                </div>
                            </a>
                        </div>
                        <div class="category-block col-2 d-none d-md-block">
                            <a href="#">
                                <div class="category-image svg-image">
                                </div>
                            </a>
                        </div>
                        <div class="category-block col-2 d-none d-lg-block">
                            <a href="#">
                                <div class="category-image svg-image">
                                </div>
                            </a>
                        </div>
                        <div class="category-block col-2 d-none d-xl-block">
                            <a href="#">
                                <div class="category-image svg-image">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="collection-banner">
            <div class="container">
                <div class="row partition3">
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row partition3 banner-top-cls">
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="no-slider inside-detail row">
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader end -->


    <!-- header mobile start -->
    @include('frontend.layout.header')
    <!-- header mobile end -->


    <!-- Home slider -->
    <section class="p-0 small-slider">
        <div class="slide-1 home-slider marginbottom">
            <div>
                <div class="home ">
                    <picture>
                    <source 
                        media="(min-width: 768px)"
                        srcset="{{asset('frontend/assets/img/banner/1.jpg')}}" class="bg-img blur-up lazyload">
                    <source 
                        media="(min-width: 280px)"
                        srcset="{{asset('frontend/assets/img/banner/2.jpg')}}" class="banner-hp">
                    <img src="{{asset('frontend/assets/img/banner/2.jpg')}}" class="banner-hp banner100">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- logo section -->
    <!--<section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-6 no-arrow">
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/9.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/10.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/11.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/12.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/13.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/14.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/15.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#">
                                    <img src="{{asset('frontend/assets/images/logos/16.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- logo section end -->


    <!-- Banner section -->
    <section class="banner-6 ratio2_1">
        <div class="container">
            <div class="row partition3">
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-left gambarradius">
                            <div class="img-part">
                                <img src="{{asset('frontend/assets/img/sub-banner/1a.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-right gambarradius">
                            <div class="img-part">
                                <img src="{{asset('frontend/assets/img/sub-banner/2b.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div class="sembarang">
                                    <h2 class="bannerteks">BOTANIC FACE MASKS</h2>
                                    <h4 class="fontsedang">Terpilih NO.1 Rangkaian Masker Lembaran Buatan Australia, oleh 14K Australia!</h4>
                                    <a href="#" class="btn btn-solid btn-tengah">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-left gambarradius">
                            <div class="img-part">
                                <img src="{{asset('frontend/assets/img/sub-banner/3b.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section End -->


    <!-- collection banner -->
    <section class="pb-0 ratio_45">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-6">
                    <div class="collection-banner christmas-banner p-left text-left">
                        <div class="img-part">
                            <img src="{{asset('frontend/assets/img/sub-banner/4c.jpg')}}"
                                class="img-fluid bg-img blur-up lazyload bannerkotakdua" alt="">
                        </div>
                        <div class="contain-banner">
                            <div class="kotakduas">
                                <h3 class="kotakdua"><strong>High Performing Sheet Masks</strong></h3>
                                <h4 class="kotakdua h4-kecil">Temukan manfaat Serat Bio-Selulosa.</h4>
                                <h4 class="kotakdua"><a href="#"><u class="tekshitam">Lebih Lanjut</u></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="collection-banner christmas-banner p-left text-left">
                        <div class="img-part">
                            <img src="{{asset('frontend/assets/img/sub-banner/5c.jpg')}}"
                                class="img-fluid bg-img blur-up lazyload bannerkotakdua" alt="">
                        </div>
                        <div class="contain-banner">
                            <div class="kotakduas">
                                <div class="bintangs">
                                    <h4 class="bintang">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    </h4>
                                </div>
                                <h3 class="kotakputih"><strong>GET SHEET FACED!</strong></h3>
                                <a href="#"><h4><u>Baca Review Pelanggan</u></h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- about section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title3">
                        <h2 class="title-inner3 col-lg-12 col-sm-8 fonttengah"><u>Rangkaian Botanic Face Mask</u></h2>
                    </div>
                    <div class="col-lg-10 offset-lg-1 about-text">
                        <h4 class="tengah">Skin Nutrient sheet masks terdiri dari <u>dua komponen</u>, serum yang sangat terkonsentrasi dan selembar serat bio-selulosa.<br><br>
                        <strong>Produk ini dianugerahi Product of the Year 2019.</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- slider tab  -->
    <section class="section-b-space ratio_square bag-product">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <!--<ul class="tabs tab-title">
                            <li class="current"><a href="tab-1">new arrival</a></li>
                            <li class=""><a href="tab-2">woman</a></li>
                            <li class=""><a href="tab-3">man</a></li>
                            <li class=""><a href="tab-4">kids</a></li>
                            <li class=""><a href="tab-5">school-bag</a></li>
                        </ul>-->
                        <div class="tab-content-cls">
                            <div id="tab-1" class="tab-content active default">
                                <div class="product-4 product-m no-arrow">
                                @foreach ($all as $a)
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <?php
                                                $front = App\Model\ProductGambar::where('product_id', $a->id)->first();
                                                $back = App\Model\ProductGambar::where('product_id', $a->id)->skip(1)->first();
                                                $count = App\Model\ProductGambar::where('product_id', $a->id)->get();
                                            ?>
                                            <div class="front">
                                                <img alt="" src="{{url('product/'.$a->image)}}" class="img-fluid blur-up lazyload bg-img">
                                            </div>
                                            <div class="back">
                                                <img alt="" src="{{url('product/'.$front->image)}}" class="img-fluid blur-up lazyload bg-img">
                                            </div>
                                            <div class="cart-detail">
                                                <a href="{{url('/wishlist', $a->slug)}}" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{url('/detailProduct', $a->slug)}}">
                                                <h6 class="tekshitam">{{$a->name}}</h6>
                                            </a>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="{{url('/cart', $a->slug)}}" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                            @if ($a->comming_soon == 1)
                                               <h5 class="harga">
                                                    Coming Soon
                                                </h5>
                                            @elseif ($a->stock_user == null || $a->stock_user == 0)
                                                <h5 class="harga">
                                                    Sold Out
                                                </h5>
                                            @else
                                                @if ($a->discount != null)
                                                <h5 class="harga">
                                                    Rp. {{number_format($a->price - ($a->discount /100 * $a->price), 0, ',', '.')}}
                                                    <del>Rp. {{number_format($a->price, 0, ',', '.')}}</del>
                                                </h5>
                                                @else 
                                                <h5 class="harga">
                                                    Rp. {{number_format($a->price, 0, ',', '.')}}
                                                </h5>
                                                @endif
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


    <!-- product-box  -->
    <div class="container ratio_square">
        <section class="section-b-space border-top-0">
            <div class="row">
            <div class="col-lg-12">
                    <div class="title3">
                        <h2 class="title-inner3 col-lg-12 col-sm-8 fonttengahs"><u>Pembelian Paling Laris</u></h2>
                    </div>
                    <div class="product-4 product-m no-arrow">
                        @foreach ($new as $a)
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <?php
                                    $front = App\Model\ProductGambar::where('product_id', $a->id)->first();
                                    $back = App\Model\ProductGambar::where('product_id', $a->id)->skip(1)->first();
                                    $count = App\Model\ProductGambar::where('product_id', $a->id)->get();
                                ?>
                                <div class="front">
                                    <img alt="" src="{{url('product/'.$a->image)}}" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="back">
                                    <img alt="" src="{{url('product/'.$front->image)}}" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="cart-detail">
                                    <a href="{{url('/wishlist', $a->slug)}}" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{url('/detailProduct', $a->slug)}}">
                                    <h6 class="tekshitam">{{$a->name}}</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="{{url('/cart', $a->slug)}}" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                @if ($a->comming_soon == 1)
                                   <h5 class="harga">
                                        Coming Soon
                                    </h5>
                                @elseif ($a->stock_user == null || $a->stock_user == 0)
                                    <h5 class="harga">
                                        Sold Out
                                    </h5>
                                @else
                                    @if ($a->discount != null)
                                    <h5 class="harga">
                                        Rp. {{number_format($a->price - ($a->discount /100 * $a->price), 0, ',', '.')}}
                                        <del>Rp. {{number_format($a->price, 0, ',', '.')}}</del>
                                    </h5>
                                    @else 
                                    <h5 class="harga">
                                        Rp. {{number_format($a->price, 0, ',', '.')}}
                                    </h5>
                                    @endif
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- product-box end -->


    <!-- blog section start -->
    <section class="blog p-t-30 section-b-space gym-blog ratio3_2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-3 no-arrow">
                        <div class="col-md-12">
                            <a href="#">
                                <div class="basic-effect">
                                    <div class="ingri">
                                        <img src="{{asset('frontend/assets/img/ingri/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                    <p class="ingrid">Our Ingredients</p>
                                <a href="#">
                                <h6 class="bawahingrid">Baca Selengkapnya <i class="ti-arrow-right"></i></h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="basic-effect">
                                    <div class="ingri">
                                        <img src="{{asset('frontend/assets/img/ingri/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                    <p class="ingrid">Shop by Concern</p>
                                <a href="#">
                                <h6 class="bawahingrid">Belanja Sekarang <i class="ti-arrow-right"></i></h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="basic-effect">
                                    <div class="ingri">
                                        <img src="{{asset('frontend/assets/img/ingri/3.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="blog-details">
                                    <p class="ingrid">Shop by Category</p>
                                <a href="#">
                                <h6 class="bawahingrid">Belanja Sekarang <i class="ti-arrow-right"></i></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->


    <!-- About section start -->
    <section class="section-b-space beauty-about">
        <div class="container">
            <div class="row roww">
            <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="about-section">
                        <div>
                            <h2 class="judulblogindex">Bangga Buatan Australia & Dimiliki</h2>
                            <div class="about-text">
                                <p>Kami merangkul konsep multi-tasking. Kami ingin produk kami melakukan lebih banyak dengan lebih sedikit. Selain sangat pekerja keras, produk Skin Nutrient™ alami, memanfaatkan bahan-bahan asli ekosistem Australia. Dirancang untuk merayakan bahan-bahan asli yang unik yang ditawarkan Australia.</p>
                            </div>
                            <a href="#">
                                <h6 class="bawahingrid">Baca Selengkapnya <i class="ti-arrow-right"></i></h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 hapeblog">
                    <div class="about-section">
                        <div>
                            <h2 class="judulblogindex">Perawatan Kulit Pemenang Penghargaan</h2>
                            <div class="about-text">
                                <p>Skin Nutrient™ has won several awards. Product of the Year awarded us the best Australian face mask brand in 2019 and 2020 for the Botanic Face Mask Range, Red Wine Refining and Exfoliating Mask and Suncare products...</p>
                            </div>
                            <a href="#">
                                <h6 class="bawahingrid">Baca Selengkapnya <i class="ti-arrow-right"></i></h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section  end -->


    <!--footer section -->
    @include('frontend.layout.footer')
    <!--footer section end -->


    <!--modal popup start-->
    @include('frontend.layout.modal-popup')
    <!--modal popup end-->


    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row">
                        <div class="col-lg-6  col-xs-12">
                            <div class="quick-view-img">
                                <img src="{{asset('frontend/assets/images/pro3/1.jpg')}}" alt="" class="img-fluid blur-up lazyload">
                            </div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2> Women Pink Shirt </h2>
                                <h3>$32.96 </h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="ti-angle-left"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="ti-angle-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <a href="#" class="btn btn-solid">add to cart</a>
                                    <a href="#" class="btn btn-solid">view detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->


    <!-- Add to cart modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg addtocart">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <a href="#">
                                            <img class="img-fluid blur-up lazyload pro-img" src="{{asset('frontend/assets/images/fashion/product/43.jpg')}}" alt="">
                                        </a>
                                        <div class="media-body align-self-center text-center">
                                            <a href="#">
                                                <h6>
                                                    <i class="fa fa-check"></i>Item
                                                    <span>men full sleeves</span>
                                                    <span> successfully added to your Cart</span>
                                                </h6>
                                            </a>
                                            <div class="buttons">
                                                <a href="#" class="view-cart btn btn-solid">Your cart</a>
                                                <a href="#" class="checkout btn btn-solid">Check out</a>
                                                <a href="#" class="continue btn btn-solid">Continue shopping</a>
                                            </div>

                                            <div class="upsell_payment">
                                                <img src="{{asset('frontend/assets/images/payment_cart.png')}}" class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-section">
                                        <div class="col-12 product-upsell text-center">
                                            <h4>Customers who bought this item also.</h4>
                                        </div>
                                        <div class="row" id="upsell_product">
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/fashion/product/1.jpg')}}" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/fashion/product/34.jpg')}}" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/fashion/product/13.jpg')}}" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/fashion/product/19.jpg')}}" class="img-fluid blur-up lazyload mb-1" alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add to cart modal popup end-->


    <!-- tap to top -->
    <div class="tap-top border-white border">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- menu js-->
    <script src="{{asset('frontend/assets/js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('frontend/assets/js/lazysizes.min.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('frontend/assets/js/slick.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('frontend/assets/js/bootstrap.js')}}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{asset('frontend/assets/js/bootstrap-notify.min.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>