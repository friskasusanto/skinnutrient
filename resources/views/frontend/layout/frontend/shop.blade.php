<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
</head>

<body>
    <!-- Floating WhatsApp start -->
    <a href="https://api.whatsapp.com/send?phone=+6281215770449" class="float" target="_blank">
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
                        <h2 class="judulhal">Sale</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sale</li>
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
                                    <div class="collection-product-wrapper">
                                        <div class="top-banner-wrapper">
                                            <a href="#"><img src="{{asset('frontend/assets/img/banner/shop1.jpg')}}" class="img-fluid blur-up lazyload" alt=""></a>
                                        </div>
                                    @if(count($sale) != 0)
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                            @foreach($sale as $s)
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#" class="produkkotaks"><img src="{{asset('frontend/assets/img/produk/mix-mask.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#" class="produkkotaks"><img src="{{asset('frontend/assets/img/produk/mix-mask-2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                            </div>
                                                            <div class="cart-detail">
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="compare.php" title="Compare">
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
                                                            <h5 class="harga">Rp575.000 <del>Rp785.000</del></h5>
                                                            <a href="#" class="addcarthitams btn btn-solid btn-tengah">Tambah keranjang</a>
                                                            <!--<div class="add-btn">
                                                                <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                                                    <i class="ti-shopping-cart"></i> add to cart
                                                                </a>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @endif
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <nav aria-label="Page navigation">
                                                                {{ $sale->links('pagination.custom') }}
                                                            </nav>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                            <?php
                                                                $sale = App\Model\Product::where('category_id', 1)->where('discount', '!=', null)->count();
                                                            ?>
                                                                <h5>Showing Products {{$sale}} Result</h5>
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
        </div>
    </section>
    <!-- section End -->


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- Dropdown hover -->
    @include('frontend.layout.dropdown')
    <!-- Dropdown hover end -->


    <!-- Quick-view modal popup start-->
    @include('frontend.layout.quickview')
    <!-- Quick-view modal popup end-->


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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (Session::has('flash_message'))
        <?php $status = (Session::get('flash_status') == 200)?'success':'error';?>
        <?php $status_type = (Session::get('flash_status') == 200)?'Success':'Failed';?>
        <script type="text/javascript">
            swal({   
                type: "{{ $status }}",
                title: "{{ $status_type }}",   
                text: "{{ Session::get('flash_message') }}",   
                showConfirmButton: false ,
                showCloseButton: true,
                footer: ''
            });
        </script>
    @endif
</body>
</body>

</html>