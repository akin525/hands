@extends("layouts.header")

@section('content')
    <!-- ==========================================================
2.*Hero_area start
============================================================ -->
    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>Promote Business</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{url('home')}}">Home</a><span></span></li>
                            <li><a href="#">Promote Business</a></li>
                        </ol>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <div class="romana_charity_area">
        <div class="romana_charity_date">
            <h2>Business Idea</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-2 col-sm-6 col-sm-offset-6 col-xs-12">
                    <div class="romana_progress_circle">
                        <div class="romana_progress_circle_top">
                            <div class="progress-bar position" data-percent="85" data-duration="1000" data-color="#fff,black">

                            </div>
                        </div>
                        {{--                    <div class="romana_progress_circle_bottom">--}}
                        {{--                        <div class="romana_progress_circle_bottom_single">--}}
                        {{--                            <p>Raised <span>₦25,654</span></p>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="romana_progress_circle_bottom_single">--}}
                        {{--                            <p>goal <span>₦35,659</span></p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <!-- column End -->
                <div class="col-md-6 col-xs-12">
                    <div class="romana_charity_text">
                        <h2>Grow Your Business</h2>
                        <h3>Learn How To Grow Your Business Quick</h3>
                        <p>We are to help you raise your petty business and make more profit from it !!
                            Get register now for your business training
                        </p>
                        <div class="romana_charity_btn">
                            <a href="{{url('business')}}" class="hvr-box-shadow-outset">Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
@include('ads.pricing')
@endsection
