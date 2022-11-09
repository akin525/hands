@extends("layouts.header")

@section('content')
{{--    2.*Hero_area start--}}
{{--    ============================================================ -->--}}
    <section class="romana_hero_area">
        <div class="hero_slider">
            <div class="hero_slider_bg"  style="background-image: url(images/dop.jpeg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="romana_hero_text">
                                <h1>Give a hand to make <br> the <span>better</span> world.</h1>
                                <p>Bringing Help and Hope to Hurting People</p>
                                <div class="romana_slider_btn">
                                    <a href="{{url('items')}}" class="hvr-box-shadow-outset">View Items</a>
                                </div>
                                <div class="slider_prg">
                                    <div class="slider_prg_in"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column end -->
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>
            <!-- item one end -->
            <div class="hero_slider_bg" style="background-image: url(images/slider_bg3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="romana_hero_text">
                                <h1>Give a hand to make <br> the <span>better</span> world.</h1>
                                <div class="romana_slider_btn">
                                    <a href="{{url('items')}}" class="hvr-box-shadow-outset">View Items</a>
                                </div>
                                <div class="slider_prg">
                                    <div class="slider_prg_in"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column end -->
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>
            <!-- item two end -->
        </div>
    </section>
    <!-- HeroSlider area end -->
    <!-- ==========================================================

3.*romana_charity_area start
============================================================ -->
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

<style>
    .pricing_table{
        color:#fff;
        margin:10px 0;
        background:#555;
        text-align: center;
        transition: all 0.30s linear 0s;
    }
    .pricing_table:hover{
        background: #930e0e;
    }
    .pricing_table.active,
    .pricing_table .pricing_table_plan .btn-info.active{
        background: #930e0e;
    }
    .pricing_table:hover .pricing_table_plan .btn-info{
        background:#930e0e;
    }
    .pricing_table_header{
        padding:40px;
    }
    .pricing_table_header > i{
        display: block;
        font-size:40px;
    }
    .pricing_table_header .title{
        display:block;
        text-transform: capitalize;
    }
    .pricing_table_header .price-plan{
        display:block;
    }
    .pricing_table_header .price-plan i{
        font-size:16px;
    }
    .pricing_table_header .price{
        font-size:40px;
    }
    .pricing_table_header .monthly_plan{
        font-size:20px;
    }
    .pricing_table .pricing_table_plan{
        border-top-right-radius:30px;
        border-top-left-radius:30px;
        padding:40px 20px;
        background:#222;
    }
    .pricing_table .pricing_table_plan ul{
        margin:0 0 50px;
        padding:0;
    }
    .pricing_table .pricing_table_plan ul li{
        list-style:none;
        margin:15px 0;
    }
    .pricing_table .pricing_table_plan .btn-info{
        padding:8px 40px;
        background: transparent;
        transition: all 0.30s linear 0s;
    }
</style>
<br>
<div class="romana_section_title text-center romana_recent_cause">
{{--    <h2>Business Plan</h2>--}}
</div>
<div class="container">
    {{--        <h1>Pricing Table</h1>--}}
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="pricing_table">
                <div class="pricing_table_header">
                    <i class="fa fa-home"></i>
                    <h2 class="title">basic</h2>
                    <span class="price-plan">
{{--                        <i class="fa fa-inr"></i>--}}
                        <span class="price">₦10,000</span>
                        <span class="monthly_plan"></span>
                    </span>
                </div>
                <div class="pricing_table_plan">
                    <ul>
                        <li>Once Payment</li>
                        <li>Last for: One Month</li>
                        <li>Email Marketing</li>
                        <li>Internet Support</li>
                        <li>Business Promotion</li>
                        <li>Customer Report Service</li>
                    </ul>
                    <button type="button" onclick="window.location='{{url('business')}}'" class="btn btn-info">Register Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="pricing_table active">
                <div class="pricing_table_header">
                    <i class="fa fa-puzzle-piece"></i>
                    <h2 class="title">Advanced</h2>
                    <span class="price-plan">
{{--                        <i class="fa fa-inr"></i>--}}
                        <span class="price">₦20,000</span>
                        <span class="monthly_plan"></span>
                    </span>
                </div>
                <div class="pricing_table_plan">
                    <ul>
                        <li>Once Payment</li>
                        <li>Last for: Two Month</li>
                        <li>Email Marketing</li>
                        <li>Internet Support</li>
                        <li>Business Promotion</li>
                        <li>Business Support</li>
                        <li>Customer Report Service</li>
                    </ul>
                    <button type="button" onclick="window.location='{{url('business')}}'" class="btn btn-info active">Register Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="pricing_table">
                <div class="pricing_table_header">
                    <i class="fa fa-users"></i>
                    <h2 class="title">Pro</h2>
                    <span class="price-plan">
{{--                        <i class="fa fa-inr"></i>--}}
                        <span class="price">₦30,000</span>
                        <span class="monthly_plan"></span>
                    </span>
                </div>
                <div class="pricing_table_plan">
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
                    <button type="button" class="btn btn-info" onclick="window.location='{{url('business')}}'">Register Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="romana_better_place_area" style="background-image: url(images/bok.jpeg)">
    <div class="container">
        <div class="row ">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="romana_better_place_text text-center">
                    <h2><b>Advertise Your Business With Us, Kindly Click below to view all advert</b></h2>
                    <div class="romana_better_place_btn">
                        <a href="{{url('listads')}}" class="hvr-box-shadow-outset">All Advert</a>
                    </div>
                </div>
            </div>
            <!-- column End -->
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>


<!-- ==========================================================

5.*romana_about_area start
============================================================ -->
<div class="romana_about_area romana_section_padding">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12">
                <div class="romana_section_title text-center">
                    <h2>about us</h2>
                    <p>ADE'S SUPPORTING HANDS
                        <br>VENTURE CAPITAL</p>
                </div>
            </div>
            <!-- column End -->
        </div>
        <!-- row End -->
        <div class="row ">
            <div class="col-sm-6 col-xs-12">
                <div class="">
                        <img src="{{asset('images/tr.png')}}" class=" img-responsive" alt="">
                </div>
            </div>
            <!-- column End -->
            <div class="col-sm-6 col-xs-12">
                <div class="romana_about_text">
                    <h3>Save the life to make the better world</h3>
                    <p><span>Pure Hands has played a substantial role in providing various programs to the people of Yemen across many different areas such as Food Security, Health,</span></p>
                    <p>Livelihood, WASH, Child Protection, Capacity Building, Reconstruction, and Seasonal Projects. To improve the lives of millions of Yemenis devastated by the ongoing crisis, Pure Hands provides access to basic necessities for survival; food, water, and medicine. </p>
                    <div class="romana_about_btn">
                        <a href="{{url('about')}}" class="hvr-box-shadow-outset">read more</a>
                    </div>
                </div>
            </div>
            <!-- column End -->
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>
<!-- ==========================================================

6.*romana_better_place_area start
============================================================ -->


<div class="romana_better_place_area" style="background-image: url(images/ju.jpeg)">
    <div class="container">
        <div class="row ">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="romana_better_place_text text-center">
                    <h2><b>JOIN US TODAY TO MAKE YOUR ORGANIZATION(BUSINESS) MORE PROFITABLE</b></h2>
                   <div class="romana_better_place_btn">
                        <a href="{{route('register')}}" class="hvr-box-shadow-outset">Become a Member</a>
                    </div>
                </div>
            </div>
            <!-- column End -->
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>
<!--=============================================
    7.*romana_donation_area  start
===============================================-->
<!-- ==========================================================
@endsection
