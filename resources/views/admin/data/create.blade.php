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
                <form action="/admin/data-support/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="Values">Values:</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="values" placeholder="Enter values" name="values">
                            @error('Values')
                            <div class="text-danger">* {{ $message }}</div>
                            @enderror
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="words_vi">Words_vi:</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="words_vi" placeholder="Enter words_vi"
                               name="words_vi">
                        <div id="words_vi-demo">
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="words_en">Words_en:</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="words_en" placeholder="Enter voice_vi"
                               name="words_en">
                        <div id="words_en-demo">
                        </div>
                    </div></div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="voice_vi">Voice_vi:</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="voice_vi" placeholder="Enter voice_vi"
                               name="voice_vi">
                        <div id="voice_vi-demo">
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="voice_en">Voice_en:</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="voice_en" placeholder="Enter email" name="voice_en">
                        <div id="voice_en-demo">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="images">Images:</label>
                        <div class="col-md-6">
                        <input type="file" class="form-control" id="images" placeholder="Enter images" name="images">
                        <div id="images-demo">
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="key">Key:</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control" id="key" placeholder="Enter Key" name="key">
                    </div>
                    </div>
                    <div>
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6 col-xs-11">
                        Key : thể loại , màu
                        </div>
                    </div>
                    <br>
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
    <script>
        var a = document.getElementById('images');
        var demo = document.getElementById('images-demo');
        a.onchange = function (){
            demo.innerHTML = `<img src="/images/`+ a.files[0].name +`"  style="width: 100px;" alt="`+a.files[0].name+`">`
        }
    </script>
@endsection
