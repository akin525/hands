@extends("admin.layout.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All Advert Submit</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Advert Submit</li>
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
                        <th>Username</th>
                        <th>Advert-Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all as$fd)
                        <tr>
                            <td>{{$fd->username}}</td>
                            <td>{{$fd->advert_name}}</td>
                                <td>
                                    @if($fd->status==0)
                                    <span class="badge badge-warning">Pending</span>
                            @elseif($fd->status==1)
                                <span class="badge badge-success">Approved</span>
                                    @elseif($fd->status==2)
                                        <span class="badge badge-danger">Rejected</span>
                                    @endif
                                </td>

                            <td>
                                @if($fd->status==0)
                                <a href="{{route('admin/appads', $fd->id)}}"><i class="dw dw-check">Approved</i></a>
                                <a href="{{route('admin/dispads', $fd->id)}}"><i class="dw dw-check">Disapproved</i></a>
                            @elseif($fd->status==1)
                               <span class="badge badge-success">Running</span>
                               <span class="badge badge-warning">Click to stop</span>
                            @elseif($fd->status==2)
                                <span class="badge badge-danger">Ads Rejected</span>
                                    <span class="badge badge-warning">Reprocess</span>

                                @endif
                            </td>
                            <td><a href="#"><i class="dw dw-pencil">Edit</i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection
