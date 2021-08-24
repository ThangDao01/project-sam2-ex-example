@extends('layout.admin-layout')
@section('title')
    Course
@endsection
@section('detail')
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic table
                </div>
                <div>
                    <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>CourseName</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>TimeFinish</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $data)
                            <tr class="gradeX">
                                <td>{{$data->id}}</td>
                                <td>{{$data->CourseName}}</td>
                                <td>{{$data->Price}}</td>
                                <td>{{$data->Description}}</td>
                                <td>{{$data->TimeFinish}}</td>
                                <td>{{$data->Status}}</td>
                                <td class="actions">
                                    <a href="/admin/course/edit/id={{$data->id}}" class="on-default edit-row">
                                        <i style="font-size: 20px" class="fa fa-pencil-square-o text-success text-active"></i></a>
                                    <a href="/admin/course/delete/id={{$data->id}}" class="on-default remove-row" onclick="return confirm('Chắc xoá danh muc này?')">
                                        <i style="font-size: 20px" class="fa fa-times text-danger text"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row datatables-footer">
                        <div class="col-sm-12 col-md-6">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate">
                                {{--                        {!! $list->links() !!}--}}
                                @include('pagination.default', ['paginator' => $list])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
