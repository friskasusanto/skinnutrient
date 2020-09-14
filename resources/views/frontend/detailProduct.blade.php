@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>product</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> detail product</li>
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
                            <h2 class="mb-0">{{$product->name}}</h2>
                            <h5 class="mb-2">category <a href="#">: {{$product->category->category_name}}</a></h5>
                            <h4><del>Rp. {{$product->price}}</del>
                                @if ($product->discount != null)
                                    <span>{{$product->discount}}% off</span></h4>
                                    <h3>Rp. {{$product->price-($product->price*($product->discount/100))}}</h3>
                                @endif

                        <form  class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/buy', $product->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
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
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
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
                                <button type="submit" class="btn btn-solid">BUY NOW</button>
                            </div>
                        </form>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam
                                    voluptatem,</p>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">share it</h6>
                                <div class="product-icon">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <form class="d-inline-block" novalidate="novalidate" method="POST" action= "{{url('/wishlist', $product->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <button class="wishlist-btn" type="submit">
                                            <i class="fa fa-heart"></i>
                                            <span class="title-font">Add To WishList</span>
                                        </button>
                                    </form>
                                    <form class="d-inline-block" novalidate="novalidate" method="POST" action= "{{url('/addCart', $product->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <button class="wishlist-btn" type="submit">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="title-font">Add To Cart</span>
                                        </button>
                                    </form>
                                </div>
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
                        <li class="nav-item">
                            <a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-selected="true">Description </a>
                            <div class="material-border"></div>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab"
                                href="#top-profile" role="tab" aria-selected="false">Details</a>
                            <div class="material-border"></div>
                        </li> -->
                        <!-- <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                href="#top-contact" role="tab" aria-selected="false">Video</a>
                            <div class="material-border"></div>
                        </li> -->
                    @if (count($status))
                        <li class="nav-item">
                            <a class="nav-link" id="review-top-tab" data-toggle="tab" href="#top-review" role="tab" aria-selected="false">Write Review</a>
                            <div class="material-border"></div>
                        </li>
                    @endif
                        <li class="nav-item">
                            <a class="nav-link" id="allreview-top-tab" data-toggle="tab" href="#alltop-review"  role="tab" aria-selected="false">All Review </a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <p>{!!$product->description!!}</p>
                        </div>
                        <div class="tab-pane fade" id="alltop-review" role="tabpanel"
                            aria-labelledby="allreview-top-tab">
                            @if (count($comment) != 0)
                                @foreach ($comment as $c)
                                    <li>
                                        <div class="media">
                                            <img src="{{asset('backends/assets/images/avtar.jpg')}}" alt="Generic placeholder image" style="width: 10%">
                                            <div class="media-body" style="padding-left: 5%">
                                                <h6>{{$c->name}}<span>( {{$c->created_at}} )</span></h6>
                                                <p>{{$c->comment}}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                {{ $comment->links() }}
                            @else
                                <br/><br/>
                                <center><p>~ ulasan kosong ~</p></center>
                                <br/><br/>
                            @endif
                        </div>
                        <!-- <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <div class="single-product-tables">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Febric</td>
                                            <td>Chiffon</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Red</td>
                                        </tr>
                                        <tr>
                                            <td>Material</td>
                                            <td>Crepe printed</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Length</td>
                                            <td>50 Inches</td>
                                        </tr>
                                        <tr>
                                            <td>Size</td>
                                            <td>S, M, L .XXL</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                        <!-- <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="mt-4 text-center">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div> -->
                    @if (count ($status))
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
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

    <section class="section-b-space ratio_asos">
        <div class="container">
            
        </div>
    </section>


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>related products</h2>
                </div>
            </div>
            <div class="row search-product">
            @if (count ($related) != 0)
                @foreach ($related as $r)
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{url('/detailProduct', $r->slug)}}">
                                @if ($r->image == null)
                                    <img src="{{asset('backends/assets/images/pro3/35.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                @else
                                    <img src="{{url('product/'.$r->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                @endif
                                </a>
                            </div>
                            <div class="back">
                                <a href="{{url('/detailProduct', $r->slug)}}">
                                @if ($r->image == null)
                                    <img src="{{asset('backends/assets/images/pro3/36.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                @else
                                    <img src="{{url('product/'.$r->image)}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                @endif
                                </a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <a href="{{url('/cart', $r->slug)}}" title="Add to cart">
                                    <i class="ti-shopping-cart" aria-hidden="true"></i>
                                </a> 
                                <a href="{{action('Frontend\SaleController@wishlist', $r->slug)}}" title="Add to Wishlist">
                                    <i class="ti-heart" aria-hidden="true"></i>
                                </a> 
                                <a href="#" data-toggle="modal" data-target="#quick-view{{$r->slug}}" title="Quick View">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </a> 
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating">
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i> 
                                <i class="fa fa-star"></i>
                            </div>
                            <a href="{{url('/detailProduct', $r->slug)}}">
                                <h6>{{$r->name}}</h6>
                            </a>
                            <h4>Rp. {{$r->price}}</h4>
                        </div>
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
    </section>
    <!-- product section end -->

    @if(isset($related))
    @foreach( $related as $s )
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view{{$s->slug}}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{url('product/'.$s->image)}}" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{$s->name}}</h2>
                                <h3>Rp. {{$s->price}}</h3>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>{{$s->description}}</p>
                                </div>

                                <form class="d-inline-block" novalidate="novalidate" method="POST" action= "{{url('/addCart', $s->slug)}}" enctype="multipart/form-data" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="product-description border-product">
                                        <h6 class="product-title">quantity</h6>
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                    <div class="product-buttons">
                                        <button type="submit" class="btn btn-solid"> add to cart</button>
                                        <a href="{{url('/detailProduct', $s->slug)}}" class="btn btn-solid">view detail</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif

@endsection