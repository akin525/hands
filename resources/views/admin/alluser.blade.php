@extends("admin.layout.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All User</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">All Request</h4>
            </div>
            <div class="pb-20">
                <table class="table hover multiple-select-row data-table-export nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>FullName</th>
{{--                        <th>Phone Number</th>--}}
                        <th>Role</th>
                        <th>User-Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all as$fd)
                        <tr>
                            <td>{{$fd->id}}</td>
                            <td>{{$fd->username}}</td>
                            <td>{{$fd->email}}</td>
                            <td>{{$fd->name}}</td>
{{--                            <td>{{$fd->number}}</td>--}}
                            <td>{{$fd->role}}</td>
                            <td>{{$fd->usertype}}</td>
                            <td><a href="{{route('admin/edituser', $fd->id)}}"><i class="dw dw-pencil">Edit</i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection
