<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>ADE'S SUPPORTING HANDS VENTURE CAPITAL</title>

    <!-- ================================================================
        ***Favicon***
    ================================================================= -->

    <link rel="shortcut icon"  href="https://ashsupport.com.ng//images/ash.jpeg">
    <meta content="Learn How To Grow Your Business Quick" name="description" />

    <!-- ================================================================
        ***CSS File***
    ================================================================= -->
    <!-- ================= *** Google Font-Poppins *** ======================= -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- ================= *** Animate CSS *** ======================= -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Bootstrap CSS *** ===================== -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Font-awesome CSS *** ================== -->
    <link href="{{asset('css/hover-min.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** icofont CSS *** ======================= -->
    <link href="{{asset('css/icofont.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** progressbar CSS *** =================== -->
    <link href="{{asset('css/jQuery-plugin-progressbar.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** bar CSS *** =========================== -->
    <link href="{{asset('css/bar.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** lightbox CSS *** ====================== -->
    <link href="{{asset('css/nivo-lightbox.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Owl Carousel CSS *** ================== -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">

    <!-- ================= *** Main CSS *** ========================== -->

    <link href="{{asset('css/custom/style.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home">
<div id="preloader">
    <div class="preloader_spinner"></div>
</div>
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<!-- preloader end -->
<!-- ==========================================================
    1.*Header_area start
============================================================ -->
@yield('styles')

<header>
    <div class="romana_header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="romana_header_top_left">
                        <ul>
                            <li><a href="https://instagram.com/ash_support?igshid=YmMyMTA2M2Y=">Instagram</a></li>
                            <li><a href="#">support</a></li>
                            <li><a href="{{url('contact')}}">contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-md-3 col-sm-4">
                    <div class="romana_header_top_right text-right">
                        <a href="tel:">Donation Hotline : 08169532894</a>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!-- Header-Top End -->
    <div class="romana_header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <div class="romana_logo">
                        <a href="{{url('home')}}"><img width="50" src="{{asset('images/logo.jpeg')}}" alt=""></a>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-sm-10">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <i class="icofont icofont-navigation-menu"></i>
                        </button>
                    </div>
                    <nav id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="navbar-link"><a href="{{url('home')}}">Home</a></li>
                            <li class="navbar-link"><a href="{{url('ads')}}">Advert</a></li>
                            <li><a href="{{url('about')}}">about</a></li>
                            <li><a href="{{url('event')}}">Promote Business</a></li>
{{--                            <li><a href="{{url('volunteer')}}">Fund Raising</a></li>--}}
{{--                            <li><a href="{{route('login')}}">Login Here</a></li>--}}
{{--                            <li><a href="{{url('contact')}}">Contact</a></li>--}}
                        </ul>
                        <!-- mega-menu End -->
                    </nav>
                    <!-- nav End -->
                    @if(Auth::check())
                        <ul class="cartSearch">
                            {{--                        <li class="search"><a href="#"><i class="icofont icofont-search"></i></a></li>--}}
                            <li class="donation"><a href="{{route('dashboard')}}" class="hvr-box-shadow-outset">Dashboard</a></li>
{{--                            <li class="donation"><a href="{{route('myaccount')}}" class="hvr-box-shadow-outset">{{Auth::user()->name}}</a></li>--}}
                        </ul>
                    @else
                    <ul class="cartSearch">
{{--                        <li class="search"><a href="#"><i class="icofont icofont-search"></i></a></li>--}}
{{--                        <li class="donation"><a href="{{route('login')}}" class="hvr-box-shadow-outset">Donate Now</a></li>--}}
                        <li class="donation"><a href="{{route('login')}}" class="hvr-box-shadow-outset">Login</a></li>
                    </ul>
                @endif
                    <!-- cartSearch End -->
                    <form action="#" class="searchForm">
                        <i class="icofont icofont-close"></i>
                        <input type="search" placeholder="Search now">
                        <input type="submit" value="&#xeded;">
                    </form>
                    <!-- searchForm End -->
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!-- Header Bottom End -->
</header>
<!-- Header End -->
@yield('content')

