<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
</head>

<body>
    <!-- Floating WhatsApp start -->
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Floating WhatsApp end -->

    <!-- header start -->
    @include('frontend.layout.header')
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2 class="judulhal">Halaman Pencarian</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Cari</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title3">
                                        <h2 class="title-inner3 col-lg-12 col-sm-8 fonttengahs"><u>Produk pencarianmu</u></h2>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                                <div class="col-lg-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/mix-mask.jpg')}}" class="img-fluid blur-up lazyload bg-img produkkotak"></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/mix-mask-2.jpg')}}" class="img-fluid blur-up lazyload bg-img produkkotak" alt=""></a>
                                                            </div>
                                                            <div class="cart-detail">
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="compare.html" title="Compare">
                                                                    <i class="ti-reload" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6 class="tekshitam">Skin Nutrient™ Mix and Mask Variety Pack (12 pcs)</h6>
                                                            </a>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                                            <h5 class="harga">Rp575.000 <del>Rp785.000</del></h5>
                                                            <!--<div class="add-btn">
                                                                <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                                                    <i class="ti-shopping-cart"></i> add to cart
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/purifying.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/purifying-2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="cart-detail">
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="compare.html" title="Compare">
                                                                    <i class="ti-reload" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6 class="tekshitam">Skin Nutrient™ Purifying and Neutralising Face Mask</h6>
                                                            </a>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                                            <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                                            <!--<div class="add-btn">
                                                                <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                                                    <i class="ti-shopping-cart"></i> add to cart
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/hydrating.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/hydrating-2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="cart-detail">
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="compare.html" title="Compare">
                                                                    <i class="ti-reload" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6 class="tekshitam">Skin Nutrient™ Hydrating and Aqua Replenishing Face Mask</h6>
                                                            </a>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                                            <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                                            <!--<div class="add-btn">
                                                                <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                                                    <i class="ti-shopping-cart"></i> add to cart
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/purifying.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/purifying-2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="cart-detail">
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="compare.html" title="Compare">
                                                                    <i class="ti-reload" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6 class="tekshitam">Skin Nutrient™ Purifying and Neutralising Face Mask</h6>
                                                            </a>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                                            <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                                            <!--<div class="add-btn">
                                                                <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                                                    <i class="ti-shopping-cart"></i> add to cart
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/purifying.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="{{asset('frontend/assets/img/produk/purifying-2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="cart-detail">
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="compare.html" title="Compare">
                                                                    <i class="ti-reload" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6 class="tekshitam">Skin Nutrient™ Purifying and Neutralising Face Mask</h6>
                                                            </a>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                                            <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                                            <!--<div class="add-btn">
                                                                <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                                                    <i class="ti-shopping-cart"></i> add to cart
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-6 col-sm-12">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                                                            aria-hidden="true"><i
                                                                                class="fa fa-chevron-left"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Previous</span></a></li>
                                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i
                                                                                class="fa fa-chevron-right"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav>
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
    </section>
    <!-- section End -->


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
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
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>