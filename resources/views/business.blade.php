@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Business Training</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Business Training</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <h4 class="mb-30 mt-30 text-blue h4">Set Of Business Training</h4>
        <div class="row">
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>Standard</h5>
                            <p>For small businesses</p>
                        </div>
                        <div class="right">
                            <div class="pricing-price">
                                ₦10,000<span></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <div class="pricing-points">
                            <ul>
                                <li>Once Payment</li>
                                <li>Last for: One Month</li>
                                <li>Email Marketing</li>
                                <li>Internet Support</li>
                                <li>Business Promotion</li>
                                <li>Customer Report Service</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cta">
                        <a href="https://paystack.com/pay/21xatn2h5t" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>Advanced</h5>
                            <p>For big businesses</p>
                        </div>
                        <div class="right">
                            <div class="pricing-price">
                                ₦20,000<span></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <div class="pricing-points">
                            <ul>
                                <li>Once Payment</li>
                                <li>Last for: Two Month</li>
                                <li>Email Marketing</li>
                                <li>Internet Support</li>
                                <li>Business Promotion</li>
                                <li>Business Support</li>
                                <li>Customer Report Service</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cta">
                        <a href="https://paystack.com/pay/sr8iysmovg" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-30">
                <div class="card-box pricing-card-style2">
                    <div class="pricing-card-header">
                        <div class="left">
                            <h5>Enterprise</h5>
                            <p>For enterprises</p>
                        </div>
                        <div class="right">
                            <div class="pricing-price">
                                ₦30,000<span></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <div class="pricing-points">
                            <ul>
                                <li>Once Payment</li>
                                <li>Last for: Four Month</li>
                                <li>Email Marketing</li>
                                <li>Internet Support</li>
                                <li>Business Promotion</li>
                                <li>Business Support</li>
                                <li>E-book For Business Support</li>
                                <li>Customer Report Service</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cta">
                        <a href="https://paystack.com/pay/wfk9ha01f3" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
