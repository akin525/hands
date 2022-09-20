@extends("admin.layout.sidebar")

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
                            <li class="breadcrumb-item"><a href="{{route('admin/dashboard')}}">Home</a></li>
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
            <form method="post" action="{{route('admin/postas')}}" enctype="multipart/form-data">
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
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Category</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control datetimepicker" name="category" required>
                            <option value="Appliances">Appliances</option>
                            <option value="Fashions">Fashions</option>
                            <option value="Properties">Properties</option>
                            <option value="Educations">Educations</option>
                            <option value="Businesses">Businesses</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Product Price</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="number" class="form-control " name="amount" placeholder="Enter Product amount" required>

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
                        <input class="form-control"  type="number" name="number" required>
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
