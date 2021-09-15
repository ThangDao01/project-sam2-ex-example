@extends('layout.user-layout')
@section('title')
    <title>E&K - infor</title>
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
                            <div class="tab-pane active" id="pic-1"><img src="{{$course->thumbnail}}"/></div>
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title"> {{$course->name}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">{{$course->coutLearning()}} kids are learning this</span>
                        </div>
                        <p class="product-description">
                            {{$course->description}}<br><br>
                            Nâng cao khả năng tiếng Anh và tăng sự tự tin cho con bạn.
                            <br>
                            Chương trình học tại E&K được thiết kế đặc biệt nhằm hỗ trợ học viên thuộc độ tuổi và trình độ khác nhau trong việc học tập, sử dụng và phát triển tiếng Anh.
                        </p>
                        <h4 class="price">current price: <span>
                                @if($course->price)
                                    {{$course->price}}
                                @else
                                    Free
                                @endif
                            </span></h4>
                        <div class="action">
                            <a href="/cr={{$course->id}}">
                            <button class="add-to-cart btn btn-default" href="" type="button">Learn</button>
                            </a>
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
                    <a>
                        <img src="https://res.cloudinary.com/thangdao04/image/upload/v1631744817/mgez61yb53k6cjlvzkxt.png" alt="" class="be-ava-comment">
                    </a>
                </div>
                @foreach($listComment as $data)
                    <div class="be-comment-content">
				<span class="be-comment-name">
					<a>{{$data->Name}}</a>
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
            <form action="/feedback/create" method="post" class="form-block" style="margin-top: 20px">
                @csrf
                <div class="row">
                    @if(\Illuminate\Support\Facades\Session::has('account'))
                        <?php
                        $account = \Illuminate\Support\Facades\Session::get('account');
                        ?>
                        <input class="form-input" type="hidden" name="Name" value="{{$account->LastName}}"
                               placeholder="Your name">
                        <input class="form-input" type="hidden" name="Email" value="{{$account->Email}}"
                               placeholder="Your email">
                    @else
                        <input class="form-input" type="hidden" name="Location" value="{{$location}}"
                               placeholder="Your email">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <input class="form-input" name="Name" type="text" placeholder="Your name" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 fl_icon">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                <input class="form-input" name="Email" type="text" placeholder="Your email" required>
                            </div>
                        </div>
                    @endif
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-input" name="Message" required placeholder="Your text"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="vote">
                            <input type="radio" id="star5" name="Vote" value="5"/>
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="Vote" value="4"/>
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="Vote" value="3"/>
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="Vote" value="2"/>
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="Vote" value="1"/>
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
