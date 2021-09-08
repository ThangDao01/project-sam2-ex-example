@extends('layout.admin-layout')
@section('detail')
    <!-- start: page -->
    <div class="col-sm-12 mail-w3agile">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Inbox (34)
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
                        <li><span>1-50 of 124</span></li>
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
                        <tr class="unread">
                            @foreach($list as $data)
                                <td class="inbox-small-cells">{{$data->Vote}}<i class="fa fa-star inbox-started"></i></td>
                                <td class="view-message dont-show"><a>{{$data->getName()}}</a></td>
                                <td class="view-message"><a>{!! $data->Message !!}</a></td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">{{$data->created_at->toFormattedDateString()}}</td>
                            @endforeach
                        </tr>

                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show"><a href="#">Tasi man <span class="label label-danger pull-right">urgent</span></a></td>
                            <td class="view-message"><a href="#">Lorem ipsum dolor sit amet</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">May 2</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show"><a href="#">Facebook</a></td>
                            <td class="view-message"><a href="#">Dolor sit amet, consectetuer adipiscing</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Bafent</td>
                            <td class="view-message">Lorem ipsum dolor sit amet</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">December 19</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Mogli Marion</td>
                            <td class="view-message">Lorem ipsum dolor sit amet</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">February 09</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="dont-show">Facebook</td>
                            <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">May 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Samual</td>
                            <td class="view-message">Lorem ipsum dolor sit amet</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">February 25</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="dont-show">Facebook</td>
                            <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Dk brain</td>
                            <td class="view-message">Lorem ipsum dolor sit amet</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">April 07</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Twitter</td>
                            <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">July 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Samual</td>
                            <td class="view-message">Lorem ipsum dolor sit amet</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">August 10</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Facebook</td>
                            <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">April 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Morlig doen</td>
                            <td class="view-message">Lorem ipsum dolor sit amet</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">June 16</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Margarita does</td>
                            <td class="view-message">Lorem ipsum dolor sit amet</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">August 30</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Facebook</td>
                            <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">May 15</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- end: page -->
@endsection
