<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="ads, advertise, advertising, classified, classified ads, database, directory, jobs, listing, local, portal" />
    <meta name="description" content="ads, advertise, advertising, classified, classified ads, on Ashsupport.com.ng" />
    <title>Classified Ads</title>
    <link rel="icon"  sizes="20x20" href="https://ashsupport.com.ng//images/ash.jpeg">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/plugin.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main-style.css')}}">
    @yield('styles')
</head>
<body>
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<header class="header-style-01 whiteHeader">
<nav class="navbar navbar-area headerBg2 navbar-expand-lg  plr">
    <div class="container-fluid container-two nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="{{url('ads')}}" class="logo">
                    <img width="50" src="{{asset('images/ash.jpeg')}}" alt="images">
                </a>
            </div>

            <a href="#" class="click_show_icon"><i class="las la-ellipsis-v"></i> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="NavWrapper">
            <div class="sibeBar-Wrapper">



            </div>

            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <li><a href="{{url('home')}}">Home</a></li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <li><a href="{{route('dashboard')}}">My Account</a></li>
                    @endif
                    <li><a href="{{url('listads')}}">All Ads</a></li>
                    <li><a href="{{url('about')}}">About us</a></li>
                    <li><a href="{{url('contact')}}">contact</a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.ashsupport">Download App</a></li>
                </ul>
            </div>
        </div>

        <div class="nav-right-content">

            <ul class="header-cart">
                <li class="single userAccount">

                    <button class="user"><i class="las la-user-alt"></i></button>

                    <div class="userAccount-wrapper">
                        <h6 class="ac-title">User Account</h6>
                        <ul class="ac-list">
                            <li class="list">
                                <a class="list-title" href="{{route('dashboard')}}"> <i class="lar la-user-circle icon"></i> My Account </a>
                            </li>
                            <li class="list">
                                <a class="list-title" href="{{route('logout')}}"> <i class="las la-sign-out-alt icon"></i> Logout</a>
                            </li>

                            <li class="list">
                                <a class="list-title" href="https://play.google.com/store/apps/details?id=com.ashsupport"> <i class="las la-sign-out-alt icon"></i> Download App</a>
                            </li>
                        </ul>
                    </div>



                </li>
                <li class="single">
                    <div class="btn-wrapper">
                        <a href="#" class="cmn-btn1 popup-modal">
                            <i class="las la-plus-square"></i><span class="text">Post your ad</span>
                        </a>
                    </div>
                </li>
                <li class="single">

                    <div class="select-itms">
                        <select name="select" class="niceSelect">
                            <option value="">English</option>
                            <option value="">Arabic</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>
<main>

    <div class="body-overlay-desktop"></div>
    <div class="modal-wrapper text-center">
        <div class="close-icon">
            <i class="las la-times"></i>
        </div>
        <h2 class="modialTittle">Post Your <span>Ad</span> ?</h2>
        <div class="btn-wrapper">
            <a href="{{route('advert')}}" class="cmn-btn02">Yes , Post ad</a>
        </div>
    </div>
@yield('content')
</main>

<footer>
    <div class="footerWrapper footerStyleTwo">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-widget widget  mb-24">
                            <div class="footer-tittle footer-tittle2">
                                <div class="footer-logo mb-40">
                                    <a href="#"><img width="100" src="{{asset('images/ash.jpeg')}}" alt="images"></a>
                                </div>
                                <ul class="listing">
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#" class="singleLinks"><i class="las la-map-marker icon"></i>11A, Omoluabi Shopping Complex, Ogo-Oluwa Oshogbo Osun State</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#" class="singleLinks"><i class="las la-phone icon"></i>08169532894</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.3s"><a href="#" class="singleLinks"><i class="las la-envelope icon"></i><span class="__cf_email__" data-cfemail="ashsuppt@gmail.com">ashsuppt@gmail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget widget  mb-24">
                            <div class="footer-tittle">
                                <h4 class="footerTittle">Categories</h4>
                                <ul class="listing">
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#" class="singleLinks"> Electronics</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#" class="singleLinks"> Mobile</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#" class="singleLinks"> Vehicles</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#" class="singleLinks"> Appliances</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.3s"><a href="#" class="singleLinks"> Fashions</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.3s"><a href="#" class="singleLinks"> Eductation</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.4s"><a href="#" class="singleLinks"> Property</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget widget  mb-24">
                            <div class="footer-tittle">
                                <h4 class="footerTittle">About</h4>
                                <ul class="listing">
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#" class="singleLinks"> About us</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#" class="singleLinks"> Blog</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#" class="singleLinks"> Press</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#" class="singleLinks"> Jobs</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.3s"><a href="#" class="singleLinks"> In Press</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.3s"><a href="#" class="singleLinks"> Terms & Conditions</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.4s"><a href="#" class="singleLinks"> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget widget  mb-24">
                            <div class="footer-tittle">
                                <h4 class="footerTittle">Help & support</h4>
                                <ul class="listing">
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#" class="singleLinks"> Contact</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#" class="singleLinks"> Faq</a></li>
                                    <li class="listItem wow fadeInUp" data-wow-delay="0.3s"><a href="#" class="singleLinks"> Safety Informations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="footer-widget widget  mb-24">
                            <div class="footer-tittle footer-tittle2">
                                <h4 class="footerTittle">Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                    <p class="pera wow fadeInUp" data-wow-delay="0.0s">Be the first one to know news, offers and events weekly in your. Unsubscribe whenever you like with one click.</p>
                                </div>
                            </div>

                            <div class="footer-form mt-10 wow fadeInRight" data-wow-delay="0.1s">
                                <div class="form-row mb-20">
                                    <form class="newsletter-footer" target="_blank" action="#" method="get">
                                        <input class="input" type="email" name="email" placeholder="Your Email Address">
                                        <div class="btn-wrapper form-icon">
                                            <button class="btn-default btn-rounded" type="submit" name="submit"> Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="footer-social2 ">
                                    <a href="#" class="wow fadeInUp social" data-wow-delay="0.1s"><i class="lab la-facebook-f icon"></i></a>
                                    <a href="#" class="wow fadeInUp social" data-wow-delay="0.2s"><i class="lab la-youtube icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p class="pera wow fadeInDown" data-wow-delay="0.0s">© 2022 , Ashsupport All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="mouseCursor cursorOuter"></div>
<div class="mouseCursor cursorInner"></div>

<div class="progressParent">
    <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

@yield('scripts')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>--}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="{{asset('assets/js/plugin.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>

</body>

<!-- Mirrored from bytesed.com/tf/listocean/index_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Sep 2022 15:27:51 GMT -->
</html>


