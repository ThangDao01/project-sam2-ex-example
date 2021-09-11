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
            <form class="form-horizontal bucket-form" action="/admin/feedback/create" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">AccountId</label>
                    <div class="col-sm-3">
                        <input type="text" name="AccountID" class="form-control">
                    </div>
                    @error('AccountID')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Message</label>
                    <div class="col-sm-6">
                        <textarea style="resize: none" rows="8" type="text" class="form-control" name="Message" id="ckeditor1"
                                                    placeholder="vui lòng nhập thông tin...."></textarea>
                        @error('Message')
                        <div class="text-danger"> * {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Vote</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="Vote">
                        @error('Vote')
                        <div class="text-danger"> * {{$message}}</div>
                        @enderror
                    </div>
                    <label class="col-sm-1 control-label">Seen</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="Seen">
                        @error('Seen')
                        <div class="text-danger"> * {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
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
