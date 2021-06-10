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