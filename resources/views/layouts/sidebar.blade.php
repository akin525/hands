<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>ADE'S SUPPORTING HANDS VENTURE CAPITAL</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://ashsupport.com.ng//images/ash.jpeg">
    <link rel="icon"  sizes="32x32" href="https://ashsupport.com.ng//images/ash.jpeg">
    <link rel="icon"  sizes="16x16" href="https://ashsupport.com.ng//images/ash.jpeg">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/dropzone/src/dropzone.css')}}">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
    @yield('styles')
</head>
<body>
{{--<div class="pre-loader">--}}
{{--    <div class="pre-loader-box">--}}
{{--        <center>--}}
{{--        <div class="loader-logo"><img width="200" src="{{asset('images/logo.jpeg')}}" alt=""></div>--}}
{{--        </center>--}}
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

<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        <div class="header-search">
            <form>
                <div class="form-group mb-0">
                    <i class="dw dw-search2 search-icon"></i>
                    <input type="text" class="form-control search-input" placeholder="Search Here">
                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                            <i class="ion-arrow-down-c"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control form-control-sm form-control-line" type="text">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">

                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
                            @if(Auth::user()->profile==NULL)
                                <img src="{{asset('images/logo.jpeg')}}" alt="">
                            @else
                                <img width="200" src="{{url('/', Auth::user()->profile)}}" alt="" >
                            @endif
						</span>
                    <span class="user-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{route('myaccount')}}"><i class="dw dw-user1"></i> Profile</a>
{{--                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>--}}
{{--                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>--}}
                    <a class="dropdown-item" href="{{route('logout')}}"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('dashboard')}}">
            <img src="{{asset('images/logo.png')}}" alt="" class="dark-logo">
            <center>
            <img width="200" src="{{asset('images/lab.jpeg')}}" alt="" class="light-logo">
            </center>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{url('home')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('dashboard')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-board"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                @if(Auth::user()->usertype=='ads')
                <li>
                    <a href="{{url('business')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-bookmark"></span><span class="mtext">Business Training</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('ads')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-bookmark"></span><span class="mtext">All Advert</span>
                    </a>
                </li>
                @endif
                    @if(Auth::user()->usertype=='fund')
                <li>
                    <a href="{{url('fundraise')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-money"></span><span class="mtext">Fund Raising</span>
                    </a>
                </li>
                    @endif
{{--                <li>--}}
{{--                    <a href="{{url('donate')}}" class="dropdown-toggle no-arrow">--}}
{{--                        <span class="micon dw dw-money"></span><span class="mtext">Donation</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                @if(Auth::user()->usertype=='ads')
                <li>
                    <a href="{{url('advert')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-bookmark"></span><span class="mtext">Advertisement</span>
                    </a>
                </li>
                @endif
                    @if(Auth::user()->usertype=='fund')
                <li>
                    <a href="{{route('allrequest')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-hammer"></span><span class="mtext">My Request</span>
                    </a>
                </li>

{{--                <li>--}}
{{--                    <a href="{{route('dashboard')}}" class="dropdown-toggle no-arrow">--}}
{{--                        <span class="micon dw dw-settings"></span><span class="mtext">Setting</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                    @endif
                    <li>
                        <a href="{{route('myaccount')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-user"></span><span class="mtext">My Account</span>
                        </a>
                    </li>
                <li>
                    <a href="{{route('logout')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-light-bulb"></span><span class="mtext">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20">
    @yield('content')
    </div>
</div>

@yield('scripts')
<!-- js -->
<script src="{{asset('vendors/scripts/core.js')}}"></script>
<script src="{{asset('vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('vendors/scripts/process.js')}}"></script>
<script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
<script src="{{asset('src/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/scripts/dashboard.js')}}"></script>

<!-- buttons for Export datatable -->
<script src="{{asset('src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/buttons.print.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/pdfmake.min.js')}}"></script>
<script src="{{asset('src/plugins/datatables/js/vfs_fonts.js')}}"></script>
<!-- Datatable Setting js -->
<script src="{{asset('vendors/scripts/datatable-setting.js')}}"></script>
<script src="{{asset('src/plugins/dropzone/src/dropzone.js')}}"></script>
<script>
    Dropzone.autoDiscover = false;
    $(".dropzone").dropzone({
        addRemoveLinks: true,
        removedfile: function(file) {
            var name = file.name;
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    });
</script>
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
<a href="https://wa.me/2348169532894/?text=Goodday, My Username is {{Auth::user()->username}}" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
</body>
</html>
