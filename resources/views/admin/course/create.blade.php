@extends('layout.admin-layout')
@section('detail')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Create Data</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Create Data</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <section>
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2>Data form</h2>
                <form action="/admin/course/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="CourseName"><h4>Course Name</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="CourseName" placeholder="Enter CourseName....." name="CourseName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="Price"><h4>Price</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="Price" placeholder="Enter Price....."
                                   name="Price">
                            <div id="words_vi-demo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="status"><h4>status</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="status" placeholder="Enter status....."
                                   name="status">
                            <div id="words_en-demo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6 col-xs-11">
                            <button class="btn btn-sm btn-primary colorpicker-element">
                                Submit
                            </button>
                            <button class="btn btn-sm btn-default colorpicker-element">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </section>
        <!-- end: page -->
    </section>
{{--    <script>--}}
{{--        var a = document.getElementById('images');--}}
{{--        var demo = document.getElementById('images-demo');--}}
{{--        a.onchange = function (){--}}
{{--            demo.innerHTML = `<img src="/images/`+ a.files[0].name +`"  style="width: 100px;" alt="`+a.files[0].name+`">`--}}
{{--        }--}}
{{--    </script>--}}
@endsection
