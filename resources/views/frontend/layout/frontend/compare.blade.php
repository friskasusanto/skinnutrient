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
                        <h2 class="judulhal">Compare Produk</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Compare</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="compare-section section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slide-4">
                        <div>
                            <div class="compare-part">
                                <button type="button" class="close-btn">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="img-secton">
                                    <div>
                                        <img src="{{asset('frontend/assets/img/produk/firming.jpg')}}" class="img-fluid blur-up lazyload bg-img produkkotak"
                                            alt="">
                                    </div>
                                    <a href="#">
                                        <h5>slim fit shirt</h5>
                                    </a>
                                    <h5>$555</h5>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>discription</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>Brand Name</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Zara</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>size</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>XL, L, M, S, XS</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>color</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Red , Blue , Pink</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>material</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>cotton</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>availability</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>In stock</p>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <a href="cart.php" class="btn btn-solid melengkung">+ Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="compare-part">
                                <button type="button" class="close-btn">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="img-secton">
                                    <div>
                                        <img src="{{asset('frontend/assets/images/pro3/1.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                            alt="">
                                    </div>
                                    <a href="#">
                                        <h5>slim fit shirt</h5>
                                    </a>
                                    <h5>$555</h5>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>discription</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>Brand Name</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Zara</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>size</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>S, XS</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>color</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Blue , Pink</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>material</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>cotton</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>availability</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>In stock</p>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <a href="#" class="btn btn-solid melengkung">+ Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="compare-part">
                                <button type="button" class="close-btn">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="img-secton">
                                    <div>
                                        <img src="{{asset('frontend/assets/images/pro3/1.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                            alt="">
                                    </div>
                                    <a href="#">
                                        <h5>slim fit shirt</h5>
                                    </a>
                                    <h5>$555</h5>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>discription</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>Brand Name</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Zara</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>size</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>XL, L, M, S, XS</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>color</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Red , Blue , Pink</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>material</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>cotton</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>availability</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>In stock</p>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <a href="cart.php" class="btn btn-solid melengkung">+ Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="compare-part">
                                <button type="button" class="close-btn">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="img-secton">
                                    <div>
                                        <img src="{{asset('frontend/assets/images/pro3/1.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                            alt="">
                                    </div>
                                    <a href="#">
                                        <h5>slim fit shirt</h5>
                                    </a>
                                    <h5>$555</h5>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>discription</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>Brand Name</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Zara</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>size</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>XL, L, M, S, XS</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>color</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Red , Blue , Pink</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>material</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>cotton</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>availability</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>In stock</p>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <a href="cart.php" class="btn btn-solid melengkung">+ Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="compare-part">
                                <button type="button" class="close-btn">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="img-secton">
                                    <div>
                                        <img src="{{asset('frontend/assets/images/pro3/1.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                                            alt="">
                                    </div>
                                    <a href="#">
                                        <h5>slim fit shirt</h5>
                                    </a>
                                    <h5>$555</h5>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>discription</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>Brand Name</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Zara</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>size</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>XL, L</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>color</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>Red , Blue , Black</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>material</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>cotton</p>
                                    </div>
                                </div>
                                <div class="detail-part">
                                    <div class="title-detail">
                                        <h5>availability</h5>
                                    </div>
                                    <div class="inner-detail">
                                        <p>In stock</p>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <a href="cart.php" class="btn btn-solid melengkung">+ Keranjang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- theme setting -->
    @include('frontend.layout.dropdown')
    <!-- theme setting -->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->


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