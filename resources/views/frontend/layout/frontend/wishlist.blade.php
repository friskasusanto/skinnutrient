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
                        <h2 class="judulhal">Wishlist</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Wishlist</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="wishlist-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <!--<thead>
                            <tr class="table-head">
                                <th scope="col">Gambar</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>-->
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#"><img src="{{asset('frontend/assets/img/produk/mix-mask.jpg')}}" alt=""></a>
                                </td>
                                <td><a href="#" class="juduljustify">Skin Nutrient™ Mix and Mask Variety Pack (12 pcs)</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <p>Tersedia</p>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color harga">Rp575.000 <del>Rp785.000</del></h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">
                                                <a href="#" class="icon mr-1 hapus"><i class="ti-close"></i></a>
                                                <a href="#" class="cart tambah"><i class="ti-shopping-cart"></i></a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <h2 class="harga">Rp575.000 <del>Rp785.000</del></h2>
                                </td>
                                <td>
                                    <p>Tersedia</p>
                                </td>
                                <td><a href="#" class="icon mr-3"><i class="ti-close"></i> </a>
                                    <a href="#" class="cart"><i class="ti-shopping-cart"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row wishlist-buttons">
                <div class="col-12"><a href="index.php" class="btn btn-solid melengkung">Lanjut Belanja</a></div>
            </div>
        </div>
    </section>
    <!--section end-->


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