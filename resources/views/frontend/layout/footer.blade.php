
    <footer class="footer-light footer-classic">
        <!--<div class="light-layout upper-footer">
            <div class="container">
                <section class="small-section ">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subscribe">
                                <div>
                                    <h4>Subscribe.</h4>
                                    <p>Sign up to receive updates about our new product launches and sales!</p>
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
        </div>-->
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Tentang Kami</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="{{url('/aboutUs')}}">Tentang Kami</a></li>
                                    <li onclick="openSearch()">
                                        Pencarian Produk
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
                                    <!-- <li><a href="#">Stokis</a></li> -->
                                    <!-- <li><a href="{{url('/sitemap')}}">Peta</a></li> -->
                                    <!-- <li><a href="#">Press</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Layanan Customers</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="{{url('/faq')}}">FAQ s</a></li>
                                    <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                    <li><a href="{{url('/pengaduan')}}">Pengaduan</a></li>
                                    <!-- <li><a href="#">Shipping</a></li> -->
                                    <!-- <li><a href="">Return Policy</a></li> -->
                                    <!-- <li><a href="#">Terms of Service</a></li> -->
                                    <li><a href="">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>Informasi Perusahaan</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-building"></i>Australian Health Research & Development Group Pty Ltd </li>
                                    <li><i class="fa fa-map-marker"></i>Jl. Pandanaran 1 No.10 Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134</li>
                                    <li><i class="fa fa-phone"></i>Phone:  +62 812 1577 0449</li>
                                    <!-- <li><i class="fa fa-fax"></i>Fax:  +62 812 1577 0449</li> -->
                                    <li><i class="fa fa-envelope-o"></i>Email Us: customerservice@skinnutrient.co.id</li>
                                    <!--<li><i class="fa fa-fax"></i>Fax: 123456</li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>IKUTI KAMI</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="https://www.facebook.com/skinnutrientindonesia/" target="_blank">facebook</a></li>
                                    <li><a href="https://www.instagram.com/skinnutrient.id/" target="_blank">instagram</a></li>
                                    <li><a href="https://www.youtube.com/channel/UCU-TTrwGEmkL6KrzVkZ8a0A" target="_blank">youtube</a></li>
                                    <li><a href="https://www.linkedin.com/company/skin-nutrient/?originalSubdomain=au" target="_blank">linkedin</a></li>
                                    <li><a href="https://www.pinterest.com.au/skinnutrient/" target="_blank">pinterest</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p>Copyright &copy; Skin Nutrient <script>document.write(new Date().getFullYear())</script> All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{asset('backends/assets/images/icon/visa.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('backends/assets/images/icon/mastercard.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('backends/assets/images/icon/paypal.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('backends/assets/images/icon/american-express.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('backends/assets/images/icon/discover.png')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->