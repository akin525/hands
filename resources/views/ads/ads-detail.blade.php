@extends("layouts.header")

@section('content')
    <section class="banner" style="background-color: #fff8e5; background-image:url({{asset('new/assets/img/banner.png')}})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>{{$ad->category}}</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Home</a>,
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

    <section class="gap no-bottom">
        <div class="container">
            <div class="row product-info-section">
                <div class="col-lg-7 p-0">
                    <div class="pd-gallery">
                        <ul class="pd-imgs">
                            <li class="li-pd-imgs nav-active">
                                <a href="JavaScript:void(0)">
                                    <img alt="product" src="{{url('/', $ad->cover_image)}}"

                            </li>
                            <li class="li-pd-imgs">
                                <a href="JavaScript:void(0)">
                                    <img alt="toys" src="{{url('/', $ad->other)}}">
                                </a>
                            </li>
                        </ul>
                        <div class="pd-main-img">
                            <img id="NZoomImg" alt="product" src="{{url('/', $ad->cover_image)}}" >

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-info p-60">
                        <div class="d-flex align-items-center">
                            <div class="start d-flex align-items-center">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span>12 Reviews</span>
                        </div>
                        <h3>{{$ad->advert_name}}</h3>
                        <form class="variations_form">
                            <div class="stock">
            <span class="price">
              <del>
              <span class="woocommerce-Price-amount">
              <bdi>
                <span class="woocommerce-Price-currencySymbol">₦</span>{{number_format(intval($ad->amount +3000 *1))}}</bdi>
              </span>
              </del>
              <ins>
                  <span class="woocommerce-Price-amount amount">
                    <bdi>
                    <span class="woocommerce-Price-currencySymbol">₦</span>{{number_format(intval($ad->amount *1))}}</bdi>
                  </span>
                </ins>
            </span>
                                <h6><span>In stock</span></h6>
                            </div>
{{--                            <div class="quantity">--}}
{{--                                <h6>Quantity</h6>--}}
{{--                                <input type="number" class="input-text" step="1" min="1" name="quantity" value="1">--}}
{{--                            </div>--}}
                            <div class="add-to-cart">
                                <a href="tel:{{$ad->number}}" class="button">Contact Customer</a>
{{--                                <a href="#" class="heart-wishlist">--}}
{{--                                    <i class="fa-regular fa-heart"></i>--}}
{{--                                </a>--}}

                                @if($user->chat_link != null)
                                    <div>
                                        <a  href="#" onclick="openPopup()" class="badge badge-danger"><i class="fa fa-message"></i>Message seller</a>
                                    </div>
                                <script type="text/javascript">
                                    function openPopup() {
                                        var popup = window.open("{{$user->chat_link}}", "PopupWindow", "width=500,height=500");
                                        // Customize the width and height values as per your needs
                                    }
                                </script>
                                @endif
                            </div>
                            <ul class="product_meta">
                                <li><span class="theme-bg-clr">Category:</span>
                                    <ul class="pd-cat">
                                        <li><a href="#">{{$ad->category}}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap">
        <div class="container">
            <div class="information">
                <h3>Product Details</h3>
                <div class="boder-bar"></div>
                <p>{!! $ad->content !!}</p>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script type="text/javascript">
        function loadTawkTo() {
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/619093ea6885f60a50bbb339/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        }
    </script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>

    <script src="{{asset('assets/js/plugin.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>)
@endsection
