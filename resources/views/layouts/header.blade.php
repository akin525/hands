<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>@yield('tittle')</title>

    <!-- ================================================================
        ***Favicon***
    ================================================================= -->

    <link rel="shortcut icon"  href="https://ashsupport.com.ng//images/ash.jpeg">
    <meta content="Learn How To Grow Your Business Quick And Promoting Good And Services on Ashsupport.com.ng" name="description" />

    <!-- ================================================================
        ***CSS File***
    ================================================================= -->
    <!-- ================= *** Google Font-Poppins *** ======================= -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- ================= *** Animate CSS *** ======================= -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" type="text/css" href="{{asset('new/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('new/assets/css/slick-theme.css')}}">
    <!-- fancybox -->
    <link rel="stylesheet" href="{{asset('new/assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('new/assets/css/fontawesome.min.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('new/assets/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('new/assets/css/responsive.css')}}">
    <!-- color -->
    <link rel="stylesheet" href="{{asset('new/assets/css/color.css')}}">
    <!-- jQuery -->
    <script src="{{asset('new/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('new/assets/js/preloader.js')}}"></script>
</head>
<body>
<!-- loader -->
<div class="preloader">
    <div class="container">
        <div class="dot dot-1"></div>
        <div class="dot dot-2"></div>
        <div class="dot dot-3"></div>
    </div>
</div>
<!-- loader end -->
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<!-- preloader end -->
<!-- ==========================================================
    1.*Header_area start
============================================================ -->
@yield('styles')
<header>
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-slid">
                <div>
                    <div class="phone-data">
                        <div class="phone">
                            <i>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M0,81v350h512V81H0z M456.952,111L256,286.104L55.047,111H456.952z M30,128.967l134.031,116.789L30,379.787V128.967z
                   M51.213,401l135.489-135.489L256,325.896l69.298-60.384L460.787,401H51.213z M482,379.788L347.969,245.756L482,128.967V379.788z"></path>
                </svg>
                            </i><a href="mallto:info@ashmarkets.com">info@ashmarkets.com</a>
                        </div>
                        <div class="phone d-flax align-items-center">
                            <i>
                                <svg height="112" viewBox="0 0 24 24" width="112" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill="rgb(255255,255)" fill-rule="evenodd"><path d="m7 2.75c-.41421 0-.75.33579-.75.75v17c0 .4142.33579.75.75.75h10c.4142 0 .75-.3358.75-.75v-17c0-.41421-.3358-.75-.75-.75zm-2.25.75c0-1.24264 1.00736-2.25 2.25-2.25h10c1.2426 0 2.25 1.00736 2.25 2.25v17c0 1.2426-1.0074 2.25-2.25 2.25h-10c-1.24264 0-2.25-1.0074-2.25-2.25z"></path><path d="m10.25 5c0-.41421.3358-.75.75-.75h2c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-2c-.4142 0-.75-.33579-.75-.75z"></path><path d="m9.25 19c0-.4142.33579-.75.75-.75h4c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-4c-.41421 0-.75-.3358-.75-.75z"></path></g></svg>
                            </i>
                            <a class="me-3" href="callto:+2348169532894">08169532894</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-bar">
{{--            <a href="{{url('home')}}"><img width="50" src="{{asset('images/logo.jpeg')}}" alt="logo"></a>--}}
            <nav class="navbar">
                <ul class="navbar-links">
                    <li>
                        <a href="{{route('home')}}"><i>
                                <img alt="home" src="{{asset('new/assets/img/home.png')}}">
                            </i>home</a>
                    </li>

                    <li class="navbar-dropdown"><a href="{{url('items')}}">Shopping</a></li>
                    <li class="navbar-dropdown"><a href="{{url('about')}}">About</a></li>
                    <li class="navbar-dropdown"><a href="{{url('event')}}">Promote Business</a></li>

                    <li class="navbar-dropdown">
                        <a href="{{url('contact')}}">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="menu-end">
                <div class="bar-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="header-search-button search-box-outer">
                    <a href="javascript:void(0)" class="search-btn">
                        <svg height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_12" data-name="12"><path d="m21.71 20.29-2.83-2.82a9.52 9.52 0 1 0 -1.41 1.41l2.82 2.83a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zm-17.71-8.79a7.5 7.5 0 1 1 7.5 7.5 7.5 7.5 0 0 1 -7.5-7.5z"></path></g></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
        <div class="res-log">
            <a href="{{url('home')}}">
                <img width="50" src="{{asset('images/logo.jpeg')}}" alt="Responsive Logo">
            </a>
        </div>
        <ul>

            <li ><a href="JavaScript:void(0)">Home</a>
            </li>
            <li><a href="{{url('items')}}">Shopping</a></li>
            <li><a href="{{url('about')}}">About</a></li>
            <li><a href="{{url('event')}}">Promote Business</a></li>
            <li><a href="{{url('contact')}}">contacts</a></li>

        </ul>

        <ul class="social-icon">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>

        <a href="JavaScript:void(0)" id="res-cross"></a>
    </div>
</header>


<!-- Header End -->
@yield('content')

<footer style="background-color: #fff8e5; background-image:url({{asset('new/assets/img/background.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="logo">
                    <a href="#">
                        <img width="50" src="{{asset('images/logo.jpeg')}}" alt="logo">
                    </a>
                    <p>
                        Let's Join Hands To Make
                        The World A Better Place.</p>
                    <div class="phone">
                        <i>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <path d="M0,81v350h512V81H0z M456.952,111L256,286.104L55.047,111H456.952z M30,128.967l134.031,116.789L30,379.787V128.967z
                               M51.213,401l135.489-135.489L256,325.896l69.298-60.384L460.787,401H51.213z M482,379.788L347.969,245.756L482,128.967V379.788z"></path>
                            </svg>
                        </i><a href="mallto:info@ashmarkets.com">info@ashmarkets.com</a>
                    </div>
                    <div class="phone d-flax align-items-center">
                        <i>
                            <svg version="1.1" xml:space="preserve" width="682.66669" height="682.66669" viewBox="0 0 682.66669 682.66669" xmlns="http://www.w3.org/2000/svg"><clipPath clipPathUnits="userSpaceOnUse"><path d="M 0,512 H 512 V 0 H 0 Z"></path></clipPath><g transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)"><g><g clip-path="url(#clipPath2333)"><g transform="translate(256,92)"><path d="m 0,0 c -126.964,143.662 -160,165.23 -160,240 0,88.366 71.634,160 160,160 88.365,0 160,-71.634 160,-160 C 160,165.854 130.212,147.337 0,0 Z" style="fill:none;stroke:#000;stroke-width:40;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"></path></g><g transform="translate(316,372)"><path d="m 0,0 -80,-80 -40,40" style="fill:none;stroke:#000;stroke-width:40;stroke-linecap:square;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"></path></g></g></g></g>
                              </svg>
                        </i>
                        <p>11A, Omoluabi Shopping Complex, Ogo-Oluwa Oshogbo
                            Osun State</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="widget-title">
                    <h3>Quick Links</h3>
                    <div class="boder"></div>
                    <ul>
                        <li><i class="fa-solid fa-angle-right"></i><a href="javascript:void(0)">About-Us</a></li>
                        <li><i class="fa-solid fa-angle-right"></i><a href="javascript:void(0)">Contact</a></li>
                        <li><i class="fa-solid fa-angle-right"></i><a href="javascript:void(0)">View-Items</a></li>
                        <li><i class="fa-solid fa-angle-right"></i><a href="javascript:void(0)">Promote Business</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="working-hours">
                    <div class="widget-title">
                        <h3>working hours</h3>
                        <div class="boder"></div>
                        <div class="working-time">
                            <h6 class="pt-0">Monday - Saturday <span>08AM - 10PM</span></h6>
                            <h6>Sunday<span>08AM - 10PM</span></h6>
                            <div class="call-us">
                                <img width="50" src="{{asset('images/logo.jpeg')}}" alt="hadphon">
                                <div>
                                    <a href="#">08169532894</a>
                                    <span>Got Questions? Call us 24/7</span>
                                </div>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Ashmarkets - Copyright 2023.</p>
            <a href="#"><img src="{{asset('new/assets/img/visa.jpg')}}" alt="cad"></a>
        </div>
    </div>
    <img src="{{asset('new/assets/img/hero-shaps-1.png')}}" alt="hero-shaps" class="img-2">
    <img src="{{asset('new/assets/img/dabal-foot-1.png')}}" alt="hero-shaps" class="img-3">
    <img src="{{asset('new/assets/img/hero-shaps-1.png')}}" alt="hero-shaps" class="img-4">
</footer>
<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/2348169532894/?text=Goodday, My Username is " class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<!-- ======================================================
***Js Files***
=========================================================== -->
<div class="search-popup">
    <button class="close-search"><i class="fa-solid fa-arrow-right"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- search-popup end -->
<!-- progress -->
<div id="progress">
    <span id="progress-value"><i class="fa-solid fa-up-long"></i></span>
</div>
<!-- progress end -->
<!-- Bootstrap Js -->
@yield('scripts')
<script src="{{asset('new/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('new/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('new/assets/js/slick.min.js')}}"></script>
<!-- fancybox -->
<script src="{{asset('new/assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('new/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('new/assets/js/wrapper.js')}}"></script>
<script src="{{asset('new/assets/js/custom.js')}}"></script>
</body>
