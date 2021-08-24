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
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
            <form class="form-horizontal bucket-form" action="/admin/data-support/{{$obj->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Values</label>
                    <div class="col-sm-6">
                        <input type="text" name="values" class="form-control" placeholder="Enter values" value="{{$obj->values}}">
                        @error ('values')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">color</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter color" name="color" value="{{$obj->color}}">
                        @error ('color')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Words_en</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter voice_vi" name="words_en" value="{{$obj->words_en}}">
                        @error ('words_en')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <label class="col-sm-3 control-label" style="margin-left: 125px;">video</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="video" id="video" value="{{$obj->video}}">
                        @error ('video')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <label class="col-sm-3 control-label">Voice_en</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="voice_en" id="voice_en" value="{{$obj->voice_en}}">
                        @error ('voice_en')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <label class="col-sm-3 control-label" style="margin-left: 125px;">Images</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control " id="images" name="images" value="{{$obj->images}}">
                        @error ('images')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
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
                        <input type="text" class="form-control" id="key" placeholder="Enter Key" name="key" value="{{$obj->key}}">
                        @error ('key')
                        <div class="text-danger">* {{ $message }}</div>
                        @enderror
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
