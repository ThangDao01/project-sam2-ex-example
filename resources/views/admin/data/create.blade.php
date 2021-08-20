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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal bucket-form" method="get">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Values</label>
                    <div class="col-sm-6">
                        <input type="text" name="values" class="form-control" placeholder="Enter values">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Words_vi</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter words_vi" name="words_vi">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Words_en</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter voice_vi" name="words_en">
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <label class="col-sm-3 control-label" style="margin-left: 125px;">Voice_vi</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="voice_vi" id="voice_vi">
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <label class="col-sm-3 control-label">Voice_en</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="voice_en" id="voice_en">
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <label class="col-sm-3 control-label" style="margin-left: 125px;">Images</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control " id="images" name="images">
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <label class="col-sm-3 control-label">Demo-Images</label>
                    <div class="col-sm-6" id="demo-img">
                        <img src="{{URL::asset('images/default-Image.png') }}" width="100px" alt="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Key:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="key" placeholder="Enter Key" name="key">
                    </div>
                </div>

                <div class="col-md-12 form-group" style="text-align: center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        var imgUrl = document.getElementById('images');
        var demo = document.getElementById('demo-img');
        imgUrl.onkeyup = function () {
            demo.innerHTML = `<img src="` + imgUrl.value + `" width="100px" alt="` + imgUrl.value + `">`
        }
    </script>

@endsection
