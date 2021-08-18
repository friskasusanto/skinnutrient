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
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2 class="judulhal">Halaman Pembayaran</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bayar</li>
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
                                    <h3 class="judultengah">Pembayaran</h3>
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
                                        <div class="field-label" for="fname">Nama</div>

                                        <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label" for="phone">Nomor Telp</div>
                                        <input type="number" name="phone" value="" placeholder="" required class="form-control" id="phone">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label" for="email">Email</div>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" placeholder="">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Tipe Pengiriman</div>
                                        <select name="tipe" id="tipe">
                                          <option>-- pilih --</option>
                                          <option>-- JNE --</option>
                                        </select>
                                        <input type="hidden" name="tipe_name" id="tipe_name">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Alamat</div>
                                        <textarea cols="50" rows="20" name="alamat" placeholder="Jelaskan alamat lengkap/RT/RW/Kel/Kec/No. Rumah/Gedung"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <?php
                                $cart = Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content();
                                $total = Cart::priceTotal(0);
                                $discount = Cart::discount();

                                // dd($discount);
                            ?>
                            <input type="hidden" name="total" value="{{$total}}">
                            
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <ul class="qty">
                                        @foreach ($cart as $c)
                                            @if ($c->discount != null)
                                            <li>
                                                {{ $c->name }} ( Rp. {{number_format(($c->price) - (($c->discount / 100) * $c->price), 0, ',', '.')}} * {{ $c->qty }} ) 
                                                <span>
                                                    Rp. {{number_format(($c->price * $c->qty), 0, ',', '.')}}
                                                </span>
                                            </li>
                                            @else
                                            <li>
                                                {{ $c->name }} ( Rp. {{number_format($c->price, 0, ',', '.')}} × {{ $c->qty }} ) 
                                                <span>
                                                    Rp. {{number_format(($c->price * $c->qty), 0, ',', '.')}}
                                                </span>
                                            </li>
                                            @endif
                                        @endforeach
                                        </ul>
                                        <ul class="sub-total">
                                            <li class="titles">Subtotal <span class="count"><h5 class="hargabayartipis">Rp. {{str_replace(",",".",$total)}}</h5></span></li>
                                        </ul>
                                        <ul class="ongkir">
                                          <li class="titles">Ongkir<span class="count" id="tampilongkir"><h5 class="hargabayartipis">Rp. 0</h5></span></li>
                                        </ul>
                                        <ul class="total">
                                            <li class="titles">Total <span class="count" id="tampiltotal">Rp. {{str_replace(",",".",$total)}}</span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="text-right">
                                            <button type="submit" class="btn-solid btn melengkung">Bayar</button>
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


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- Dropdown hover -->
    @include('frontend.layout.dropdown')
    <!-- Dropdown hover end -->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        
        var url_kota = "{{ route("ongkir.kota") }}";
        var url_total_kota = "{{ route("ongkir.total") }}";

        $('#provinsi').on('change', function() {
          var provinsiId = $(this).val();
          var provinsiName = $(this).find('option:selected').text();

          $('#provinsi_name').val(provinsiName);

          $.get( url_kota+"?provinsi="+provinsiId, function( data ) {

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
          $.get( url_total_kota+"?kota="+kotaId, function( data ) {

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
</body>

</html>