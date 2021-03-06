@extends('layout.user-layout')
<title>E&K - Khóa Học</title>
@section('detail')
    <iframe src = "https://www.googletagmanager.com/ns.html?id=GTM-PS37S79"
            height = "0" width = "0" style = "display:none;visibility:hidden" >
    </iframe >
    <section id="popup-loading" class="popup-loading">
        <div class="popup-loading-content distance-center">
            <div class="text-center">
                <div id="" class="lds-default">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function onShowPopupLoading () {
            const nameId         = document.getElementById ('popup-loading');
            nameId.style.display = "block";
        }

        function onHiddenPopupLoading () {
            const nameId         = document.getElementById ('popup-loading');
            nameId.style.display = "none";
        }
    </script>
    <div class = "body-bottom" >
        <div class = "go-top" >
            <div class = "go-top-body" >
                <a
                    onClick = "onGoTop('breadcrumb-monkey')"
                    class = "go-item distance-center cursor go-top-item"
                >
                    <i class = "icon-monkey-go-top monkey-fz-15" ></i >
                    <div class = "text-item text-go-top" >Kéo lên</div >
                </a >
                <a class = "go-item distance-center cursor border-bottom-0"
                   onclick = "ga('send',{'hitType': 'event', 'eventCategory': 'homemj_support_button',
                   'eventAction': 'Click', 'eventLabel': 'trang tru button support'})
                   "
                   href = "/coming-soon" target = "_blank" >
                    <i class = "icon-monkey-support monkey-fz-20" ></i >
                    <div class = "text-item text-support" >Hỗ trợ khách hàng</div >
                </a >




            </div >
        </div >
    </div >
    <script>
        const elePopupSeoContent = document.getElementById("popup-seo-content");
        if (elePopupSeoContent) {
            window.addEventListener("scroll", function() {
                if (
                    window.pageYOffset > 500 &&
                    localStorage.getItem("showCampaignPopup") === "true"
                ) {
                    $("#popup-seo")
                        .fancybox({
                            overlayShow: true,
                            smallBtn: false,
                            clickSlide: false,
                        })
                        .trigger("click");
                    localStorage.setItem("showCampaignPopup", "false");
                }
            });
        }
    </script>

    <script >
        const elemGoTop = document.querySelector (".go-top-item");
        if (elemGoTop) {
            window.addEventListener ("scroll", () => {
                if (window.pageYOffset > 600) {
                    elemGoTop.style.display = "grid";
                } else {
                    elemGoTop.style.display = "none";
                }
            });
        }

        localStorage.setItem ('language', '{"language":"vi","country":"VN","phone_code":"84"}')
        if (localStorage.getItem ('showCampaignPopup') === null) {
            localStorage.setItem ('showCampaignPopup', 'true');
        }
    </script >

    <section class="banner-customer-support">
        <div class="banner-desktop background-style d-mobile" >
            <img style="width:100%;" class="lazyLoading" data-src="http://globalmedia.monkeyuni.com/upload/web/storage_web/17-01-2021_18:54:01_Embe.png" />
        </div>
    </section>
    <section class="form-search-wrapper">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="banner-customer-support-content banner-representative-students-content border-radius">
                        <div class="title monkey-fz-32 monkey-f-header text-uppercase">
                            Khóa Học
                        </div>
                        <i class="icon-monkey-form-search-1 d-mobile icon-form-search-1"></i>
                        <i class="icon-monkey-form-search-2 d-mobile icon-form-search-2"></i>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="position-relative monkey-manual">
            <div
                class="background-style bg-page bg-page-two d-desktop bg-monkey-full-set"
            ></div>
            <section id="breadcrumb-monkey" class="breadcrumb-monkey position-relative z-index-100">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class=" d-mobile">
                                <nav aria-label="breadcrumb">
                                    <ol
                                        class="breadcrumb monkey-bg-transparent mb-0 p-0"
                                    >
                                        <li class="breadcrumb-item ">
                                            <a class="monkey-f-medium text-uppercase"
                                               href="/">Trang chủ</a>
                                        </li>
                                        <li class="breadcrumb-item active ">
                                            <a href="#"
                                               class="monkey-f-bold text-uppercase">Khóa Học</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="d-desktop mt-4">
                                <div
                                    class = "title-wrapper text-center monkey-fz-32 monkey-f-header distance-center "
                                >
                                    <div class = "monkey-f-header monkey-fz-30 monkey-color-white monkey-fz-48" >
                                        <span class = "text-uppercase" >Khóa Học</span >
                                    </div >
                                </div >
                                <p class="text-center monkey-fz-24 monkey-color-white mt-3 mb-4">Ba mẹ lựa chọn gói học để đăng ký cho con!</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section id="price-list" class="price-list position-relative z-index-100">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class = "price-list-body" >
                                <div class = "row" >
                                    @foreach($listCourse as $course)
                                        <div class = "col-md-6 col-lg-4 m-auto" >
                                            <div
                                                class = "price-list-item monkey-bg-white text-center hvr-float mb-4 monkey_junior"
                                            >
                                                <div class = "text-uppercase monkey-f-bold mb-3" >
                                                    {{$course->name}}
                                                </div >
                                                <div
                                                    class = "price-list-item-image monkey-bg-green distance-center"
                                                >
                                                    <img src = "{{$course->thumbnail}}" alt = "#"/>

                                                </div >
                                                <div class = "price-list-content text-center mt-4 mb-4" >
                                                    <p class = "monkey-f-bold monkey-fz-15 mb-1" >
                                                        @if($course->price == 0)
                                                            Free
                                                        @else
                                                            {{$course->price}}
                                                        @endif
                                                    </p >
                                                </div >
                                                <div
                                                    class = "price-list-footer d-flex justify-content-center"
                                                >
                                                        <a onclick = ""
                                                           href="/detail/cr={{$course->id}}" class="btn rounded-pill  monkey-bg-green hvr-icon-registration effect-hover-shine btn-price-list monkey-color-white distance-center" >
                                                            Chi tiết
                                                            <i
                                                                class="ml-2 monkey-color-green icon-monkey-button-registration monkey-bg-white monkey-fz-16 rounded-circle distance-center"
                                                            ></i>
                                                        </a>
                                                    @if($course->price == 0)
                                                        <a onclick = " ga('send',{'hitType': 'event', 'eventCategory': 'homemj_price_1nam',
                'eventAction': 'Click', 'eventLabel': 'trang chu bang gia goi 1 nam'})"
                                                           href="/cr={{$course->id}}" class="btn rounded-pill  monkey-bg-green hvr-icon-registration effect-hover-shine btn-price-list monkey-color-white distance-center" >
                                                            Vào học
                                                            <i
                                                                class="ml-2 monkey-color-green icon-monkey-button-registration monkey-bg-white monkey-fz-16 rounded-circle distance-center"
                                                            ></i>
                                                        </a>
                                                    @else
                                                        <a onclick = " ga('send',{'hitType': 'event', 'eventCategory': 'homemj_price_1nam',
                'eventAction': 'Click', 'eventLabel': 'trang chu bang gia goi 1 nam'})"
                                                           href="/cr={{$course->id}}" class="btn rounded-pill  monkey-bg-green hvr-icon-registration effect-hover-shine btn-price-list monkey-color-white distance-center" >
                                                            Đăng ký
                                                            <i
                                                                class="ml-2 monkey-color-green icon-monkey-button-registration monkey-bg-white monkey-fz-16 rounded-circle distance-center"
                                                            ></i>
                                                        </a>
                                                    @endif

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
            <section class="monkey-course monkey-right">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <section class="pt-3">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 m-auto">
                                        <div class="monkey-right-item monkey-bg-light-gray monkey-right-red">
                                            <div
                                                class="monkey-right-item-image distance-center monkey-bg-red box-shadow"
                                            >
                                                <i
                                                    class="icon-monkey-box-content-a monkey-fz-50 distance-center"
                                                ></i>
                                            </div>
                                            <div
                                                class="monkey-right-item-content text-center monkey-f-15"
                                            >
                                                Áp dụng các phương pháp Giáo dục sớm nổi tiếng nhất Glenn Doman
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 m-auto">
                                        <div class="monkey-right-item monkey-bg-light-gray monkey-right-sunshine">
                                            <div
                                                class="monkey-right-item-image distance-center monkey-bg-sunshine box-shadow"
                                            >
                                                <i
                                                    class="icon-monkey-box-content-b monkey-fz-50 distance-center"
                                                ></i>
                                            </div>
                                            <div
                                                class="monkey-right-item-content text-center monkey-f-15"
                                            >
                                                Chương trình học theo chuẩn CCSS, hệ thống bài học đồ sộ và khoa học
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 m-auto">
                                        <div class="monkey-right-item monkey-bg-light-gray monkey-right-green">
                                            <div
                                                class="monkey-right-item-image distance-center monkey-bg-green box-shadow"
                                            >
                                                <i
                                                    class="icon-monkey-box-content-c monkey-fz-50 distance-center"
                                                ></i>
                                            </div>
                                            <div
                                                class="monkey-right-item-content text-center monkey-f-15"
                                            >
                                                Kích hoạt & phát huy tối đa tiềm năng ngôn ngữ trong giai doạn vàng
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="monkey-course outstanding-facilities bg-monkey-course background-style pb-5">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div
                                class = "title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4"
                            >
                                <div class = "icon" >
                                    <div class = "distance-center bg-icon-title  mr-2" >
                                        <i class = "icon-monkey-check monkey-fz-22 monkey-color-white " ></i >

                                    </div >
                                </div >
                                <div class = "monkey-f-header monkey-fz-30 monkey-color-green" >
                                    <span class = "text-uppercase" >Học mọi lúc mọi nơi, không cần kết nối internet</span >
                                </div >
                            </div >
                            <div class = "row" >
                                <div class = "col-12 col-md-6 col-lg-3" >
                                    <div class = "outstanding-facilities-item monkey-bg-sunshine" >
                                        <div class = "outstanding-facilities-item-image distance-center" >
                                            <i class = "icon-monkey-outstanding-facilities-1 distance-center monkey-bg-sunshine" ></i >
                                        </div >
                                        <div class = "outstanding-facilities-item-content text-center" >
                                            <a class = ""
                                               href = "/coming-soon" > <span class="monkey-color-white "><p>Không giới hạn số thiết bị đăng nhập</p></span></a >
                                        </div >
                                    </div >
                                </div >
                                <div class = "col-12 col-md-6 col-lg-3" >
                                    <div class = "outstanding-facilities-item monkey-bg-blue" >
                                        <div class = "outstanding-facilities-item-image distance-center" >
                                            <i class = "icon-monkey-outstanding-facilities-2 distance-center monkey-bg-blue" ></i >
                                        </div >
                                        <div class = "outstanding-facilities-item-content text-center" >
                                            <a class = ""
                                               href = "/coming-soon" > <span class="monkey-color-white "><p>Tạo nhiều hồ sơ người học trên một tài khoản</p></span></a >
                                        </div >
                                    </div >
                                </div >
                                <div class = "col-12 col-md-6 col-lg-3" >
                                    <div class = "outstanding-facilities-item monkey-bg-green" >
                                        <div class = "outstanding-facilities-item-image distance-center" >
                                            <i class = "icon-monkey-outstanding-facilities-3 distance-center monkey-bg-green" ></i >
                                        </div >
                                        <div class = "outstanding-facilities-item-content text-center" >
                                            <a class = ""
                                               href = "/coming-soon" > <span class="monkey-color-white "><p>Sử dụng ứng dụng ngay cả khi không kết nối internet</p></span></a >
                                        </div >
                                    </div >
                                </div >
                                <div class = "col-12 col-md-6 col-lg-3" >
                                    <div class = "outstanding-facilities-item monkey-bg-violet" >
                                        <div class = "outstanding-facilities-item-image distance-center" >
                                            <i class = "icon-monkey-outstanding-facilities-4 distance-center monkey-bg-violet" ></i >
                                        </div >
                                        <div class = "outstanding-facilities-item-content text-center" >
                                            <a class = ""
                                               href = "/coming-soon" > <span class="monkey-color-white "><p>Tự động đồng bộ tiến độ học tập trên tất cả các thiết bị</p></span></a >
                                        </div >
                                    </div >
                                </div >
                            </div >

                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
@endsection
