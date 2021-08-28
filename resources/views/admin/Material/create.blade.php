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

            <form class="form-horizontal bucket-form" action="/admin/material/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Material Name</label>
                    <div class="col-sm-5">
                        <input type="text" name="materialName" class="form-control">
                        @error('materialName')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Material Location</label>
                    <div class="col-sm-5">
                        <input type="text" name="materialLocation" class="form-control" >
                        @error('materialLocation')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">List Data</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="listData">
                        @error('listData')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-2">
                        <select type="text" class="form-control" name="status">
                            <option value="0">Active</option>
                            <option value="1">defail</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-10 form-group" style="text-align: center">
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
