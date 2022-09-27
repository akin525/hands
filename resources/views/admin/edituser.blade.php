@extends("admin.layout.sidebar")

@section('content')
    <div class="card-box pd-20  mb-30">
        <div class="row align-items-center">
            <div class="col-md-4">
                @if($user->profile==NULL)
                    <img src="{{asset('vendors/images/banner-img.png')}}" alt="">
                @else
                    <img src="{{url('/', $user->profile)}}" alt="">
                @endif
            </div>
            <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    Editing  <div class="weight-600 font-30 text-blue">{{\Illuminate\Support\Facades\Auth::user()->name}}!</div>
                </h4>
                <p class="font-18 max-width-600">Note That any change made on this page will reflect on this particular user, and also if email is change, the new email will be use for the user to login back to the website</p>
            </div>
        </div>
    </div>
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Kindly Keep your customer record save</h4>
            </div>
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
        <form method="post" action="{{route('admin/updateuser')}}" >
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" placeholder="Enter  Username" value="{{$user->username}}" type="text" name="username" readonly>
                    <input  value="{{$user->id}}" type="hidden" name="id" readonly>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Full Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" value="{{$user->name}}"  type="text" placeholder="Enter  Fullname" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="email" value="{{$user->email}}"  type="email" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Phone Number</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="number" value="{{$user->number}}"  type="number"  required>
                </div>
            </div>
            <div class="form-group row" >
                <label class="col-sm-12 col-md-2 col-form-label">Select User Role</label>
                <div class="col-sm-12 col-md-10">
                    <select class="form-control datetimepicker" name="role" required>
                        <option value="{{$user->role}}">{{$user->role}}</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>
            <div class="form-group row" >
                <label class="col-sm-12 col-md-2 col-form-label">Select User Type</label>
                <div class="col-sm-12 col-md-10">
                    <select class="form-control datetimepicker" name="usertype" required>
                        <option value="{{$user->usertype}}">{{$user->usertype}}</option>
                        <option value="fund">Fund Request</option>
                        <option value="ads">Advertise On Website</option>
                    </select>
                </div>
            </div>
            <div class="btn-list">
            <button type="submit" class="btn btn-success">Update User</button>
            <button type="button" class="btn btn-danger" id="warning">Delete User</button>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="sweetalert2.all.min.js"></script>
                <script>
                    //Warning Message
                    $('#warning').click(function () {
                        swal({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            type: 'warning',
                            showCancelButton: true,
                            cancelButtonClass: 'btn btn-danger',
                            // cancelButtonUrl: window.location = "#";
                            confirmButtonText: 'Yes, delete it!'
                        }).then(function (result) {
                            if (result.value) {
                                console.log(window.url);
                                window.location.href = "{{route('admin/deleteuser', $user->id)}}";
                            }
                        });
                    });

                </script>
            </div>
        </form>

    </div>


@endsection
