@extends("layouts.header")
@section('tittle', 'Our Products')
@section('content')
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <section class="banner" style="background-color: #fff8e5; background-image:url({{asset('new/assets/img/banner.png')}})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>Our Products</h2>
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

    <section class="gap products-section">
        <div class="container">
            <div class="row">
                @include('ads.lay.category')
                <div class="col-lg-9">

                    <div class="row">
                        @foreach($ads as $shop)
                        <div class="col-md-4 col-sm-6">
                            <div class="healthy-product">
                                <div class="healthy-product-img">
                                    <img src="{{url('/', $shop->cover_image)}}" alt="product">
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

                        <ul class="pagination m-auto">
                            {{$ads->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
