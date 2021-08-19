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
                    <form action="/admin/account/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="FirstName"><h4>FirstName</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="FirstName" placeholder="Enter FirstName....." name="firstName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="LastName"><h4>LastName</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="LastName" placeholder="Enter LastName....."
                                   name="LastName">
                            <div id="words_vi-demo">
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="Email"><h4>Email</h4></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="Email" placeholder="Enter Email....."
                                       name="Email">
                                <div id="words_vi-demo">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="Password"><h4>Password</h4></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="Password" placeholder="Enter Password....."
                                       name="Password">
                                <div id="Password-demo">
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="Age"><h4>Age</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="Age" placeholder="Enter Age....."
                                   name="Age">
                            <div id="words_en-demo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="RoleId"><h4>RoleId</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="RoleId" placeholder="Enter RoleId....."
                                   name="RoleId">
                            <div id="voice_vi-demo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="CourseId"><h4>CourseId</h4></label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="CourseId" placeholder="Enter CourseId....." name="CourseId">
                            <div id="CourseId">
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
