@extends('layout.admin-layout')
@section('title')
    Course-create
@endsection
@section('detail')
    <section class="wrapper" style="padding: 0">
    </section>
    <section class="panel" style="min-height: 550px;">
        <p class="panel-heading">
            Form Course-create
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
            <form class="form-horizontal bucket-form" action="/admin/course/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">course</label>
                    <div class="col-sm-6">
                        <input type="text" name="course" class="form-control" >
                        @error('course')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="Price" >
                        @error('Price')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="Description" >
                        @error('Description')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Time Finish(day)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="timeFinish" >
                        @error('timeFinish')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 form-group" style="margin-left: 170px;">
                    <label class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="Status" >
                        @error('Status')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
{{--                    <div class="col-lg-6">--}}
{{--                        <select class="form-control m-bot15">--}}
{{--                            <option value="1">Active</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
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
