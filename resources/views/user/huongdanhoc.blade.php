@extends('layout.user-layout')
@section('title')
    <title>E&K - Hướng dẫn học</title>
@endsection
@section('detail')
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS37S79"
            height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
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
        function onShowPopupLoading() {
            const nameId = document.getElementById('popup-loading');
            nameId.style.display = "block";
        }

        function onHiddenPopupLoading() {
            const nameId = document.getElementById('popup-loading');
            nameId.style.display = "none";
        }
    </script>
    <div class="body-bottom">
        <div class="go-top">
            <div class="go-top-body">
                <a
                    onClick="onGoTop('breadcrumb-monkey')"
                    class="go-item distance-center cursor go-top-item"
                >
                    <i class="icon-monkey-go-top monkey-fz-15"></i>
                    <div class="text-item text-go-top">Kéo lên</div>
                </a>
                <a class="go-item distance-center cursor border-bottom-0"
                   onclick="ga('send',{'hitType': 'event', 'eventCategory': 'homemj_support_button',
                   'eventAction': 'Click', 'eventLabel': 'trang tru button support'})
                   "
                   href="/coming-soonl" target="_blank">
                    <i class="icon-monkey-support monkey-fz-20"></i>
                    <div class="text-item text-support">Hỗ trợ khách hàng</div>
                </a>


            </div>
        </div>
    </div>
    <script>
        const elemGoTop = document.querySelector(".go-top-item");
        if (elemGoTop) {
            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 600) {
                    elemGoTop.style.display = "grid";
                } else {
                    elemGoTop.style.display = "none";
                }
            });
        }

        localStorage.setItem('language', '{"language":"vi","country":"VN","phone_code":"84"}')
        if (localStorage.getItem('showCampaignPopup') === null) {
            localStorage.setItem('showCampaignPopup', 'true');
        }
    </script>

    <section class="banner-customer-support">
        <div class="banner-desktop background-style d-mobile">
            <img style="width:100%;" class="lazyLoading"
                 data-src="{{URL::asset('/images/18-01-2021-15_54_34_CTH.jpg')}}"/>
        </div>
    </section>
    <section class="form-search-wrapper">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="banner-customer-support-content banner-representative-students-content border-radius">
                        <div class="title monkey-fz-32 monkey-f-header text-uppercase">
                            Hướng dẫn học
                        </div>
                        <i class="icon-monkey-form-search-1 d-mobile icon-form-search-1"></i>
                        <i class="icon-monkey-form-search-2 d-mobile icon-form-search-2"></i>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="monkey-bg-light-gray position-relative monkey-manual">
            <div
                class="background-style bg-page bg-page-two d-desktop bg-monkey-full-set"
            ></div>
            <section id="breadcrumb-monkey" class="breadcrumb-monkey">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <nav aria-label="breadcrumb">
                                <ol
                                    class="breadcrumb monkey-bg-transparent mb-0 p-0"
                                >
                                    <li class="breadcrumb-item ">
                                        <a class="monkey-f-medium text-uppercase"
                                           href="/home">Trang chủ</a>
                                    </li>
                                    <li class="breadcrumb-item active ">
                                        <a href="#"
                                           class="monkey-f-bold text-uppercase"> Hướng dẫn học</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="monkey-manual-new">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <h3
                                class="monkey-f-bold monkey-fz-20 mt-4 mb-4 text-uppercase text-center d-mobile monkey-color-green"
                            >
                                E&K ĐỒNG HÀNH CÙNG BA MẸ & CÁC CON<br>TRONG SUỐT QUÁ TRÌNH HỌC
                            </h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-video background-style distance-center mb-3 lazyLoading"
                                         data-src="{{URL::asset('/images/huong-dan-hoc.png')}}">
                                    </div>

                                </div>


                                <div class="col-lg-6">
                                    <div class="content monkey-color-white">
                                        <h3
                                            class="monkey-f-bold monkey-fz-30 text-uppercase d-desktop"
                                        >
                                            E&K ĐỒNG HÀNH CÙNG BA MẸ & CÁC CON<br>TRONG SUỐT QUÁ TRÌNH HỌC
                                        </h3>
                                        <p class="monkey-f-medium mt-4">
                                            Chọn E&K, bố mẹ đi được 50% chặng đường. Áp dụng những hướng dẫn
                                            học sau đây, bố mẹ cùng con đi 50% chặng đường còn lại!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="manual-wrapper pt-5 mb-4">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div
                                class = "title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4"
                            >
                                <div class = "icon" >
                                    <div class = "distance-center bg-icon-title  mr-2" >
                                        <i class = "icon-monkey-benefit-a monkey-fz-24 monkey-color-white " ></i >

                                    </div >
                                </div >
                                <div class = "monkey-f-header monkey-fz-30 monkey-color-green" >
                                    <span class = "text-uppercase" >Các phương pháp được E&K áp dụng</span >
                                </div >
                            </div >
                            <div class="monkey-bg-white p-md-4 p-0 border-radius">

                                <div class="manual-content-item border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">
                                        <a class="monkey-f-bold monkey-fz-18 monkey-color-green d-block d-md-none custom-text-title-2 /phuong-phap/monkey-junior-ap-dung-phuong-phap-trao-the-nhanh-glenn-doman-nhu-the-nao.html" href="/coming-soon">Vai trò của cha mẹ trong việc giúp con bắt đầu học tiếng anh hiệu quả cùng E&K</a>
                                    </h5>
                                    <div
                                        class="media parents-share-media"
                                    >
                                        <div class="mr-3 media-image effect-hover-circle ">
                                            <img src = "{{asset('/images/rectangle-39.png')}}" alt = "#"/>
                                        </div>
                                        <div class="media-body columns-2-4">
                                            <h5
                                                class="mt-0 monkey-f-bold monkey-fz-18 custom-text-title-2 d-none d-md-block"
                                            >
                                                <a class="/phuong-phap/monkey-junior-ap-dung-phuong-phap-trao-the-nhanh-glenn-doman-nhu-the-nao.html" href="/coming-soon" >Vai trò của cha mẹ trong việc giúp con bắt đầu học tiếng anh hiệu quả cùng E&K</a>

                                            </h5>
                                            <p
                                                class="monkey-f-medium monkey-color-gray mb-4 text-justify custom-text-box-6 "
                                            >
                                                Thực tế cho thấy, trẻ có ba mẹ đồng hành, việc học E&K sẽ có hiệu quả vượt trội và nhanh chóng hơn so với các trẻ khác chỉ tiếp cận với ứng dụng một mình. Do đó, các chuyên gia của Monkey luôn cố gắng lưu ý và khuyến khích ba mẹ dành thời gian cùng con, dù chỉ 10 phút mỗi ngày.
                                            </p>
                                            <a class="monkey-color-gray monkey-f-bold cursor" href="/coming-soon"> Chi tiết</a>
                                        </div>
                                    </div>


                                </div>
                                <div class="manual-content-item border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">
                                        <a class="monkey-f-bold monkey-fz-18 monkey-color-green d-block d-md-none custom-text-title-2 /phuong-phap/phuong-phap-phonics-kich-thich-toi-da-tu-duy-va-tiem-nang-cua-nao-trai.html" href="/coming-soon">Hướng dẫn ba mẹ 2 cách khai thác bài học E&K</a>
                                    </h5>
                                    <div
                                        class="media parents-share-media"
                                    >
                                        <div class="mr-3 media-image effect-hover-circle ">
                                            <img src = "{{asset('/images/rectangle-40.png')}}" alt = "#"/>
                                        </div>
                                        <div class="media-body columns-2-4">
                                            <h5
                                                class="mt-0 monkey-f-bold monkey-fz-18 custom-text-title-2 d-none d-md-block"
                                            >
                                                <a class="/phuong-phap/phuong-phap-phonics-kich-thich-toi-da-tu-duy-va-tiem-nang-cua-nao-trai.html" href="/coming-soon" >Hướng dẫn ba mẹ 2 cách khai thác bài học E&K</a>

                                            </h5>
                                            <p
                                                class="monkey-f-medium monkey-color-gray mb-4 text-justify custom-text-box-6 "
                                            >

                                                Ngoài việc học theo lộ trình hệ thống bài học, ba mẹ có thể khai thác E&K bằng việc học theo chủ đề. Ba mẹ cũng nên khéo léo chuyển đổi, kết hợp hai cách học này để mang lại hứng thú học và lợi ích tối ưu khi trẻ mới bắt đầu học tiếng Anh với E&K.&nbsp;
                                                &nbsp;
                                            </p>
                                            <a class="monkey-color-gray monkey-f-bold cursor" href="/coming-soon"> Chi tiết</a>
                                        </div>
                                    </div>


                                </div>
                                <div class="manual-content-item border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">
                                        <a class="monkey-f-bold monkey-fz-18 monkey-color-green d-block d-md-none custom-text-title-2 /phuong-phap/hieu-ve-hoc-tap-thong-qua-vui-choi-xoa-di-sai-lam-thuong-gap-trong-cach-day-con.html" href="/coming-soon">Hứng thú học - điều kiện tiên quyết để con bắt đầu học tiếng Anh hiệu quả khi học E&K</a>
                                    </h5>
                                    <div
                                        class="media parents-share-media">
                                        <div class="mr-3 media-image effect-hover-circle ">
                                            <img
                                                data-src = "{{URL::asset('/images/t32-web51-1.png')}}"
                                                class = " lazy" alt = "#"/>
                                        </div>
                                        <div class="media-body columns-2-4">
                                            <h5
                                                class="mt-0 monkey-f-bold monkey-fz-18 custom-text-title-2 d-none d-md-block">
                                                <a class="/phuong-phap/hieu-ve-hoc-tap-thong-qua-vui-choi-xoa-di-sai-lam-thuong-gap-trong-cach-day-con.html" href="/coming-soon"
                                                >Hứng thú học - điều kiện tiên quyết để con bắt đầu học tiếng Anh hiệu quả khi học E&K</a>

                                            </h5>
                                            <p class="monkey-f-medium monkey-color-gray mb-4 text-justify custom-text-box-6 ">
                                                Với trẻ nhỏ, làm bất cứ điều gì cũng cần sự hứng thú. Đặc biệt, khi trẻ bắt đầu làm quen với một ngôn ngữ mới, hứng thú học tập lại càng quan trọng hơn.
                                                &nbsp
                                            </p>
                                            <a class="monkey-color-gray monkey-f-bold cursor" href="/coming-soon">
                                                Chi tiết</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="box-registration monkey-bg-green p-3 mt-4 border-radius-1 d-flex align-items-center justify-content-between">
                                <div class="d-block d-md-none">
                                    <div class="size-icon-title rounded-circle monkey-bg-white distance-center m-auto">
                                        <i class="icon-monkey-check monkey-fz-20 monkey-color-green"></i>
                                    </div>
                                </div>
                                <div class="title text-center d-flex align-items-center">
                                    <div class="d-none d-md-block">
                                        <div class="size-icon-title rounded-circle monkey-bg-white distance-center">
                                            <i class="icon-monkey-check monkey-fz-20 monkey-color-green"></i>
                                        </div>
                                    </div>
                                    <span class="ml-2 monkey-f-bold monkey-color-white text-uppercase text-left">
                                Đăng ký để giúp con bắt đầu học tiếng anh<br>bài bản và hiệu quả ngay hôm nay cùng E&K</span>
                                </div>
                                <div class="box-registration-footer">
                                    <a style="min-width: 9.375rem" class="monkey-color-white monkey-bg-sunshine btn rounded-pill distance-center"
                                       href="/coming-soon">
                                        Đăng ký ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="common-questions panel-question active support-question monkey-bg-light-gray">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div
                                class="support-question-wrapper border-radius monkey-bg-white mb-3">
                                <div
                                    class="title mb-4 monkey-f-bold monkey-fz-22 monkey-color-black d-flex align-items-center">
                                    <i class="icon-monkey-question monkey-fz-25 bg-icon-title distance-center monkey-color-white"></i>
                                    <span class="monkey-color-red ml-2"></span> Câu hỏi thường gặp
                                </div>
                                <div class="support-question-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">1.</span> Khi học E&K, con chỉ thích chơi
                                                    trò chơi mà không thực sự chú tâm vào các nội dung của bài học. Ba
                                                    mẹ nên làm thế nào trong tình huống này?
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">2.</span> Có nên cho con học lại bài đã học trong
                                                    E&K?
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">3.</span> Ba mẹ có nên giúp con hoàn thành và vượt
                                                    qua thử thách trong phần trò chơi nếu con chọn sai không?
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">4.</span> Cách học theo chủ đề trong E&K
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">5.</span> E&K có còn phù hợp với những bé
                                                    đã tiếp xúc và đã biết một vài từ tiếng Anh cơ bản hay không?
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray border-bottom monkey-bc-silver">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">6.</span> Ba mẹ muốn cho con học cả Tiếng Việt và
                                                    tiếng Anh trên E&K thì học như thế nào?
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray border-bottom monkey-bc-silver">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">7.</span> Hướng dẫn sắp xếp sticker trong cửa hàng
                                                    trên E&K
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray border-bottom monkey-bc-silver">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">8.</span> Làm thế nào để thay đổi ngôn ngữ sử dụng
                                                    trong ứng dụng E&K?
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray border-bottom monkey-bc-silver">
                                                <a href="/coming-soon"
                                                   alt=""
                                                   target="_blank"><span
                                                        class="mr-3">9.</span> Cách chọn chương trình học và tải khóa
                                                    học trên E&K
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

