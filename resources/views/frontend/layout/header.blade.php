<header class="header-2 header-6">
    <div class="mobile-fix-option"></div>
    <div class="top-header">
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
                        <li class="mobile-wishlist"><a href="wishlist.php"><i class="fa fa-heart" aria-hidden="true"></i>
                                wishlist</a></li>
                        <li class="onhover-dropdown mobile-account">
                            <i class="fa fa-user" aria-hidden="true"></i> Akun Saya
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
                            @endif
                            @if (Auth::guest())
                                <li>
                                    <a href="{{ route('login') }}" data-lng="en">
                                        Masuk
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}" data-lng="es">
                                        Daftar
                                    </a>
                                </li>
                            @endif
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
                    <div class="brand-logo layout2-logo">
                        <a href="index.php"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" class="img-fluid blur-up lazyload logo" alt=""></a>
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
                        <div class="icon-nav">
                            <ul>
                                <li class="onhover-div mobile-search">
                                    <div><img src="{{asset('frontend/assets/images/icon/search.png')}}" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                        <i class="ti-search" onclick="openSearch()"></i></div>
                                    <div id="search-overlay" class="search-overlay">
                                        <div>
                                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
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
                                <li class="onhover-div mobile-cart">
                                    <div><img src="{{asset('frontend/assets/images/icon/cart.png')}}" class="img-fluid blur-up lazyload" alt="">
                                        <i class="ti-shopping-cart"></i></div>
                                    <ul class="show-div shopping-cart">
                                        <li>
                                            <div class="media">
                                                <a href="#"><img class="mr-3" src="{{asset('frontend/assets/img/produk/mix-mask.jpg')}}" alt="Generic placeholder image"></a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4 class="judulpopcart">Skin Nutrient™ Mix and Mask Variety Pack (12 pcs)</h4>
                                                    </a>
                                                    <h5><span class="hargapopcart">Rp60.000 <del class="hargapopcart">Rp85.000</del></span></h5>
                                                </div>
                                            </div>
                                            <div class="close-circle">
                                                <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="total">
                                                <h5>Subtotal : <span>Rp600.000</span></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="buttons">
                                                <a href="cart.php" class="view-cart view-carts">view cart</a>
                                                <a href="checkout.php" class="checkout checkouts">checkout</a>
                                            </div>
                                        </li>
                                    </ul>
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
                        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                            <li>
                                <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                            </li>
                            <li>
                                <a href="shop.php">Sale</a>
                            </li>
                            <li class="mega" id="hover-cls">
                                <a href="category.php">Skin Care</a>
                                <ul class="mega-menu full-mega-menu">
                                    <li>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="menu-title">
                                                            <h5>Kategori</h5>
                                                        </div>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li><a href="category.php">portfolio grid 2</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                        <div class="menu-title">
                                                            <h5>By Concern</h5>
                                                        </div>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li><a href="category.php">portfolio grid 2</a>
                                                                </li>
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
                                                                <li><a href="element-image-ratio.html">image size
                                                                        ratio <i class="fa fa-bolt icon-trend"
                                                                            aria-hidden="true"></i></a></li>
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
                                <a href="new.php">Apa Yang Baru!</a>
                            </li>
                            <li>
                                <a href="laris.php">Paling Laris</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>