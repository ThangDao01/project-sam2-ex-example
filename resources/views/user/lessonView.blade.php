@extends('layout.user-layout')
@section('title')
    <title>E&K - infor</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <style>

        .vote {
            height: 46px;
            float: left;
            padding: 0 10px;
            position: relative;
            z-index: 1;
        }
        .vote:not(:checked) > input {
            position:absolute;
            display: none;
        }
        .vote:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
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
        body {
            font-family: 'open sans';
            overflow-x: hidden;
        }
        .body2{
            margin-top:20px;
            background-color:#e9ebee;
        }

        img {
            max-width: 100%;
        }

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

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em;
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
            text-transform: UPPERCASE;
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
            background: #ff9f1a;
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
            border:1px solid #ffffff;
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

        /*# sourceMappingURL=style.css.map */
    </style>
    <link rel="icon" href="{{asset('/images/logo-ek-title.png')}}" type="image/gif" sizes="16x16">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('detail')
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{asset('/images/infor.png')}}"/></div>
                            <div class="tab-pane" id="pic-2"><img src="{{asset('/images/infor.png')}}"/></div>
                            <div class="tab-pane" id="pic-3"><img src="{{asset('/images/infor.png')}}"/></div>
                            <div class="tab-pane" id="pic-4"><img src="{{asset('/images/infor.png')}}"/></div>
                            <div class="tab-pane" id="pic-5"><img src="{{asset('/images/infor.png')}}"/></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                        src="{{asset('/images/infor.png')}}"/></a></li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img
                                        src="{{asset('/images/infor.png')}}"/></a></li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img
                                        src="{{asset('/images/infor.png')}}"/></a></li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img
                                        src="{{asset('/images/infor.png')}}"/></a></li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img
                                        src="{{asset('/images/infor.png')}}"/></a></li>
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">men's shoes fashion</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 kid are learning this</span>
                        </div>
                        <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium
                            cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                        <h4 class="price">current price: <span>$180</span></h4>
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">Learn</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container body2">
        <div class="be-comment-block">
            <h1 class="comments-title">Comments ({{$listComment->count()}})</h1>
            <div class="be-comment">
                <div class="be-img-comment">
                    <a href="blog-detail-2.html">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                    </a>
                </div>
                @foreach($listComment as $data)
                <div class="be-comment-content">
				<span class="be-comment-name">
					<a href="blog-detail-2.html">{{$data->Name}}</a>
					</span>
                    <span class="be-comment-time">
					<i class="fa fa-clock-o"></i>
                        {{$data->created_at->toFormattedDateString()}}
				</span>
                    <p class="be-comment-text">
                        {!! $data->Message !!}
                    </p>
                </div>
                @endforeach
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/admin/feedback/create" method="post" class="form-block" style="margin-top: 20px">
                @csrf
                <div class="row">
                    @if(\Illuminate\Support\Facades\Session::has('account'))
                        <?php
                          $account = \Illuminate\Support\Facades\Session::get('account');
                        ?>
                        <input class="form-input" type="hidden" name="Name" value="{{$account->LastName}}" placeholder="Your name">
                        <input class="form-input" type="hidden" name="Email" value="{{$account->Email}}" placeholder="Your email">
                    @else
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <input class="form-input" name="Name"  type="text" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 fl_icon">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                <input class="form-input" name="Email" type="text" placeholder="Your email">
                            </div>
                        </div>
                        @endif
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-input" name="Message" required="" placeholder="Your text"></textarea>
                        </div>
                    </div>
                        <div class="col-12">
                            <div class="vote">
                                <input type="radio" id="star5" name="Vote" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="Vote" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="Vote" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="Vote" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="Vote" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                        <div class="col-6">
                        <button class="btn btn-primary pull-right">submit</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection
