@extends('layout.admin-layout')
@section('title')
    Material-create
@endsection
@section('detail')
    <section class="wrapper" style="padding: 0">
    </section>
    <section class="panel" style="min-height: 550px;">
        <p class="panel-heading">
            Form Material-create
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
            <form class="form-horizontal bucket-form" action="/admin/material/{{$obj->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Material Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="materialName" class="form-control" value="{{$obj->materialName}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Material Location</label>
                    <div class="col-sm-6">
                        <input type="text" name="materialLocation" class="form-control" value="{{$obj->materialLocation}}" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">List Data</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="listData" value="{{$obj->listData}}">
                    </div>
                </div>

                <div class="col-md-4 form-group" style="margin-left: 170px;">
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Status</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="status" value="{{$obj->status}}">
                    </div>

                </div>
                <div class="col-md-12 form-group" style="text-align: center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </section>

    {{--    <script>--}}
    {{--        var a = document.getElementById('images');--}}
    {{--        var demo = document.getElementById('images-demo');--}}
    {{--        a.onchange = function (){--}}
    {{--            demo.innerHTML = `<img src="/images/`+ a.files[0].name +`"  style="width: 100px;" alt="`+a.files[0].name+`">`--}}
    {{--        }--}}
    {{--    </script>--}}

@endsection
