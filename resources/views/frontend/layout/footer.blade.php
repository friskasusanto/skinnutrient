<footer class="footer-light">
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4 class="footes">Tentang Kami</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="{{url('/aboutUs')}}">Tentang Kami</a></li>
                                <!-- <li><a href="#">Pencarian</a></li> -->
                                <!-- <li><a href="#">Stockists</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Press</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4 class="footes">Customer Care</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="{{url('/faq')}}">FAQ's</a></li>
                                <li><a href="{{url('/contact')}}">Kontak Kami</a></li>
                                <li><a href="{{url('/pengiriman')}}">Pengiriman</a></li>
                                <!-- <li><a href="">Return Policy</a></li> -->
                                <li><a href="{{url('/terms')}}">Terms of Service</a></li>
                                <li><a href="{{url('/privacyPolicy')}}">Privacy Policy</a></li>
                                <li><a href="{{url('/pengaduan')}}">Pengaduan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4 class="footes">Ikuti Kami</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> &nbsp;&nbsp;Facebook</a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> &nbsp;&nbsp;Instagram</a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> &nbsp;&nbsp;Youtube</a></li>
                                <li><a href="#"><i class="ti-linkedin" aria-hidden="true"></i> &nbsp;&nbsp;Linkedin</a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> &nbsp;&nbsp;Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4 class="subscribefootes">Subscribe.</h4>
                            <p class="psubscribe">Untuk menerima informasi, produk terbaru dan promo kami.</p>
                        </div>
                        <div class="footer-contant">
                            <form novalidate="novalidate" method="POST" action= "{{url('/subscribe')}}" enctype="multipart/form-data" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group subrek">
                                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Email Anda" name="email">
                                    <button type="submit" class="btn btn-solid buttonsubrek">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-title footer-mobile-title">
                        <h4 class="footes">about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="Skin Nutrient&trade; Indonesia" style="width: 50%;"></div>
                        <p>Skin Nutrient™ Pemenang Product of The Year 2019 dan 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p style="font-size: 12px;">Copyright&copy; PT. CPLUSco ASRI JAYA - <?php echo date("Y"); ?> All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="{{asset('frontend/assets/img/logo/mastercard.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend/assets/img/logo/atm_bersama.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend/assets/img/logo/visa.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend/assets/img/logo/GoPay.png')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>