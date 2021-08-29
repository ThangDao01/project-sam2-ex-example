
@extends('layout.user-layout')
@section('title')
    E&K - Bảng giá
@endsection
@section('detail')
    <section id="price-list" class="price-list position-relative z-index-100">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class = "price-list-body" >
                        <div class = "row" >
                            @foreach($listLesson as $lesson)
                                <div class = "col-md-6 col-lg-4 m-auto" >
                                    <div
                                        class = "price-list-item monkey-bg-white text-center hvr-float mb-4 monkey_junior"
                                    >
                                        <div class = "text-uppercase monkey-f-bold mb-3" >
                                            {{$lesson->lessonName}}
                                        </div >
                                        <div
                                            class = "price-list-item-image monkey-bg-green distance-center"
                                        >
                                            <img src = "{{asset('/images/logo-ek.png')}}" alt = "#"/>

                                        </div >
                                        <div
                                            class = "price-list-footer d-flex justify-content-center"
                                        >
                                            <a onclick = " ga('send',{'hitType': 'event', 'eventCategory': 'homemj_price_1nam',
                'eventAction': 'Click', 'eventLabel': 'trang chu bang gia goi 1 nam'})"
                                               href="/ls={{$lesson->id}}/mt=1" class="btn rounded-pill  monkey-bg-green hvr-icon-registration effect-hover-shine btn-price-list monkey-color-white distance-center" >
                                                Học bài
                                                <i
                                                    class="ml-2 monkey-color-green icon-monkey-button-registration monkey-bg-white monkey-fz-16 rounded-circle distance-center"
                                                ></i>
                                            </a>
                                        </div >
                                    </div >
                                </div >
                            @endforeach
                        </div >
                    </div >
                </div>
            </div>
        </div>
    </section>
@endsection
