@extends('layout.admin-layout')
@section('title')
    Tracking
@endsection
@section('detail')
    <section class="panel">
        <div class="panel-heading">
            LESSON
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-3">
                </div>
            </div>
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Account</th>
                    <th>LessonFinish</th>
                    <th>Current Course</th>
                    <th>Current Lesson</th>
                    <th>Comment</th>
                    <th>Active</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $data)
                    <tr class="gradeX">
                        <td>{{$data->id}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->LessonFinish}}</td>
                        <td>{{$data->getCourse()}}</td>
                        <td>{{$data->getLesson()}}</td>
                        <td>
                            <form action="">
                                <div style="margin: auto">
                                    <textarea type="text" style="width: 300px;"  name="comment" placeholder="Comment">{{$data->comment}}</textarea>
                                    <input type="hidden" name="id">
                                    <button><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </td>
                        <td>{{$data->coutDay()}} ago</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row datatables-footer">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_info" id="datatable-default_info" role="status" aria-live="polite">
                        Showing 1 to 10 of 5 entries
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate">
                        {{--                        {!! $list->links() !!}--}}
{{--                        @include('pagination.default', ['paginator' => $list])--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: page -->
    </section>
@endsection

