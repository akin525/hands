@extends("ads.lay.header")

@section('content')

    <div class="proDetails section-padding2">
        <div class="container">

            <div class="row mb-40">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item"><a href="#">Mobile Phones</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-7 col-lg-12">

                    <div class="product-detail-desc" >
                        <div class="shop-details-gallery-slider global-slick-init slider-inner-margin sliderArrow" data-asNavFor=".shop-details-gallery-nav" data-infinite="true" data-arrows="false" data-dots="false" data-slidesToShow="1" data-swipeToSlide="true" data-fade="true" data-autoplay="true" data-autoplaySpeed="2500" data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>' data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-responsive='[{"breakpoint": 1800,"settings": {"slidesToShow": 1}},{"breakpoint": 1600,"settings": {"slidesToShow": 1}},{"breakpoint": 1400,"settings": {"slidesToShow": 1}},{"breakpoint": 1200,"settings": {"slidesToShow": 1}},{"breakpoint": 991,"settings": {"slidesToShow": 1}},{"breakpoint": 768, "settings": {"slidesToShow": 1}},{"breakpoint": 576, "settings": {"slidesToShow": 1}}]'>
                            <div class="single-main-image">
                                <a href="#" class="long-img">
                                    <img src="{{url('/', $ad->cover_image)}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="proDescription">

                        <div class="descriptionTop">
                            <h4><a href="#" class="detailsTittle">{{$ad->advert_name}}<i class="lar la-heart icon"></i></a></h4>
                            <p class="detailsCap">Posted on {{$ad->created_at}}</p>
                            <span class="detailsPricing">₦{{number_format(intval($ad->amount *1))}}</span>
                            <div class="infoSingle">
{{--                                <ul class="listing">--}}
{{--                                    <li class="listItem"><i class="las la-bed icon"></i>2 Bed</li>--}}
{{--                                    <li class="listItem"><i class="las la-bath icon"></i>2 Bath</li>--}}
{{--                                    <li class="listItem"><i class="las la-map-marker-alt icon"></i>8502 Preston Rd. Inglewood, Maine</li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>

                        <div class="descriptionMid">
                            <h4 class="priceTittle">Description</h4>
                            <p class="pera">{!! $ad->content !!}</p>
                        </div>

                        <div class="descriptionFooter">
                            <div class="btn-wrapper">
                                <a href="#" class="cmn-btn-outline2"><i class="lab la-font-awesome-flag icon"></i>Report</a>
                            </div>
                            <div class="socialWrap">
                                <a href="#" class="social"><i class="lab la-facebook-square"></i></a>
                                <a href="#" class="social"><i class="lab la-twitter"></i></a>
                                <a href="#" class="social"><i class="lab la-linkedin"></i></a>
                                <a href="#" class="social"><i class="lar la-bell"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="sellerMessage mb-24">
                        <div class="singleFlexitem mb-24">
                            <div class="recentImg">
                                <img src="{{asset('images/logo.jpeg')}}" alt="images">
                            </div>
                            <div class="recentCaption">
                                <h5><a href="#" class="featureTittle">{{$ad->username}}<img src="{{asset('assets/img/icon/checkMark.svg')}}" class="icon" alt="images"></a></h5>
                                <p class="featureCap">Member since 2019</p>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="input-form">

                                        <div class="icon"><i class="las la-phone"></i>
                                            <a href="tel:{{$ad->number}}"> {{$ad->number}} </a>
                                        </div>
                                    </div>
                                </div>
                                <form action="#" class="contactSeller">
                                <div class="col-lg-4">
                                    <div class="btn-wrapper mb-20">
                                        <a href="tel:{{$ad->number}}" class="cmn-btn-outline3 w-100">Reveal Contact</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="btn-wrapper">
                            <a href="#" class="cmn-btn-outline2 w-100"><i class="las la-comments icon"></i>Message seller</a>
                        </div>
                    </div>
                    <section class="recentListing">
                        @foreach($all as $a)
                            <div class="borderStyle style1 wow fadeInLeft social" data-wow-delay="0.1s">
                                <div class="singleFlexitem mb-24">
                                    <div class="recentImg">
                                        <img src="{{url('/', $a->cover_image)}}" alt="images">
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="{{route('ads-detail', $a->id)}}" class="featureTittle">{{$a->advert_name}}</a></h5>
                                        <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <span class="featurePricing">₦{{number_format(intval($a->amount *1))}}</span>
                                        <div class="btn-wrapper">
                                            <span class="pro-btn1">RENOVETED</span>
                                            <span class="pro-btn2">PROMOTED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>

    <script src="{{asset('assets/js/plugin.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>)
@endsection
