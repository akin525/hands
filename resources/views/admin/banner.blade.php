@extends("admin.layout.sidebar")

@section('content')
    <style>
        body{
            margin: 25px;
            font-family: verdana;
        }

        h1{
            color: darkslategray;
        }

        p {
            font-size: 12pt;
            color: black;
        }
        canvas {
            height: 175px;
            border-style: solid;
            border-width: 1px;
            border-color: black;
        }

        input {
            font-family: verdana;
            font-size: 12pt;
        }
    </style>
    <div class="card-box pd-20  mb-30">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{asset('vendors/images/banner-img.png')}}" alt="">
            </div>
            <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                    Upload Banner<div class="weight-600 font-30 text-blue">!</div>
                </h4>
                <p class="font-18 max-width-600">Note That: Any picture upload here will display on any of ur page been tag</p>
            </div>
        </div>
    </div>

    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Upload Banner</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Upload Banner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="card-box mb-30">

            <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
            </script>
            <div class="card-body">
                <center>
            <h1>Upload and Your Banner 1</h1>
            <canvas id= "canv1" ></canvas>

            <p>
                <form method="post" action="" enctype="multipart/form-data">
                Filename:
                <input type="file" multiple="false" name="pic" accept="image/*" id=finput onchange="upload()">
                        <button type="submit" class="badge badge-success">Upload</button>
                    </form>
            </p>
                </center>
                <center>
                    <h1>Upload and Your Banner 2</h1>
                    <canvas id= "canv2" ></canvas>

                <p>
                    Filename:
                    <input type="file" multiple="false" name="pic" accept="image/*" id=finput1 onchange="upload1()">
                </p>
                </center>
                <center>
                    <h1>Upload and Your Banner 3</h1>
                    <canvas id= "canv3" ></canvas>

                <p>
                    Filename:
                    <input type="file" multiple="false" name="pic" accept="image/*" id=finput2 onchange="upload2()">
                </p>
                </center>
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
