@extends("layouts.sidebar")

@section('content')
        <div class="card-box pd-20  mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    @if(Auth::user()->profile==NULL)
                    <img src="{{asset('vendors/images/banner-img.png')}}" alt="">
                    @else
                        <img src="{{url('/', Auth::user()->profile)}}" alt="">
                    @endif
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back <div class="weight-600 font-30 text-blue">{{\Illuminate\Support\Facades\Auth::user()->name}}!</div>
                    </h4>
                    <p class="font-18 max-width-600">ur work would be unimaginable without the people who work eagerly to improve the lives of network individuals at home and abroad.</p>
                </div>
            </div>
        </div>
        @if (Auth::user()->usertype=='fund')
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
        <div class="row">
            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Our Business Range</h2>
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <div class="card-box pricing-card mt-30 mb-30">
                                <div class="pricing-icon">
                                    <img src="vendors/images/icon-Cash.png" alt="">
                                </div>
                                <div class="price-title">
                                 Starter
                                </div>
                                <div class="pricing-price">
                                    <sup>₦</sup>50,000
                                </div>
                                <div class="cta">
                                    <a href="{{route('request','STARTER')}}" class="btn btn-primary btn-rounded btn-lg">Request Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="card-box pricing-card mt-30 mb-30">
                                <div class="pricing-icon">
                                    <img src="vendors/images/icon-debit.png" alt="">
                                </div>
                                <div class="price-title">
                                    Expert
                                </div>
                                <div class="pricing-price">
                                    <sup>₦</sup>100,000<sub></sub>
                                </div>
                                <div class="cta">
                                    <a href="{{route('request','EXPERT')}}" class="btn btn-primary btn-rounded btn-lg">Request Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="card-box pricing-card mt-30 mb-30">
                                <div class="pricing-icon">
                                    <img src="vendors/images/icon-online-wallet.png" alt="">
                                </div>
                                <div class="price-title">
                                    Master
                                </div>
                                <div class="pricing-price">
                                    <sup>₦</sup>30,000<sub></sub>
                                </div>

                                <div class="cta">
                                    <a href="#" class="btn btn-primary btn-rounded btn-lg">Request Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
{{--                    <h2 class="h4 mb-20">Lead Target</h2>--}}
                    <img src="images/aw.jpeg" alt="">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Our Business Range</h2>
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <div class="card-box pricing-card mt-30 mb-30">
                                <div class="pricing-icon">
                                    <img src="vendors/images/icon-Cash.png" alt="">
                                </div>
                                <div class="price-title">
                                    Ultimate
                                </div>
                                <div class="pricing-price">
                                    <sup>₦</sup>20,000
                                </div>
                                <div class="cta">
                                    <a href="{{route('request','LOW1')}}" class="btn btn-primary btn-rounded btn-lg">Request Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="card-box pricing-card mt-30 mb-30">
                                <div class="pricing-icon">
                                    <img src="vendors/images/icon-debit.png" alt="">
                                </div>
                                <div class="price-title">
                                    Ruby
                                </div>
                                <div class="pricing-price">
                                    <sup>₦</sup>10,000<sub></sub>
                                </div>
                                <div class="cta">
                                    <a href="{{route('request','LOW2')}}" class="btn btn-primary btn-rounded btn-lg">Request Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="card-box pricing-card mt-30 mb-30">
                                <div class="pricing-icon">
                                    <img src="vendors/images/icon-online-wallet.png" alt="">
                                </div>
                                <div class="price-title">
                                    Diamond
                                </div>
                                <div class="pricing-price">
                                    <sup>₦</sup>5,000<sub></sub>
                                </div>

                                <div class="cta">
                                    <a href="{{route('request','LOW3')}}" class="btn btn-primary btn-rounded btn-lg">Request Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
                    {{--                    <h2 class="h4 mb-20">Lead Target</h2>--}}
                    <img src="images/pri.jpeg" alt="">


                </div>
            </div>
        </div>
        @endif
@endsection
