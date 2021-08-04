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
                        <!-- <li class="mobile-wishlist">
                            <a href="{{url('/session/wishlist')}}">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                wishlist
                            </a>
                        </li> -->
                        <!-- <li class="onhover-dropdown mobile-account">
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
                        </li> -->
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
                        <a href="{{url('/')}}"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" class="img-fluid blur-up lazyload logo" alt=""></a>
                    </div>
                    <div>
                        <form class="form_search" role="form" action="{{url('/shop')}}" method="GET">
                            <input id="query search-autocomplete" type="search" placeholder="Cari produk..." class="nav-search nav-search-field" aria-expanded="true" name="name">
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
                                    <div>
                                        <img src="{{asset('frontend/assets/img/icon/cart.png')}}" class="img-fluid blur-up lazyload" alt="" >
                                        <i class="ti-shopping-cart"></i>
                                    </div>
                                <?php
                                    $cart = Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content();
                                    $total = Cart::priceTotal();
                                    $discount = Cart::discount();

                                    // dd($discount);
                                ?>
                                @if (count($cart) != 0)
                                    <ul class="show-div shopping-cart">
                                    @foreach ($cart as $c)
                                        <li>
                                            <div class="media">
                                                <a href="#">
                                                    <img class="mr-3" src="{{url('product/'.$c->image)}}" alt="Generic placeholder image">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4 class="judulpopcart">{{$c->name}}</h4>
                                                    </a>
                                                    @if ($c->discount != null)
                                                    <a href="{{url('/session/cart', $a->slug)}}" class="addcarthitam"></a>
                                                    <h5>
                                                        <span class="hargapopcart">Rp. {{number_format($c->price - ($c->discount /100 * $c->price), 0, ',', '.')}}
                                                            <del class="hargapopcart">
                                                                Rp. {{number_format($c->price, 0, ',', '.')}}
                                                            </del>
                                                        </span>
                                                    </h5>
                                                    @else 
                                                    <h5>
                                                        <span class="hargapopcart">
                                                            Rp. {{number_format($c->price, 0, ',', '.')}}
                                                        </span>
                                                    </h5>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="close-circle">
                                                <a href="{{url('/session/delete', $c->id)}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </li>
                                        
                                    @endforeach
                                        <li>
                                            <div class="total">
                                                <h5>subtotal : <span>Rp. {{$total}}</span></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="buttons">
                                                <a href="{{url('/session/cart')}}" class="view-cart view-carts">view cart</a>
                                                <a href="{{url('/session/checkout')}}" class="checkout checkouts">checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                @endif
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
                                <a href="{{url('/sale')}}">Sale</a>
                            </li>
                            <li class="mega" id="hover-cls">
                                <a href="{{url('/categ')}}">Skin Care</a>
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
                                                        <?php
                                                            $concern = App\Model\Category::where('menu_id', 1)->orderBy('created_at', 'asc')->get();
                                                        ?>
                                                            <ul>
                                                            @if (count($concern) != 0)
                                                                @foreach ($concern as $concern)
                                                                    <li>
                                                                        <a href="{{route('shop', ['category' => $concern->id])}}">{{$concern->category_name}}</a>
                                                                    </li>
                                                                @endforeach
                                                            @else
                                                                <li>
                                                                    <span style="color: #DCDCDC;">Coming Soon</span>
                                                                </li>
                                                            @endif
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
                                                            <?php
                                                                $category = App\Model\Category::where('menu_id', 2)->orderBy('created_at', 'desc')->get();
                                                            ?>
                                                            <ul>
                                                            @if (count($category) != 0)
                                                                @foreach ($category as $category)
                                                                    <li>
                                                                        <a href="{{route('shop', ['category' => $category->id])}}">{{$category->category_name}}</a>
                                                                    </li>
                                                                @endforeach
                                                            @else
                                                                <li>
                                                                    <span style="color: #DCDCDC;">Coming Soon</span>
                                                                </li>
                                                            @endif
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
                                                        <?php
                                                            $range = App\Model\Category::where('menu_id', 3)->orderBy('created_at', 'desc')->get();
                                                        ?>
                                                            <ul>
                                                            @if (count($range)!= 0)
                                                                @foreach ($range as $range)
                                                                    <li>
                                                                        <a href="{{route('shop', ['category' => $range->id])}}">{{$range->category_name}}</a>
                                                                    </li>
                                                                @endforeach
                                                            @else
                                                                <li>
                                                                    <span style="color: #DCDCDC;">Coming Soon</span>
                                                                </li>
                                                            @endif
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
                                <a href="{{url('/whatsNew')}}">Apa Yang Baru!</a>
                            </li>
                            <li>
                                <a href="{{url('/bestSeller')}}">Paling Laris</a>
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