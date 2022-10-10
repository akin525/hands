@extends("layouts.sidebar")

@section('content')
    <style>

        h1{
            color: darkslategray;
        }

        p {
            font-size: 12pt;
            color: black;
        }
        canvas {
            height: 175px;
            width: 90%;
            border-style: solid;
            border-width: 1px;
            border-color: black;
        }

        input {
            font-family: verdana;
            font-size: 12pt;
        }
    </style>
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
{{--                        <textarea class="textarea_editor form-control border-radius-0" name="text" placeholder="Enter text ..." required></textarea>--}}
                        <textarea class="form-control border-radius-0" name="text" placeholder="Enter text ..." required></textarea>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="{{Auth::user()->number}}" type="number" name="number" >
                    </div>
                </div>
                <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
                    <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Cover Image</label>
                    <div class="#" >
                        <div class="fallback">
                            <canvas id= "canv1" ></canvas>
                            <input type="file"  name="cover" accept="image/*" id=finput onchange="upload()" required />
                        </div>

                    </div>
                        <br>
                        <br>

                        <label class="col-sm-12 col-md-2 col-form-label">Addition Image</label>
                        <div class="#" >
                            <div class="fallback">
                                <canvas id= "canv2" ></canvas>
                                <input type="file"  name="add" accept="image/*" id=finput1 onchange="upload1()" required />
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
    </div>
    <script>
        function upload(){
            var imgcanvas = document.getElementById("canv1");
            var fileinput = document.getElementById("finput");
            var image = new SimpleImage(fileinput);
            image.drawTo(imgcanvas);
        }
        function upload1(){
            var imgcanvas = document.getElementById("canv2");
            var fileinput = document.getElementById("finput1");
            var image = new SimpleImage(fileinput);
            image.drawTo(imgcanvas);
        }
        function upload2(){
            var imgcanvas = document.getElementById("canv3");
            var fileinput = document.getElementById("finput2");
            var image = new SimpleImage(fileinput);
            image.drawTo(imgcanvas);
        }
    </script>

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

