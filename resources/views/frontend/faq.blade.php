f@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>faq</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">faq</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!--section start-->
    <section class="faq-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion theme-accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0"><button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Are the hand sanitisers still in stock?</button></h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Unless the website states that they are out of stock on the product page, yes they are in stock and available.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">How come you have stock and nobody else does?</button></h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>This is because we are the manufacturer of all our products. Skin Nutrient is owned by the Australia Health Research & Development Group Pty Ltd. Our manufacturing facilities are based in Brisbane.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">What is the percentage of alcohol in the hand sanitisers?</button></h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>70% Ethyl Alcohol</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">When will my order be processed?</button></h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Due to due to a high volume of orders, please allow 3-5 days to process orders. If your order is not cancelled, please stay put.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">Why haven't I received a tracking number yet, does this mean my order is cancelled?</button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>No, this does not mean your order is cancelled. Due to the high volume of orders we are receiving, it is simply taking us longer to process your order. Please allow 3-5 days for your order to be processed, you will receive a tracking number once the order has been shipped.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">Why isn't my sign up discount code working ??</button></h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>The promotional code you are trying to use has expired. We are not offering any discounts at this stage. To stay notified, please join our mailing list and we will send you updates about our new product launches and sales.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">How long will it take to ship my order?</button></h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Tracked orders take approximately 2-7 business days to arrive. However, due to receiving a high volume of orders, please allow 3-5 days to process and send your order. If your order is not cancelled, please stay put.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">Shouldn't my order include free shipping if I spend over $99?</button></h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>We no longer offer free shipping because of the large quantities of hand sanitiser being purchased. Due to the flammable nature of hand sanitiser, we must adhere to strict courier safety instructions. This costs our business a lot more to ship your products. Thank you for your understanding. If you have any further questions, please contact our customer care team: info@skinnnutrient.co.id Shipping rates are calculated per region.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

@endsection