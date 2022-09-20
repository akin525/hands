@extends("ads.lay.header")

@section('content')

    <div class="sliderArea heroBlackStyle plr">
        <div class="slider-active">
            <div class="single-slider heroPadding2 d-flex align-items-center">
                <div class="container-fluid ">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xxl-6 col-xl-7 col-lg-7 ">
                            <div class="heroCaption">
                                <h1 class="tittle" data-animation="fadeInUp" data-delay="0.1s">Buy and sell anything <span class="lineBrack">you want</span> </h1>
                                <p class="pera" data-animation="fadeInUp" data-delay="0.3s">Countrys most loved and trusted classified ad listing website. Browse thousand of items near you Browse thousand.</p>
                            </div>

{{--                            <form action="#" class="search-box" data-animation="fadeInRight" data-delay="0.6s">--}}
{{--                                <div class="select-form" data-animation="fadeInLeft" data-delay="0.5s">--}}
{{--                                    <div class="select-itms">--}}
{{--                                        <select name="select" class="niceSelect" id="select1">--}}
{{--                                            <option value="">New York, USA</option>--}}
{{--                                            <option value="">Location PK</option>--}}
{{--                                            <option value="">Location US</option>--}}
{{--                                            <option value="">Location UK</option>--}}
{{--                                        </select>--}}
{{--                                        <i class="las la-map-marker-alt  icon"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="searchBox-wrapper ">--}}
{{--                                    <div class="input-form" data-animation="fadeInRight" data-delay="0.6s">--}}
{{--                                        <input type="text" class="input keyup-input" placeholder="Search...">--}}
{{--                                    </div>--}}

{{--                                    <div class="category-searchbar search-showHide">--}}

