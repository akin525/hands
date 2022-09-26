@extends("admin.layout.sidebar")

@section('content')

    <div class="card-box pd-20  mb-30">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{asset('vendors/images/banner-img.png')}}" alt="">
            </div>
            <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    Welcome back <div class="weight-600 font-30 text-blue">{{\Illuminate\Support\Facades\Auth::user()->name}}!</div>
                </h4>
                <p class="font-18 max-width-600">ur work would be unimaginable without the people who work eagerly to improve the lives of network individuals at home and abroad.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data ">
                        <div class="pricing-icon">
                            <img src="{{asset('vendors/images/icon-Cash.png')}}" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval($all['request'] *1))}}</div>
                        <div class="weight-600 font-14">Total Fund Request</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div class="pricing-icon">
                            <img src="{{asset('vendors/images/icon-Cash.png')}}" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval($all['wallet']*1))}}</div>
                        <div class="weight-600 font-14">All User Wallet</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div class="pricing-icon">
                            <img src="{{asset('vendors/images/icon-Cash.png')}}" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval($all['pendingr']*1))}}</div>
                        <div class="weight-600 font-14">All Pending Request</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div class="pricing-icon">
                            <img src="{{asset('vendors/images/icon-Cash.png')}}" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval($all['pendingr']*1))}}</div>
                        <div class="weight-600 font-14">All Pending Request</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
{{--                    <div class="progress-data">--}}
{{--                        <div id="chart1"></div>--}}
{{--                    </div>--}}
                    <div class="widget-data">
                        <div class="h4 mb-0">{{$all['alluser']}}</div>
                        <div class="weight-600 font-14">Total Users</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
{{--                    <div class="progress-data">--}}
{{--                        <div id="chart2"></div>--}}
{{--                    </div>--}}
                    <div class="widget-data">
                        <div class="h4 mb-0">{{$all['todayuser']}}</div>
                        <div class="weight-600 font-14">Today User</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
{{--                    <div class="progress-data">--}}
{{--                        <div id="chart3"></div>--}}
{{--                    </div>--}}
                    <div class="widget-data">
                        <div class="h4 mb-0">{{$today['advertp']}}</div>
                        <div class="weight-600 font-14">Today Advert</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
{{--                    <div class="progress-data">--}}
{{--                        <div id="chart4"></div>--}}
{{--                    </div>--}}
                    <div class="widget-data">
                        <div class="h4 mb-0">{{$today['requesta']}}</div>
                        <div class="weight-600 font-14">Today Request</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('vendors/scripts/core.js')}}"></script>
    <script src="{{asset('vendors/scripts/script.min.js')}}"></script>
    <script src="{{asset('vendors/scripts/process.js')}}"></script>
    <script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
    <script src="{{asset('src/plugins/jQuery-Knob-master/jquery.knob.min.js')}}"></script>
    <script src="{{asset('src/plugins/highcharts-6.0.7/code/highcharts.js')}}"></script>
    <script src="{{asset('src/plugins/highcharts-6.0.7/code/highcharts-more.js')}}"></script>
    <script src="{{asset('src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('vendors/scripts/dashboard2.js')}}"></script>
@endsection
