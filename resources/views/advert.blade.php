@extends("layouts.sidebar")

@section('content')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Advertisement</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Advertisement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Kindly Fill All Necessary Space For Your Advert Request</h4>
                </div>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
            <form method="post" action="{{route('padvert')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Advert Name </label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Advert Address</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" placeholder="Enter Your Full Address" type="text" name="address" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Advert Duration</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control datetimepicker" name="duration"  type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12 col-md-2 col-form-label">Advert Content</label>
                    <div class="html-editor pd-20 card-box mb-30">
                        <textarea class="textarea_editor form-control border-radius-0" name="text" placeholder="Enter text ..." required></textarea>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="{{Auth::user()->number}}" type="tel" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Cover Image</label>
                    <div class="dropzone" id="my-awesome-dropzone">
                        <div class="fallback">
                        <input type="file"  name="cover"  required />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Request</button>
            </form>

        </div>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">All Advert</h4>
                </div>
                <div class="pb-20">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Username</th>
                            <th>Advert-Name</th>
                            <th>Duration</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($advert as$fd)
                            <tr>
                                <td>{{$fd->username}}</td>
                                <td>{{$fd->advert_name}}</td>
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

