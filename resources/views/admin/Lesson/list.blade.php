@extends('layout.admin-layout')
@section('title')
    Lesson
@endsection
@section('detail')
    <section class="panel">
        <div class="panel-heading">
            LESSON
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <a href="/admin/lesson/create">
                            <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>lessonName</th>
                    <th>courseId</th>
                    <th>lisMaterialId</th>
                    <th>dataSupportId</th>
                    <th>status</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $data)
                    <tr class="gradeX">
                        <td>{{$data->id}}</td>
                        <td>{{$data->lessonName}}</td>
                        <td>{{$data->courseId}}</td>
                        <td>{{$data->listMaterialId}}</td>
                        <td>{{$data->dataSupportId}}</td>
                        <td>{{$data->status}}</td>
                        <td class="actions">
                            <a href="/admin/lesson/edit/id={{$data->id}}" class="on-default edit-row">
                                <i style="font-size: 20px" class="fa fa-pencil-square-o text-success text-active"></i></a>
                            <a href="/admin/lesson/delete/id={{$data->id}}" class="on-default remove-row" onclick="return confirm('Ch???c xo?? danh muc n??y?')">
                                <i style="font-size: 20px" class="fa fa-times text-danger text"></i></a>
                        </td>
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
                        @include('pagination.default', ['paginator' => $list])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: page -->
    </section>
@endsection
