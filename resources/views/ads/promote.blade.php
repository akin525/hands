@extends("ads.lay.header")

@section('content')
    <div class="memberShip section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">

                    <div class="accountSidebar">
                        <ul class="listing listScroll">
                            <li class="listItem">
                                <a href="my_account.html" class="items"> <i class="lar la-user-circle icon"></i> My Account</a>
                            </li>
                            <li class="listItem">
                                <a href="memberShip.html" class="items active"><i class="las la-address-card icon"></i> Membership</a>
                            </li>
                            <li class="listItem">
                                <a href="promoted_add_list.html" class="items"><i class="las la-ad icon"></i> Promoted Ads</a>
                            </li>
                            <li class="listItem">
                                <a href="wish_list.html" class="items"> <i class="lar la-heart icon"></i> Wishlist</a>
                            </li>
                            <li class="listItem">
                                <a href="help.html" class="items"> <i class="lar la-question-circle icon"></i> Help</a>
                            </li>
                        </ul>
                        <div class="accessAccount">
                            <a href="#" class="account-btn"><i class="las la-sign-out-alt icon"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">

                    <div class="row mb-24">
                        <div class="col-sm-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">My Account</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>


                    <div class="memberShipCart">

                        <div class="singleMember mb-24">
                            <div class="memberDetails">
                                <h5><a href="#" class="memberTittle">Verified Membership <span class="activeUser">Active</span></a></h5>

                                <div class="infoSingle">
                                    <ul class="listing">
                                        <li class="listItem">Billing Yearly</li>
                                        <li class="listItem">24 Days remaining to next invoice</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-wrapper mb-20">
                                <a href="#" class="cmn-btn-outline4 mr-10">Cancel</a>
                                <a href="#" class="cmn-btn4">Upgrade</a>
                            </div>
                        </div>
                    </div>

                    <div class="small-tittle mb-30">
                        <h3>Payments</h3>
                    </div>

                    <div class="paymentTable">

                        <div class="singleMember wow fadeInUp social" data-wow-delay="0.0s">
                            <p class="memberInfo">Verified Membership</p>
                            <p class="price">$102.99</p>
                            <p class="memberInfo">$07 Jan 2022 </p>
                            <p class="memberInfo">Mastercard ****<span class="lastDegit">9834</span> </p>
                            <p class="success-btn">Successfully paid</p>
                        </div>

                        <div class="singleMember wow fadeInUp social" data-wow-delay="0.1s">
                            <p class="memberInfo">Verified Membership</p>
                            <p class="price">$102.99</p>
                            <p class="memberInfo">$07 Jan 2022 </p>
                            <p class="memberInfo">Mastercard ****<span class="lastDegit">9834</span> </p>
                            <p class="success-btn">Successfully paid</p>
                        </div>

                        <div class="singleMember wow fadeInUp social" data-wow-delay="0.2s">
                            <p class="memberInfo">Verified Membership</p>
                            <p class="price">$102.99</p>
                            <p class="memberInfo">$07 Jan 2022 </p>
                            <p class="memberInfo">Mastercard ****<span class="lastDegit">9834</span> </p>
                            <p class="success-btn">Successfully paid</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
