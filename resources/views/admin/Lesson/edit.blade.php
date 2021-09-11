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
            <form class="form-horizontal bucket-form" action="/admin/lesson/{{$obj->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lesson Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="lessonName" class="form-control" value="{{$obj->lessonName}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">CourseId</label>
                    <div class="col-sm-2">
                        <select type="text" class="form-control" name="courseId">
                            @foreach($list as $data)
                                <option value="{{($data->course)}}">{{($data->id)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">List Material ID</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="listMaterialId" value="{{$obj->listMaterialId}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Data Suppor Values</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="dataSupportId" value="{{$obj->dataSupportId}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Status</label>
                    <div class="col-lg-2">
                        <select class="form-control m-bot15" name="status">
                            <option value="1">Active</option>
                            <option value="1">defail</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-8 form-group" style="text-align: center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </section>
@endsection

    {{--    <script>--}}
    {{--        var a = document.getElementById('images');--}}
    {{--        var demo = document.getElementById('images-demo');--}}
    {{--        a.onchange = function (){--}}
    {{--            demo.innerHTML = `<img src="/images/`+ a.files[0].name +`"  style="width: 100px;" alt="`+a.files[0].name+`">`--}}
    {{--        }--}}
    {{--    </script>--}}

