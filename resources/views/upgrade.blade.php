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
                        @foreach($plan as $pa)
                        <div class="singlePlan  mb-24">
                            <div class="top">
                                <h4 class="priceTittle">{{$pa->plan}}</h4>
                                <label class="checkWrap">
                                    <input type="checkbox" @if(Auth::user()->ads_status==$pa->id) id="warning" @else onclick="payWithPaystack({{$pa->amount}})" @endif @if(Auth::user()->ads_status==$pa->id)checked="checked"@endif>
                                  <span class="checkmark"></span>
                                </label>
                            </div>
                            <span class="price">₦{{number_format(intval($pa->amount *1))}}<span class="subTittle"> /For {{$pa->days}} Days</span></span>
                            <ul class="selectCategories">
                                <li class="listItem">{{$pa->days}} Days</li>
                                <li class="listItem">{{$pa->limit}} Posts</li>
                                <li class="listItem">Promotion</li>
                            </ul>
                            <butt0n type="button" onclick="payWithPaystack({{$pa->amount}}) "></butt0n>
                        </div>
                        @endforeach

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
        //Warning Message
        $('#warning').click(function () {
            swal({
                title: 'Ooops',
                text: "You are Already On This Plan",
                type: 'warning',
                showCancelButton: false,
                cancelButtonClass: 'btn btn-danger',
                // cancelButtonUrl: window.location = "#";
                // confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                    {{--window.location.href = "{{route('dashboard)}}";--}}
            });
        });

    </script>
    <script src="{{asset('src/plugins/sweetalert2/sweetalert2.all.js')}}"></script>
    <script src="{{asset('src/plugins/sweetalert2/sweet-alert.init.js')}}"></script>
    <script src="{{asset('vendors/scripts/core.js')}}"></script>
    <script src="{{asset('vendors/scripts/script.min.js')}}"></script>
    <script src="{{asset('vendors/scripts/process.js')}}"></script>
    <script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
    <script src="{{asset('src/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendors/scripts/dashboard.js')}}"></script>

    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
    function payWithPaystack(amount){
        var handler = PaystackPop.setup({
            key: "{{env('paystack_pk')}}",
            email: "{{\Illuminate\Support\Facades\Auth::user()->email}}",
            amount: amount *100,
            currency: "NGN",
            ref: 'planupgrade'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
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
