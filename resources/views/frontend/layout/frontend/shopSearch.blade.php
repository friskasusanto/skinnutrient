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
                        <h2 class="judulhal">Halaman Pencarian</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cari</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title3">
                                        <h2 class="title-inner3 col-lg-12 col-sm-8 fonttengahs"><u>Produk pencarianmu</u></h2>
                                    </div>
                                    <div class="collection-product-wrapper">
                                     @if(count($product) != 0)
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                            @foreach($product as $s)
                                            <?php
                                                $back = App\Model\ProductGambar::where('product_id', $s->product_id)->orderBy('ref_number', 'desc')->first();
                                                $backs = App\Model\ProductGambar::where('product_id', $s->product_id)->get();
                                            ?>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <img alt="" src="{{url('product/'.$s->product->image)}}" class="img-fluid blur-up lazyload bg-img">
                                                            </div>
                                                        @if (count($backs)!= 0)
                                                            <div class="back">
                                                                <img alt="" src="{{url('product/'.$back->image)}}" class="img-fluid blur-up lazyload bg-img">
                                                            </div>
                                                        @else
                                                            <div class="back">
                                                                <img alt="" src="{{url('product/'.$s->product->image)}}" class="img-fluid blur-up lazyload bg-img">
                                                            </div>
                                                        @endif
                                                            <div class="cart-detail">
                                                                <!-- <a href="{{url('/session/wishlist')}}" title="Add to Wishlist">
                                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                                </a> -->
                                                                <a href="#" data-toggle="modal" data-target="#modalDetail{{$s->id}}" title="Quick View">
                                                                    <i class="ti-search" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="{{url('/detailProduct', $s->slug)}}">
                                                                <h6 class="tekshitam">{{$s->name}}</h6>
                                                            </a>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            @if ($s->product->comming_soon == 1)
                                                               <h5 class="harga">
                                                                    Coming Soon
                                                                </h5>
                                                            @else
                                                                @if ($s->product->discount != null || $s->product->discount != 0)
                                                                <a href="{{url('/session/tambahCart', $s->product->slug)}}" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                                                <h5 class="harga">
                                                                    Rp. {{number_format($s->product->price - ($s->product->discount /100 * $s->product->price), 0, ',', '.')}}
                                                                    <del>Rp. {{number_format($s->product->price, 0, ',', '.')}}</del>
                                                                </h5>
                                                                @else 
                                                                <a href="{{url('/session/tambahCart', $s->product->slug)}}" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                                                <h5 class="harga">
                                                                    Rp. {{number_format($s->product->price, 0, ',', '.')}}
                                                                </h5>
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                                <div class="col-xl-12 col-12 col-grid-box">
                                                    <div class="product-box">
                                                        <center><p>~ Oops.. barang tidak ditemukan ~</p></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <nav aria-label="Page navigation">
                                                                {{ $product->links('pagination.custom') }}
                                                            </nav>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                            <?php
                                                                $botanic = App\Model\Product::where('category_id', 1)->count();
                                                            ?>
                                                            @if (count($product) != 0)
                                                                <h5>Showing Products {{$botanic}} Result</h5>
                                                            @else
                                                                <h5>Showing Products 0 Result</h5>
                                                            @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- Dropdown hover -->
    @include('frontend.layout.dropdown')
    <!-- Dropdown hover end -->


    <!-- Quick-view modal popup start-->
    @if(isset($product))
    @foreach( $product as $u )
    <div class="modal fade bd-example-modal-lg theme-modal" id="modalDetail{{$u->id}}"tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="row">
                        <div class="col-lg-6  col-xs-12">
                            <div class="quick-view-img">
                                <img src="{{url('product/'.$u->product->image)}}" alt="" class="img-fluid blur-up lazyload">
                            </div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2 class="judulquick">{{$u->product->name}}</h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                @if ($u->product->comming_soon == 1)
                                   <h5 class="harga">
                                        Coming Soon
                                    </h5>
                                @else
                                    @if ($u->product->discount != null)
                                    <h5 class="harga">
                                        Rp. {{number_format($u->product->price - ($u->product->discount /100 * $u->product->price), 0, ',', '.')}}
                                        <del>Rp. {{number_format($u->product->price, 0, ',', '.')}}</del>
                                    </h5>
                                    @else 
                                    <h5 class="harga">
                                        Rp. {{number_format($u->product->price, 0, ',', '.')}}
                                    </h5>
                                    @endif
                                @endif
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>{!!$u->product->description!!}</p>
                                </div>
                            @if ($u->product->comming_soon != 1)
                            <form novalidate="novalidate" method="POST" action= "{{url('/session/tambahCart', $u->product->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="product-description border-product">
                                    <h6 class="product-title">quantity</h6>
                                    
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="ti-angle-left"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="ti-angle-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <a type="submit" class="btn btn-solid melengkung" style="color: #fff">+ Keranjang</a>
                                </div>
                            </form>
                            @endif
                            <a href="{{url('/detailProduct', $u->product->slug)}}" class="btn btn-solid melengkung">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    <!-- Quick-view modal popup end-->


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
</body>

</html>