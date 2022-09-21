@extends("admin.layout.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Book Fund</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book Fund</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Place A Request Fund</h4>
                </div>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
            <form method="post" action="{{route('admin/booksubmit')}}" >
                @csrf
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Customer Address</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" placeholder="Enter Your Full Address" type="text" name="address" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Fund Duration</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control datetimepicker" name="duration"  type="text" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Select Username</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control datetimepicker" name="username" required>
                            @foreach($user as $all)
                            <option value="{{$all->username}}">{{$all->username}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Amount To Fund</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="number" class="form-control" name="amount" min="10000" placeholder="Enter Product amount" required>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="number" name="number" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
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
