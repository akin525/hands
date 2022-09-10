@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>{{$plan->name}}</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fund Request</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Kindly Fill All Necessary Space For Your Request</h4>
                </div>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
            <form method="post" action="{{route('send')}}">
                @csrf
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
                    <label class="col-sm-12 col-md-2 col-form-label">Duration</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control datetimepicker" name="duration"  type="text" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Amount</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="{{$plan->amount}}" type="number" name="amount"  readonly>
                        <input class="form-control" value="{{$plan->id}}" type="hidden" name="id"  readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="{{Auth::user()->number}}" type="tel" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Request</button>
            </form>

@endsection
