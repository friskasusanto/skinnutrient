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
                                        <a href="#" class="btn btn-solid black-btn">shop now</a>
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
                                        <a href="#" class="btn btn-solid black-btn">shop now</a>
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
                            <a href="#" class="btn btn-solid-new category-btn">LEARN MORE</a>
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
                            <li class="btn btn-solid white-btn current"><a href="tab-1new">Best Seller</a></li>
                            <li class="btn btn-solid black-btn"><a href="tab-2">What s New</a></li>
                            <!--<li class=""><a href="tab-3">trends of week</a></li>-->
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-1" class="tab-content active default">
                                <div class="product-4 product-m no-arrow">
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro1.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro1.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro2.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro2.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro3.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro3.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro4.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro4.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro5.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro5.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro6.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro6.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro7.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro7.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro8.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro8.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro9.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro9.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-2" class="tab-content">
                                <div class="product-4 product-m no-arrow">
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro10.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro11.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro12.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro12.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro13.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro14.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-block">
                                            <div class="front">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro15.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page.php"><img
                                                        src="{{asset('backends/assets/images/banner/pro16.jpg')}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <button tabindex="0" onclick="openCart()" title="Add to cart">
                                                    <i class="ti-shopping-cart"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <br>
                                            <h4>BEE VENOM FIRMING</h4>
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="product-page.php">
                                                <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                            </a>
                                            <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                            <br>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
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
                        <div class="product-box">
                            <div class="img-block">
                                <div class="front">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro17.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro17.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info">
                                    <button tabindex="0" onclick="openCart()" title="Add to cart">
                                        <i class="ti-shopping-cart"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <br>
                                <h4>BEE VENOM FIRMING</h4>
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i></div>
                                <a href="product-page.php">
                                    <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                </a>
                                <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                <br>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <div class="front">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro18.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro18.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info">
                                    <button tabindex="0" onclick="openCart()" title="Add to cart">
                                        <i class="ti-shopping-cart"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <br>
                                <h4>BEE VENOM FIRMING</h4>
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i></div>
                                <a href="product-page.php">
                                    <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                </a>
                                <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                <br>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <div class="front">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro19.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro19.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info">
                                    <button tabindex="0" onclick="openCart()" title="Add to cart">
                                        <i class="ti-shopping-cart"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <br>
                                <h4>BEE VENOM FIRMING</h4>
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i></div>
                                <a href="product-page.php">
                                    <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                </a>
                                <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                <br>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <div class="front">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro20.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro20.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info">
                                    <button tabindex="0" onclick="openCart()" title="Add to cart">
                                        <i class="ti-shopping-cart"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <br>
                                <h4>BEE VENOM FIRMING</h4>
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i></div>
                                <a href="product-page.php">
                                    <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                </a>
                                <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                <br>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-block">
                                <div class="front">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro21.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="back">
                                    <a href="product-page.php"><img src="{{asset('backends/assets/images/banner/pro21.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                                <div class="cart-info">
                                    <button tabindex="0" onclick="openCart()" title="Add to cart">
                                        <i class="ti-shopping-cart"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart"
                                            aria-hidden="true"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a>
                                    <a href="compare.html" title="Compare"><i class="ti-reload"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <br>
                                <h4>BEE VENOM FIRMING</h4>
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i></div>
                                <a href="product-page.php">
                                    <h5>Skin Nutrient™ Bee Venom Peptide Serum</h5>
                                </a>
                                <h6><strong>Helps With:</strong>Signs of ageing, skin plumping and firming</h6>
                                <br>
                                <h4>$500.00 <del>$600.00</del></h4>
                            </div>
                        </div>
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
                            <form class="form-inline subscribe-form">
                                <div class="form-group mx-sm-3">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter your email">
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
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{asset('backends/assets/images/banner/blog1.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>NEWSWORTHY</h4>
                                <a href="#">
                                    <p>Skin Nutrient™ have won 2 skincare categories for 2020!</p>
                                </a>
                                <!--<hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>-->
                                <br>
                                <a href="#" class="btn btn-solid black-btn">LEARN MORE</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{asset('backends/assets/images/banner/blog2.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>EXPERT ADVICE</h4>
                                <a href="#">
                                    <p>Red wine is an anti-ageing drink, learn about the skin benefits</p>
                                </a>
                                <!--<hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>-->
                                <br>
                                <a href="#" class="btn btn-solid black-btn">LEARN MORE</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#">
                                <div class="classic-effect">
                                    <div>
                                        <img src="{{asset('backends/assets/images/banner/blog3.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>EXPERT ADVICE</h4>
                                <a href="#">
                                    <p>Healthy skin habits to start in 2020</p>
                                </a>
                                <!--<hr class="style1">
                                <h6>by: John Dio , 2 Comment</h6>-->
                                <br>
                                <a href="#" class="btn btn-solid black-btn">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->
@endsection