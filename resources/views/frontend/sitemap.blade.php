@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>site map</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">site map</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space sitemap_page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h5 class="title">home demos</h5>
                    <ul class="">
                        <li><a href="category-page.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> New
                                demos</a>
                            <ul>
                                <li><a target="_blank" href="tools.html">tools</a></li>
                                <li><a target="_blank" href="marketplace-demo.html">marketplace</a></li>
                                <li><a target="_blank" href="game.html">game</a></li>
                                <li><a target="_blank" href="gym-product.html">gym</a></li>
                                <li><a target="_blank" href="marijuana.html">marijuana</a></li>
                                <li><a target="_blank" href="left_sidebar-demo.html">left sidebar</a></li>
                                <li><a target="_blank" href="jewellery.html">jewellery</a></li>
                                <li><a target="_blank" href="pets.html">pets</a></li>
                                <li><a target="_blank" href="metro.html">metro</a></li>
                                <li><a target="_blank" href="video-slider.html">video slider</a></li>
                            </ul>
                        </li>
                        <li><a href="category-page.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                Clothing</a>
                            <ul>
                                <li><a target="_blank" href="index.html">fashion 1</a></li>
                                <li><a target="_blank" href="fashion-2.html">fashion 2</a></li>
                                <li><a target="_blank" href="fashion-3.html">fashion 3</a></li>
                                <li><a target="_blank" href="kids.html">kids</a></li>
                            </ul>
                        </li>
                        <li><a href="category-page.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                electronics</a>
                            <ul>
                                <li><a target="_blank" href="electronic-1.html">electronic 1</a></li>
                                <li><a target="_blank" href="electronic-2.html">electronic 2</a></li>
                            </ul>
                        </li>
                        <li><a target="_blank" href="watch.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                watch</a></li>
                        <li><a target="_blank" href="shoes.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                shoes</a></li>
                        <li><a target="_blank" href="bags.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                bags</a></li>
                        <li><a target="_blank" href="nursery.html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> nursery</a></li>
                        <li><a target="_blank" href="vegetables.html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> vegetable</a></li>
                        <li><a target="_blank" href="beauty.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                beauty</a></li>
                        <li><a target="_blank" href="light.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                light</a></li>
                        <li><a target="_blank" href="furniture.html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> furniture</a></li>
                        <li><a target="_blank" href="goggles.html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> googles</a></li>
                        <li><a href="category-page.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                basics</a>
                            <ul>
                                <li><a target="_blank" href="lookbook-demo.html">lookbook</a></li>
                                <li><a target="_blank" href="instagram-shop.html">instagram</a></li>
                                <li><a target="_blank" href="video.html">video</a></li>
                                <li><a target="_blank" href="parallax.html">parallax</a></li>
                                <li><a target="_blank" href="full-page.html">full page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h5 class="title">product pages</h5>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> sidebar</a>
                            <ul>
                                <li><a href="product-page.html">left sidebar</a></li>
                                <li><a href="product-page(right-sidebar).html">right sidebar</a></li>
                                <li><a href="product-page(no-sidebar).html">no sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> thumbnail image</a>
                            <ul>
                                <li><a href="product-page(left-image).html">left image</a></li>
                                <li><a href="product-page(right-image).html">right image</a></li>
                                <li><a href="product-page(image-outside).html">image outside</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> three column</a>
                            <ul>
                                <li><a href="product-page(left-image).html">thumbnail left</a></li>
                                <li><a href="product-page(right-image).html">thumbnail right</a></li>
                                <li><a href="product-page(image-outside).html">thubnail bottom</a></li>
                            </ul>
                        </li>
                        <li><a href="product-page(4-image).html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                four image</a></li>
                        <li><a href="product-page(sticky).html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                sticky</a></li>
                        <li><a href="product-page(accordian).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> accordian</a></li>
                        <li><a href="product-page(bundle).html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                bundle<span class="new-tag">new</span></a></li>
                        <li><a href="product-page(image-swatch).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> image swatch</a></li>
                        <li><a href="product-page(vertical-tab).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> vertical tab</a></li>
                    </ul>
                    <h5 class="title">shop pages</h5>
                    <ul>
                        <li><a href="category-page.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> left
                                sidebar</a></li>
                        <li><a href="category-page(right).html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                right sidebar</a></li>
                        <li><a href="category-page(no-sidebar).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> no sidebar</a></li>
                        <li><a href="category-page(sidebar-popup).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> sidebar popup</a></li>
                        <li><a href="category-page(metro).html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                metro</a></li>
                        <li><a href="category-page(full-width).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> full width</a></li>
                        <li><a href="category-page(infinite-scroll).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> infinite scroll</a></li>
                        <li><a href=category-page(3-grid).html><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                three grid</a></li>
                        <li><a href="category-page(6-grid).html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                six grid</a></li>
                        <li><a href="category-page(list-view).html"><i class="fa fa-chevron-right"
                                    aria-hidden="true"></i> list view</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h5 class="title">blog pages</h5>
                    <ul>
                        <li><a href="blog-page.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> left
                                sidebar</a></li>
                        <li><a href="blog(right-sidebar).html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                right sidebar</a></li>
                        <li><a href="blog(no-sidebar).html"><i class="fa fa-chevron-right" aria-hidden="true"></i> no
                                sidebar</a></li>
                        <li><a href="blog-details.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> blog
                                details</a></li>
                    </ul>
                    <h5 class="title">inner pages</h5>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> account</a>
                            <ul>
                                <li><a href="product-page(left-image).html">account</a></li>
                                <li><a href="product-page(right-image).html">order history</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                                <li><a href="cart.html">cart</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="forget_pwd.html">forget password</a></li>
                                <li><a href="profile.html">profile</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="about-page.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> about
                                us</a></li>
                        <li><a href="search.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> search</a></li>
                        <li><a href="typography.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                typography</a></li>
                        <li><a href="review.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> review</a></li>
                        <li><a href="order-success.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> order
                                success</a></li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> compare</a>
                            <ul>
                                <li><a href="compare.html">compare</a></li>
                                <li><a href="compare.html">compare-2</a></li>
                            </ul>
                        </li>
                        <li><a href="collection.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                collection</a></li>
                        <li><a href="lookbook.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> lookbook</a>
                        </li>
                        <li><a href="search.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> site map</a>
                        </li>
                        <li><a href="404.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> 404</a></li>
                        <li><a href="coming-soon.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> coming
                                soon</a></li>
                        <li><a href="faq.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h5 class="title">features</h5>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> portfolio</a>
                            <ul>
                                <li><a href="grid-2-col.html">portfolio grid 2</a></li>
                                <li><a href="grid-3-col.html">portfolio grid 3</a></li>
                                <li><a href="grid-4-col.html">portfolio grid 4</a></li>
                                <li><a href="masonary-2-grid.html">mesonary grid 2</a></li>
                                <li><a href="masonary-3-grid.html">mesonary grid 3</a></li>
                                <li><a href="masonary-4-grid.html">mesonary grid 4</a></li>
                                <li><a href="masonary-fullwidth.html">mesonary full width</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> add to cart</a>
                            <ul>
                                <li><a href="nursery.html">cart modal popup</a></li>
                                <li><a href="vegetables.html">qty. counter</a></li>
                                <li><a href="bags.html">cart top</a></li>
                                <li><a href="shoes.html">cart bottom</a></li>
                                <li><a href="watch.html">cart left</a></li>
                                <li><a href="tools.html">cart right</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> elements</a>
                            <ul>
                                <li><a href="element-title.html">title</a></li>
                                <li><a href="element-banner.html">collection banner</a></li>
                                <li><a href="element-slider.html">home slider</a></li>
                                <li><a href="element-category.html">category</a></li>
                                <li><a href="element-service.html">service</a></li>
                                <li><a href="element-image-ratio.html">image size ratio <i class="fa fa-bolt icon-trend"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="element-productbox.html">product box</a></li>
                                <li><a href="element-product-slider.html">product slider</a></li>
                                <li><a href="element-no_slider.html">no slider</a></li>
                                <li><a href="element-mulitiple_slider.html">multi slider</a></li>
                                <li><a href="element-tab.html">tab</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> email template</a>
                            <ul>
                                <li><a href="email-order-success.html">order success</a></li>
                                <li><a href="email-order-success-two.html">order success 2</a></li>
                                <li><a href="email-template.html">email template</a></li>
                                <li><a href="email-template-two.html">email template 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->

@endsection