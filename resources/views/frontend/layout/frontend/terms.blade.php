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
                <p>Terima kasih atas pembelian Anda di https://skinnutrient.co.id. Kami sangat menghargai kualitas dan keaslian produk kami dan kami bekerja untuk menyediakan produk berkualitas yang akan membantu Anda mencapai hasil terbaik. Jika Anda tidak puas dengan pembelian Anda karena alasan apa pun, Anda dapat mengembalikan produk untuk pengembalian dana penuh sebesar harga pembelian Anda (tidak termasuk biaya pengiriman dan penanganan) dalam waktu 14 hari sejak tanggal pemesanan pada slip pengepakan. Untuk memastikan pengembalian dana tepat waktu, ikuti langkah-langkah di bawah ini.</p>
                <br>
                <p>Email: admin@skinnutrient.co.id dalam waktu 14 hari sejak tanggal slip pengepakan Anda sehingga kami dapat menyelidiki dan mengonfirmasi klaim Anda. Pengembalian tidak akan diproses tanpa kontak awal dari pelanggan kepada kami. Harap kembalikan produk dengan isi sebagai berikut:</p>
                <br>
                <p>Bagian produk yang tidak terpakai beserta semua kemasan aslinya.</p>
                <br>
                <p>Nomor kebijakan pengembalian akan diberikan kepada Anda melalui email.</p>
                <br>
                <p>Setelah itu, kirimkan ini ke:</p>
                <p>Jl. Pandanaran 1 No. 10, Pekunden, Semarang Tengah</p>
                <p>Kota Semarang - Jawa Tengah</p>
                <br>
                <p>Harap diperhatikan bahwa pengembalian tidak akan diterima dan pengembalian uang tidak diberikan jika kriteria di atas tidak terpenuhi.</p>
                <br>
                <p>Harap diperhatikan bahwa kami hanya memproses produk yang dibeli langsung dari situs web resmi kami, semua produk lain yang telah dibeli dari pengecer kami harus dikembalikan kepada mereka terlebih dahulu sebelum diproses oleh kami.</p>
                <br>
                <p>Untuk perlindungan Anda dan untuk memastikan pengiriman yang cepat, kami menyarankan Anda mengirim melalui JNE / Dakota. https://skinnutrient.co.id tidak bertanggung jawab atas paket yang hilang selama pengiriman.</p>
                <br>
                <p>https://skinnutrient.co.id akan memproses pengembalian dana Anda melalui metode pembelian asli dalam waktu 7-10 hari kerja setelah menerima barang yang dikembalikan.</p>
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