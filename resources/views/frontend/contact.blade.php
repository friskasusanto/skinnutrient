@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>contact</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">contact</li>
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
                    <iframe src="https://www.google.com/maps/place/PT.+CPLUSco+ASRI+JAYA/@-6.9866791,110.4182435,17z/data=!3m1!4b1!4m5!3m4!1s0x2e708b59097650fd:0x8ea0ee2b032c5a69!8m2!3d-6.9866771!4d110.4204014" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon"><img src="../assets/images/icon/phone.png"
                                        alt="Generic placeholder image">
                                    <h6>Kontak Kami</h6>
                                </div>
                                <div class="media-body">
                                    <p>+62 812-1577-0449</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                </div>
                                <div class="media-body">
                                    <p>PT. CPLUSco ASRI JAYA</p>
                                    <p>Jl. Pandanaran 1 No. 10 Pekunden, Semarang Tengah</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><img src="../assets/images/icon/email.png"
                                        alt="Generic placeholder image">
                                    <h6>E-mail</h6>
                                </div>
                                <div class="media-body">
                                    <p>marketing@skinnutrient.co.id</p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="fa fa-clock" aria-hidden="true"></i>
                                    <h6>Jam Operasional</h6>
                                </div>
                                <div class="media-body">
                                    <p>Setiap Hari : 08.00 - 17.30 WIB</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12">
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Nama Depan</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama Depan"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Nama Belakang</label>
                                <input type="text" class="form-control" id="last-name" placeholder="Nama Belakang" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Handphone</label>
                                <input type="text" class="form-control" id="review" placeholder="Nomor Handphone"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="review">Pesan</label>
                                <textarea class="form-control" placeholder="Pesan Anda"
                                    id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </section>
    <!--Section ends-->

@endsection