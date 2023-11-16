
<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Ashmarkets Login </title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://ashmarkets.com//images/logo.jpeg">
    <link rel="icon"  sizes="32x32" href="https://ashmarkets//images/logo.jpeg">
    <link rel="icon"  sizes="16x16" href="https://ashmarkets//images/logo.jpeg">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body class="login-page">
{{--<div class="pre-loader">--}}
{{--    <div class="pre-loader-box">--}}
{{--        <div class="loader-logo"><img width="200" src="{{asset('images/logo.jpeg')}}" alt=""></div>--}}
{{--        <div class='loader-progress' id="progress_div">--}}
{{--            <div class='bar' id='bar1'></div>--}}
{{--        </div>--}}
{{--        <div class='percent' id='percent1'>0%</div>--}}
{{--        <div class="loading-text">--}}
{{--            ADE'S SUPPORTING HANDS...--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{url('home')}}">
                <img width="80" src="{{asset('images/logo.jpeg')}}" alt="">
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
{{--                <img src="{{asset('images/auth.png')}}" alt="">--}}
                <center>
                <video width="600" controls autoplay loop>
                    <source src="{{asset('vid.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                </center>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Login To Ashmarkets</h2>
                    </div>
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />

                    <form class="mt-16 mt-sm-32 mb-8" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="select-role">
                        </div>
                        <div class="input-group custom">
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-email"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="**********">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password"><a href="{{ route('password.request') }}">Forgot Password</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <style>
                                        .button {
                                            position: relative;
                                            padding: 8px 16px;
                                            background: #009579;
                                            border: none;
                                            outline: none;
                                            border-radius: 2px;
                                            cursor: pointer;
                                        }

                                        .button:active {
                                            background: #007a63;
                                        }

                                        .button__text {
                                            font: bold 20px "Quicksand", san-serif;
                                            color: #ffffff;
                                            transition: all 0.2s;
                                        }

                                        .button--loading .button__text {
                                            visibility: hidden;
                                            opacity: 0;
                                        }

                                        .button--loading::after {
                                            content: "";
                                            position: absolute;
                                            width: 16px;
                                            height: 16px;
                                            top: 0;
                                            left: 0;
                                            right: 0;
                                            bottom: 0;
                                            margin: auto;
                                            border: 4px solid transparent;
                                            border-top-color: #ffffff;
                                            border-radius: 50%;
                                            animation: button-loading-spinner 1s ease infinite;
                                        }

                                        @keyframes button-loading-spinner {
                                            from {
                                                transform: rotate(0turn);
                                            }

                                            to {
                                                transform: rotate(1turn);
                                            }
                                        }
                                    </style>
{{--                                    <button type="button" class="button" onclick="this.classList.toggle('button--loading')">--}}
{{--                                        <span class="button__text">Save</span>--}}
{{--                                    </button>--}}

                                    <!--
                                        use code for form submit
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                    -->
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="this.classList.toggle('button--loading') ">
                                        <span class="button__text">login</span>

                                    </button>
                                    <script>
                                        const btn = document.querySelector(".button");

                                        btn.classList.add("button--loading");
                                        btn.classList.remove("button--loading");

                                    </script>
                                </div>
                                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
                                <div class="input-group mb-0">
                                    <a class="btn btn-outline-primary btn-lg btn-block" href="{{route('register')}}">Register To Create Account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
