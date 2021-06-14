@extends('frontend.layout.index', ['active' => 'pengaduan'])
@section('title', 'Pengaduan')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>pengaduan</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">pengaduan</li>
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
            <div class="row">
                <div class="col-sm-12">
                    <form  class="theme-form" novalidate="novalidate" method="POST" action= "{{url('/pengaduan')}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="name">Identitas Pelapor</label>
                                <input type="text" class="form-control" id="name" placeholder="nama" name="namaPelapor" 
                                    required="">
                                <input type="text" class="form-control" id="name" placeholder="alamat" name="alamatPelapor" 
                                    required="">
                                <input type="text" class="form-control" id="name" placeholder="email" name="emailPelapor" 
                                    required="">
                                <input type="text" class="form-control" id="name" placeholder="telepon" name="tlpPelapor" 
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
    <!--Section ends-->

@endsection