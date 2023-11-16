@extends("layouts.header")
@section('tiitle', 'About-Us')
@section('content')

    <section class="banner" style="background-color: #fff8e5; background-image:url({{asset('new/assets/img/banner.png')}})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>About-Us</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            {{--                            <li class="breadcrumb-item active" aria-current="page">shop</li>--}}
                            {{--                            <li class="breadcrumb-item active" aria-current="page">Our Products</li>--}}
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img">
                        <div class="banner-img-1">
                            <svg width="260" height="260" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#fa441d"></path>
                            </svg>
                            <img src="{{asset('shop1.png')}}" alt="banner">
                        </div>
                        <div class="banner-img-2">
                            <svg width="320" height="320" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#fa441d"></path>
                            </svg>
                            <img src="{{asset('shop.png')}}" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('new/assets/img/hero-shaps-1.png')}}" alt="hero-shaps" class="img-2">
        <img src="{{asset('new/assets/img/hero-shaps-1.png')}}" alt="hero-shaps" class="img-4">
    </section>

    <section class="gap about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading two">
                        <h2>Welcome To AshMarkets</h2>
                    </div>
                    <div class="love-your-pets">
                        <p>We make buying-selling online easier</p>
                        <ul class="list">
                            <li><img src="{{asset('new/assets/img/list.png')}}" alt="list">Our story started in 2022</li>
                            <li><img src="{{asset('new/assets/img/list.png')}}" alt="list">We’re working to make the world a better place</li>
                            <li><img src="{{asset('new/assets/img/list.png')}}" alt="list">Experienced pet owners and animal lovers</li>
                            <li><img src="{{asset('new/assets/img/list.png')}}" alt="list">Hungry horses: whatever the size of your pe</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dogs-img">
                        <img src="{{asset('shop3.png')}}" alt="dogs">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url(assets/img/healthy-product.png); background-color: #f5f5f5;" class="gap care-services">
        <div class="container">
            <div class="heading">
                <img src="{{asset('new/assets/img/heading-img.png')}}" alt="heading-img">
                <h6>What We Provide</h6>
                <h2>Marketing Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 p-lg-0 col-md-6 col-sm-6">
                    <div class="pet-grooming">
                        <i><img src="{{asset('new/assets/img/welcome-to-3.png')}}" alt="icon"></i>
                        <svg width="138" height="138" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#940c69"></path>
                        </svg>
                        <a href="#"><h4>Online Order</h4></a>
{{--                        <p>Lorem ipsum dolor sit amet ur adipiscing elit, sed do eiu incididunt ut labore et.</p>--}}
                    </div>
                </div>
                <div class="col-lg-3 p-lg-0 col-md-6 col-sm-6">
                    <div class="pet-grooming">
                        <i><img src="{{asset('new/assets/img/welcome-to-1.png')}}" alt="icon"></i>
                        <svg width="138" height="138" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#940c69"></path>
                        </svg>
                        <a href="#"><h4>Strategic Planning</h4></a>
{{--                        <p>Lorem ipsum dolor sit amet ur adipiscing elit, sed do eiu incididunt ut labore et.</p>--}}
                    </div>
                </div>
                <div class="col-lg-3 p-lg-0 col-md-6 col-sm-6">
                    <div class="pet-grooming">
                        <i><img src="{{asset('new/assets/img/welcome-to-4.png')}}" alt="icon"></i>
                        <svg width="138" height="138" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#940c69"></path>
                        </svg>
                        <a href="#"><h4>Digital Marketing</h4></a>
{{--                        <p>Lorem ipsum dolor sit amet ur adipiscing elit, sed do eiu incididunt ut labore et.</p>--}}
                    </div>
                </div>
                <div class="col-lg-3 p-lg-0 col-md-6 col-sm-6">
                    <div class="pet-grooming">
                        <i><img src="{{asset('new/assets/img/welcome-to-2.png')}}" alt="icon"></i>
                        <svg width="138" height="138" viewBox="0 0 673 673" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.82698 416.603C-19.0352 298.701 18.5108 173.372 107.497 90.7633L110.607 96.5197C24.3117 177.199 -12.311 298.935 15.0502 413.781L9.82698 416.603ZM89.893 565.433C172.674 654.828 298.511 692.463 416.766 663.224L414.077 658.245C298.613 686.363 175.954 649.666 94.9055 562.725L89.893 565.433ZM656.842 259.141C685.039 374.21 648.825 496.492 562.625 577.656L565.413 582.817C654.501 499.935 691.9 374.187 662.536 256.065L656.842 259.141ZM581.945 107.518C499.236 18.8371 373.997 -18.4724 256.228 10.5134L259.436 16.4515C373.888 -10.991 495.248 25.1518 576.04 110.708L581.945 107.518Z" fill="#940c69"></path>
                        </svg>
                        <a href="#"><h4>Advertising Campaigns</h4></a>
{{--                        <p>Lorem ipsum dolor sit amet ur adipiscing elit, sed do eiu incididunt ut labore et.</p>--}}
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


@endsection
