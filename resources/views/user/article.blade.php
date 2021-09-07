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
                                class="breadcrumb monkey-bg-transparent mb-0 p-0"
                            >
                                <li class="breadcrumb-item breadcrumb-mobile">
                                    <a class="monkey-f-medium text-uppercase"
                                       href="https://www.monkey.edu.vn/">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active breadcrumb-mobile">
                                    <a href="https://www.monkey.edu.vn/loi-ich.html"
                                       class="monkey-f-bold text-uppercase"> Lợi ích</a>
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
                            <section
                                class="slider-new slider-bar-concerned-parents monkey-bg-white mb-4 d-desktop"
                            >
                                <div
                                    class="title style-title text-uppercase monkey-color-green monkey-fz-22 monkey-f-bold mb-4"
                                >
                                    Ba mẹ cần biết
                                </div>
                                <div class = "pb-3 pb-lg-4 border-bottom mt-3 mt-lg-4" >
                                    <div class = "media mt-3 parents-share-media" >
                                        <div class = "media-image effect-hover-circle slider-bar-new-item}" >
                                            <img
                                                data-src = "http://media.monkeyuni.com/upload/web/storage_web/18-01-2021_09:25:11_congbohoclieu_thumb.jpg"
                                                class = " lazyLoading" alt = "#"
                                            />

                                        </div >
                                        <div class = "media-body" >
                                            <h5 class = "mt-0 monkey-f-bold monkey-fz-15" >
                                                <a class = "cursor"
                                                   href = "https://www.monkey.edu.vn/ba-me-can-biet/hoc-lieu-bo-tro-hieu-qua-hoc-tieng-anh-tai-nha-tren-monkey-stories.html" >Học liệu bổ trợ hiệu quả học tiếng Anh tại nhà trên Monkey Stories</a >

                                            </h5 >
                                        </div >
                                    </div >
                                </div >
                                <div class = "pb-3 pb-lg-4 border-bottom mt-3 mt-lg-4" >
                                    <div class = "media mt-3 parents-share-media" >
                                        <div class = "media-image effect-hover-circle slider-bar-new-item}" >
                                            <img
                                                data-src = "https://monkeymedia.vcdn.com.vn/upload/web/storage_web/09-06-2021_16:05:39_vdsc4_thumb.jpg"
                                                class = " lazyLoading" alt = "#"
                                            />

                                        </div >
                                        <div class = "media-body" >
                                            <h5 class = "mt-0 monkey-f-bold monkey-fz-15" >
                                                <a class = "cursor"
                                                   href = "https://www.monkey.edu.vn/ba-me-can-biet/cach-de-ba-me-tuong-tac-hieu-qua-voi-con-viet-de-se-chia-thang-10-2020.html" >Cách để ba mẹ tương tác hiệu quả với con - Viết để sẻ chia Tháng 10/2020</a >

                                            </h5 >
                                        </div >
                                    </div >
                                </div >
                                <div class = "pb-3 pb-lg-4 border-bottom mt-3 mt-lg-4" >
                                    <div class = "media mt-3 parents-share-media" >
                                        <div class = "media-image effect-hover-circle slider-bar-new-item}" >
                                            <img
                                                data-src = "https://media.monkeyuni.com/upload/web/storage_web/06-01-2021_02:15:15_267_thumb.jpg"
                                                class = " lazyLoading" alt = "#"
                                            />

                                        </div >
                                        <div class = "media-body" >
                                            <h5 class = "mt-0 monkey-f-bold monkey-fz-15" >
                                                <a class = "cursor"
                                                   href = "https://www.monkey.edu.vn/ba-me-can-biet/thanh-toan-goi-hoc-monkey-junior-qua-tai-khoan-mobifone.html" >Thanh toán gói học Monkey Junior qua tài khoản Mobifone</a >

                                            </h5 >
                                        </div >
                                    </div >
                                </div >
                            </section>


                            <div
                                id="slider-bar-concerned-parents"
                                class="slider-bar-concerned-parents monkey-bg-white"
                            >
                                <div
                                    class="title d-desktop style-title monkey-fz-22 text-uppercase monkey-f-bold mb-3 monkey-color-green"
                                >
                                    Học liệu cho con
                                </div>

                                <div
                                    class = "title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mb-4 d-mobile pt-2 pb-2 monkey-bg-green"
                                >
                                    <div class = "icon" >
                                        <div class = "distance-center size-icon-title monkey-lg-bg-green  mr-2" >
                                            <i class = "icon-monkey-title-document-2 monkey-fz-24 monkey-lg-color-white " ></i >

                                        </div >
                                    </div >
                                    <div class = "monkey-f-header monkey-fz-30 monkey-lg-color-green" >
                                        <span class = "text-uppercase" >Học liệu hay cho <br> con</span >
                                    </div >
                                </div >

                                <div class="student-documents-wrapper">
                                    <div class="row">
                                        <div class = "col-lg-12 col-md-6 col-12 mb-3" >
                                            <div style="display: grid;
    grid-template-columns: repeat(2, 1fr);grid-gap: 0.5rem; border-bottom: 1px solid #ddd;padding-bottom: 10px;">
                                                <div class = "student-documents-images background-style lazyLoading"
                                                     data-src="/image/original//block/block/2020/10/05/110012206/images/9.jpg"
                                                >
                                                </div >
                                                <div class="student-documents-content">
                                                    <p class="mb-3">
                                                        <a href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-50-tu-vung-tieng-anh-qua-mind-map-chu-de-clothing.html" class="btn monkey-color-gray monkey-bc-gray hvr-icon-registration-white not-active" >
                                                            <span class = "monkey-fz-15" >Tiếng Anh</span ></a >
                                                    </p>
                                                    <p class="mb-3">
                                                        <a href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-50-tu-vung-tieng-anh-qua-mind-map-chu-de-clothing.html" >
                                                            <span class = "monkey-fz-15 monkey-color-black" >Cùng con học  50 từ vựng tiếng Anh qua Mind Map chủ đề "CLOTHING"</span ></a >
                                                    </p>
                                                    <p class="mb-3">
                                                        <a style="display: inline;" href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-50-tu-vung-tieng-anh-qua-mind-map-chu-de-clothing.html" class="btn monkey-color-white monkey-bg-green hvr-icon-registration distance-center">
                                                            <span class = "monkey-fz-15" >Xem thêm</span ></a >
                                                    </p>
                                                </div>
                                            </div>
                                        </div >
                                        <div class = "col-lg-12 col-md-6 col-12 mb-3" >
                                            <div style="display: grid;
    grid-template-columns: repeat(2, 1fr);grid-gap: 0.5rem; border-bottom: 1px solid #ddd;padding-bottom: 10px;">
                                                <div class = "student-documents-images background-style lazyLoading"
                                                     data-src="/image/original//block/block/2020/10/05/110808761/images/8.jpg"
                                                >
                                                </div >
                                                <div class="student-documents-content">
                                                    <p class="mb-3">
                                                        <a href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-voi-hoc-lieu-vong-quay-40-tu-vung-chu-de-job.html" class="btn monkey-color-gray monkey-bc-gray hvr-icon-registration-white not-active" >
                                                            <span class = "monkey-fz-15" >Tiếng Anh</span ></a >
                                                    </p>
                                                    <p class="mb-3">
                                                        <a href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-voi-hoc-lieu-vong-quay-40-tu-vung-chu-de-job.html" >
                                                            <span class = "monkey-fz-15 monkey-color-black" >Cùng con học với Học liệu "Vòng quay 40+ từ vựng chủ đề JOB"</span ></a >
                                                    </p>
                                                    <p class="mb-3">
                                                        <a style="display: inline;" href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-voi-hoc-lieu-vong-quay-40-tu-vung-chu-de-job.html" class="btn monkey-color-white monkey-bg-green hvr-icon-registration distance-center">
                                                            <span class = "monkey-fz-15" >Xem thêm</span ></a >
                                                    </p>
                                                </div>
                                            </div>
                                        </div >
                                        <div class = "col-lg-12 col-md-6 col-12 mb-3" >
                                            <div style="display: grid;
    grid-template-columns: repeat(2, 1fr);grid-gap: 0.5rem; border-bottom: 1px solid #ddd;padding-bottom: 10px;">
                                                <div class = "student-documents-images background-style lazyLoading"
                                                     data-src="/image/original//block/block/2020/10/05/111713278/images/7.jpg"
                                                >
                                                </div >
                                                <div class="student-documents-content">
                                                    <p class="mb-3">
                                                        <a href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-voi-hoc-lieu-mindmap-chu-de-school.html" class="btn monkey-color-gray monkey-bc-gray hvr-icon-registration-white not-active" >
                                                            <span class = "monkey-fz-15" >Tiếng Anh</span ></a >
                                                    </p>
                                                    <p class="mb-3">
                                                        <a href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-voi-hoc-lieu-mindmap-chu-de-school.html" >
                                                            <span class = "monkey-fz-15 monkey-color-black" >Cùng con học với Học liệu Mindmap chủ đề "SCHOOL"</span ></a >
                                                    </p>
                                                    <p class="mb-3">
                                                        <a style="display: inline;" href = "https://www.monkey.edu.vn//hoc-lieu/cung-con-hoc-voi-hoc-lieu-mindmap-chu-de-school.html" class="btn monkey-color-white monkey-bg-green hvr-icon-registration distance-center">
                                                            <span class = "monkey-fz-15" >Xem thêm</span ></a >
                                                    </p>
                                                </div>
                                            </div>
                                        </div >
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

