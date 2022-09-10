@extends("layouts.header")

@section('content')

    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>donation page</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{url('home')}}">Home</a><span></span></li>
                            <li><a href="#">Donation</a></li>
                        </ol>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
    <!--=============================================
        3.*romana_children_area  start
    ===============================================-->
    <div class="romana_cause_detail_area romana_donation_page" id="donate">
        <div class="container">
            <!-- row End -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="romana_cause_detail_form romana_common_form">
                        <h3>Donar Information</h3>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder">
                                            First name
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="FistName" type="text" name="donation_FistName" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Email
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="userEmail" type="text" name="donation_userEmail" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Address
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="address" type="text" name="donation_userEmail" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder">
                                            Last name
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="LastName" type="text" name="donation_LastName" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Phone Number
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="userPhone" type="text" name="donation_userPhone" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder">
                                            Additional Note
                                            <span class="star_color">*</span>
                                        </label>
                                        <input id="add_note" type="text" name="donation_add_note" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- romana_registration form End -->
                    <div class="romana_donation_method romana_donation_method2">
                        <div class="cause_detail_donate_btn">
                            <a href="#" class="hvr-box-shadow-outset">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </div>
    <!-- ==================================================
    4.*Footer_area start
    =================================================== -->
@endsection
