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
            <form class="form-horizontal bucket-form" action="/admin/article/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">title</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="title">
                        @error('title')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div><div class="form-group">
                    <label class="col-sm-3 control-label">Url</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="url">
                        @error('url')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Categories</label>
                    <div class="col-sm-5">
                        <select type="text" class="form-control" name="categories">
                            <option value="phuongphap">Phương Pháp</option>
                            <option value="loiich">Lợi ích</option>
                            <option value="huongdan">Hướng dẫn</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Detail</label>
                    <div class="col-sm-5">
                        <textarea style="resize: none; " rows="8" type="text" class="form-control" name="Detail"
                                  id="ckeditor2"
                                  placeholder="vui lòng nhập thông tin....">
                        </textarea>
                        @error('Detail')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Author</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="Author">
                        @error('Author')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>


                <div class="col-md-10 form-group" style="text-align: center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace('ckeditor2');

    </script>
    {{--    <script>--}}
    {{--        var a = document.getElementById('images');--}}
    {{--        var demo = document.getElementById('images-demo');--}}
    {{--        a.onchange = function (){--}}
    {{--            demo.innerHTML = `<img src="/images/`+ a.files[0].name +`"  style="width: 100px;" alt="`+a.files[0].name+`">`--}}
    {{--        }--}}
    {{--    </script>--}}

@endsection
