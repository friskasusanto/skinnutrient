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
                        <h2 class="judulhal">Kontak Kami</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Kontak</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="contact-page section-b-space">
        <div class="container">
            <div class="row section-b-space">
                <div class="col-lg-7 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.19175948485!2d110.41824351469006!3d-6.986679094952797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b107af6e0ef%3A0xc7084eca91e37497!2sSkin%20Nutrient%20Indonesia!5e0!3m2!1sid!2sid!4v1627276353980!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i>
                                    <h6>WhatsApp</h6>
                                </div>
                                <div class="media-body">
                                    <p>+62 812-1577-0449</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="ti-map-alt" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                </div>
                                <div class="media-body">
                                    <p>Jl. Pandanaran 1 No. 10, Pekunden, Semarang Tengah</p>
                                    <p>Kota Semarang - Jawa Tengah</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="ti-email" aria-hidden="true"></i>
                                    <h6>Email</h6>
                                </div>
                                <div class="media-body">
                                    <p>admin@skinnnutrient.co.id</p>
                                    <p>marketing@skinnutrient.co.id</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-12">
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">*Nama</label>
                                <input type="text" class="form-control" id="name" placeholder=""
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">*Telp</label>
                                <input type="text" class="form-control" id="review" placeholder=""
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">*WhatsApp</label>
                                <input type="text" class="form-control" id="review" placeholder=""
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">*Email</label>
                                <input type="text" class="form-control" id="email" placeholder="" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review">*Pesan Anda</label>
                                <textarea class="form-control" placeholder=""
                                    id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid melengkung" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </section>
    <!--Section ends-->


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- Dropdown hover -->
    @include('frontend.layout.dropdown')
    <!-- Dropdown hover end -->


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

</html>