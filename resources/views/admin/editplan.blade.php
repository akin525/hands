@extends("admin.layout.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Edit Plan</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Plan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Plan Provider</h4>
                </div>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
            <form method="post" action="{{route('admin/upo')}}" >
                @csrf
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Plan Name</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" placeholder="Plan Name" value="{{$plan->plan}}" type="text" name="name" required>
                   <input type="hidden" name="id" value="{{$plan->id}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Amount</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="amount" value="{{$plan->amount}}"  type="number" placeholder="Enter  Amount" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Advert Post Limit</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="limit" value="{{$plan->limit}}"  type="number" placeholder="Enter limit" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Number Of Days</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="day" value="{{$plan->days}}"  type="number" placeholder="Enter Number Days" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update Plan</button>
            </form>
        </div>

        </div>
@endsection
@section('script')
    <script>
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        });

    </script>
    <script src="{{asset('src/plugins/dropzone/src/dropzone.js')}}"></script>

@endsection
