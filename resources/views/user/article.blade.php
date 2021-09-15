{{--@extends('layout.user-layout')--}}
{{--<title>E&K - {{$description->title}}</title>--}}
{{--@section('detail')--}}
{{--    <div class="col-8">--}}
{{--        {!! $description->Detail !!}--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layout.user-layout')
<title>E&K - {{$description->title}} </title>
@section('detail')
    <section class="new-detail-page monkey-bg-light-gray">
        <div class="background-style bg-page d-desktop"></div>
        <section id="breadcrumb-monkey" class="breadcrumb-monkey">
            <div class="container-fluid container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <nav aria-label="breadcrumb">
                            <ol
                                class="breadcrumb monkey-bg-transparent mb-0 p-0">
                                <li class="breadcrumb-item breadcrumb-mobile">
                                    <a class="monkey-f-medium text-uppercase"
                                       href="/">Trang chủ</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-lg-8">
                            {!! $description->Detail !!}
                        </div>
                        <div class="col-lg-4">
                            <section class="slider-new slider-bar-concerned-parents monkey-bg-white mb-4 d-desktop">
                                <div class="title style-title text-uppercase monkey-color-green monkey-fz-22 monkey-f-bold mb-4">
                                    Ba mẹ cần biết
                                </div>
                                <?php
                                $article =\App\Http\Controllers\UserController::getArticle();
                                ?>
                                @for($i = 1; $i < 10; $i+=3)
                                    <div class="pb-3 pb-lg-4 border-bottom mt-3 mt-lg-4">
                                        <div class="media mt-3 parents-share-media">
                                            <div class="media-image effect-hover-circle slider-bar-new-item}">
                                                <img
                                                    data-src="{{$article[$i]->thumbnail}}"
                                                    class=" lazyLoading" alt="{{$article[$i]->url}}"
                                                />
                                            </div >
                                            <div class = "media-body" >
                                                <h5 class = "mt-0 monkey-f-bold monkey-fz-15" >
                                                    <a class = "cursor"
                                                       href = "/article={{$article[$i]->url}}" >{{$article[$i]->title}}</a >
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

