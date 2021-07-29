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
                        <h2 class="judulhal">Detail Produk</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Produk</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                        @foreach ($gambar as $g)
                            <div><img src="{{url('product/'.$g->image)}}" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                @foreach ($gambar as $g)
                                    <div><img src="{{url('product/'.$g->image)}}" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2 class="mb-3 judulproduk">{{$product->name}}</h2>
                            @if ($product->comming_soon == 1)
                                <h5 class="hargas">Coming Soon</h5>
                            @elseif ($product->stock_user == null || $product->stock_user == 0)
                                <h5 class="hargas">Sold Out</h5>
                            @else
                                @if ($product->discount != null)
                                <h5 class="hargas">Rp. {{number_format($product->price - ($product->discount /100 * $product->price), 0, ',', '.')}}
                                    <del>Rp. {{number_format($product->price, 0, ',', '.')}}</del>
                                </h5>
                                @else 
                                <h5 class="hargas">Rp. {{number_format($product->price, 0, ',', '.')}}</h5>
                                @endif
                            @endif

                            @if ($product->comming_soon != 1)
                                <form  class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/session/tambahCart', $product->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="product-description border-product">
                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button"
                                                        class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="ti-angle-left"></i>
                                                    </button> 
                                                </span>
                                                <input type="number" name="quantity" class="form-control input-number" value="1">
                                                <span class="input-group-prepend">
                                                    <button type="button"
                                                        class="btn quantity-right-plus" data-type="plus" data-field="">
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
                                <a href="{{url('/session/checkout', $product->slug)}}" class="btn btn-solid melengkung">Beli Sekarang</a>
                            @endif
                            <div class="border-product">
                                <div class="product-icon">
                                    <form class="d-inline-block">
                                        <a href="{{url('/session/wishlist')}}" class="wishlist-btn">
                                            <i class="fa fa-heart"></i>
                                            <span class="title-font">Add To WishList</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">Detail produk</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam
                                    voluptatem,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true">Deskripsi Produk</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab"
                                href="#top-profile" role="tab" aria-selected="false">Detail</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="bahan-top-tab" data-toggle="tab"
                                href="#top-bahan" role="tab" aria-selected="false">Bahan</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="cara-top-tab" data-toggle="tab"
                                href="#top-cara" role="tab" aria-selected="false">Cara Penggunaan</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                href="#top-contact" role="tab" aria-selected="false">Video</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="kirim-top-tab" data-toggle="tab"
                                href="#top-kirim" role="tab" aria-selected="false">Kebijakan Pengiriman</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="review-top-tab" data-toggle="tab"
                                href="#top-review" role="tab" aria-selected="false">Review Pelanggan</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <p><strong>{!!$product->description!!}</strong></p>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                            <p>{!!$product->detail!!}</p>
                        </div>
                        <div class="tab-pane fade" id="top-bahan" role="tabpanel"
                            aria-labelledby="top-bahan-tab">
                            <p><strong>{!!$product->ingredients!!}</strong></p>
                        </div>
                        <div class="tab-pane fade" id="top-cara" role="tabpanel"
                            aria-labelledby="top-cara-tab">
                            <p>{!!$product->how_to_use!!}</p>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="mt-4 text-center">
                                <iframe width="560" height="315" src="https://youtu.be/96x9ca8PA_k"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-kirim" role="tabpanel"
                            aria-labelledby="top-kirim-tab">
                            <p>kirim</p>
                        </div>
                        <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                            <form class="theme-form" novalidate="novalidate" method="POST" action= "{{url('/review', $product->slug)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>Rating</label>
                                            <div class="media-body ml-3">
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="star" value="5" /><label for="star5" title="Sangat Baik">5 stars</label>
                                                    <input type="radio" id="star4" name="star" value="4" /><label for="star4" title="Baik">4 stars</label>
                                                    <input type="radio" id="star3" name="star" value="3" /><label for="star3" title="Cukup Baik">3 stars</label>
                                                    <input type="radio" id="star2" name="star" value="2" /><label for="star2" title="Cukup">2 stars</label>
                                                    <input type="radio" id="star1" name="star" value="1" /><label for="star1" title="Buruk">1 star</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your name" required name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" required name="email">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Judul Ulasan</label>
                                        <input type="text" class="form-control" id="review" placeholder="judul ulasan" required name="judul">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Ulasan Product</label>
                                        <textarea class="form-control" placeholder="berikan ulasan product anda" id="exampleFormControlTextarea1" rows="6" name="comment"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">Kirim Ulasan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->


    <!-- product-box  -->
    <div class="container ratio_square">
        <section class="section-b-space border-top-0">
            <div class="row">
            <div class="col-lg-12">
                    <div class="title3">
                        <h2 class="title-inner3 col-lg-12 col-sm-8 fonttengahs"><u>Pembelian Paling Laris</u></h2>
                    </div>
                    <div class="product-4 product-m no-arrow">
                    @if (count ($related) != 0)
                    @foreach ($related as $r)
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                            <?php
                                $back = App\Model\ProductGambar::where('product_id', $r->id)->first();
                            ?>
                                <div class="front">
                                    <a href="{{url('/detailProduct', $r->slug)}}" class="produkkotaks">
                                        <img alt="" src="{{url('product/'.$r->image)}}" class="img-fluid blur-up lazyload bg-img">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{url('/detailProduct', $r->slug)}}" class="produkkotaks">
                                        <img alt="" src="{{url('product/'.$back->image)}}" class="img-fluid blur-up lazyload bg-img">
                                    </a>
                                </div>
                                <div class="cart-detail">
                                    <a href="{{url('/session/wishlist')}}" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{url('/detailProduct', $r->slug)}}">
                                    <h6 class="tekshitam">{{$r->name}}</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="{{url('/session/tambahCart', $r->slug)}}" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                @if ($r->comming_soon == 1)
                                   <h5 class="harga">
                                        Coming Soon
                                    </h5>
                                @elseif ($r->stock_user == null || $r->stock_user == 0)
                                    <h5 class="harga">
                                        Sold Out
                                    </h5>
                                @else
                                    @if ($r->discount != null)
                                    <h5 class="harga">
                                        Rp. {{number_format($r->price - ($r->discount /100 * $r->price), 0, ',', '.')}}
                                        <del>Rp. {{number_format($r->price, 0, ',', '.')}}</del>
                                    </h5>
                                    @else 
                                    <h5 class="harga">
                                        Rp. {{number_format($r->price, 0, ',', '.')}}
                                    </h5>
                                    @endif
                                @endif
                                <!--<div class="add-btn">
                                    <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>-->
                            </div>
                        </div>
                    @endforeach
                    @else
                        <br/><br/>
                        <center><p>~ product kosong ~</p></center>
                        <br/><br/>
                    @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- product-box end -->


    <!-- footer start -->
    @include('frontend.layout.footer')
    <!-- footer end -->


    <!-- theme setting -->
    @include('frontend.layout.dropdown')
    <!-- theme setting -->


    <!-- Add to cart modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg addtocart">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <a href="#">
                                            <img class="img-fluid blur-up lazyload pro-img"
                                                src="{{asset('frontend/assets/images/fashion/product/43.jpg')}}" alt="">
                                        </a>
                                        <div class="media-body align-self-center text-center">
                                            <a href="#">
                                                <h6>
                                                    <i class="fa fa-check"></i>Produk
                                                    <span>Skin Nutrient Mix & Mask 12</span>
                                                    <span> berhasil ditambahkan keranjang</span>
                                                </h6>
                                            </a>
                                            <div class="buttons">
                                                <a href="#" class="view-cart btn btn-solid">Keranjang</a>
                                                <a href="#" class="checkout btn btn-solid">Bayar</a>
                                                <a href="#" class="continue btn btn-solid">Lanjutkan Belanja</a>
                                            </div>

                                            <!-- <div class="upsell_payment">
                                                <img src="{{asset('frontend/assets/images/payment_cart.png')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div> -->
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
    <!-- Add to cart modal popup end-->


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

    <!-- Zoom js-->
    <script src="{{asset('frontend/assets/js/jquery.elevatezoom.js')}}"></script>

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