{{--                                        <span class="closed-icon"><i class="las la-times"></i></span>--}}
{{--                                        <div class="search-suggestions" id="search_suggestions_wrap">--}}
{{--                                            <div class="search-inner">--}}
{{--                                                <div class="category-suggestion item-suggestions">--}}
{{--                                                    <h6 class="item-title">Category Suggestions</h6>--}}
{{--                                                    <ul class="category-suggestion-list">--}}
{{--                                                        <li class="list"> <a href="#" class="item">Fruits &amp; Vegetables</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="list"><a href="#" class="item">Cooking</a>--}}
{{--                                                        </li><li class="list"> <a href="#" class="item">Dairy</a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-suggestion item-suggestions">--}}
{{--                                                    <h6 class="item-title">--}}
{{--<span>--}}
{{-- Product Suggestions--}}
{{--</span>--}}
{{--                                                        <a href="#" target="_blank" id="search_result_all" class="showAll">Show all</a>--}}
{{--                                                    </h6>--}}
{{--                                                    <ul class="product-suggestion-list mt-4" id="search_result_products">--}}
{{--                                                        <li class="list">--}}
{{--                                                            <a href="#" class="item">--}}
{{--                                                                <div class="product-image"><img src="assets/img/gallery/wishlist1.jpg" alt="img"></div>--}}
{{--                                                                <div class="product-info">--}}
{{--                                                                    <div class="product-info-top">--}}
{{--                                                                        <h6 class="product-name">Fresh Fruits</h6>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="product-price">--}}
{{--                                                                        <div class="price-update-through">--}}
{{--                                                                            <span class="flash-price fw-500">$200.00</span>--}}
{{--                                                                            <span class="flash-old-prices">$240</span>--}}
{{--                                                                        </div>--}}
{{--                                                                        <span class="stock-out">In Stock</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="search-form" data-animation="bounceIn" data-delay="0.8s">--}}
{{--                                    <button class="search-Btn">Search</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-5">
                            <div class="hero-man d-none d-lg-block">
                                <img src="assets/img/hero/hero-man3.png" alt="images" class="tilt-effect " data-animation="fadeInRight" data-delay="0.2s">

                                <div class=" shapeHero shapeHero6" data-animation="fadeInRight" data-delay="0.8s">
                                    <img src="assets/img/hero/heroShape6.png" alt="images" class="heartbeat">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="aboutArea section-padding sectionBg1">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="about-caption about-caption2 mb-15  text-center">
                        <div class="section-tittle section-tittle2 mb-55">
                            <h2 class="tittle wow fadeInUp" data-wow-delay="0.0s">Earn cash by selling<br> or Find anything you desire</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humo or randomised words which don't look even slightlys</p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{route('advert')}}" class="cmn-btn2 mr-15 mb-10 wow fadeInLeft" data-wow-delay="0.3s">Post your ad</a>
                            <a href="{{url('listads')}}" class="cmn-btn3 mb-10 wow fadeInRight" data-wow-delay="0.3s">Browse ads</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="aboutShape aboutShape1">
                <img src="assets/img/gallery/aboutShape1.png" alt="images" class="bouncingAnimation">
            </div>
            <div class="aboutShape aboutShape2">
                <img src="assets/img/gallery/aboutShape2.png" alt="images" class="bouncingAnimation">
            </div>
        </div>
    </section>

    <section class="exploreCategories section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="tittle  "><span class="shape"></span>Post and Promote Your Listings</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 ">
                <div class="col">
                    <div class="singleCategories wow fadeInLeft mb-24" data-wow-delay=".2s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore1.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Electronics </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInLeft mb-24" data-wow-delay=".2s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore2.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Mobiles </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInDown mb-24" data-wow-delay=".2s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore3.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Vehicles </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInRight mb-24" data-wow-delay=".2s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore4.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Appliances </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInRight mb-24" data-wow-delay=".2s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore5.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Fashions </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInRight mb-24" data-wow-delay=".3s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore6.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Property </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInRight mb-24" data-wow-delay=".3s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore7.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Pets </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInUp mb-24" data-wow-delay=".2s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore8.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Businesses </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInLeft mb-24" data-wow-delay=".3s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore9.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle">Services </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="singleCategories wow fadeInLeft mb-24" data-wow-delay=".3s">
                        <a href="{{url('listads')}}" class="catThumb">
                            <img src="assets/img/gallery/explore10.jpg" alt="images">
                        </a>
                        <div class="catCaptions">
                            <h6> <a href="{{url('listads')}}" class="tittle"> Sports </a> </h6>
                            <p class="pera">12,990 items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featureListing bottom-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle mb-50">
                        <h2 class="tittle "><span class="shape"></span> Featured Listings </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($ads as $ad)

                    <div class="col-lg-3">

                        <div class="singleFeature mb-24">
                            <div class="featureImg">
                                <a href="{{url('/', $ad->cover_image)}}"><img src="{{url('/', $ad->cover_image)}}" alt="images"></a>
                            </div>
                            <div class="featureCaption">
                                <h4><a href="{{route('ads-detail', $ad->id)}}" class="featureTittle">{{$ad->advert_name}}</a></h4>
{{--                                <p class="featureCap">Los Angels, CA · <strong class="subCap">12hrs ago</strong></p>--}}
                                <span class="featurePricing">₦{{number_format(intval($ad->amount *1))}}</span>
                                <div class="btn-wrapper">
                                    <span class="pro-btn1">NEW</span>
                                    <span class="pro-btn2">PROMTED</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

<br>
    <section class="pricingCard bottom-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle text-center mb-50">
                        <h2 class="tittle  "><span class="shape"></span>Post and Promote Your Listings</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="singlePrice mb-24">
                        <h4 class="priceTittle">Free</h4>
                        <ul class="listing">
                            <li class="listItem"><i class="las la-check icon"></i><blockquote class="priceTag">Your ad will be promoted for 3 days</blockquote></li>
                            <li class="listItem"><i class="las la-check icon"></i><blockquote class="priceTag">Get upto 10x times more responses</blockquote> </li>
                            <li class="listItem"><i class="las la-check icon"></i><blockquote class="priceTag">Your Ad will be featured for 1st day</blockquote></li>
                        </ul>
                        <span class="price">₦0 <span class="subTittle"> /For Lifetime</span></span>
                        <div class="btn-wrapper">
                            <a href="#" class="cmn-btn-outline1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="singlePrice mb-24">
                        <h4 class="priceTittle">Standard</h4>
                        <ul class="listing">
                            <li class="listItem"><i class="las la-check icon"></i>Your ad will be promoted for 3 days</li>
                            <li class="listItem"><i class="las la-check icon"></i>Get upto 10x times more responses</li>
                            <li class="listItem"><i class="las la-check icon"></i>Your Ad will be featured for 1st day</li>
                        </ul>
                        <span class="price">₦490<span class="subTittle"> /For 3 Days</span></span>
                        <div class="btn-wrapper">
                            <a href="#" class="cmn-btn-outline1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="singlePrice mb-24">
                        <h4 class="priceTittle">Premium</h4>
                        <ul class="listing">
                            <li class="listItem"><i class="las la-check icon"></i>Your ad will be promoted for 3 days</li>
                            <li class="listItem"><i class="las la-check icon"></i>Get upto 10x times more responses</li>
                            <li class="listItem"><i class="las la-check icon"></i>Your Ad will be featured for 1st day</li>
                        </ul>
                        <span class="price">₦990<span class="subTittle"> /For 4 days</span></span>
                        <div class="btn-wrapper">
                            <a href="#" class="cmn-btn-outline1">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>

<script src="{{asset('assets/js/plugin.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>)
@endsection
