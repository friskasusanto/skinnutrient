
    <div class="loader_skeleton">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Skinnutrient Indonesia</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                        @if (Auth::check())
                            <li class="mobile-wishlist">
                                <a href="{{url('/wishlist')}}">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endif
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="javascript:void(0)">
                                        <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="{{url('/')}}"><img src="{{asset('backends/assets/images/icon/logos.png')}}"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-right">Back<i
                                                        class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                            </li>
                                            <li>
                                                <a href="{{url('/sale')}}">Sale</a>
                                            </li>
                                            <li class="mega"><a href="#">Skin Care
                                                    <div class="lable-nav">new</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{url('/new')}}">What's New!</a>
                                            </li>
                                            <!-- <li class="mega"><a href="#">features
                                                    <div class="lable-nav">new</div>
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href="{{url('/bestSeller')}}">Best Sellers</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/blogs')}}">Blog</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav d-none d-sm-block">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="{{asset('backends/assets/images/icon/search.png')}}" onclick="openSearch()"
                                                        class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                        onclick="openSearch()"></i></div>
                                            </li>
                                            <!-- <li class="onhover-div mobile-setting">
                                                <div><img src="{{asset('backends/assets/images/icon/setting.png')}}"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-settings"></i></div>
                                            </li> -->
                                            <li class="onhover-div mobile-cart">
                                                <div>
                                                    <img src="{{asset('Fbackends/assets/images/icon/cart.png')}}" class="img-fluid blur-up lazyload" alt=""> 
                                                    <i class="ti-shopping-cart"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="home-slider">
            <div class="home"></div>
        </div>
        <section class="collection-banner">
            <div class="container">
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
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
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
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Skinnutrient Indonesia</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            @if (Auth::check())
                            <li class="mobile-wishlist">
                                <a href="{{url('/wishlist')}}">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </li>
                            @endif
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                                <ul class="onhover-show-div">
                                @if (Auth::check())
                                    <li>Hallo, {{Auth::user()->name}}</li>
                                @endif
                                    <li><a href="{{ url('/dasboard') }}" data-lng="en">Dasboard</a></li>
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
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2"
                                                    aria-hidden="true"></i> Back</div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li> 
                                                <a href="{{url('/sale')}}">Sale</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo">
                                <a href="{{url('/')}}"><img src="{{asset('backends/assets/images/icon/logos.png')}}"
                                        class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <li>
                                            <a href="{{url('/sale')}}">Sale</a>
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
                                            <a href="{{url('/whatsNew')}}">What's New!</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/bestSeller')}}">Best Sellers</a>
                                        </li>

                                        <li>
                                            <a href="{{url('/blogs')}}">Blog</a>
                                        </li>

                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="{{asset('backends/assets/images/icon/search.png')}}" onclick="openSearch()"
                                                    class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                    onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div> <span class="closebtn" onclick="closeSearch()"
                                                        title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li class="onhover-div mobile-setting">
                                            <div><img src="{{asset('backends/assets/images/icon/setting.png')}}"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-settings"></i></div>
                                            <div class="show-div setting">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#">english</a></li>
                                                    <li><a href="#">french</a></li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#">euro</a></li>
                                                    <li><a href="#">rupees</a></li>
                                                    <li><a href="#">pound</a></li>
                                                    <li><a href="#">doller</a></li>
                                                </ul>
                                            </div>
                                        </li> -->
                                    @if (Auth::check())
                                        <li class="onhover-div mobile-cart">
                                            <div>
                                                <img src="{{asset('backends/assets/images/icon/cart.png')}}" class="img-fluid blur-up lazyload" alt=""> 
                                                <i class="ti-shopping-cart"></i>
                                            </div>
                                            <?php
                                                $cart = App\Model\Chart::where('user_id', Auth::user()->id)->get();
                                            ?>
                                            @foreach($cart as $c)
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="{{url('/detailProduct', $c->product->slug)}}">
                                                            <img alt="" class="mr-3" src="{{url('product/'.$c->product->image)}}">
                                                        </a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>{{$c->product->name}}</h4>
                                                            </a>
                                                            <h4><span>{{$c->jumlah}} x $ Rp. {{$c->product->price}}</span></h4>
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
                                                        <h5>subtotal : <span>Rp. {{$c->jumlah * $c->product->price}}</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons">
                                                        <a href="{{url('/cart')}}" class="view-cart">view cart</a><a href="#" class="checkout">checkout</a>
                                                    </div>
                                                </li>
                                            @endforeach
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
        </div>
    </header>
    <!-- header end