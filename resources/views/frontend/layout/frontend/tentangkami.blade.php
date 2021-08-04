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
                        <h2 class="judulhal">Tentang Kami</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- about section start -->
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-section"><img src="{{asset('frontend/assets/img/banner/tentang.jpg')}}"
                            class="img-fluid blur-up lazyload" alt=""></div>
                </div>
                <div class="col-sm-12">
                    <h4>Tentang Kami
                    </h4>
                    <p>Skin Nutrient™ adalah merek global yang didirikan pada tahun 2013, dikembangkan oleh perusahaan manufaktur Australia yang sukses, AHRD. Ide merek asli adalah untuk memanfaatkan kekuatan nutrisi Australia yang unik dan mengeksplorasi dasar-dasar biologi kulit untuk membangun produk yang efektif, sehat dan bermanfaat untuk setiap jenis kulit.
                    </p><br>
                    <p>Kami percaya kunci untuk mendapatkan kulit yang sehat dan cantik, terletak pada bahan-bahan alami Australia yang digunakan dalam setiap formula yang kami buat - terlepas dari jenis kulit Anda. Tujuan kami sederhana, untuk meningkatkan nutrisi kulit dengan meningkatkan kekebalan kulit, melawan radikal bebas dan mendukung fungsi penghalang alami. Dengan melakukan ini, kami menciptakan produk yang memperlambat proses penuaan, menjaga kulit terhidrasi dan kenyal, membantu mengaktifkan sistem perbaikan alami kulit sendiri dan melindunginya dari polusi dan bahan kimia keras. Fakta bahwa kami menciptakan produk dari bahan Australia berkualitas tinggi, langka, dan unik untuk menutrisi setiap jenis kulit - adalah keunggulan kami.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- about section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title3">
                        <h2 class="title-inner3 col-lg-12 col-sm-8 fonttengah"><u>Sejarah Kami</u></h2>
                    </div>
                    <div class="col-lg-10 offset-lg-1 about-text mb-5">
                        <h4 class="tengah">Kisah merek kami, terinspirasi dan dikategorikanmenjadi 6 ekstrak biologis Australia yang terkenal.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
    

    <!-- section start -->
    <section class="section-b-space blog-page ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('frontend/assets/img/tentangkami/about1.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <a href="#">
                                        <h4 class="tahuntentang">2013</h4>
                                    </a>
                                    <p>Skin Nutrient™ didirikan oleh direktur perusahaan manufaktur yang sukses, Australia Health Research & Development Group Pty Ltd. Merek ini sekarang menjadi bagian dari grup ANPG yang berkembang pesat, yang 100% dimiliki oleh keluarga Australia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media tentangtengah">
                        <div class="col-xl-12">
                            <div class="blog-right">
                                <div>
                                    <a href="#">
                                        <h4 class="tahuntentang">2014</h4>
                                    </a>
                                    <p class="tengah">Para pendiri kami mulai mengeksplorasi bahan perawatan kulit, yang unik di Australia dan dapat digunakan sebagai nutrisi untuk kulit. Produk perawatan kulit kami hanya menggunakan bahan baku paling murni untuk memberikan perawatan paling murni pada kulit Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media tentangtengah">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('frontend/assets/img/tentangkami/about3.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <a href="#">
                                        <h4 class="tahuntentang">2015</h4>
                                    </a>
                                    <p>Menjelang akhir tahun 2015, Goat's Milk Magic Touch™ diluncurkan di China & Australia sebagai pelembab tetes susu kambing pertama di dunia dengan protein EGF dan produk pertama Skin Nutrient. Ini masih salah satu produk terlaris kami hingga saat ini!</p>
                                    <br>
                                    <p>Susu kambing merupakan sumber nutrisi yang sangat kaya. Satu cangkir kecil susu sehari dapat memenuhi 25% kebutuhan kalsium tubuh, juga memiliki pH seimbang yang sempurna untuk kulit dan mengandung asam laktat alami yang membantu mengangkat sel kulit mati dari permukaan kulit dengan lembut. Belum lagi protein EGF yang mendorong produksi sel-sel baru dan peremajaan kulit yang tampak lebih muda. Formulasi kami yang mengandung susu kambing sangat cocok untuk mereka yang memiliki kulit tua dan kering.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media tentangtengah">
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <a href="#">
                                        <h4 class="tahuntentang">2016</h4>
                                    </a>
                                    <p>Rangkaian Susu Kambing mendapatkan tampilan baru dan segar dan Momen Ajaib Susu Kambing diluncurkan.</p>
                                    <br>
                                    <p>2016 juga melihat pengembangan dan peluncuran alternatif injeksi kosmetik alami kami, rangkaian Bee Venom. Dirancang untuk mengencangkan dan mengangkat dan dibuat dengan racun lebah murni, yang telah diperiksa dan diuji dengan cermat untuk memastikan bahwa unsur racun dan kotoran beracun benar-benar dihilangkan dan dimurnikan.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('frontend/assets/img/tentangkami/about4.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('frontend/assets/img/tentangkami/about5.jpg')}}"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <a href="#">
                                        <h4 class="tahuntentang">2017</h4>
                                    </a>
                                    <p>Rangkaian anti-penuaan/penghidrasi hibrida kami, Hydramino, diluncurkan pada tahun 2017 menggunakan Kompleks Asam Amino sebagai bahan utama. Rentang ini terinspirasi oleh elemen air, murni dan emosional dan kunci untuk kelangsungan hidup segala sesuatu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media tentangtengah">
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <p>Sepanjang tahun 2017, tim inovasi produk Skin Nutrient melakukan serangkaian survei riset pasar untuk mengidentifikasi rata-rata konsumen rutin menghapus riasan. Kami secara mengejutkan menemukan sebagian besar wanita melewatkan menghapus riasan mereka dan langsung membersihkan wajah mereka, menggunakan tisu penghapus riasan atau melewatkan proses secara keseluruhan. Masalahnya adalah, sebagian besar waktu orang tidak benar-benar menghapus riasan dengan benar. Menyebabkan pori-pori mereka menjadi tersumbat dan mengakibatkan jerawat, komedo dan noda. Umumnya menyebabkan kulit tampak kusam, tambal sulam dan tak bernyawa!</p>
                                    <br>
                                    <p>Jadi kami memutuskan untuk membuat solusi pembersih, penghapus riasan, pengelupasan, dan pencerah dalam satu produk. Memperkenalkan Perfect White Magic Cleanser.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('frontend/assets/img/tentangkami/about6.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- footer section start -->
    @include('frontend.layout.footer')
    <!-- footer section end -->


    <!-- theme setting -->
    @include('frontend.layout.dropdown')
    <!-- theme setting -->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- menu js-->
    <script type="text/javascript" src="{{asset('frontend/assets/js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('frontend/assets/js/lazysizes.min.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>

    <!-- slick js-->
    <script type="text/javascript" src="{{asset('frontend/assets/js/slick.js')}}"></script>

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
    <script src="{{asset('frontend/ps://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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