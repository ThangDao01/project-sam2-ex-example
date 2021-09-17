@extends('layout.admin-layout')
@section('detail')
    <?php
    $admin = new \App\Http\Controllers\MainAdminController();
    ?>
    <!-- start: page -->
    <div class="col-sm-12 mail-w3agile">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Inbox ({{$list->count()}})
                    <form action="#" class="pull-right mail-src-position">
                        <div class="input-append">
                            <input type="text" class="form-control " placeholder="Search Mail">
                        </div>
                    </form>
                </h4>
            </header>
            <div class="panel-body minimal">
                <div class="mail-option">
                    <ul class="unstyled inbox-pagination">
                        <li><span>1-50 of {{$list->count()}}</span></li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="table-inbox-wrap ">
                    <table class="table table-inbox table-hover">
                        <tbody>
                        @foreach($list as $data)
                        <tr class="unread">
                                <td class="inbox-small-cells">{{$data->Vote}}<i class="fa fa-star inbox-started"></i></td>
                                <td class="view-message dont-show"><a>{{$data->Name}}</a></td>
                                <td class="view-message dont-show"><a>{{$data->Email}}</a></td>
                                <td class="view-message"><a>{!! $data->Message !!}</a></td>
                                <td class="view-message text-right">{{$data->created_at->toFormattedDateString()}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- end: page -->
@endsection
