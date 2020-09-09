@extends('frontend.layout.index')
@section('content')


<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>customer's login</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">login verify</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- breadcrumb End -->

<br/>
<br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifikasi alamat email anda</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Email verifikasi baru saja kami kirim ke email anda
                        </div>
                    @endif

                    Sebelum Login kembali, tolong cek verifikasi link konfirmasi yang sudah kami kirim ke email anda. <br/>
                    Jika anda tidak menerima email tersebut, <br/>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Klik disini untuk kiriman email konfirmasi lain</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>

@endsection
