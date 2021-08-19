@extends('layout.admin-layout')
@section('detail')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Editable Tables</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Tables</span></li>
                    <li><span>Editable</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">Default</h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-md">

                            <a href="/admin/account/create">
                                <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Salt</th>
                        <th>Age</th>
                        <th>RoleId</th>
                        <th>CourseId</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @foreach($list as $data)--}}
                        <tr class="gradeX">
{{--                            <td>{{$data->Id}}</td>--}}
{{--                            <td>{{$data->FirstName}}</td>--}}
{{--                            <td>{{$data->LastName}}</td>--}}
{{--                            <td>{{$data->Email}}</td>--}}
{{--                            <td>{{$data->Password}}</td>--}}
{{--                            <td>{{$data->Salt}}</td>--}}
{{--                            <td>{{$data->Age}}</td>--}}
{{--                            <td>{{$data->RoleId}}</td>--}}
{{--                            <td>{{$data->CourseId}}</td>--}}
{{--                            <td>{{$data->Status}}</td>--}}
                            <td class="actions">
                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
{{--                    @endforeach--}}
                    </tbody>
                </table>
                <div class="row datatables-footer">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="datatable-default_info" role="status" aria-live="polite">
                            Showing 1 to 5 of 5 entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate">
{{--                                                    {!! $list->links() !!}--}}
                            @include('pagination.default', ['paginator' => $list])
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: page -->
    </section>
@endsection
