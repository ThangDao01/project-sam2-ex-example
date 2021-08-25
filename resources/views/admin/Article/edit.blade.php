@extends('layout.admin-layout')
@section('title')
    Material-create
@endsection
@section('detail')
    <section class="wrapper" style="padding: 0">
    </section>
    <section class="panel" style="min-height: 550px;">
        <p class="panel-heading">
            Form Article-create
        </p>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" action="/admin/article/{{$obj->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">title</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="title" value="{{$obj->title}}">
                        @error('title')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Detail</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="Detail" value="{{$obj->Detail}}">
                        @error('Detail')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">AuthorId</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="AuthorId" value="{{$obj->AuthorId}}">
                        @error('AuthorId')
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
@endsection
