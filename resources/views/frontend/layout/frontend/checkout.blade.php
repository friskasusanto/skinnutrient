<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
</head>

<body>
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

    <!-- header start -->
    @include('frontend.layout.header')
    <!-- header end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2 class="judulhal">Halaman Pembayaran</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bayar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3 class="judultengah">Pembayaran</h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Nama</div>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Nomor Telp.</div>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email</div>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Provinsi</div>
                                        <select>
                                            <option class="pilihabu">-- Pilih --</option>
                                            <option>Jawa Tengah</option>
                                            <option>Jawa Barat</option>
                                            <option>Jawa Timur</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Kota</div>
                                        <select>
                                            <option class="pilihabu">-- Pilih --</option>
                                            <option>Kota Semarang</option>
                                            <option>Kab. Semarang</option>
                                            <option>Kab. Kendal</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Jenis Pengiriman</div>
                                        <select>
                                            <option class="pilihabu">-- Pilih --</option>
                                            <option>REG JNE</option>
                                            <option>YES JNE</option>
                                            <option>Go-Send Instant</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Alamat Pengiriman</div>
                                        <input type="text" name="field-name" value="" placeholder="Jelaskan alamat lengkap/RT/RW/Kel/Kec/No. Rumah/Gedung">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div class="titles">Produk <span>Total</span></div>
                                        </div>
                                        <ul class="qty">
                                            <li>Skin Nutrient™ Mix and Mask Variety Pack (12 pcs) <span><h5 class="hargabayartipis">Rp575.000 <del>Rp785.000</del></h5></span></li>
                                        </ul>
                                        <ul class="sub-total">
                                            <li class="titles">Subtotal <span class="count"><h5 class="hargabayartipis">Rp575.000</h5></span></li>
                                        </ul>
                                        </ul>
                                        <ul class="ongkir">
                                            <li class="titles">Ongkos Kirim <span class="count"><h5 class="hargabayartipis">Rp15.000</h5></span></li>
                                        </ul>
                                        <ul class="total">
                                            <li class="titles">Total <span class="count"><h5 class="hargabayar">Rp575.000</h5></span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="text-right"><a href="#" class="btn-solid btn melengkung">Bayar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


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