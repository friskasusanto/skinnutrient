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
                        <h2 class="judulhal">Halaman Keranjang</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Keranjang Belanja</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
        @if (count($cart) != 0)
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <!--<thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">action</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>-->
                        <tbody>
                        <?php
                            $cart = Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content();
                            $total = Cart::priceTotal();
                            $discount = Cart::discount();

                            // dd($discount);
                        ?>
                        @foreach ($cart as $c)
                            <tr>
                                <td>
                                    <a href="#"><img src="{{url('product/'.$c->image)}}" alt=""></a>
                                </td>
                                <td>
                                    <a href="#">{{$c->name}}</a>
                                </td>
                                <td>
                                    
                                    @if ($c->discount != null || $c->discount != 0)
                                        <h2 class="td-color harga">Rp. {{number_format($c->price - ($c->discount /100 * $c->price), 0, ',', '.')}}<del>Rp. {{number_format($c->price, 0, ',', '.')}}</del></h2>
                                    @else 
                                        <h2 class="td-color harga">Rp. {{number_format($c->price, 0, ',', '.')}}</h2>
                                    @endif
                                </td>
                                <td>
                                    <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/session/updateQuantity', $c->id)}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity" class="form-control input-number"
                                                    value="{{$c->qty}}">
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-solid melengkung btn-sm" style="font-size: 8px; padding: 4px 10px;">ubah</button>
                                    </form>
                                </td>
                                <td><a href="{{url('/session/delete', $c->id)}}" class="icon"><i class="ti-close"></i></a></td>
                                <td>
                                    @if ($c->discount != null)
                                        <h2 class="td-color harga">
                                            Rp. {{number_format(($c->price - ($c->discount /100 * $c->price)*$c->qty), 0, ',', '.')}}
                                        </h2>
                                    @else 
                                        <h2 class="td-color harga">
                                            Rp. {{number_format(($c->price * $c->qty), 0, ',', '.')}}
                                        </h2>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                            <tr>
                                <td>Total :</td>
                                <td>
                                    <h6>Rp. {{$total}}</h6>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="{{url('/')}}" class="btn btn-solid melengkung">Lanjut Belanja</a></div>
                <div class="col-6"><a href="{{url('/session/checkout')}}" class="btn btn-solid melengkung">Bayar</a></div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <tbody>
                            <center><tr>~ keranjang kosong ~</tr></center>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-12">
                    <center>
                        <a href="index.php" class="btn btn-solid melengkung">Lanjut Belanja</a>
                    </center>
                </div>
            </div>
        @endif
        </div>
    </section>
    <!--section end-->


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

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>


    <script type="text/javascript">
        function convert_quantity() {
            var quantity = $('#quantity').val();

            var total = quantity;
        }
    </script> 
</body>

</html>