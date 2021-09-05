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
            <form class="form-horizontal bucket-form" action="/admin/config/update" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">Contact Us</label>
                    <div class="col-sm-8">
                        <textarea  style="resize: none" rows="8" type="text" class="form-control" name="contactUs" id="ckeditor1"
                                  placeholder="vui lòng nhập thông tin....">@if($config->contactUs){{$config->contactUs}}@else null @endif</textarea>
                        @error('contactUs')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">About Us</label>
                    <div class="col-sm-8">
                        <textarea  style="resize: none; " rows="8" type="text" class="form-control" name="aboutUs" id="ckeditor2"
                                  placeholder="vui lòng nhập thông tin....">@if($config->aboutUs){{$config->aboutUs}}@else null @endif</textarea>
                        @error('aboutUs')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Policy Page</label>
                    <div class="col-sm-8">
                        <textarea style="resize: none" rows="8" type="text" class="form-control" name="policyPage" id="ckeditor3"
                                  placeholder="vui lòng nhập thông tin....">@if($config->policyPage){{$config->policyPage}}@else null @endif</textarea>
                        @error('policyPage')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">title Page</label>
                    <div class="col-sm-8">
                        <textarea style="resize: none" rows="8" type="text" class="form-control" name="titlePage" id="ckeditor4"
                                  placeholder="vui lòng nhập thông tin....">@if($config->titlePage){{$config->titlePage}}@else null @endif</textarea>
                        @error('titlePage')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">description Page</label>
                    <div class="col-sm-8">
                        <textarea type="text" rows="8" cols="80" name="descriptionPage">@if($config->descriptionPage){{$config->descriptionPage}}@else null @endif</textarea>
                        @error('descriptionPage')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">keyword Page</label>
                    <div class="col-sm-8">
                        <textarea type="text" rows="8" cols="80" name="keywordPage">@if($config->keywordPage){{$config->keywordPage}}@else null @endif</textarea>
                        @error('keywordPage')
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
        CKEDITOR.replace( 'ckeditor2' );
        CKEDITOR.replace( 'ckeditor3' );
        CKEDITOR.replace( 'ckeditor4' );
    </script>
@endsection
