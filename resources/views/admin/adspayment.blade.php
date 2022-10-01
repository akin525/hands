@extends("admin.layout.sidebar")

@section('content')
    <div class="card-box pd-20  mb-30">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{asset('vendors/images/banner-img.png')}}" alt="">
            </div>
            <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    <div class="weight-600 font-30 text-blue">All Ads-payment & Plan!</div>
                </h4>
                <p class="font-18 max-width-600">Note That: You can track the amount pay for advert and the plan been pay for by customer</p>
            </div>
        </div>
    </div>

    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All Ads-Payment</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Ads-payment</li>
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


@endsection
