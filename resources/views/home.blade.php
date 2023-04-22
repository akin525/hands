@extends("layouts.header")

@section('content')
{{--    2.*Hero_area start--}}
{{--    ============================================================ -->--}}
    <section class="romana_hero_area">
        <div class="hero_slider">
            <div class="hero_slider_bg"  style="background-image: url(images/home_ash.png)">
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
            <div class="hero_slider_bg" style="background-image: url(images/ash_home_2.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="romana_hero_text">
                                <h1>Let's join hands to make  <br> the world a better place.</h1>
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

@include('ads.pricing')
{{--<div class="romana_better_place_area" style="background-image: url(images/bok.jpeg)">--}}
{{--    <div class="container">--}}
{{--        <div class="row ">--}}
{{--            <div class="col-sm-10 col-sm-offset-1 col-xs-12">--}}
{{--                <div class="romana_better_place_text text-center">--}}
{{--                    <h2><b>Advertise Your Business With Us, Kindly Click below to view all advert</b></h2>--}}
{{--                    <div class="romana_better_place_btn">--}}
{{--                        <a href="{{url('listads')}}" class="hvr-box-shadow-outset">All Advert</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- column End -->--}}
{{--        </div>--}}
{{--        <!-- row End -->--}}
{{--    </div>--}}
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
                        <br>BUSINESS CONSULTANT</p>
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
{{--            <div class="col-sm-6 col-xs-12">--}}
{{--                <div class="romana_about_text">--}}
{{--                    <h3>Save the life to make the better world</h3>--}}
{{--                    <p><span>Pure Hands has played a substantial role in providing various programs to the people of Yemen across many different areas such as Food Security, Health,</span></p>--}}
{{--                    <p>Livelihood, WASH, Child Protection, Capacity Building, Reconstruction, and Seasonal Projects. To improve the lives of millions of Yemenis devastated by the ongoing crisis, Pure Hands provides access to basic necessities for survival; food, water, and medicine. </p>--}}
{{--                    <div class="romana_about_btn">--}}
{{--                        <a href="{{url('about')}}" class="hvr-box-shadow-outset">read more</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- column End -->
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>
<!-- ==========================================================

6.*romana_better_place_area start
============================================================ -->


<div class="romana_better_place_area" >
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
