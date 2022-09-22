@extends("ads.lay.header")

@section('content')
    <div class="myAccout section-padding2">
        <div class="container">
            <div class="row">
@include('ads.lay.sidebar')
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                <div class="row mb-24">
    <div class="col-sm-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('ads')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">My Account</a></li>
            </ol>
        </nav>
    </div>
</div>

<div class="accountWrapper mb-24">

    <div class="userProfile mb-24">
        <div class="recentImg">
            <img width="100" src="{{asset('images/ash.jpeg')}}" alt="images">
        </div>
        <div class="recentCaption">
            <div class="cap">
                <h5><a href="#" class="featureTittle">{{{\Illuminate\Support\Facades\Auth::user()->name}}}</a></h5>
                <p class="featureCap">Member since {{\Illuminate\Support\Facades\Auth::user()->created_at}}</p>
            </div>
            <div class="btn-wrapper">
                <a href="#" class="cmn-btn-outline2">Edit Profile</a>
            </div>
        </div>
    </div>

    <div class="infoSingle">
        <ul class="listing">
            <li class="listItem"><i class="las la-map-marker-alt icon"></i>{{\Illuminate\Support\Facades\Auth::user()->address}}</li>
            <li class="listItem"><i class="lar la-envelope-open icon"></i><a href="#" class="__cf_email__" data-cfemail="b2c1c7c2c2ddc0c6f2ead5d7dcdbddc7c19cd1dddf">{{Auth::user()->email}}</a></li>
            <li class="listItem"><i class="las la-phone icon"></i>{{Auth::user()->number}}</li>
        </ul>
    </div>
</div>

<div class="myListing">

    <div class="singleFlexitem mb-24  wow fadeInUp social" data-wow-delay="0.0s">
        <div class="listCap">
            <div class="recentImg">
                <img src="assets/img/gallery/myList1.jpg" alt="images">
            </div>
            <div class="recentCaption">
                <h5><a href="add_details.html" class="featureTittle">Luxury couple apartment</a></h5>
                <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                <span class="featurePricing">$124.80</span>
                <div class="btn-wrapper">
                    <span class="pro-btn1">RENOVETED</span>
                    <span class="pro-btn2">PROMOTED</span>
                </div>
            </div>
        </div>
        <div class="btn-wrapper mb-20">
            <a href="#" class="cmn-btn-outline4 mr-10"><i class="lar la-eye icon"></i>44k</a>
            <a href="#" class="cmn-btn4">Edit Ad</a>
        </div>
    </div>

    <div class="singleFlexitem mb-24  wow fadeInUp social" data-wow-delay="0.1s">
        <div class="listCap">
            <div class="recentImg">
                <img src="assets/img/gallery/myList2.jpg" alt="images">
            </div>
            <div class="recentCaption">
                <h5><a href="add_details.html" class="featureTittle">Beats Studio 3 Wireless Over Ear</a></h5>
                <p class="featureCap">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                <span class="featurePricing">$124.80</span>
                <div class="btn-wrapper">
                    <span class="pro-btn1">RENOVETED</span>
                    <span class="pro-btn2">PROMOTED</span>
                </div>
            </div>
        </div>
        <div class="btn-wrapper mb-20">
            <a href="#" class="cmn-btn-outline4 mr-10"><i class="lar la-eye icon"></i>44k</a>
            <a href="#" class="cmn-btn4">Edit Ad</a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection
