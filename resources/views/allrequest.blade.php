@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All Request</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Request</li>
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
                        <th class="table-plus datatable-nosort">Username</th>
                        <th>Plan</th>
                        <th>Amount</th>
                        <th>Duration</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fund as$fd)
                    <tr>
                     <td>{{$fd->username}}</td>
                     <td>{{$fd->plan}}</td>
                     <td>{{$fd->amount}}</td>
                     <td>{{$fd->duration}}</td>
                     <td>{{$fd->created_at}}</td>
                        @if($fd->status==0)
                     <td><span class="badge badge-warning">Pending</span> </td>
                        @elseif($fd->status==1)
                            <td><span class="badge badge-success">Approved</span> </td>
                        @endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
