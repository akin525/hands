@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All Upgrade</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Upgrade</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="card-box mb-30 card-body">
            <div class="pd-20">
                <h4 class="text-blue h4">All Upgrade</h4>
            </div>
            <div class="pb-20">
                <table class="table hover multiple-select-row data-table-export nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Username</th>
                        <th>Plan</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($plan as$fd)
                        <tr>
                            <td>{{$fd->username}}</td>
                            <td>{{$fd->plan}}</td>
                            <td>{{$fd->amount}}</td>
                            <td>{{$fd->created_at}}</td>
                            <td>
                                @if($fd->status==0)
                                    <span class="badge badge-warning">Pending</span>
                                @elseif($fd->status==1)
                                    <span class="badge badge-success">Approved</span>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
