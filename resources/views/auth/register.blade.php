<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Ashsupport.com.ng </title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://ashsupport.com.ng//images/ash.jpeg">
    <link rel="icon"  sizes="32x32" href="https://ashsupport.com.ng//images/ash.jpeg">
    <link rel="icon"  sizes="16x16" href="https://ashsupport.com.ng//images/ash.jpeg">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
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
<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{url('home')}}">
                <img width="80" src="{{asset('images/logo.jpeg')}}" alt="">
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{asset('images/auth.png')}}" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Register To Helping Hands</h2>
                    </div>
                        <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="select-role">
                                    <div class="input-group custom">
                                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group custom">
                                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Fullname" required>
                                        <div class="input-group-append custom">
                                            <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                        </div>
                                    </div>
                            <div class="input-group custom">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-email"></i></span>
                                </div>
                            </div>
                                <div class="input-group custom">
                                    <input type="number" name="number" class="form-control form-control-lg" placeholder="Enter your phone number">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="dw dw-"></i></span>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <select  name="usertype" class="form-control form-control-lg" >
                                        <option value="fund">Fund Request</option>
                                        <option value="ads">Advertise On Website</option>
                                    </select>
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="dw dw-"></i></span>
                                    </div>
                                </div>
                            <div class="input-group custom">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter your password">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                                <div class="input-group custom">
                                    <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirmed Password">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <!--
                                            use code for form submit
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                        -->
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="{{route('login')}}">Login</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- success Popup html Start -->
<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-20">Form Submitted!</h3>
                <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            </div>
            <div class="modal-footer justify-content-center">
                <a href="login.html" class="btn btn-primary">Done</a>
            </div>
        </div>
    </div>
</div>
<!-- success Popup html End -->
<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>

