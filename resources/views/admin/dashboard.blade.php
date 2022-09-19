@extends("admin.layout.sidebar")

@section('content')

    <div class="card-box pd-20  mb-30">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="vendors/images/banner-img.png" alt="">
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
                            <img src="vendors/images/icon-Cash.png" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval(\Illuminate\Support\Facades\Auth::user()->balance *1))}}</div>
                        <div class="weight-600 font-14">Wallet Balance</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div class="pricing-icon">
                            <img src="vendors/images/icon-Cash.png" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval($user['request']*1))}}</div>
                        <div class="weight-600 font-14">All Request</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div class="pricing-icon">
                            <img src="vendors/images/icon-Cash.png" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval($user['request1']*1))}}</div>
                        <div class="weight-600 font-14">All Approve Request</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <div class="pricing-icon">
                            <img src="vendors/images/icon-Cash.png" alt="">
                        </div>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">₦{{number_format(intval($user['request2']*1))}}</div>
                        <div class="weight-600 font-14">All Pending Request</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
