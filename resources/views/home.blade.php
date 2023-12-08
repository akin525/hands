@extends("layouts.header")
@section('tittle', 'Homepage')
@section('content')

    <section class="hero-section" style="background-color: #fff8e5; background-image:url({{asset('new/assets/img/background.png')}})">
        <div class="container">
            <div class="row hero-one-slider owl-carousel owl-theme">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="hero-text">
                                <h1>Buy and sell anything you want</h1>
                                <h3>We are your local best home boarding service giving you complete</h3>
                                <a href="#" class="button">View Item</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="hero-img">
                                <img src="{{asset('shop.png')}}" alt="img">
                                <img src="{{asset('new/assets/img/hero-shaps.png')}}" alt="hero-shaps" class="img-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="hero-text">
                                <h1>Give a hand to make the better world.</h1>
                                <h3>Bringing Help and Hope to Hurting People</h3>
                                <a href="#" class="button">View Item</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="hero-img">
                                <img src="{{asset('shop1.png')}}" alt="img">
                                <img src="{{asset('new/assets/img/hero-shaps.png')}}" alt="hero-shaps" class="img-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('new/assets/img/hero-shaps-1.png')}}" alt="hero-shaps" class="img-2">
        <img src="{{asset('new/assets/img/dabal-foot-1.png')}}" alt="hero-shaps" class="img-3">
        <img src="{{asset('new/assets/img/hero-shaps-1.png')}}" alt="hero-shaps" class="img-4">
    </section>

    <section class="gap no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="welcome-to">
                        <h2>Welcome to Ashmakets Company</h2>
                        <p>We Grow Your Business Quick And Promoting Good And Services on ashmarkets.com</p>
                        <div class="row mt-lg-5">
                            <div class="col-md-6">
                                <div class="pet-grooming">
                                    <i><img src="{{asset('new/assets/img/welcome-to-1.png')}}" alt="icon"></i>
                                    <svg width="138" height="138" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#940c69"/>
                                    </svg>
                                    <a href="{{url('items')}}"><h4>Shops</h4></a>
                                    <p>Let's Join Hands To Make
                                        The World A Better Place.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="pet-grooming mb-0">
                                    <i><img src="{{asset('new/assets/img/welcome-to-2.png')}}" alt="icon"></i>
                                    <svg width="138" height="138" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#940c69"/>
                                    </svg>
                                    <a href="#"><h4>Grow Business</h4></a>
                                    <p>Learn How To Grow Your Business Quick</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dog-walker two d-block">
{{--                        <img src="{{asset('new/assets/img/puppies.png')}}" class="puppies" alt="puppies">--}}
                        <img src="{{asset('ca.jpeg')}}" class="w-100" alt="dog walker">
{{--                        <img src="{{asset('new/assets/img/line.png')}}" class="line" alt="line">--}}
{{--                        <img src="{{asset('new/assets/img/dabal-foot.png')}}" class="dabal-foot" alt="dabal-foot">--}}
                        <img src="{{asset('new/assets/img/haddi.png')}}" class="haddi" alt="haddi">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap">
        <div class="container">
            <div class="heading">
                <img src="{{asset('new/assets/img/heading-img.png')}}" alt="heading-img">
                <h6>Find Healthy Product By Category</h6>
                <h2>Browse By Categories</h2>
            </div>
            <div class="row slider-categorie owl-carousel owl-theme">
                <div class="col-lg-12 item">
                    <div class="food-categorie">
                        <img src="{{asset('new/assets/img/food-categorie-2.png')}}" alt="food-categorie">
                        <a href="our-products.html">Businesses </a>
                    </div>
                </div>
                <div class="col-lg-12 item">
                    <div class="food-categorie">
                        <img src="{{asset('new/assets/img/food-categorie-3.png')}}" alt="food-categorie">
                        <a href="our-products.html">Animal Feed</a>
                    </div>
                </div>
                <div class="col-lg-12 item">
                    <div class="food-categorie">
                        <img src="{{asset('new/assets/img/food-categorie-4.png')}}" alt="food-categorie">
                        <a href="our-products.html">Accessories</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="gap section-healthy-product" style="background-image: url({{asset('new/assets/img/healthy-product.png')}}); background-color: #f5f5f5;">
        <div class="container">
            <div class="heading">
                <img src="{{asset('new/assets/img/heading-img.png')}}" alt="heading-img">
                <h6>Find OurProduct</h6>
                <h2>Ashmarkets Products</h2>
            </div>
            <div class="row">
                @foreach($ads as $shop)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="healthy-product">
                        <div class="healthy-product-img">
                            <img width="300" src="{{url('/', $shop->cover_image)}}" alt="Product">
                            <ul class="star">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="add-to-cart">
                                <a href="{{route('ads-detail', $shop->id)}}">View Product</a>
                                <a href="#" class="heart-wishlist">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <span>{{$shop->category}}</span>
                        <a href="{{route('ads-detail', $shop->id)}}">{{$shop->advert_name}}</a>
                        <h6>₦{{number_format(intval($shop->amount *1))}}</h6>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-9">
                    <div class="deal-of-the-week">
                        <div class="healthy-product-img">
                            <h6>Deal of the Week</h6>
                            <img width="300" src="{{url('/', $shop->cover_image)}}" alt="Product">
                            <ul class="star">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="healthy-product">
                            <span{{$shop->category}}</span>
                            <a href="{{route('ads-detail', $shop->id)}}">{{$shop->advert_name}}</a>
                            <h6>₦{{number_format(intval($shop->amount *1))}}</h6>
                            <h5>up to 14% off</h5>
                            <div class="add-to-cart">
                                <a href="#" class="button">View Product</a>
                                <a href="#" class="heart-wishlist">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hour</li>
                                    <li><span id="minutes"></span>Min</li>
                                    <li class="mb-0"><span id="seconds"></span>Sec</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="count-text">
                        <img alt="img" src="{{asset('new/assets/img/fun-facts-1.png')}}">
                        <div>
                            <div class="d-flex justify-content-center">
                                <h2 class="count" data-number="100" ></h2>
                                <span>+</span>
                            </div>
                            <h3 class="text">Client Served</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="count-text">
                        <img alt="img" src="{{asset('new/assets/img/fun-facts-2.png')}}">
                        <div>
                            <div class="d-flex justify-content-center">
                                <h2 class="count" data-number="99" ></h2>
                                <span>%</span>
                            </div>
                            <h3 class="text">Client Served</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="count-text mb-sm-0">
                        <img alt="img" src="{{asset('new/assets/img/fun-facts-3.png')}}">
                        <div>
                            <div class="d-flex justify-content-center">
                                <h2 class="count" data-number="2" ></h2>
                                <span>k</span>
                            </div>
                            <h3 class="text">Client Served</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="count-text mb-0">
                        <img alt="img" src="{{asset('new/assets/img/fun-facts-4.png')}}">
                        <div>
                            <div class="d-flex justify-content-center">
                                <h2 class="count" data-number="400" ></h2>
                                <span>+</span>
                            </div>
                            <h3 class="text">Client Served</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gap">
        <div class="container">
            <div class="mockup">
                <h3>Register your business with us and <span>Get 5% off</span> their next order</h3>
                <div class="mockup-img">
                    <img src="{{asset('shop.png')}}" alt="mockup">
                </div>
                <div class="mockup-text">
                    <p>We are your best home boarding service giving you complete</p>
                    <a href="{{route('register')}}" class="button">Register Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
