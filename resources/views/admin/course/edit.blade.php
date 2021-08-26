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
            <form class="form-horizontal bucket-form" action="/admin/course/{{$obj->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label">course</label>
                    <div class="col-sm-6">
                        <input type="text" name="course" class="form-control" value="{{$obj->course}}">
                        @error('course')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="Price" value="{{$obj->price}}">
                        @error('Price')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="Description" value="{{$obj->description}}">
                        @error('Description')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Time Finish(day)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="timeFinish" value="{{$obj->TimeFinish}}">
                        @error('timeFinish')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 form-group" style="margin-left: 170px;">
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Status</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="Status" value="{{$obj->status}}">
                        @error('status')
                        <div class="text-danger">* {{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 form-group" style="text-align: center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </section>
@endsection
