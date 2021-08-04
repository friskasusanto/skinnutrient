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
                    <h2 class="judulhal">Pengiriman</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengiriman</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- about section start -->
<section class="about-page section-b-space">
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-12">
                <div class="banner-section"><img src="{{asset('frontend/assets/images/about/vendor.jpg')}}"
                        class="img-fluid blur-up lazyload" alt=""></div>
            </div>-->
            <div class="col-sm-12">
                <h4>Pengiriman seluruh Indonesia</h4>
                <p>Tarif pengiriman dihitung per wilayah.</p>
                <br>
                <p>Pesanan terlacak: 2-7 hari kerja.</p>
                <br>
                <h4>Mohon dicatat:</h4>
                <p>Pelacakan akan disediakan untuk semua pesanan, sehingga Anda dapat melihat dimana pembelian Anda setiap saat.</p>
                <p>Skin Nutrient Indonesia dalam keadaan apa pun, tidak akan bertanggung jawab atas keterlambatan pengiriman dan kerusakan terkait, karena kejadian diluar kendali sewajarnya, termasuk tindakan musuh publik, tindakan pemerintah federal, kebakaran, banjir, pemogokan.</p>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->


<!-- footer start -->
@include('frontend.layout.footer')

<!-- footer end -->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->


<!-- Dropdown hover -->
@include('frontend.layout.dropdown')

<!-- Dropdown hover end -->


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