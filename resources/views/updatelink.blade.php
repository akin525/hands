@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Chat-Link</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chat-Link</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form method="post" action="{{route('link')}}" >
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Tawk to Link </label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="url" name="link" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update Link</button>
        </form>
@endsection
