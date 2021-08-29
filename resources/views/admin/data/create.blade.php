@extends('layout.admin-layout')
@section('title')
    Material-create
@endsection
@section('detail')
    <section class="wrapper" style="padding: 0">
    </section>
    <section class="panel" style="min-height: 550px;">
        <p class="panel-heading">
            Form Data-create
        </p>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" action="/admin/data-support/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Values</label>
                    <div class="col-sm-6">
                        <input type="text" name="values" class="form-control" placeholder="Enter values">
                        @error ('values')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Words</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter voice_vi" name="words">
                        @error ('words')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">color</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="in-color" placeholder="Enter color" name="color">
                        @error ('color')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">video</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="video" id="in-video">
                        @error ('video')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Voice</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="voice" id="in-voice">
                        <button type="button" id="in-btn-voice" class="cloudinary-button">Upload Voice</button>
                        @error ('voice')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class=" form-group">
                    <label class="col-sm-3 control-label">Images</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="in-images" name="images">
                        <button type="button" id="in-btn-images" class="cloudinary-button">Upload Images</button>
                        @error ('images')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Key:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="key" placeholder="Enter Key" name="key">
                        @error ('key')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Checking</label>
                    <div class="col-sm-8">
                        <img id="demo-img" src="{{URL::asset('images/default-Image.png') }}" width="100px" alt="">
                        <p id="demo-color" style="width: 100px;height: 100px;background-color: black;float: left"></p>
                        <audio controls style="width: 100px;" id="demo-voice">
                            <source  src="" type="audio/ogg">
                        </audio>
                        <iframe id="demo-video" width="200" height="100" src="https://www.youtube.com/embed/d019YE4CIDk"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>


                <div class="col-md-12 form-group" style="text-align: center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script>
        var video = document.getElementById('in-video');
        video.onchange=function (){
            document.getElementById('demo-video').src= `https://www.youtube.com/embed/`+video.value;
        }
        var color = document.getElementById('in-color');
        color.onchange =function (){
            document.getElementById('demo-color').style.backgroundColor = color.value;
        }
    </script>
    <script type="text/javascript">
        var ImagesUrl = cloudinary.createUploadWidget({
                cloudName: 'thangdao04',
                uploadPreset: 'ekcloudinary'
            }, (error, result) => {
                if (!error && result && result.event === "success") {
                    // console.log('Done! Here is the image info: ', result.info);
                    document.getElementById('in-images').value = result.info.secure_url;
                    document.getElementById('demo-img').src = result.info.secure_url;
                    console.log(result.info.secure_url);
                }
            }
        )
        document.getElementById("in-btn-images").addEventListener("click", function () {
            ImagesUrl.open();
        }, false);
        var VoiceUrl = cloudinary.createUploadWidget({
                cloudName: 'thangdao04',
                uploadPreset: 'ekcloudinary'
            }, (error, result) => {
                if (!error && result && result.event === "success") {
                    // console.log('Done! Here is the image info: ', result.info);
                    document.getElementById('in-voice').value = result.info.secure_url;
                    document.getElementById('demo-voice').innerHTML = `<source  src="`+result.info.secure_url +`" type="audio/ogg">`
                    console.log(result.info.secure_url);
                }
            }
        )
        document.getElementById("in-btn-voice").addEventListener("click", function () {
            VoiceUrl.open();
        }, false);
    </script>

@endsection
