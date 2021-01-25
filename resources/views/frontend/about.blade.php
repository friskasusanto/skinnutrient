@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>tentang kami</h2>
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

    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-center p-left">
            <img src="{{asset('backends/assets/images/banner/about1.jpg')}}" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h3>Tentang Skin Nutrient™</h3>
                            <h5>Skin Nutrient adalah brand global yang didirikan pada tahun 2013, dikembangkan oleh AHRD, perusahaan manufaktur Australia yang sukses. Ide merek aslinya adalah memanfaatkan kekuatan nutrisi Australia yang unik dan mengeksplorasi dasar-dasar biologi kulit untuk membangun produk yang efektif, sehat dan bermanfaat untuk setiap jenis kulit. Kami percaya kunci untuk mencapai kulit yang sehat dan indah, terletak pada bahan-bahan Australia yang diturunkan secara alami yang digunakan dalam setiap formula yang kami buat - terlepas dari jenis kulit Anda.
                            Tujuan kami sederhana, untuk meningkatkan kulit secara gizi dengan meningkatkan kekebalan kulit, melawan radikal bebas dan mendukung fungsi pelindung alami kulit. Dengan melakukan ini, kami menciptakan produk yang memperlambat proses penuaan, menjaga kulit tetap terhidrasi dan kenyal, membantu mengaktifkan sistem perbaikan alami kulit dan melindunginya dari polusi dan bahan kimia yang berbahaya. Fakta bahwa kami menciptakan produk dari bahan-bahan Australia berkualitas tinggi, langka dan unik untuk memelihara setiap jenis kulit adalah kelebihan kita.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->
    
    <!-- section start -->
    <section class="section-b-space blog-page ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about2.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2013</h4>
                                        <p>Skin Nutrient ™ didirikan oleh direktur perusahaan manufaktur yang sukses yaitu Grup Penelitian & Pengembangan Kesehatan Australia Pty Ltd. Merek ini sekarang menjadi bagian dari grup ANPG yang berkembang pesat, yang 100% dimiliki oleh keluarga Australia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-right">
                                <div>
                                    <h4>2014</h4>
                                        <p>Para pendiri kami mulai mengeksplorasi bahan-bahan perawatan kulit yang unik di Australia dan dapat digunakan sebagai nutrisi untuk kulit. Produk perawatan kulit kami hanya menggunakan bahan mentah paling murni untuk memberikan perawatan paling murni pada kulit Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about3.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2015</h4>
                                        <p>Menjelang akhir tahun 2015, Goat's Milk Magic Touch ™ diluncurkan di China & Australia sebagai pelembab susu kambing pertama di dunia dengan protein EGF dan produk Skin Nutrient yang pertama. Ini masih menjadi salah satu produk terlaris kami hingga saat ini! Susu kambing merupakan sumber nutrisi yang sangat kaya. Satu cangkir kecil susu sehari dapat memenuhi 25% kebutuhan kalsium tubuh, juga memiliki keseimbangan pH yang sempurna untuk kulit dan mengandung asam laktat alami yang membantu mengangkat sel kulit mati dari permukaan kulit Anda dengan lembut. Belum lagi protein EGF yang mendorong produksi sel-sel baru dan peremajaan kulit yang tampak lebih muda. Formulasi kami yang mengandung susu kambing sangat cocok untuk mereka yang memiliki kulit tua dan kering.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about4.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about5.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2016</h4>
                                        <p>Produk Goat Milk mendapat penampilan baru dan segar, dan Goat’s Milk Moment juga telah dikeluarkan. 2016 juga melihat pengembangan dan peluncuran alternatif injeksi kosmetik alami kami, Produk Bee Venom. Dirancang untuk mempertegas dan mengangkat dan dibuat dengan ekstrak lebah murni, yang telah diperiksa dan diuji dengan hati-hati untuk memastikan bahwa elemen yang beracun dan kotor benar-benar telah dihapus dan dimurnikan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about6.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2017</h4>
                                        <p>Rangkaian produk hybrid anti-aging / hydrating kami, Hydramino, diluncurkan pada tahun 2017 menggunakan Amino Acid Complex sebagai bahan utamanya. Rangkaian ini terinspirasi oleh elemen air, murni dan emosional dan kunci untuk kelangsungan hidup segala sesuatu.
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about7.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <p>Sepanjang tahun 2017, tim inovasi produk Skin Nutrient melakukan serangkaian survei riset pasar untuk mengidentifikasi rutinitas rata-rata konsumen dalam menghapus riasan. Kami secara mengejutkan menemukan bahwa sebagian besar wanita tidak menghapus riasan dan langsung membersihkan wajah, menggunakan tisu penghapus riasan atau melewatkan proses secara keseluruhan. Masalahnya adalah, sebagian besar waktu orang tidak benar-benar menghapus riasan dengan benar. Menyebabkan pori-pori tersumbat dan mengakibatkan timbulnya jerawat, komedo dan noda. Umumnya menyebabkan kulit tampak kusam, tidak rata, dan tidak sehat!
                                    Jadi kami memutuskan untuk membuat pembersih, penghapus riasan, solusi pengelupasan kulit dan pencerah dalam satu produk. Memperkenalkan Perfect White Magic Cleanser.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about8.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about9.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2018</h4>
                                        <p>Udara dan angin mengandung 5% uap air. Angin adalah salah satu sumber energi yang paling murni. Berhembus di tanaman, memberikan aroma dari bahan-bahan botani. Menggunakan udara dan angin sebagai inspirasi kami, kami mulai mengembangkan Sheet Mask paling ringan dan paling harum di Australia. Dibuat dengan bahan selulosa biodegradable dan diresapi dengan serum yang intensif dan kaya nutrisi. Produk Botanica Face Mask kami yang terkenal lahir. 2018 juga merupakan tahun Skin Nutrient™ diluncurkan di kota Ho Chi Minh, Vietnam. Tim sangat senang bertemu dengan selebriti terpanas Vietnam termasuk lam giau khong kho, Đàm Vĩnh Hưng (Mr. Đàm), Hương Giang Idol vu hà, cəng nhiều khách mời nổi tiếng khác dan banyak tamu terkenal lainnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about10.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2019</h4>
                                        <p>Lebih dari 14.000 konsumen rumah tangga, yang disurvei sebagai bagian dari survei konsumen independen terbesar di Australia atas produk-produk baru dan inovatif, memberikan penghargaan kepada tim ahli herbal dan ahli kimia terkemuka Australia, Product of the Year 2019. Pencapaian luar biasa ini memulai peluncuran kami ke toko ritel utama di Australia, termasuk ; Terry White Chemmart, Priceline, Apotik Harga Bagus, Go Vita dan banyak lagi.
                                        </p>
                                        <p>Bersamaan dengan memenangkan penghargaan bergengsi dan meluncurkan rangkaian produk yang sama sekali baru, tim kami juga menghadiri beberapa pameran dagang di seluruh Asia, yang selanjutnya mengukuhkan Skin Nutrient ™ sebagai Merek Australia terkemuka di pasar Asia Pasifik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about11.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <p>2019 juga merupakan tahun dimana Skin Nutrient™ mengembangkan dan meluncurkan Kakadu Plum Illuminating Cream. The Kakadu Plum (Terminalia ferdinandiana) adalah makanan super asli Australia, hanya ditemukan di daerah terpencil di Northern Territory. Skin Nutrient Kakadu Plum Illuminating Cream berfungsi untuk melembabkan, menerangi, dan merawat kulit. Krim ini mengandung Kakadu Plum asli Australia, yang merupakan sumber vitamin C. Kulit akan lebih bercahaya dan terlindungi dari polusi dan stres sepanjang hari.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about12.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about13.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about14.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2020</h4>
                                        <p>Selama musim panas, orbit Bumi membawa Australia lebih dekat ke matahari, menghasilkan tambahan intensitas UV matahari sebesar 7%. Ditambah dengan kondisi atmosfer kami yang lebih jernih, ini berarti bahwa orang Australia terpapar sinar UV hingga 15% lebih banyak. Bisa dibilang, Australia adalah rumah bagi beberapa produk tabir surya terbaik di dunia. Faktanya, kami dianugerahi Product of the Year 2020 untuk Sun Barrier Tone-Up Whitening Sun Screen dan Red Wine Refining and Exfoliating Mask kami. Kami juga dianugerahi tim pemasaran terbaik tahun 2020.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about15.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <p>Sepanjang pandemi COVID-19, kami menyuplai lebih dari 2 juta unit alkohol 70% ke sekolah, perusahaan, pemerintah, dan rumah. Kemitraan kami dengan Woolworths, memungkinkan konsumen sehari-hari mengakses hand sanitiser ketika ada gangguan besar dalam rantai pasokan. Bagi mereka yang telah memilih Skin Nutrient sebagai pemasok hand sanitiser pilihan mereka, kami ingin mengucapkan terima kasih dengan hangat atas dukungan Anda & menyambut Anda di klub Skin Nutrient. Hand sanitiser telah dengan cepat menjadi bahan pokok baru dalam rutinitas sehari-hari kita. Sama pentingnya dengan menyikat gigi. Tidak seperti produk lain yang baru-baru ini bergegas ke pasar, untuk memastikan keamanan hand sanitiser Skin Nutrient pelanggan kami telah diuji secara klinis dan terbukti menghilangkan 99,99% kuman. Formula unik kami mengandung 70% ethyl alkohol dan bahan pelembab untuk menghindari tangan merah, iritasi, dan sakit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->

    <!-- about section start -->
    <!-- <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-section"><img src="{{asset('backends/assets/images/banner/about16.jpg')}}"
                            class="img-fluid blur-up lazyload" alt=""></div>
                </div>
                <div class="col-sm-12">
                    <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                    </h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    </p>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                        demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                        foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail
                        in their duty through weakness of will, which is the same as saying through shrinking from toil
                        and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and
                        owing to the claims of duty or the obligations of business it will frequently occur that
                        pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in
                        these matters to this principle of selection: he rejects pleasures to secure other greater
                        pleasures, or else he endures pains to avoid worse pains.</p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- about section end -->

@endsection