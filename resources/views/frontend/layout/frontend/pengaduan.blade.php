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
                    <h2 class="judulhal">Pengaduan</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- about section start -->
<section class="contact-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form  class="theme-form" novalidate="novalidate" method="POST" action= "{{url('/pengaduan')}}" enctype="multipart/form-data" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="name">Identitas Pelapor</label>
                            <input type="text" class="form-control" id="name" placeholder="nama" name="namaPelapor" required="">
                            <input type="text" class="form-control" id="name" placeholder="alamat" name="alamatPelapor"  required="">
                            <input type="text" class="form-control" id="name" placeholder="email" name="emailPelapor"  required="">
                            <input type="text" class="form-control" id="name" placeholder="telepon" name="tlpPelapor" required="" >
                        </div>
                        <div class="col-md-6">
                        <label for="name">*Nama</label>
                        <input type="text" class="form-control" id="name" placeholder=""
                            required="">
                            </div>
                        <div class="col-md-12">
                            <label for="email">Identitas Pasien</label>
                            <input type="text" class="form-control" id="last-name" placeholder="nama pasien" name="namaPasien" required="">
                            <input type="text" class="form-control" id="last-name" placeholder="jenis kelamin" name="kelaminPasien" required="">
                            <input type="text" class="form-control" id="last-name" placeholder="umur" name="umurPasien" required="">
                            <input type="text" class="form-control" id="last-name" placeholder="alamat" name="alamatPasien" required="">
                            <input type="text" class="form-control" id="last-name" placeholder="email" name="emailPasien" required="">
                            <input type="text" class="form-control" id="last-name" placeholder="telepon" name="tlpPasien" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="review">Kasus yang di Laporkan</label>
                            <input type="text" class="form-control" id="review" placeholder="nama product" name="namaProduct" required="">
                            <input type="text" class="form-control" id="review" placeholder="nomor notifikasi" name="notifikasi" required="">
                            <input type="text" class="form-control" id="review" placeholder="ukuran kemasan" name="kemasan" required="">
                            <input type="text" class="form-control" id="review" placeholder="nomor batch" name="batch" required="">
                            <label style="padding: 30px">Krim
                                <input type="checkbox" class="form-control" id="review" name="krim" required="">
                            </label>
                            <label style="padding: 30px">Gel
                                <input type="checkbox" class="form-control" id="review" name="gel" required="">
                            </label>
                            <label style="padding: 30px">Cair
                                <input type="checkbox" class="form-control" id="review" name="cair" required="">
                            </label>
                            <label style="padding: 30px">Cairan Kental
                                <input type="checkbox" class="form-control" id="review" name="kental" required="">
                            </label>
                            <label style="padding: 30px">Aerosol
                                <input type="checkbox" class="form-control" id="review" name="aerosol" required="">
                            </label>
                            <label style="padding: 30px">Padat
                                <input type="checkbox" class="form-control" id="review" name="padat" required="">
                            </label>
                            <label style="padding: 50px">Lain-lain (sebutkan) ......
                                <input type="text" class="form-control" id="review" name="lain" required="">
                            </label>
                            <input type="text" class="form-control" id="review" placeholder="produsen/importir" name="produsen" required="">
                            <input type="text" class="form-control" id="review" placeholder="distributor" name="distributor" required="">
                            <label for="review"> Tangal Kejadian
                                <input type="date" class="form-control" id="review" placeholder="tanggal kejadian (dd/mm/yyy)" name="tgl" required="">
                            </label>
                            <input type="text" class="form-control" id="review" placeholder="efek yang terjadi" name="efek" required="">
                            <label>Foto Kemasan
                                <input type="file" class="form-control" id="review" placeholder="" name="foto" required="">
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label for="review">Tindak Lanjut Sementara Yang Telah Dilakukan</label>
                            <textarea class="form-control" placeholder="" name="tindakan" 
                                id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-solid" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
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