@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Check-out</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form novalidate="novalidate" method="POST" action= "{{ route('checkoutstore') }}" enctype="multipart/form-data" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Billing Details</h3>
                                </div>
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Nama Depan</div>
                                        <input type="text" name="nama" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Nama Belakang</div>
                                        <input type="text" name="last_name" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Nomor Hp</div>
                                        <input type="text" name="phone" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Alamat</div>
                                        <textarea cols="50" rows="20" name="alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="total" value="{{$total}}">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <ul class="qty">
                                        @foreach ($cart as $c)
                                            @if ($c->product->discount != null)
                                            <li>{{ $c->product->name }} ( Rp. {{number_format(($c->product->price) - (($c->product->discount / 100) * $c->product->price), 0, ',', '.')}} × {{ $c->jumlah }} ) <span>Rp. {{number_format($c->total_amount, 0, ',', '.')}}</span></li>
                                            @else
                                            <li>{{ $c->product->name }} ( Rp. {{number_format($c->product->price, 0, ',', '.')}} × {{ $c->jumlah }} ) <span>Rp. {{number_format($c->total_amount, 0, ',', '.')}}</span></li>
                                            @endif
                                        @endforeach
                                        </ul>
                                        <ul class="sub-total">
                                            <li>Subtotal <span class="count">Rp. {{number_format($total, 0, ',', '.')}}</span></li>
                                            <!-- <li>Shipping
                                                <div class="shipping">
                                                    <div class="shopping-option">
                                                        <input type="checkbox" name="free-shipping" id="free-shipping">
                                                        <label for="free-shipping">Free Shipping</label>
                                                    </div>
                                                    <div class="shopping-option">
                                                        <input type="checkbox" name="local-pickup" id="local-pickup">
                                                        <label for="local-pickup">Local Pickup</label>
                                                    </div>
                                                </div>
                                            </li> -->
                                        </ul>
                                        <ul class="total">
                                            <li>Total <span class="count">Rp. {{number_format($total, 0, ',', '.')}}</span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                           
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn-solid btn" >Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
