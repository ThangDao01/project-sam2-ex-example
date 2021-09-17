<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="vADeoBTpAGDD2RJSSVZgA7BMnu1VHRVTbWtYpXve">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description"
          content="E&K là chương trình dành cho trẻ 0 - 10 tuổi giúp trẻ bắt đầu học tiếng Anh dễ dàng, thú vị và hiệu quả hơn.">
    <meta name="keyword" content="{{\App\Http\Controllers\UserController::getkeywordPage()}}">
    <script src="https://connect.facebook.net/signals/config/251806315213206?v=2.9.44&amp;r=stable" async=""></script>
    <script src="https://connect.facebook.net/signals/config/348913062202988?v=2.9.44&amp;r=stable" async=""></script>
    <script src="https://connect.facebook.net/signals/plugins/identity.js?v=2.9.44" async=""></script>
    <script type="text/javascript" async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PS37S79"></script>
    <script>
        window.addEventListener('load', function () {
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-PS37S79');
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = true;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-156172818-2', 'auto');
            ga('send', 'pageview');
        })
    </script>


    <!-- End Google Tag Manager -->
    <link rel="canonical" href="https://www.monkeyjunior.vn">
    <link media="all" type="text/css" rel="stylesheet"
          href="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets//css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet"
          href="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets//css/styles.min.css?v=19">

    <script type="text/javascript"
            src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fjquery-3.5.1.min.js"></script>
    <script type="text/javascript"
            src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fjquery.lazy.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            top: 50px;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .padding {
            padding: 3rem !important
        }

        .user-card-full {
            overflow: hidden
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            border: none;
            margin-bottom: 30px;
            top: 15px;
        }

        .m-r-0 {
            margin-right: 0px
        }

        .m-l-0 {
            margin-left: 0px
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263)
        }

        .user-profile {
            padding: 20px 0
        }

        .card-block {
            padding: 1.25rem
        }

        .m-b-25 {
            margin-bottom: 25px
        }

        .img-radius {
            border-radius: 5px
        }

        h6 {
            font-size: 14px
        }

        .card .card-block p {
            line-height: 25px
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px
            }
        }

        .card-block {
            padding: 1.25rem
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .card .card-block div {
            line-height: 25px
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .text-muted {
            color: #919aa3 !important
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .f-w-600 {
            font-weight: 600
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .user-card-full .social-link li {
            display: inline-block
        }

        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out
        }
        .vote {
            height: 46px;
            float: left;
            padding: 0 10px;
            position: relative;
            z-index: 1;
        }

        .vote:not(:checked) > input {
            position: absolute;
            display: none;
        }

        .vote:not(:checked) > label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .vote:not(:checked) > label:before {
            content: '★ ';
        }

        .vote > input:checked ~ label {
            color: #ffc700;
        }

        .vote:not(:checked) > label:hover,
        .vote:not(:checked) > label:hover ~ label {
            color: #deb217;
        }

        .vote > input:checked + label:hover,
        .vote > input:checked + label:hover ~ label,
        .vote > input:checked ~ label:hover,
        .vote > input:checked ~ label:hover ~ label,
        .vote > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }

        /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
        /*****************globals*************/
        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px;
            }
        }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px;
        }

        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }

        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block;
        }

        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
        }

        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }

        .tab-content {
            overflow: hidden;
        }

        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }


        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .product-title, .price, .sizes, .colors {
            font-weight: bold;
        }

        .checked, .price span {
            color: #ff9f1a;
        }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
            margin-bottom: 15px;
        }

        .product-title {
            margin-top: 0;
        }

        .size {
            margin-right: 10px;
        }

        .size:first-of-type {
            margin-left: 40px;
        }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }

        .color:first-of-type {
            margin-left: 20px;
        }

        .add-to-cart, .like {
            background: #ff9f1a !important;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
        }

        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff;
        }

        .not-available {
            text-align: center;
            line-height: 2em;
        }

        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff;
        }

        .orange {
            background: #ff9f1a;
        }

        .green {
            background: #85ad00;
        }

        .blue {
            background: #0076ad;
        }

        .tooltip-inner {
            padding: 1.3em;
        }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .be-comment-block {
            margin-bottom: 50px !important;
            border: 1px solid #edeff2;
            border-radius: 2px;
            padding: 50px 70px;
            border: 1px solid #ffffff;
        }

        .comments-title {
            font-size: 16px;
            color: #262626;
            margin-bottom: 15px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-img-comment {
            width: 60px;
            height: 60px;
            float: left;
            margin-bottom: 15px;
        }

        .be-ava-comment {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .be-comment-content {
            margin-left: 80px;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-name {
            font-size: 13px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-comment-content a {
            color: #383b43;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-time {
            text-align: right;
        }

        .be-comment-time {
            font-size: 11px;
            color: #b4b7c1;
        }

        .be-comment-text {
            font-size: 13px;
            line-height: 18px;
            color: #7a8192;
            display: block;
            background: #f6f6f7;
            border: 1px solid #edeff2;
            padding: 15px 20px 20px 20px;
        }

        .form-group.fl_icon .icon {
            position: absolute;
            top: 1px;
            left: 16px;
            width: 48px;
            height: 48px;
            background: #f6f6f7;
            color: #b5b8c2;
            text-align: center;
            line-height: 50px;
            -webkit-border-top-left-radius: 2px;
            -webkit-border-bottom-left-radius: 2px;
            -moz-border-radius-topleft: 2px;
            -moz-border-radius-bottomleft: 2px;
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
        }

        .form-group .form-input {
            font-size: 13px;
            line-height: 50px;
            font-weight: 400;
            color: #b4b7c1;
            width: 100%;
            height: 50px;
            padding-left: 20px;
            padding-right: 20px;
            border: 1px solid #edeff2;
            border-radius: 3px;
        }

        .form-group.fl_icon .form-input {
            padding-left: 70px;
        }

        .form-group textarea.form-input {
            height: 150px;
        }
    </style>
</head>

<body class="home">
<header id="monkey-header" class="monkey-header monkey-bg-white monkey-nav-wrapper">
    <div class="container-fluid container-xl">
        <nav class="navbar navbar-expand-lg navbar-light p-0 monkey-nav">
          <span class="toggler-icon d-mobile">
            <span class="hamburger"></span>
          </span>
            <a class="p-0 m-auto d-desktop" href="/">
                <img class="logo" src="{{URL::asset('/images/logo-ek.png')}}" alt="#">
            </a>
            <div class="monkey-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item monkey-nav-item pr-4">
                        <a class="nav-link nav-link-monkey distance-center">
                            Giới thiệu
                            <span class="icon-caret-down"><i class="icon-monkey-dropdown" aria-hidden="true"></i></span>
                        </a>
                        <div class="monkey-dropdown-menu">
                            <a class="d-block monkey-dropdown-item subsite_menu_course" target="_self"
                               href="/chuong-trinh-hoc">
                                Chương trình học
                            </a>
                        </div>
                    </li>
                    <li class="nav-item monkey-nav-item">
                        <a class="nav-link nav-link-monkey distance-center" target="_self" href="/phuong-phap">
                            Phương pháp
                        </a>
                    </li>
                    <li class="nav-item monkey-nav-item">
                        <a class="nav-link nav-link-monkey distance-center" href="/loi-ich" target="_self">
                            Lợi ích
                        </a>
                    </li>
                    <li class="nav-item monkey-nav-item">
                        <a class="nav-link nav-link-monkey distance-center" href="/huong-dan-hoc" target="_self">
                            Hướng dẫn học
                        </a>
                    </li>

                    <li class="nav-item monkey-nav-item">
                        <a class="nav-link nav-link-monkey distance-center" href="/course" target="_self">
                            Khóa Học
                        </a>
                    </li>

                    <li class="nav-item monkey-nav-item">
                        <a class="nav-link nav-link-monkey distance-center" href="/ho-tro-khach-hang" target="_blank">
                            Hỗ trợ khách hàng
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Session::has('account'))
                        <?php
                        $account = \Illuminate\Support\Facades\Session::get('account');
                        $accCl = new \App\Http\Controllers\UserController();
                        ?>
                        <li class="nav-item distance-center d-desktop">
                            <button
                                class="btn monkey-color-green monkey-bc-green rounded-pill monkey-f-bold distance-center hvr-icon-registration-white"
                                id="myBtn"><i
                                    class="icon-lang rounded-circle icon-monkey-registration monkey-fz-18 mr-1 distance-center"></i>Thông
                                tin tài khoản
                            </button>
                        </li>

                    @else
                        <li class="nav-item distance-center d-desktop">
                            <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homems_menu_registration',
                            'eventAction': 'Click', 'eventLabel': 'menu MS dang ky'})"
                               class="btn monkey-color-green monkey-bc-green rounded-pill monkey-f-bold distance-center hvr-icon-registration-white"
                               href="/login">
                                <i class="icon-lang rounded-circle icon-monkey-registration monkey-fz-18 mr-1 distance-center"></i>Đăng
                                nhập
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    <div class="dropdown-languages nav-item monkey-nav-item d-desktop">
        <a class="nav-link nav-link-languages d-flex justify-content-end cursor">
            <img id="icon-lang" class="icon-lang rounded-circle border lazyLoading"
                 data-src="{{asset('images/viet-nam-01-01.png')}}" alt="#" src="{{asset('images/viet-nam-01-01.png')}}">
        </a>

        <div class="monkey-dropdown-menu monkey-dropdown-languages monkey-bg-white">
            <a class="dropdown-item item-language" href="https://www.monkeyjunior.vn/">
                <span class="mr-2"><img class="icon-lang border rounded-circle"
                                        src="{{asset('images/viet-nam-01-01.png')}}" alt="#"></span>Việt Nam</a>
        </div>
    </div>
    @if(\Illuminate\Support\Facades\Session::has('account'))
        <div id="userprofile" class="modal">
            <div class="modal-content">
                <div class="col-xl-12 col-md-12" style="margin: auto">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        @if($account->Avatar)
                                            <img src="{{$account->Avatar}}"
                                                 class="img-radius" alt="User-Profile-Image">
                                        @else
                                            <img src="https://img.icons8.com/bubbles/100/000000/user.png"
                                                 class="img-radius" alt="User-Profile-Image">
                                        @endif

                                    </div>
                                    <h6 class="f-w-600">{{$account->FirstName}} {{$account->LastName}}</h6>

                                    <a href="/logout">Log out</a>
                                    <i
                                        class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <button class="close">&times;</button>
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400">{{$account->Email}}</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Phone</p>
                                            <h6 class="text-muted f-w-400">
                                                {{$account->PhoneNumber}}
                                            </h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m
                                        b-10 f-w-600">Age</p>
                                            <h6 class="text-muted f-w-400">{{$account->Age}}</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m
                                        b-10 f-w-600">Account created</p>
                                            <h6 class="text-muted f-w-400">{{$account->created_at}}</h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Tracking</h6>
                                    @if($accCl->getTracking())
                                    <div class="row">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Course</th>
                                                <th scope="col">Lesson</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($accCl->getTracking() as $data)
                                            <tr>
{{--                                                <td>{{$data->getCourse()}}</td>--}}
{{--                                                <td>{{$data->getLesson()}}</td>--}}
                                                <td>{{$data->getCourse()}}</td>
                                                <td>{{$data->getLesson()}}</td>
{{--                                                <td>{{$data->coutDay()}} ago</td>--}}
                                                <td>{{$data->coutDay()}} ago</td>
{{--                                                <td><a href="/ls={{$data->LessonId}}/mt=1"><button class="btn monkey-color-green monkey-bc-green  monkey-f-bold distance-center">Let's go <i class="fa fa-arrow-right"></i></button></a></td>--}}
                                                <td><a href="/goto/cr={{$data->CourseId}}/ls={{$data->LessonId}}"><button class="btn monkey-color-green monkey-bc-green  monkey-f-bold distance-center">Let's go <i class="fa fa-arrow-right"></i></button></a></td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                               data-original-title="facebook" data-abc="true"><i
                                                    class="mdi mdi-facebook feather icon-facebook facebook"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                               data-original-title="twitter" data-abc="true"><i
                                                    class="mdi mdi-twitter feather icon-twitter twitter"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                               data-original-title="instagram" data-abc="true"><i
                                                    class="mdi mdi-instagram feather icon-instagram instagram"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

</header>
@yield('detail')
<footer id="footer">
    <div
        class="monkey-bg-green title text-center monkey-pt-20 monkey-pb-20 text-uppercase monkey-color-white monkey-fz-30 monkey-f-header">
        Liên hệ
    </div>
    <div class="footer-body monkey-bg-green monkey-pt-25 monkey-pb-25">
        <div class="container-fluid container-xl">
            <div class="contact-content text-center">
                <ul class="list-inline monkey-color-white ">
                    <li class="list-inline-item border-line monkey-f-bold text-left mb-2 monkey-color-white"><a
                            x-apple-data-detectors="true">Hotline: 1900 1508</a></li>
                </ul>

                <ul class="list-inline">
                    <li class="list-inline-item cursor">
                        <a class="size-icon-title monkey-bg-white distance-center rounded-circle" href="/coming-soon"
                           target="_blank">
                            <i class="icon-monkey-share monkey-color-green monkey-fz-18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item cursor">
                        <a class="size-icon-title monkey-bg-white distance-center rounded-circle" href="/coming-soon"
                           target="_blank">
                            <i class="icon-monkey-youtube monkey-color-green monkey-fz-18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item cursor">
                        <a class="size-icon-title monkey-bg-white distance-center rounded-circle" href="/coming-soon"
                           target="_blank">
                            <i class="icon-monkey-face monkey-color-green monkey-fz-18"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-group mt-2 mb-2 text-center monkey-color-white">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        <div
                            class="footer-group-body pt-3 pb-3 d-flex justify-content-center align-items-center border monkey-bc-white">
                            <div class="monkey-fz-14 monkey-f-medium footer-group-text">
                                Cộng đồng hơn 140.000 ba mẹ thông thái <span class="monkey-f-bold monkey-fz-16">Đồng hành cùng con học E&K:</span>
                            </div>
                            <a target="_blank" href="/coming-soon"
                               class="hvr-icon-registration ml-md-3 btn monkey-bc-white rounded-pill monkey-color-white monkey-fz-14 monkey-f-bold">
                                THAM GIA NGAY</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="monkey-f-bold footer-item monkey-color-white d-block d-lg-flex">

                <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                    <span class="mr-2">	●</span>
                    <span>Đăng ký Đại lý</span>
                </a>
                <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                    <span class="mr-2">	●</span>
                    <span>Kích hoạt tài khoản</span>
                </a>
                <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/contact-us" target="_blank">
                    <span class="mr-2">	●</span>
                    <span>Liên hệ </span>
                </a>
                <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/policy" target="_self">
                    <span class="mr-2">	●</span>
                    <span>Chính sách bảo mật</span>
                </a>
                <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                    <span class="mr-2">	●</span>
                    <span>Điều khoản sử dụng</span>
                </a>
                <a href="http://www.online.gov.vn/Home/WebDetails/40473" alt="#">
                    <img data-src="https://monkeymedia.vcdn.com.vn/upload/web/background-web/logo-footer"
                         class="img-certification d-block d-lg-none lazy" alt="#">

                </a>

            </div>
            <div class="address-content monkey-pt-20 monkey-pb-20 mt-3 mb-3">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">
                            <div class="col-lg-9 monkey-f-regular monkey-color-white text-center">
                                <p class="monkey-fz-12"></p>
                                <p class="monkey-fz-12">© 2021 - Bản quyền của T2009A-Dev4Fun</p>
                            </div>
                            <div class="col-lg-2 d-lg-block d-none">
                                <a href="http://www.online.gov.vn/Home/WebDetails/40473" alt="#">
                                    <img data-src="{{asset('images/logoSaleNoti.png')}}" class="img-certification lazy"
                                         alt="#">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="seo-body text-center monkey-color-white">
                        <ul class="list-inline monkey-f-regular monkey-fz-12">
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<script type="text/javascript"
        src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fowl.carousel.min.js"></script>
<script type="text/javascript"
        src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fbootstrap4.min.js"></script>
<script type="text/javascript"
        src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fjquery.fancybox.min.js"></script>
<script type="text/javascript"
        src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fmodernizr-3.6.0.min.js"></script>
<script type="text/javascript"
        src="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets/js/site.js?v=19"></script>
<script>
    // Get the modal
    var modal = document.getElementById("userprofile");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var close = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    close.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
