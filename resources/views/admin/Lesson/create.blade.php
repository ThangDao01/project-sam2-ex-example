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
            <form class="form-horizontal bucket-form" action="/admin/lesson/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lesson Name</label>
                    <div class="col-sm-5">
                        <input type="text" name="lessonName" class="form-control">
                        @error('lessonName')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">CourseId</label>
                    <div class="col-sm-2">
                        <select type="text" class="form-control" name="courseId">
                        @foreach($list as $data)
                            <option value="{{($data->id)}}">{{($data->name)}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">List Material ID</label>
                    <div class="col-sm-5">
                        <input type="text" id="material" class="form-control" name="listMaterialId">
                        <datalist id="material">
                            <option value="What is this">
                            <option value="Where is the">
                            <option value="Story">
                        </datalist>
                        @error('listMaterialId')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Data Suppor Values</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="dataSupportId">
                        @error('dataSupportId')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Status</label>
                    <div class="col-lg-2">
                        <select class="form-control m-bot15" name="status">
                            <option value="1">Active</option>
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
    <script>
        var listMaterial = document.getElementById('material');
        listMaterial.onkeyup = function (){

        }
    </script>

    {{--    <script>--}}
    {{--        var a = document.getElementById('images');--}}
    {{--        var demo = document.getElementById('images-demo');--}}
    {{--        a.onchange = function (){--}}
    {{--            demo.innerHTML = `<img src="/images/`+ a.files[0].name +`"  style="width: 100px;" alt="`+a.files[0].name+`">`--}}
    {{--        }--}}
    {{--    </script>--}}

@endsection
