@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

@php
    $provinsi = array (
      0 => 
      array (
        'province_id' => '1',
        'province' => 'Bali',
      ),
      1 => 
      array (
        'province_id' => '2',
        'province' => 'Bangka Belitung',
      ),
      2 => 
      array (
        'province_id' => '3',
        'province' => 'Banten',
      ),
      3 => 
      array (
        'province_id' => '4',
        'province' => 'Bengkulu',
      ),
      4 => 
      array (
        'province_id' => '5',
        'province' => 'DI Yogyakarta',
      ),
      5 => 
      array (
        'province_id' => '6',
        'province' => 'DKI Jakarta',
      ),
      6 => 
      array (
        'province_id' => '7',
        'province' => 'Gorontalo',
      ),
      7 => 
      array (
        'province_id' => '8',
        'province' => 'Jambi',
      ),
      8 => 
      array (
        'province_id' => '9',
        'province' => 'Jawa Barat',
      ),
      9 => 
      array (
        'province_id' => '10',
        'province' => 'Jawa Tengah',
      ),
      10 => 
      array (
        'province_id' => '11',
        'province' => 'Jawa Timur',
      ),
      11 => 
      array (
        'province_id' => '12',
        'province' => 'Kalimantan Barat',
      ),
      12 => 
      array (
        'province_id' => '13',
        'province' => 'Kalimantan Selatan',
      ),
      13 => 
      array (
        'province_id' => '14',
        'province' => 'Kalimantan Tengah',
      ),
      14 => 
      array (
        'province_id' => '15',
        'province' => 'Kalimantan Timur',
      ),
      15 => 
      array (
        'province_id' => '16',
        'province' => 'Kalimantan Utara',
      ),
      16 => 
      array (
        'province_id' => '17',
        'province' => 'Kepulauan Riau',
      ),
      17 => 
      array (
        'province_id' => '18',
        'province' => 'Lampung',
      ),
      18 => 
      array (
        'province_id' => '19',
        'province' => 'Maluku',
      ),
      19 => 
      array (
        'province_id' => '20',
        'province' => 'Maluku Utara',
      ),
      20 => 
      array (
        'province_id' => '21',
        'province' => 'Nanggroe Aceh Darussalam (NAD)',
      ),
      21 => 
      array (
        'province_id' => '22',
        'province' => 'Nusa Tenggara Barat (NTB)',
      ),
      22 => 
      array (
        'province_id' => '23',
        'province' => 'Nusa Tenggara Timur (NTT)',
      ),
      23 => 
      array (
        'province_id' => '24',
        'province' => 'Papua',
      ),
      24 => 
      array (
        'province_id' => '25',
        'province' => 'Papua Barat',
      ),
      25 => 
      array (
        'province_id' => '26',
        'province' => 'Riau',
      ),
      26 => 
      array (
        'province_id' => '27',
        'province' => 'Sulawesi Barat',
      ),
      27 => 
      array (
        'province_id' => '28',
        'province' => 'Sulawesi Selatan',
      ),
      28 => 
      array (
        'province_id' => '29',
        'province' => 'Sulawesi Tengah',
      ),
      29 => 
      array (
        'province_id' => '30',
        'province' => 'Sulawesi Tenggara',
      ),
      30 => 
      array (
        'province_id' => '31',
        'province' => 'Sulawesi Utara',
      ),
      31 => 
      array (
        'province_id' => '32',
        'province' => 'Sumatera Barat',
      ),
      32 => 
      array (
        'province_id' => '33',
        'province' => 'Sumatera Selatan',
      ),
      33 => 
      array (
        'province_id' => '34',
        'province' => 'Sumatera Utara',
      ),
);
@endphp
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
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Provinsi</div>
                                        <select name="provinsi" id="provinsi">
                                            <option>-- pilih --</option>
                                            @foreach ($provinsi as $pro)
                                                <option value="{{ $pro['province_id'] }}">{{ $pro['province'] }}</option>
                                            @endforeach

                                        </select>
                                        <input type="hidden" name="provinsi_name" id="provinsi_name">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Kota</div>
                                        <select name="kota" id="kota">
                                          <option>-- pilih --</option>
                                        </select>
                                        <input type="hidden" name="kota_name" id="kota_name">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Tipe Pengiriman</div>
                                        <select name="tipe" id="tipe">
                                          <option>-- pilih --</option>
                                        </select>
                                        <input type="hidden" name="tipe_name" id="tipe_name">
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
                                            <li>{{ $c->product->name }} ( Rp. {{number_format($c->product->price, 0, ',', '.')}} × {{ $c->total_item }} ) <span>Rp. {{number_format($c->total_amount, 0, ',', '.')}}</span></li>
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
                                        <ul class="sub-total">
                                          <li>Ongkir<span class="count" id="tampilongkir">Rp. 0</span></li>
                                        </ul>
                                        <ul class="total">
                                            <li>Total <span class="count" id="tampiltotal">Rp. {{number_format($total, 0, ',', '.')}}</span></li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        
        $('#provinsi').on('change', function() {
          var provinsiId = $(this).val();
          var provinsiName = $(this).find('option:selected').text();

          $('#provinsi_name').val(provinsiName);

          $.get( "http://127.0.0.1:8000/api/ongkir/kota?provinsi="+provinsiId, function( data ) {

            $('#kota').empty().append('<option>-- pilih --</option>');

            var kota = data.kota;
            kota.forEach(element => {
              $('#kota').append(`<option value="${element.city_id}">
                                       ${element.city_name} ${element.postal_code}
                                  </option>`);
            });

          });

        });

        $('#kota').on('change', function() {
          var kotaId = $(this).val();
          var kotaName = $(this).find('option:selected').text();

          $('#kota_name').val(kotaName);
          $.get( "http://127.0.0.1:8000/api/ongkir/total?kota="+kotaId, function( data ) {

              $('#tipe').empty().append('<option>-- pilih --</option>');

              var jenis = data.jenis;
              
              jenis.forEach(element => {
                // console.log(element.cost[0].value);
              $('#tipe').append(`<option value="${element.cost[0].value}">
                    ${element.service}
                </option>`);
              });

          });


        });

        var total = $('#tampiltotal').text();
          total = total.slice(4);
          total = total.replace(".","");
          
        $('#tipe').on('change', function() {
          var ongkos = $(this).val();
          var tipeName = $(this).find('option:selected').text();

          $('#tipe_name').val(tipeName);
          
          const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
          })

          var formatongkos = formatter.format(ongkos);
          $('#tampilongkir').text(formatongkos);

          
          var itotal = parseInt(total);
          var iongkir = parseInt(ongkos);
          var finaltotal = itotal + iongkir;

          var formattotal = formatter.format(finaltotal);
          $('#tampiltotal').text(formattotal);
        });

      });
    </script>
@endsection
