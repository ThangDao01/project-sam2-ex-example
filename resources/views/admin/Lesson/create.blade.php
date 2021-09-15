@extends('layout.admin-layout')
@section('title')
    Material-create
@endsection
@section('css')
    .checkbox-material-ul {
    list-style-type: none;
    }

    .checkbox-material-li {
    display: inline-block;
    }

    input[type="checkbox"][id^="myCheckbox"] {
    display: none;
    }

    label {
    border: 1px solid #fff;
    padding: 10px;
    display: block;
    position: relative;
    margin: 10px;
    cursor: pointer;
    }

    label:before {
    background-color: white;
    color: white;
    content: " ";
    display: block;
    border-radius: 50%;
    border: 1px solid grey;
    position: absolute;
    top: -5px;
    left: -5px;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 28px;
    transition-duration: 0.4s;
    transform: scale(0);
    }

    label img {
    height: 150px;
    width: 150px;
    transition-duration: 0.2s;
    transform-origin: 50% 50%;
    }

    :checked + label {
    border-color: #ddd;
    }

    :checked + label:before {
    content: "✓";
    background-color: grey;
    transform: scale(1);
    }

    :checked + label img {
    transform: scale(0.9);
    /* box-shadow: 0 0 5px #333; */
    z-index: -1;
    }
@endsection
@section('detail')
    <?php
    $admin = new \App\Http\Controllers\MainAdminController();
    ?>
    <section class="wrapper" style="padding: 0">
    </section>
    <section class="panel" style="min-height: 550px;">
        <p class="panel-heading">
            Form Lesson-create
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
                                <option value="{{($data->id)}}">{{($data->id)}}</option>
                            @endforeach
                        </select>
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
                            <option value="2">defail</option>
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
                <div class="checkbox-material">
                    <ul class="checkbox-material-ul">
                        @foreach($admin->listMaterial() as $material)
                            <li class="checkbox-material-li">
                                <input class="MaterialChecks" value="{{$material->id}}" type="checkbox" id="myCheckbox{{$material->id}}"/>
                                <label onclick="getValue()" class="checkbox-label" for="myCheckbox{{$material->id}}"><img src="{{$material->thumbnail}}"/></label>
                                <p>{{$material->id}}:{{$material->name}}</p>
                            </li>
                        @endforeach
                    </ul>
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
        listMaterial.onkeyup = function () {

        }


        function getValue() {
            var checks = document.getElementsByClassName('MaterialChecks');
            var listMaterial = document.getElementById('material');
            listMaterial.value = '';
            for (let i = 0; i < checks.length; i++) {
                if (checks[i].checked === true) {
                    listMaterial.value += ',' + checks[i].value;
                }
            }
            document.getElementById('modalLesson').style.display = 'none';
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
