@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Fundraising</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fund Request</li>
                        </ol>
                    </nav>
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
                                    <a href="{{route('request','LOW')}}" class="btn btn-primary btn-rounded btn-lg">Request Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
                    {{--                    <h2 class="h4 mb-20">Lead Target</h2>--}}
                    <img src="images/advert.png" alt="">
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
@endsection
