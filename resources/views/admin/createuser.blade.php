@extends("admin.layout.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Create User</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Kindly Keep your customer record save</h4>
                </div>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
            <form method="post" action="{{route('admin/submituser')}}" >
                @csrf
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" placeholder="Enter  Username" type="text" name="username" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Full Name</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="name"  type="text" placeholder="Enter  Fullname" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="email"  type="email" placeholder="Enter Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Phone Number</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="number"  type="number" placeholder="Enter Phone Number" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="password"  type="password" placeholder="Enter Password" required>
                    </div>
                </div>
                <div class="form-group row" >
                    <label class="col-sm-12 col-md-2 col-form-label">Select User Role</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control datetimepicker" name="role" required>
                                <option value="user">User</option>
                                <option value="user">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row" >
                    <label class="col-sm-12 col-md-2 col-form-label">Select User Type</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control datetimepicker" name="usertype" required>
                            <option value="fund">Fund Request</option>
                            <option value="ads">Advertise On Website</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Create User</button>
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
