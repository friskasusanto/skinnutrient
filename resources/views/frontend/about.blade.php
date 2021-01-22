@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>about us</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-center p-left">
            <img src="{{asset('backends/assets/images/banner/about1.jpg')}}" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h3>About Skin Nutrient™</h3>
                            <h5>Skin Nutrient™ is a global born brand that was founded in 2013, developed by successful Australian manufacturing company AHRD. The original brand idea was to harness the power of unique Australian nutrients and explore the fundamentals of skin biology to build products that are effective, healthy and beneficial for every skin type. We believe the key to achieving healthy and beautiful skin, lies within the naturally derived Australian ingredients used in every formula we make - regardless of your skin type. Our goal is simple, to nutritionally boost the skin by improving skin immunity, fighting off free radicals and supporting the natural barrier function. By doing this we are creating products that slow down the ageing process, keep the skin hydrated and supple, help activate the skin own natural repair systems and protect it from pollution and harsh chemicals. The fact that we are creating products from high quality, rare and unique Australian ingredients to nourish every skin type - is our advantage.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->
    
    <!-- section start -->
    <section class="section-b-space blog-page ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about2.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2013</h4>
                                        <p>Skin Nutrient™ was founded by the director of successful manufacturing company, Australia Health Research & Development Group Pty Ltd. The brand is now part of the rapidly expanding ANPG group, which is 100% Australian family owned.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-right">
                                <div>
                                    <h4>2014</h4>
                                        <p>Our founding fathers began exploring skin care ingredients, that were unique to Australia and could be used as nutrients for the skin. Our skin care products only use the purest raw materials to give your skin the purest care.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about3.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2015</h4>
                                        <p>Towards to the end of 2015, Goat's Milk Magic Touch™ is launched in China & Australia as the world's first goat milk droplet moisturiser with EGF proteins and Skin Nutrient's first ever product. This is still one of our best selling products to date! Goat milk is an extremely rich source of nutrients. One small cup of milk a day can meet 25% of the body’s calcium needs, it is also perfectly pH balanced for the skin and contains natural lactic acid that helps to gently remove dead skin cells from your skin’s surface. Not to mention EGF proteins which promote the production of new cells and the rejuvenation of younger looking skin. Our formulations containing goat milk are particularly suitable for those with aged and dry skin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about4.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about5.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2016</h4>
                                        <p>The Goat Milk range get's a new and fresh look and Goat's Milk Magic Moment is launched. 2016 also saw the development and launch of our natural-cosmetic-injection alternative, the Bee Venom range. Designed to firm and lift and made with pure bee venom, that has been carefully inspected and tested to ensure that the toxic venom elements and impurities are completely removed and purified.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about6.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2017</h4>
                                        <p>Our hybrid anti-ageing/hydrating range, Hydramino, was launched in 2017 using Amino Acid Complex as the key ingredients. This range was inspired by the water element, pure and emotional and the key to the survival of all things.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about7.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <p>Throughout 2017, the Skin Nutrient product innovation team conducted a series of market research surveys to identify the average consumers makeup removing routine. We surprisingly discovered most women either skip removing their makeup and proceed straight to cleansing their face, use makeup removal wipes or skip the process in its entirety. The problem with this is, most of the time people are not actually removing makeup properly. Causing their pores to become clogged and resulting in pimples, blackheads and blemishes. Generally causing the complexion to appear dull, patchy and lifeless! So we decided to create a cleanser, makeup remover, exfoliating and brightening solution in one product. Introducing the Perfect White Magic Cleanser.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about8.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about9.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2018</h4>
                                        <p>Air and wind contain 5% water vapour. Wind is one of the purest sources of energy. It blows over plants, providing fragrance from supercharged botanical ingredients. Using air and wind as our inspiration, we began developing Australia's lightest, most fragrant sheet masks. Made with biodegradable cellulose material and infused with intensive, nutrient rich serums. Our famous Botanic Face Mask range was born. 2018 was also the year Skin Nutrient™ was launched in Ho Chi Minh City, Vietnam. The team was thrilled to meet Vietnam's hottest celebrities including lam giau khong kho, Đàm Vĩnh Hưng (Mr. Dam) , Hương Giang Idol vu hà, cùng nhiều khách mời nổi tiếng khác and many other famous guests.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about10.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2019</h4>
                                        <p>More than 14,000 household consumers, surveyed as part of Australia’s largest independent consumer survey of new and innovative products, awarded our Australian team of leading herbalists and chemists Product of the Year 2019. This incredible achievement kick started our launch into major Australian retail channels, including; Terrywhite Chemmart, Priceline, Good Price Pharmacy, Go Vita and many more.</p>
                                        <p>Along with winning prestigious awards and launching an entirely new range of products, our team also attended several trade shows throughout Asia, which further cemented Skin Nutrient™ as a leading Australian Brand in the Asia Pacific market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about11.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <p>2019 was also the year Skin Nutrient™ developed and launched our Kakadu Plum Illuminating Cream. The Kakadu plum (Terminalia ferdinandiana) is an Australian native superfood, only found in remote regions of the Northern Territory. Skin Nutrient Kakadu Plum Illuminating Cream works to moisturise, illuminate and prime the skin. The cream is infused with native Australian Kakadu Plum, which is a rich source of vitamin C. Skin will appear several shades more luminous and be protected from daily pollutants and stress.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about12.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-12">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about13.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about14.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h4>2020</h4>
                                        <p>During summer, the Earth's orbit brings Australia closer to the sun, resulting in an additional 7% solar UV intensity. Coupled with our clearer atmospheric conditions, this means that Australians are exposed to up to 15% more UV rays. It's safe to say, Australia is home to some of the best sunscreen products in the world. In fact, we were awarded Product of the Year 2020 for our Sun Barrier Tone-Up Whitening Sun Screen and Red Wine Refining and Exfoliating Mask. We were also awarded best marketing team of the year 2020.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{asset('backends/assets/images/banner/about15.jpg')}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <p>Throughout the COVID-19 pandemic, we supplied over 2 million units of 70% alcohol to schools, businesses, government and households alike. Our partnership with Woolworths, allowed everyday consumers access to hand sanitiser when there was a major disruption in supply chains. For those who have chosen Skin Nutrient as their preferred hand sanitiser supplier, we would like to warmly thank you for your support & welcome you to the Skin Nutrient club. Hand sanitiser has quickly become a new staple in our daily routines. As essential as brushing your teeth. Unlike other products recently rushed to market, to ensure the safety of our customers' Skin Nutrient's hand sanitiser has been clinically tested and proven to remove 99.99% of germs. Our unique formula contains 70% ethyl alcohol and moisturising ingredients to avoid red, irritated, and sore hands.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->

    <!-- about section start -->
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-section"><img src="{{asset('backends/assets/images/banner/about16.jpg')}}"
                            class="img-fluid blur-up lazyload" alt=""></div>
                </div>
                <div class="col-sm-12">
                    <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                    </h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    </p>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                        demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                        foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail
                        in their duty through weakness of will, which is the same as saying through shrinking from toil
                        and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and
                        owing to the claims of duty or the obligations of business it will frequently occur that
                        pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in
                        these matters to this principle of selection: he rejects pleasures to secure other greater
                        pleasures, or else he endures pains to avoid worse pains.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

@endsection