@yield('scripts')
<footer class="romana_footer_area romana_section_padding">
    <div class="romana_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer_left_text">
                        <div class="footer_logo">
                            <a href="#"><img src="{{asset('images/logo.jpeg')}}" alt="logo"></a>
                        </div>
{{--                        <p>Autem vel eum iriure dolor in lorem hendrerit velit esse consequat, vel illum dolore feugiat nulla facilisis at vero eros et accumsan et iusto odio dign issim qui blandit praesent lupt...</p>--}}
                    </div>
                </div>
                <!-- column End -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer_menu">
                        <h2>Recent Causes</h2>
                        <ul>
                            <li><i class="icofont icofont-thin-right"></i><a href="#">Food for children</a></li>
                            <li><i class="icofont icofont-thin-right"></i><a href="#">water for children</a></li>
                            <li><i class="icofont icofont-thin-right"></i><a href="#">education for children</a></li>
                            <li><i class="icofont icofont-thin-right"></i><a href="#">safety for children</a></li>
                            <li><i class="icofont icofont-thin-right"></i><a href="#">medical support</a></li>
                        </ul>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer_recent_news">
                        <h2>Recent News</h2>
                        <div class="romana_single_footer_news">
                            <div class="romana_single_footer_news_img">
                                <img src="images/footer_img1.jpg" alt="">
                            </div>
                            <div class="romana_single_footer_news_text">
                                <a href="news-detail.html"><h3>Childrens are sturving</h3></a>
                                <p>November 14, 2016</p>
                            </div>
                        </div>
                        <div class="romana_single_footer_news">
                            <div class="romana_single_footer_news_img">
                                <img src="images/footer_img2.jpg" alt="">
                            </div>
                            <div class="romana_single_footer_news_text">
                                <a href="news-detail.html"><h3>Childrens are sturving</h3></a>
                                <p>November 14, 2016</p>
                            </div>
                        </div>
                        <div class="romana_single_footer_news">
                            <div class="romana_single_footer_news_img">
                                <img src="images/footer_img3.jpg" alt="">
                            </div>
                            <div class="romana_single_footer_news_text">
                                <a href="news-detail.html"><h3>Childrens are sturving</h3></a>
                                <p>November 14, 2016</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column End -->
                <div class="col-md-2 col-md-offset-1 col-sm-6">
                    <div class="footer_contact">
                        <h2>contact us</h2>
                        <div class="romana_single_contact">
                            <p>Call us <span>08169532894</span></p>
                        </div>
                        <div class="romana_single_contact">
                            <p>Email us<span>ashsuppt@gmail.com</span></p>
                        </div>
                        <div class="romana_single_contact">
                            <address>
                                Address
                                <span>
                                    11A, Omoluabi Shopping Complex, Ogo-Oluwa Oshogbo <br>
                                Osun State
                                </span>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- column End -->
            </div>
        </div>
    </div>
    <!-- footer_top End -->
    <div class="romana_footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_footer_bottom_text text-center">
                        <p>&copy; All right reserved</p>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!-- footer_bottom End -->
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

<!-- ================= Main Js ==================== -->
<script src="js/jquery-3.1.0.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- ================= Bootstrap min Js =========== -->
<script src="js/bootstrap.min.js"></script>

<!-- ================= owl carousel min Js ======== -->
<script src="js/owl.carousel.min.js"></script>

<!-- ================= owl carousel min Js ======== -->
<script src="js/jQuery-plugin-progressbar.js"></script>

<!-- ================= barfiller  Js ============== -->
<script src="js/jquery.barfiller.js"></script>

<!-- ================= lightbox  Js =============== -->
<script src="js/nivo-lightbox.min.js"></script>

<!-- ================= Active Js ================== -->
<script src="js/active.js"></script>
</body>
