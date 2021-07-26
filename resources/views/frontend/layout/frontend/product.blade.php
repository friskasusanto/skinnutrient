<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <!-- Floating WhatsApp start -->
    <a href="https://api.whatsapp.com/send?phone=+6281215770449" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Floating WhatsApp end -->


    <!-- header start -->
    <?php include 'header.php' ?>
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
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                            <div>
                                <img src="../assets/img/produk/mix-mask.jpg" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0">
                            </div>
                            <div>
                                <img src="../assets/img/produk/mix-mask-2.jpg" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                    <div>
                                        <img src="../assets/img/produk/mix-mask.jpg" alt=""
                                            class="img-fluid blur-up lazyload">
                                    </div>
                                    <div>
                                        <img src="../assets/img/produk/mix-mask-2.jpg" alt=""
                                            class="img-fluid blur-up lazyload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2 class="mb-3 judulproduk">Skin Nutrient™ Mix and Mask Variety Pack (12 pcs)</h2>
                            <h5 class="hargas">Rp575.000 <del>Rp785.000</del></h5>
                            <div class="product-description border-product">
                                <h6 class="product-title">Jumlah</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-prepend"><button type="button"
                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" data-toggle="modal" data-target="#addtocart"
                                    class="btn btn-solid melengkung melengkung">+ Keranjang</a> <a href="#" class="btn btn-solid melengkung">Beli Sekarang</a>
                            </div>
                            <div class="border-product">
                                <div class="product-icon">
                                    <form class="d-inline-block">
                                        <button class="wishlist-btn"><i class="fa fa-heart"></i><span
                                                class="title-font">Add To WishList</span></button>
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
                            <p><strong>Untuk Semua Jenis Kulit</strong></p>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
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
                        </div>
                        <div class="tab-pane fade" id="top-bahan" role="tabpanel"
                            aria-labelledby="top-bahan-tab">
                            <p><strong>bahaaann</strong></p>
                        </div>
                        <div class="tab-pane fade" id="top-cara" role="tabpanel"
                            aria-labelledby="top-cara-tab">
                            <p>caarraa</p>
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
                            <form class="theme-form">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>Rating</label>
                                            <div class="media-body ml-3">
                                                <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="name" placeholder=""
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Judul</label>
                                        <input type="text" class="form-control" id="review"
                                            placeholder="Enter your Review Subjects" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Ulasan Anda</label>
                                        <textarea class="form-control" placeholder=""
                                            id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">Kirim</button>
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
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                        <img alt="" src="../assets/img/produk/mix-mask.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="back">
                                        <img alt="" src="../assets/img/produk/mix-mask-2.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="cart-detail">
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.php" title="Compare">
                                        <i class="ti-reload" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="product-page(no-sidebar).html">
                                    <h6 class="tekshitam">Skin Nutrient™ Mix and Mask Variety Pack (12 pcs)</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product.php" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                <h5 class="harga">Rp575.000 <del>Rp785.000</del></h5>
                                <!--<div class="add-btn">
                                    <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                        <img alt="" src="../assets/img/produk/purifying.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="back">
                                        <img alt="" src="../assets/img/produk/purifying-2.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="cart-detail">
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.php" title="Compare">
                                        <i class="ti-reload" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="product-page(no-sidebar).html">
                                    <h6 class="tekshitam">Skin Nutrient™ Purifying and Neutralising Face Mask</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product.php" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                <!--<div class="add-btn">
                                    <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                        <img alt="" src="../assets/img/produk/hydrating.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="back">
                                        <img alt="" src="../assets/img/produk/hydrating-2.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="cart-detail">
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.php" title="Compare">
                                        <i class="ti-reload" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="product-page(no-sidebar).html">
                                    <h6 class="tekshitam">Skin Nutrient™ Hydrating and Aqua Replenishing Face Mask</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product.php" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                <!--<div class="add-btn">
                                    <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                        <img alt="" src="../assets/img/produk/illuminating.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="back">
                                        <img alt="" src="../assets/img/produk/illuminating-2.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="cart-detail">
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.php" title="Compare">
                                        <i class="ti-reload" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="product-page(no-sidebar).html">
                                    <h6 class="tekshitam">Skin Nutrient™ Illuminating and Moisturising Face Mask</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product.php" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                <!--<div class="add-btn">
                                    <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                        <img alt="" src="../assets/img/produk/firming.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="back">
                                        <img alt="" src="../assets/img/produk/firming-2.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="cart-detail">
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.php" title="Compare">
                                        <i class="ti-reload" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="product-page(no-sidebar).html">
                                    <h6 class="tekshitam">Skin Nutrient™ Firming and Lifting Face Mask</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product.php" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                <!--<div class="add-btn">
                                    <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>-->
                            </div>
                        </div>
                        <div class="product-box product-wrap">
                            <div class="img-wrapper">
                                <div class="front">
                                        <img alt="" src="../assets/img/produk/rejuvenating.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="back">
                                        <img alt="" src="../assets/img/produk/rejuvenating-2.jpg" class="img-fluid blur-up lazyload bg-img">
                                </div>
                                <div class="cart-detail">
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ti-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                    <a href="compare.php" title="Compare">
                                        <i class="ti-reload" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="product-page(no-sidebar).html">
                                    <h6 class="tekshitam">Skin Nutrient™ Rejuvenating and Revitalising Mask</h6>
                                </a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="product.php" class="addcarthitam"><h4>+ Tambah keranjang</a></h4>
                                <h5 class="harga">Rp60.000 <del>Rp85.000</del></h5>
                                <!--<div class="add-btn">
                                    <a href="javascript:void(0)" onclick="openCart()" class="btn btn-outline">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- product-box end -->


    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->


    <!-- theme setting -->
    <?php include 'dropdown.php' ?>
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
                                                src="../assets/images/fashion/product/43.jpg" alt="">
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
                                                <img src="../assets/images/payment_cart.png"
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
    <script src="../assets/js/jquery-3.3.1.min.js"></script>

    <!-- menu js-->
    <script src="../assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- popper js-->
    <script src="../assets/js/popper.min.js"></script>

    <!-- slick js-->
    <script src="../assets/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="../assets/js/bootstrap-notify.min.js"></script>

    <!-- Zoom js-->
    <script src="../assets/js/jquery.elevatezoom.js"></script>

    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
</body>

</html>