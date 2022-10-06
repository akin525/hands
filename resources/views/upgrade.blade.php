@extends("ads.lay.header")
@section('content')
    <div class="promotionSetting section-padding2">
        <div class="container">

            <div class="row mb-24">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Membership Account</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
    <div class="col-xl-10 col-lg-12">
        <div class="settingWrapper">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="promotionQuality">

                        <div class="singlePlan  mb-24">
                            <div class="top">
                                <h4 class="priceTittle">1 Month</h4>
                                <label class="checkWrap">
                                    <input type="checkbox" value="1" name="" onclick="payWithPaystack()">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <span class="price">₦1,200<span class="subTittle"> /For 30 Days</span></span>
                            <ul class="selectCategories">
                                <li class="listItem">30 Days</li>
                                <li class="listItem">30 Posts</li>
                                <li class="listItem">Promotion</li>
                            </ul>
                        </div>

                        <div class="singlePlan  mb-24">
                            <div class="top">
                                <h4 class="priceTittle">2 Month</h4>
                                <label class="checkWrap">
                                    <input type="checkbox" onclick="payWithPaystack2()">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <span class="price">₦2,500<span class="subTittle"> /For 2 Month</span></span>
                            <ul class="selectCategories">
                                <li class="listItem">60 Days</li>
                                <li class="listItem">Unlimited Post</li>
                                <li class="listItem">Promotion</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="planDetails">
                        <div class="planDetailsTop mb-24">
                            <h4 class="priceTittle">Results you’ll get</h4>
                            <ul class="listing">
                                <li class="listItem"><i class="las la-check icon"></i>Your ad will be promoted for number of days on plan</li>
                                <li class="listItem"><i class="las la-check icon"></i>Get upto 10x times more responses</li>
                                <li class="listItem"><i class="las la-check icon"></i>Your Ad will be featured for number of days mentioned</li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: "{{env('paystack_pk')}}",
            email: "{{\Illuminate\Support\Facades\Auth::user()->email}}",
            amount: "1200" *100,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            firstname: '{{\Illuminate\Support\Facades\Auth::user()->name}}',
            // label: "Optional string that replaces customer email"
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "{{\Illuminate\Support\Facades\Auth::user()->number}}",
                        value: "+2348146328645"
                    }
                ]
            },
            callback: function(response){
                //alert('Deposit successful. transaction refference number is ' + response.reference);
                window.location='{{ route('verifyads', '/') }}/'+response.reference;

            },
            onClose: function(){
                alert('window closed');
                window.location='{{route('upgrade')}}';
            }
        });
        handler.openIframe();
    }
</script>
<script>
    function payWithPaystack2(){
        var handler = PaystackPop.setup({
            key: "pk_live_82f676bc05d5b14731e2b11b25f54526b112f64c",
            email: "{{\Illuminate\Support\Facades\Auth::user()->email}}",
            amount: "2500" *100,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            firstname: '{{\Illuminate\Support\Facades\Auth::user()->name}}',
            // label: "Optional string that replaces customer email"
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "{{\Illuminate\Support\Facades\Auth::user()->number}}",
                        value: "+2348146328645"
                    }
                ]
            },
            callback: function(response){
                //alert('Deposit successful. transaction refference number is ' + response.reference);
                window.location='{{ route('verifyads', '/') }}/'+response.reference;


            },
            onClose: function(){
                alert('window closed');
                window.location='{{route('upgrade')}}';

            }
        });
        handler.openIframe();
    }
</script>

@endsection
