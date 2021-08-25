@extends('layout.admin-layout')
@section('title')
    tracking-create
@endsection
@section('detail')
    <section class="wrapper" style="padding: 0">
    </section>
    <section class="panel" style="min-height: 550px;">
        <p class="panel-heading">
            Form tracking-create
        </p>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" action="/admin/tracking/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">MaterialID</label>
                    <div class="col-sm-6">
                        <input type="text" name="MaterialId" class="form-control" >
                        @error('MaterialId')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">LessonId</label>
                    <div class="col-sm-6">
                        <input type="text" name="LessonId" class="form-control" placeholder="Link">
                        @error('LessonId')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">AccountId</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="AccountId">
                        @error('AccountId')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">commit</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="commit">
                        @error('commit')
                        <div class="text-danger">* {{$message}}</div>
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

    {{--    <script>--}}
    {{--        var a = document.getElementById('images');--}}
    {{--        var demo = document.getElementById('images-demo');--}}
    {{--        a.onchange = function (){--}}
    {{--            demo.innerHTML = `<img src="/images/`+ a.files[0].name +`"  style="width: 100px;" alt="`+a.files[0].name+`">`--}}
    {{--        }--}}
    {{--    </script>--}}

@endsection
