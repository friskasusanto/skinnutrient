<!-- loader start --> 

    <div class="loader_skeleton">
        <header class="header-2">
            <div class="top-header top-header-dark d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-6">
                            <div class="header-contact">
                                <ul>
                                    <li>Need assistance ordering online? We are here to help Mon - Fri 9am to 5pm AEST</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                                </ul>
                            </div>
                        </div> -->
                        <!--<div class="col-lg-6 text-right">
                            <ul class="header-dropdown">
                                <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>
                                        wishlist</a></li>
                                <li class="onhover-dropdown mobile-account"><i class="fa fa-user" aria-hidden="true"></i> My
                                    Account
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu border-section border-top-0">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="javascript:void(0)" onclick="openNav()">
                                        <img src="{{asset('backends/assets/images/icon/australia.png')}}" class="img-fluid blur-up logoaud lazyloaded" alt="" style="height: 60px;">
                                    </a>
                                    <div id="mySidenav" class="sidenav">
                                        <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()">
                                        </a>
                                        <nav>
                                            <a href="javascript:void(0)" onclick="closeNav()">
                                                <div class="sidebar-back text-left">
                                                    <i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back
                                                </div>
                                            </a>
                                            <!-- Vertical Menu -->
                                            <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                                <li><a href="https://www.australianmade.com.au/why-buy-australian-made/about-the-logo/" target="_blank">AUSTRALIAN MADE</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-logo layout2-logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('backends/assets/images/icon/logo/skinnutrient-logo.png')}}" class="img-fluid blur-up lazyload" alt="">
                                </a>
                            </div>
                            <div class="menu-right pull-right">
                                <div class="icon-nav d-none d-sm-block">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div>
                                                <img src="{{asset('backends/assets/images/icon/search.png')}}" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> 
                                                <i class="ti-search" onclick="openSearch()"></i>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div>
                                                <a href="{{ route('login') }}">
                                                    <img src="{{asset('backends/assets/images/icon/users.png')}}"
                                                    class="img-fluid blur-up lazyload" alt=""> 
                                                    <i class="ti-settings"></i>
                                                </a>
                                            </div>
                                        </li>
                                    @if (Auth::check())
                                        <li class="onhover-div mobile-setting">
                                            <div>
                                            <a href="{{url('/wishlist')}}">
                                                <img src="{{asset('backends/assets/images/icon/heart-black.png')}}" class="img-fluid blur-up lazyload" alt=""> 
                                                <i class="ti-settings"></i>
                                            </a>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div>
                                                <img src="{{asset('backends/assets/images/icon/cart.png')}}"
                                                    class="img-fluid blur-up lazyload" alt=""> 
                                                    <i class="ti-shopping-cart"></i>
                                            </div>
                                        </li>
                                    @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-nav-center">
                            <nav>
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <!-- Sample menu definition -->
                                <ul class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                aria-hidden="true"></i></div>
                                    </li><!-- 
                                    @if (!Auth::check())
                                    <li>
                                        <a href="{{url('/login')}}">Login</a>
                                    </li>
                                    @endif -->
                                    <li>
                                        <a href="{{url('/sale')}}">Sale</a>
                                    </li>
                                    <li class="mega"><a href="#">Skin Care
                                            <div class="lable-nav">new</div>
                                        </a>
                                    </li>
                                    <li><a href="#">What's new</a>
                                    </li>
                                    <li>
                                        <a href="#">Best Seller</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
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
        <div class="container category-ldr">
            <section class="section-b-space border-section border-top-0">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="category-block col-2">
                                <a href="#">
                                    <div class="category-image svg-image">
                                    </div>
                                </a>
                                <div class="category-details">
                                    <h5></h5>
                                </div>
                            </div>
                            <div class="category-block col-2">
                                <a href="#">
                                    <div class="category-image svg-image">
                                    </div>
                                </a>
                                <div class="category-details">
                                    <h5></h5>
                                </div>
                            </div>
                            <div class="category-block col-2">
                                <a href="#">
                                    <div class="category-image svg-image">
                                    </div>
                                </a>
                                <div class="category-details">
                                    <h5></h5>
                                </div>
                            </div>
                            <div class="category-block col-2 d-none d-md-block">
                                <a href="#">
                                    <div class="category-image svg-image">
                                    </div>
                                </a>
                                <div class="category-details">
                                    <h5></h5>
                                </div>
                            </div>
                            <div class="category-block col-2 d-none d-lg-block">
                                <a href="#">
                                    <div class="category-image svg-image">
                                    </div>
                                </a>
                                <div class="category-details">
                                    <h5></h5>
                                </div>
                            </div>
                            <div class="category-block col-2 d-none d-xl-block">
                                <a href="#">
                                    <div class="category-image svg-image">
                                    </div>
                                </a>
                                <div class="category-details">
                                    <h5></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="collection-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="product-para">
                            <p class="first"></p>
                            <p class="second"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-12">
                    <div class="no-slider row">
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
        <header class="header-2">
        <div class="mobile-fix-option"></div>
        <div class="top-header top-header-dark">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-12">
                        <div class="header-contact">
                            <ul>
                                <li>Need assistance ordering online? We are here to help Mon - Fri 9am to 5pm AEST</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-6 text-right hidden-aja">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist">
                                <a href="{{url('/wishlist')}}">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    wishlist
                                </a>
                            </li>
                            <li class="onhover-dropdown mobile-account">
                                <i class="fa fa-user" aria-hidden="true"></i> 
                                <ul class="onhover-show-div">
                                @if (Auth::check())
                                    <li>Hallo, {{Auth::user()->name}}</li>
                                    @role ('Admin')
                                    <li><a href="{{ url('/dasboard') }}" data-lng="en">Dasboard</a></li>
                                    @endrole
                                    @role ('Gudang')
                                    <li><a href="{{ url('/dasboard') }}" data-lng="en">Dasboard</a></li>
                                    @endrole
                                    @role ('Sales')
                                    <li><a href="{{ url('/dasboard') }}" data-lng="en">Dasboard</a></li>
                                    @endrole
                                    @role('Bpom')
                                    <li><a href="{{ url('/admin/pengaduan') }}" data-lng="en">Pengaduan</a></li>
                                    @endrole
                                @endif
                                    <li><a href="{{ route('login') }}" data-lng="en">Login</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" data-lng="en">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
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
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <img src="{{asset('backends/assets/images/icon/australia.png')}}" class="img-fluid blur-up logoaud lazyloaded" alt="" style="height: 60px;">
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <a href="javascript:void(0)" onclick="closeNav()">
                                            <div class="sidebar-back text-left">
                                                <i class="fa fa-angle-left pr-2"
                                                    aria-hidden="true">   
                                                </i> Back
                                            </div>
                                        </a>
                                        <!-- Vertical Menu -->
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li><a href="https://www.australianmade.com.au/why-buy-australian-made/about-the-logo/" target="_blank">AUSTRALIAN MADE</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="brand-logo layout2-logo">
                            <a href="{{url('/')}}"><img src="{{asset('backends/assets/images/icon/logo/skinnutrient-logo.png')}}"
                                    class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                        <div class="menu-right pull-right">
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div>
                                            <img src="{{asset('backends/assets/images/icon/search.png')}}" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> 
                                                <i class="ti-search" onclick="openSearch()"></i>
                                        </div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div><span class="closebtn" onclick="closeSearch()"
                                                    title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form action="{{url('/shop')}}" method="GET">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product" name="name">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-setting">
                                        <div>
                                            <a href="{{ route('login') }}">
                                                <img src="{{asset('backends/assets/images/icon/users.png')}}" class="img-fluid blur-up lazyload" alt="">
                                                <i class="ti-settings"></i>
                                            </a>
                                        </div>
                                        <div class="show-div setting">
                                        @if (Auth::check())
                                            <h6>Hallo, {{Auth::user()->name}}</h6>
                                        @endif
                                            <ul>
                                            @if (! Auth::check())
                                                <li><a href="{{ route('login') }}">login</a></li>
                                            @endif
                                            @if (Auth::check())
                                                @role ('Admin')
                                                <li><a href="{{ url('/dasboard') }}" data-lng="en">Dasboard</a></li>
                                                @endrole
                                                @role ('Gudang')
                                                <li><a href="{{ url('/dasboard') }}" data-lng="en">Dasboard</a></li>
                                                @endrole
                                                @role ('Sales')
                                                <li><a href="{{ url('/dasboard') }}" data-lng="en">Dasboard</a></li>
                                                @endrole
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                      Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @endif
                                            </ul>
                                        </div>
                                    </li>
                                @if (Auth::check())
                                    <li class="onhover-div mobile-setting">
                                        <div>
                                        <a href="{{url('/wishlist')}}">
                                            <img src="{{asset('backends/assets/images/icon/heart-black.png')}}" class="img-fluid blur-up lazyload" alt=""> 
                                            <i class="ti-settings"></i>
                                        </a>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div>
                                            <img src="{{asset('backends/assets/images/icon/cart.png')}}"
                                                class="img-fluid blur-up lazyload" alt=""> 
                                                <i class="ti-shopping-cart"></i>
                                        </div>
                                        <?php
                                            $cart = App\Model\Chart::where('user_id', Auth::user()->id)->where('status', 0)->limit(2)->get();
                                        ?>
                                        <ul class="show-div shopping-cart">
                                    @if (count ($cart) != 0)
                                        @foreach($cart as $c)
                                            <li>
                                                <div class="media">
                                                    <a href="{{url('/detailProduct', $c->product->slug)}}">
                                                        <img alt="" class="mr-3" src="{{url('product/'.$c->product->image)}}">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="{{url('/detailProduct', $c->product->slug)}}">
                                                            <h4>{{$c->product->name}}</h4>
                                                        </a>
                                                        <h4>
                                                        @if ($c->product->discount != null)
                                                            <span>{{$c->jumlah}} x $ Rp. {{number_format(($c->product->price) - (($c->product->discount / 100) * $c->product->price), 0, ',', '.')}}</span>
                                                        @else
                                                            <span>{{$c->jumlah}} x $ Rp. {{number_format($c->product->price, 0, ',', '.')}}</span>
                                                        @endif
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle">
                                                    <a href="{{url('/cartDelete', $c->id)}}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total">
                                                @if ($c->product->discount != null)
                                                    <h5>subtotal : <span>Rp. {{number_format(($c->product->price) - (($c->product->discount / 100) * $c->product->price), 0, ',', '.')}}</span></h5>
                                                @else
                                                    <h5>subtotal : <span>Rp. {{number_format($c->jumlah * $c->product->price, 0, ',', '.')}}</span></h5>
                                                @endif
                                                </div>
                                            </li>
                                            
                                        @endforeach 
                                            <li>
                                                <div class="buttons">
                                                    <a href="{{url('/cart')}}" class="view-cart">view cart</a><a href="{{url('/cartTocheckout')}}" class="checkout">checkout</a>
                                                </div>
                                            </li>
                                    @else
                                        <li>
                                            <center><div class="buttons">
                                                <a href="{{url('/cart')}}" class="view-cart">view cart</a>
                                            </div></center>
                                        </li>
                                    @endif
                                        </ul>
                                    </li>
                                @endif
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-nav-center">
                        <nav id="main-nav">
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                            <!-- Sample menu definition -->
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                <li>
                                    <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                            aria-hidden="true"></i></div>
                                </li><!-- 
                                @if (!Auth::check())
                                <li>
                                    <a href="{{url('/login')}}">Login</a>
                                </li>
                                @endif -->
                                <li>
                                    <a href="{{url('/sale')}}"> Sale</a>
                                </li>
                                <li class="mega" id="hover-cls"><a href="#">Skin Care
                                        <div class="lable-nav">new</div>
                                    </a>
                                    <ul class="mega-menu full-mega-menu">
                                        <li>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>By Concern</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    @foreach (App\Model\Category::where('menu_id', 1)->orderBy('created_at', 'asc')->get() as $concern)
                                                                        <li>
                                                                            <a href="{{route('shop', ['category' => $concern->id])}}">{{$concern->category_name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>By Category</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    @foreach (App\Model\Category::where('menu_id', 2)->orderBy('created_at', 'desc')->get() as $concern)
                                                                        <li>
                                                                            <a href="{{route('shop', ['category' => $concern->id])}}">{{$concern->category_name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col mega-box">
                                                        <div class="link-section">
                                                            <div class="menu-title">
                                                                <h5>By Range</h5>
                                                            </div>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    @foreach (App\Model\Category::where('menu_id', 3)->orderBy('created_at', 'desc')->get() as $concern)
                                                                        <li>
                                                                            <a href="{{route('shop', ['category' => $concern->id])}}">{{$concern->category_name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('/whatsNew')}}">What's New</a>
                                </li>
                                <li>
                                    <a href="{{url('/bestSeller')}}">Best Seller</a>
                                </li>
                                <li>
                                    <a href="{{url('/blogs')}}">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end