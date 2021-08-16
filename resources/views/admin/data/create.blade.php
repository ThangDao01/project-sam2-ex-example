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
                        <label for="values">Values:</label>
                        <input type="text" class="form-control" id="values" placeholder="Enter values" name="values">
                    </div>
                    <div class="form-group">
                        <label for="words_vi">Words_vi:</label>
                        <input type="text" class="form-control" id="words_vi" placeholder="Enter words_vi"
                               name="words_vi">
                        <div id="words_vi-demo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="words_en">Words_en:</label>
                        <input type="text" class="form-control" id="words_en" placeholder="Enter voice_vi"
                               name="words_en">
                        <div id="words_en-demo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="voice_vi">Voice_vi:</label>
                        <input type="text" class="form-control" id="voice_vi" placeholder="Enter voice_vi"
                               name="voice_vi">
                        <div id="voice_vi-demo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="voice_en">Voice_en:</label>
                        <input type="text" class="form-control" id="voice_en" placeholder="Enter email" name="voice_en">
                        <div id="voice_en-demo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="images">Images:</label>
                        <input type="file" class="form-control" id="images" placeholder="Enter images" name="images">
                        <div id="images-demo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="key">Key:</label>
                        <input type="text" class="form-control" id="key" placeholder="Enter Key" name="key">
                    </div>
                    <div>
                        Key : thể loại , màu
                    </div>
                    <br>
                    <button type="submit" id="btn" class="btn btn-primary">Submit</button>
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
