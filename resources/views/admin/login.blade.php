
<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Admin Login Page</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

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
{{--                <li><a href="{{route('register')}}">Register</a></li>--}}
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{asset('images/auth.png')}}" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Login To Ashsupport Admin</h2>
                    </div>
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />

                    <form class="mt-16 mt-sm-32 mb-8" method="POST" action="{{ route('admin1') }}">
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
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <!--
                                        use code for form submit
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                    -->
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
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