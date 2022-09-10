@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Donate</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Donate Now</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Kindly Fill All Necessary Space</h4>
                </div>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
            <form action="" method="post"  id="paymentForm">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Full-Name</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Address</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" placeholder="Enter Your Full Address" type="text" name="address" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Amount</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="number" id="amount" name="amount"  required>
                        <input class="form-control"  type="hidden" id="email-address" value="{{Auth::user()->email}}"  required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="{{Auth::user()->number}}" type="tel" readonly>
                    </div>
                </div>
{{--                <button type="submit" class="btn btn-success">Submit</button>--}}
                <button class="btn btn-outline-info btn-block withdraw-btn" type="submit" onclick="payWithPaystack()"> Donate With Paystack</button>
                <script src="https://js.paystack.co/v1/inline.js"> </script>
            </form>
            <script>
                const paymentForm = document.getElementById('paymentForm');
                paymentForm.addEventListener("submit", payWithPaystack, false);
                function payWithPaystack(e) {
                    e.preventDefault();
                    let handler = PaystackPop.setup({
                        key: 'pk_live_063a73efe39df28b9581c5bf8dff8f3ae23bf0bf', // Replace with your public key
                        email: document.getElementById("email-address").value,
                        amount: document.getElementById("amount").value * 100,
                        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
// label: "Optional string that replaces customer email"
                        onClose: function(){
                            alert('Window closed.');
                        },
                        callback: function(response){
                            let message = 'Payment complete! Reference: ' + response.reference;
                            // alert(message);


                            window.location = '{{ route('send', '/') }}/'+response.reference;

                        }
                    });
                    handler.openIframe();
                }
            </script>

@endsection
@section('script')
                <script>
                    const paymentForm = document.getElementById('paymentForm');
                    paymentForm.addEventListener("submit", payWithPaystack, false);
                    function payWithPaystack(e) {
                        e.preventDefault();
                        let handler = PaystackPop.setup({
                            key: 'pk_live_063a73efe39df28b9581c5bf8dff8f3ae23bf0bf', // Replace with your public key
                            email: document.getElementById("email-address").value,
                            amount: document.getElementById("amount").value * 100,
                            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
// label: "Optional string that replaces customer email"
                            onClose: function(){
                                alert('Window closed.');
                            },
                            callback: function(response){
                                let message = 'Payment complete! Reference: ' + response.reference;
                                // alert(message);


                                window.location = '{{ route('send', '/') }}/'+response.reference;

                            }
                        });
                        handler.openIframe();
                    }
                </script>
@endsection
