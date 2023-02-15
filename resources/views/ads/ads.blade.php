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
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-5">
                            <div class="hero-man d-none d-lg-block">
                                <img src="{{asset('assets/img/hero/hero-man3.png')}}" alt="images" class="tilt-effect " data-animation="fadeInRight" data-delay="0.2s">

                                <div class=" shapeHero shapeHero6" data-animation="fadeInRight" data-delay="0.8s">
                                    <img src="{{asset('assets/img/hero/heroShape6.png')}}" alt="images" class="heartbeat">
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
                            <a href="{{route('advert')}}" class="cmn-btn2  mb-10 wow fadeInLeft" data-wow-delay="0.3s">Post your Items</a>
                            <a href="{{url('promotion')}}" class="cmn-btn2 mb-10 wow fadeInRight" data-wow-delay="0.3s">Browse Items</a>
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
    <section class="featureListing bottom-padding2">
        <div class="container">
            <a href="{{url('/', $banner->picture)}}"> <img width="800" src="{{url('/', $banner->picture)}}" alt="banner"></a>
            <br>
            <br>
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle mb-50">
                        <h2 class="tittle "><span class="shape"></span> Featured Listings </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($sponsor as $ad)

                    <div class="col-lg-3">

                        <div class="singleFeature mb-24">
                            <div class="">
                                <a href="{{route('ads-detail1', $ad->id)}}"><img width="200" src="{{url('/', $ad->cover_image)}}" alt="images"></a>
                            </div>
                            <div class="featureCaption">
                                <h4><a href="{{route('ads-detail1', $ad->id)}}" class="featureTittle">{{$ad->advert_name}}</a></h4>
                                {{--                                <p class="featureCap">Los Angels, CA · <strong class="subCap">12hrs ago</strong></p>--}}
                                <span class="featurePricing">₦{{number_format(intval($ad->amount *1))}}</span>
                                <div class="btn-wrapper">
                                    <span class="pro-btn2">Sponsor By Ashsupport</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            @foreach($ads as $ad)

                    <div class="col-lg-3">

                        <div class="singleFeature mb-24">
                            <div class="">
                                <a href="{{route('ads-detail', $ad->id)}}"><img width="200" src="{{url('/', $ad->cover_image)}}" alt="images"></a>
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
                <button type="button" class="btn btn-outline-secondary" onclick="window.location='{{url('promotion')}}'">See More</button>
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
                @foreach($plan as $pa)
                <div class="col-lg-4 col-md-6">

                    <div class="singlePrice mb-24">
                        <h4 class="priceTittle">{{$pa->plan}}</h4>
                        <ul class="listing">
                            <li class="listItem"><i class="las la-check icon"></i><blockquote class="priceTag">Your item will be promoted for {{$pa->days}} Days </blockquote></li>
                            <li class="listItem"><i class="las la-check icon"></i><blockquote class="priceTag">{{$pa->narration}}</blockquote> </li>
                            <li class="listItem"><i class="las la-check icon"></i><blockquote class="priceTag">Your item will be featured for {{$pa->days}} days</blockquote></li>
                        </ul>
                        <span class="price">₦{{number_format(intval($pa->amount *1))}}<span class="subTittle"> /For {{$pa->limit}} Post</span></span>
                        <div class="btn-wrapper">
                            <a href="{{route('upgrade')}}" class="cmn-btn-outline1">Get Started</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
