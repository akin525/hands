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
                        Welcome back <div class="weight-600 font-30 text-blue">{{\Illuminate\Support\Facades\Auth::user()->name}}!
                            @if(Auth::user()->ads_status=="0")
                                    <img width="100" src="{{asset('images/mem.png')}}">
                            @elseif(Auth::user()->ads_status=="1")
                                    <img  width="100" src="{{asset('images/mem3.png')}}">
                            @elseif(Auth::user()->ads_status=="2")
                                    <img  width="100" src="{{asset('images/mem4.png')}}">
                            @endif
                        </div>
                    </h4>
                    <p class="font-18 max-width-600">ur work would be unimaginable without the people who work eagerly to improve the lives of network individuals at home and abroad.
                    </p>
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
                            <div class="h4 mb-0">???{{number_format(intval(\Illuminate\Support\Facades\Auth::user()->balance *1))}}</div>
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
                            <div class="h4 mb-0">???{{number_format(intval($user['request']*1))}}</div>
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
                            <div class="h4 mb-0">???{{number_format(intval($user['request1']*1))}}</div>
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
                            <div class="h4 mb-0">???{{number_format(intval($user['request2']*1))}}</div>
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
                                    <sup>???</sup>50,000
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
                                    <sup>???</sup>100,000<sub></sub>
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
                                    <sup>???</sup>30,000<sub></sub>
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
                                    <sup>???</sup>20,000
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
                                    <sup>???</sup>10,000<sub></sub>
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
                                    <sup>???</sup>5,000<sub></sub>
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

        @else
            <div class="alert alert-success" role="alert">
                @if(Auth::user()->ads_status=="0")
                <h4 class="alert-heading h4">Well done!</h4>
                    <h5>Dear Customer Your Present Plan is Free Plan Kindly Upgrade to enjoy More Features
                        <img width="100" src="{{asset('images/mem.png')}}">
                    </h5>
                <br>
{{--                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>--}}
                @elseif(Auth::user()->ads_status=="1")
                    <h4 class="alert-heading h4">Well done!</h4>
                    <h5>Dear Customer Your Present Plan is Standard Plan Kindly Upgrade to enjoy More Features
                        <img width="100" src="{{asset('images/mem3.png')}}">
                    </h5>
                    <br>
                @elseif(Auth::user()->ads_status=="2")
                    <h4 class="alert-heading h4">Well done!</h4>
                    <h5>Dear Customer Your Present Plan is premium Plan Kindly Upgrade to enjoy More Features
                        <img width="100" src="{{asset('images/mem4.png')}}">
                    </h5>
                    <br>
                @endif
            </div>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">All Advert</h4>
                </div>
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Username</th>
                            <th>Advert-Name</th>
                            <th>Duration</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($advert as$fd)
                            <tr>
                                <td>{{$fd->username}}</td>
                                <td>{{$fd->advert_name}}</td>
                                <td>{{$fd->duration}}</td>
                                <td>{{$fd->created_at}}</td>
                                <td>
                                    @if($fd->status==0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($fd->status==1)
                                        <span class="badge badge-success">Approved</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @endif
@endsection
