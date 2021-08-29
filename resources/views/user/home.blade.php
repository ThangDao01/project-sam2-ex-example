@extends('layout.user-layout')
@section('title')
    E&K - Nơi dành cho trẻ mới bắt đầu học tiếng Anh
@endsection
@section('detail')
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS37S79" height="0" width="0" style="display:none;visibility:hidden">
</iframe>
<section id="popup-loading" class="popup-loading">
    <div class="popup-loading-content distance-center">
        <div class="text-center">
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
<div class="body-bottom">

    <div class="go-top">
        <div class="go-top-body">
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
        </div>
    </div>
</div>
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

<script>
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
</script>

<main>
    <div class="home-wrapper">
        <div class="monkey-bg-light-gray">
            <section id="home" class="banner-monkey background-style lazyLoading" data-src="https://monkeymedia.vcdn.com.vn/upload/web/storage_web/31-03-2021_14:27:12_bannerMJ_PC.png" style="background-image: url('https://monkeymedia.vcdn.com.vn/upload/web/storage_web/31-03-2021_14:27:12_bannerMJ_PC.png');">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6">
                            <div class="monkey-f-header title monkey-fz-30 text-center monkey-color-white mb-4 mt-4 d-mobile">ENGLIST KIST - TIẾNG ANH <br> CHO TRẺ MỚI BẮT ĐẦU</div>
                            <div class="banner-video background-style distance-center lazyLoading" data-src="{{URL::asset('images/tieng-anh-cho-tre-moi-bat-dau.png')}}" style="background-image: url('/images/monkey-junior-tieng-anh-cho-tre-moi-bat-dau.png');">
                            </div>
                        </div>
                        <div class="col-lg-6 align-items-start d-desktop">
                            <div class="banner-content">
                                <div class="monkey-f-header monkey-fz-40 monkey-color-white mb-5">ENGLIST KID - TIẾNG ANH <br> CHO TRẺ MỚI BẮT ĐẦU</div>
                                <div class="monkey-color-white"><p>Tiên phong tại Việt Nam<br>
                                        về&nbsp;Tiếng Anh và Giáo dục sớm cho mọi trẻ em</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <section class="vocabulary-course" id="breadcrumb-monkey">
            <div class="container-fluid container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
                            <div class="icon">
                                <div class="distance-center bg-icon-title  mr-2">
                                    <i class="icon-monkey-group monkey-fz-24 monkey-color-white "></i>

                                </div>
                            </div>
                            <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                                <span class="text-uppercase">Lượng từ vựng khổng lồ - Học ngay tại nhà</span>
                            </div>
                        </div>
                        <div class="vocabulary-course-1 ">
                            <div class="row">
                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="https://media.monkeyuni.com/upload/web/storage_web/06-12-2020_11:42:46_MJ_home_box1_1.png" class="card-img-top lazyLoading" alt="#" src="https://media.monkeyuni.com/upload/web/storage_web/06-12-2020_11:42:46_MJ_home_box1_1.png">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;"><strong><span style="font-size:28px;">3000+</span> từ vựng</strong></p>

                                                    <p style="text-align: center;">3 cấp độ <strong>từ dễ đến nâng cao</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="https://media.monkeyuni.com/upload/web/storage_web/06-12-2020_11:44:11_MJ_home_box1_2.png" class="card-img-top lazy" alt="#" src="https://media.monkeyuni.com/upload/web/storage_web/06-12-2020_11:44:11_MJ_home_box1_2.png">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">Thuộc&nbsp;<strong><span style="font-size:28px;">48</span> chủ đề</strong></p>

                                                    <p style="text-align: center;"><strong>phổ biến nhất</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="https://media.monkeyuni.com/upload/web/storage_web/06-12-2020_11:46:40_MJ_home_box1_3.png" class="card-img-top lazy" alt="#" src="https://media.monkeyuni.com/upload/web/storage_web/06-12-2020_11:46:40_MJ_home_box1_3.png">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">Được sử dụng với</p>

                                                    <p style="text-align: center;"><strong><span style="font-size:28px;">6000+</span> mẫu câu</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="text-center mt-3 mb-4">
                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_vocab_more',
                'eventAction': 'Click', 'eventLabel': 'trang chu MJ button section 1'})" href="/loi-ich/hoc-luong-tu-vung-khong-lo-ngay-tai-nha-cung-monkey-junior.html" class="btn rounded-pill  monkey-bc-green hvr-icon-registration-white pr-3 pl-3">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pronunciation-course" >
            <div class="container-fluid container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
                            <div class="icon">
                                <div class="distance-center bg-icon-title  mr-2">
                                    <i class="icon-monkey-reading-book monkey-fz-24 monkey-color-white "></i>

                                </div>
                            </div>
                            <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                                <span class="text-uppercase">Phát âm chuẩn anh mỹ - ngay từ đầu</span>
                            </div>
                        </div>
                        <div class="vocabulary-course-2 border-bottom">
                            <div class="row">
                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/rectangle-53.png')}}" class="card-img-top lazyLoading" alt="#" src="{{URL::asset('/images/rectangle-53.png')}}">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">
                                                        <strong>Giọng đọc chuẩn Anh - Mỹ</strong> do người bản xứ đọc tạo môi trường nghe chuẩn ngay tại nhà.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/image_2021_08_06T15_07_33_138Z.png')}}" class="card-img-top lazy" alt="#">
                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;"><meta charset="utf-8">
                                                        <span style="font-size:28px;"><strong>10.000</strong>
                                                        </span> audio giọng đọc đa dạng giúp trẻ có <strong>ngữ điệu tự nhiên như người bản xứ</strong>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img src="{{asset('images/rectangle-47.png')}}" alt="#">
                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">
                                                        <meta charset="utf-8">Phương pháp Phonics giúp trẻ <strong>phát âm chuẩn từ mới dù chưa từng gặp</strong>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="text-center mt-3 mb-4">
                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_pronunciation_more',
                'eventAction': 'Click', 'eventLabel': 'trang chu MJ button section 2'})" href="/loi-ich/phat-am-chuan-anh-my-ngay-tu-dau-cung-monkey-junior.html" class="btn rounded-pill  monkey-bc-green hvr-icon-registration-white pr-3 pl-3">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="monkey-optimal-effective" >
            <div class="container-fluid container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
                            <div class="icon">
                                <div class="distance-center bg-icon-title  mr-2">
                                    <i class="icon-monkey-benefit-a monkey-fz-24 monkey-color-white "></i>

                                </div>
                            </div>
                            <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                                <span class="text-uppercase">Tối ưu thời gian &amp; hiệu quả nhờ lộ trình học bài bản</span>
                            </div>
                        </div>
                        <div class="vocabulary-course-3 border-bottom">
                            <div class="row">
                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/home-31.jpg')}}" class="card-img-top lazyLoading" alt="#" src="{{URL::asset('/images/home-31.jpg')}}">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">Lộ trình do chuyên gia ngôn ngữ hàng đầu biên soạn.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/home-32.jpg')}}" class="card-img-top lazy" alt="#">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;"><strong><span style="font-size:24px;">3</span> cấp độ:</strong></p>

                                                    <p style="text-align: center;">Dễ - Trung Bình - Nâng Cao</p>

                                                    <p style="text-align: center;">dạy từ - cụm từ - câu hoàn chỉnh</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/home-33.jpg')}}" class="card-img-top lazy" alt="#">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">Tính nhắc lại và phát triển qua các bài học, giúp từ vựng trở thành trí nhớ vĩnh cửu của trẻ em.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="text-center mt-3 mb-4">
                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_timing_more',
                'eventAction': 'Click', 'eventLabel': 'trang chu MJ button section 3'})" href="/loi-ich/lo-trinh-hoc-bai-ban-cua-monkey-junior-giup-toi-uu-thoi-gian-hoc-va-giup-be-hoc-hieu-qua-hon.html" class="btn rounded-pill  monkey-bc-green hvr-icon-registration-white pr-3 pl-3">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="monkey-growth" id="">
            <div class="container-fluid container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
                            <div class="icon">
                                <div class="distance-center bg-icon-title  mr-2">
                                    <i class="icon-monkey-benefit-a monkey-fz-24 monkey-color-white "></i>

                                </div>
                            </div>
                            <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                                <span class="text-uppercase">Phát triển mạnh 2 bán cầu não <br> nhờ các phương pháp giáo dục sớm</span>
                            </div>
                        </div>
                        <div class="vocabulary-course-4 border-bottom">
                            <div class="row">
                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/rectangle-74.png')}}" class="card-img-top lazyLoading" alt="#" >
                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;"><strong>Phương pháp tráo thẻ nhanh và kích thích não phải Glenn Doman</strong> giúp trẻ tăng khả năng nhân diện mặt chữ.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/rectangle-48.png')}}" class="card-img-top lazy" alt="#">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">
                                                        <strong>Phương pháp chụp hình nguyên từ kết hợp Phonics</strong>&nbsp;kích thích tối đa tư duy và tiềm năng 2 bán cầu não.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12  col-md-4 m-auto">
                                    <div class="vocabulary-course-item mb-3">
                                        <div class="card border-radius-1 overflow-hidden">
                                            <div style="max-height: 14rem">
                                                <img data-src="{{URL::asset('/images/rectangle-75.png')}}" class="card-img-top lazy" alt="#">

                                            </div>
                                            <div class="card-body text-center pt-3 pb-3 distance-center pl-0 pr-0" style="height: 7.8125rem">
                                                <div class="card-text">
                                                    <p style="text-align: center;">
                                                        <strong>Phương pháp đa giác quan của Giáo sư, Tiến sĩ Robert C. Titzer (Mỹ)</strong> giúp trẻ tăng khả năng ghi nhớ.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="text-center mt-3 mb-4">
                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_braingrowth_more',
                'eventAction': 'Click', 'eventLabel': 'trang chu MJ button section 4'})" href="" class="btn rounded-pill  monkey-bc-green hvr-icon-registration-white pr-3 pl-3">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            function openPopupTalkAboutMoney (id) {
                const data = newData.filter((item) => item.id == id)[0];
                document.getElementById ('images-thumb').src = data.image_cv;
                var content       = document.getElementById ('popup-talk-about-monkey-content');
                content.innerHTML = data.description + '<br>' + data.content;
                var date          = document.getElementById ('popup-talk-about-monkey-date');
                date.innerHTML    = formatDate (data.publish_date * 1000);
                var view          = document.getElementById ('popup-talk-about-monkey-view');
                view.innerHTML    = data.viewcount + ' views';
                var header        = document.getElementById ('popup-talk-about-monkey-layout');
                let title         = '<a class="monkey-color-green" href="https://www.monkey.edu.vn/tin-tuc/' + data.alias + '.html">' + data.title + '</a>';
                header.innerHTML  = title;

                var url_current = "https://www.monkeyjunior.vn/" + "/api/increase-views";

                var options = {
                    method  : 'POST',
                    headers : {
                        "Content-Type" : "application/json"
                    },
                    body    : JSON.stringify ({
                        'id' : data.id
                    })
                };

                var aPromise = fetch (url_current, options);
                aPromise
                    .then (response => response.json ())
                    .then (data => {
                    })
                    .catch (error => {
                    });

            }

            function formatDate (date) {
                var d     = new Date (date),
                    month = '' + ( d.getMonth () + 1 ),
                    day   = '' + d.getDate (),
                    year  = d.getFullYear ();

                if (month.length < 2)
                    month = '0' + month;
                if (day.length < 2)
                    day = '0' + day;

                return [day, month, year].join ('-');
            }
        </script>

        <section id="registration-mobile" class="registration-mobile monkey-bg-white background-style mt-4 mb-4">
            <div class="container-fluid container-xl">
                <div class="d-desktop">
                    <div class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mb-4">
                        <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                            <span class="text-uppercase">"TRẺ SƠ SINH ĐẾN NGÀY THỨ 3 MỚI BẮT ĐẦU DẠY DỖ LÀ ĐÃ CHẬM MẤT 2 NGÀY"<br>- NHÀ SINH HỌC NGƯỜI NGA IVAN PETROVICH PAVLOV -</span>
                        </div>
                    </div>
                </div>
                <div class="d-mobile pt-2">
                    <div class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
                        <div class="icon">
                            <div class="distance-center bg-icon-title  mr-2">
                                <i class="icon-monkey-support-form monkey-fz-24 monkey-color-white "></i>

                            </div>
                        </div>
                        <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                            <span class="text-uppercase">Nhận tư vấn miễn phí</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="registration-wrapper background-style p-3 monkey-bg-red d-flex monkey-mt-20">
                            <div class="media">
                                <div class="mr-3 d-desktop media-title monkey-color-white monkey-f-bold monkey-fz-19">
                                    <p>
                                        Kích hoạt tư duy ngôn ngữ và giúp con bắt đầu học Tiếng Anh với E&K ngay hôm nay!
                                    </p>
                                </div>
                                <div class="media-body">
                                    <form id="form-registration-2" class="form-registration background-style" onsubmit="registrationOrder2(event)">
                                        <div class="monkey-bg-white form-body overflow-hidden">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text monkey-bg-transparent">
                                                        <i class="icon-monkey-name monkey-color-green monkey-fz-18"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Họ tên" id="form-registration-name-2">
                                            </div>
                                            <div class="monkey-color-red pl-3 pt-2 pb-2" id="val-name-2" style="display: none">
                                                <i class="monkey-fz-12">*Vui lòng kiểm tra lại họ tên</i>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text monkey-bg-transparent">
                                                        <i class="icon-monkey-phone monkey-color-green monkey-fz-16"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Số điện thoại" id="form-registration-phone-2">
                                            </div>
                                            <div class="monkey-color-red pl-3 pt-2 pb-2" id="val-phone-2" style="display: none">
                                                <i class="monkey-fz-12">*Vui lòng kiểm tra lại SĐT</i>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text monkey-bg-transparent">
                                                        <i class="icon-monkey-email monkey-color-green monkey-fz-12"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Email" id="form-registration-email-2">
                                            </div>
                                            <div class="monkey-color-red pl-3 pt-2 pb-2" id="val-email-2" style="display: none">
                                                <i class="monkey-fz-12">*Vui lòng kiểm tra lại Email</i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button id="button-registration-2" type="submit" data-toggle="modal" class="mt-3 monkey-color-white btn-registration btn btn-warning rounded-pill monkey-fz-f17">
                                                <i class="icon-monkey-loading monkey-fz-20 mr-2 align-middle" id="icon-loading-1" style="display: none"></i>
                                                Đăng ký tư vấn miễn phí
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="popup" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content p-4">
                                <div class="modal-body text-center">
                                    <div class="icon-monkey-popup mb-3">
                                    </div>
                                    <p class="monkey-f-regular monkey-fz-22"></p><p style="text-align: center;"><strong>E&K đã nhận được đăng ký của ba mẹ.</strong></p>

                                    <p style="text-align: center;"><strong>E&K sẽ liên hệ ba mẹ để tư vấn trong thời gian sớm nhất!</strong></p>
                                </div>
                                <div class="mt-2 text-center">
                                    <a href="/coming-soon" class="btn rounded-pill  monkey-color-white monkey-bg-green" data-dismiss="modal">
                                        Hoàn thành
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="popup-error" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content pt-3 pb-3">
                                <div class="modal-body text-center pr-0 pl-0">
                                    <div class="icon-monkey-popup mb-3">
                                        <img data-src="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets/img/icons/img-error.png" class=" lazy" alt="#">

                                    </div>
                                    <p class="monkey-f-regular monkey-fz-22">Oops!!! Đã có lỗi xảy ra!!!<br>Ba mẹ vui lòng thử lại nhé!
                                    </p></div>
                                <div class="mt-2 text-center">
                                    <a href="/coming-soon" class="btn rounded-pill  monkey-color-white monkey-bg-red" data-dismiss="modal">
                                        Đồng ý
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        const registrationOrder2 = async (e) => {
                            e.stopPropagation ();
                            e.preventDefault ();
                            let name    = $ ('#form-registration-name-2').val ().trim ();
                            let phone   = $ ('#form-registration-phone-2').val ().trim ();
                            let email   = $ ('#form-registration-email-2').val ().trim ();
                            const country_code = JSON.parse(localStorage.getItem("language"))["phone_code"];
                            let resultName  = validateName (name, "val-name-2");
                            let resultEmail = validateEmail (email, "val-email-2");
                            let resultPhone = validatePhone (phone, "val-phone-2");

                            if (!resultName || !resultEmail || !resultPhone ) {
                                return false
                            }
                            document.getElementById ("icon-loading-1").setAttribute ('style', 'display: inline-block');
                            document.getElementById ("button-registration-2").setAttribute ('disabled', 'true');

                            let fullDomain = document.URL;
                            let domain = fullDomain.split("/");
                            var url_current = domain[0] + "//" + domain[2] + "/order-register-custom";

                            var options = {
                                method  : 'POST',
                                headers : {
                                    "Content-Type" : "application/json"
                                },
                                body    : JSON.stringify ({
                                    phone      : phone,
                                    email      : email,
                                    name       : name,
                                    country_code:country_code,
                                    p          : 2,
                                    product_id : 'com.earlystart.ltr.1year',
                                })
                            };

                            var aPromise = fetch (url_current, options);
                            aPromise
                                .then (response => response.json ())
                                .then (data => {
                                    ga('send',{'hitType': 'event', 'eventCategory': 'homemj_orderbox2',
                                        'eventAction': 'Click', 'eventLabel': 'trang chu MJ form tu van 2'});
                                    document.getElementById ("icon-loading-1").setAttribute ('style', 'display: none');
                                    document.getElementById ("button-registration-2").removeAttribute ('disabled');
                                    if (data['code'] == 200) {
                                        $ ('#popup').modal ('toggle')
                                        document.getElementById ("form-registration-name-2").value  = '';
                                        document.getElementById ("form-registration-phone-2").value = '';
                                        document.getElementById ("form-registration-email-2").value = '';
                                    } else {
                                        $ ('#popup-error').modal ('toggle')
                                    }
                                })
                                .catch (error => {
                                    document.getElementById ("icon-loading-1").setAttribute ('style', 'display: none');
                                    document.getElementById ("button-registration-2").removeAttribute ('disabled');
                                    $ ('#popup-error').modal ('toggle')
                                });

                        }
                    </script>
                </div>
            </div>
        </section>
        <section class="parents-share parents-share-mobile mb-4">
            <div class="container-fluid container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="parents-share-body background-style border-radius">
                            <div class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center ">
                                <div class="icon">
                                    <div class="distance-center size-icon-title monkey-lg-bg-green  mr-2">
                                        <i class="icon-monkey-representative-students-1 monkey-fz-24 monkey-lg-color-white "></i>

                                    </div>
                                </div>
                                <div class="monkey-f-header monkey-fz-30 monkey-lg-color-green">
                                    <span class="text-uppercase">Ba mẹ cần biết</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="media mt-5 parents-share-media">
                                        <div class="media-image effect-hover-circle }">
                                            <img src="{{asset('/images/rectangle-46.png')}}" alt="#">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 monkey-f-bold monkey-fz-17">
                                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_news_post',
                                    'eventAction': 'Click', 'eventLabel': 'trang chu MJ tiêu đề ba me can biet'})" class="cursor" href="/coming-soon">Hỏi đáp Thử thách Kể chuyện Người bạn “10 triệu”</a>

                                            </h5>
                                            <div class="monkey-fz-15 monkey-f-medium monkey-color-gray text-justify">
                                                Tại bài viết này, E&K sẽ giải đáp mọi thắc mắc cho ba mẹ về chương trình Kể chuyện Người bạn “10 triệu” được tổ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="media mt-5 parents-share-media">
                                        <div class="media-image effect-hover-circle }">
                                            <img src="{{asset('/images/rectangle-45.png')}}" alt="#">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 monkey-f-bold monkey-fz-17">
                                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_news_post',
                                    'eventAction': 'Click', 'eventLabel': 'trang chu MJ tiêu đề ba me can biet'})" class="cursor" href="/coming-soon">Thể lệ Thử thách Kể chuyện Người bạn “10 triệu”</a>

                                            </h5>
                                            <div class="monkey-fz-15 monkey-f-medium monkey-color-gray text-justify">
                                                Nhân dịp E&K đạt mốc 10 triệu người dùng, E&K tổ chức Thử thách Kể chuyện Người bạn “10 triệu”. Đây là dịp để...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="media mt-5 parents-share-media">
                                        <div class="media-image effect-hover-circle }">
                                            <img src="{{asset('/images/rectangle-44.png')}}" alt="#">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 monkey-f-bold monkey-fz-17">
                                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_news_post',
                                    'eventAction': 'Click', 'eventLabel': 'trang chu MJ tiêu đề ba me can biet'})" class="cursor" href="/coming-soon">Hỏi đáp về chương trình "Khi ở nhà Mẹ là cô giáo"</a>

                                            </h5>
                                            <div class="monkey-fz-15 monkey-f-medium monkey-color-gray text-justify">
                                                Tại bài viết này, E&K sẽ giải đáp các thắc mắc của ba mẹ về chương trình "Khi ở nhà Mẹ là cô giáo".
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="media mt-5 parents-share-media">
                                        <div class="media-image effect-hover-circle }">
                                            <img data-src="https://monkeymedia.vcdn.com.vn/upload/web/storage_web/09-06-2021_16:21:42_vdsc5_thumb.jpg" class=" lazy" alt="#">

                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 monkey-f-bold monkey-fz-17">
                                                <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homemj_news_post',
                                    'eventAction': 'Click', 'eventLabel': 'trang chu MJ tiêu đề ba me can biet'})" class="cursor" href="">Bé Jerry và mẹ Ngọc Trần đã học tiếng Anh như thế nào - Viết để sẻ chia Tháng 10/2020</a>

                                            </h5>
                                            <div class="monkey-fz-15 monkey-f-medium monkey-color-gray text-justify">
                                                Dưới đây là chia sẻ của mẹ Ngọc Trần trong hoạt động "Viết để sẻ chia". Hoạt động này được E&K phát động và tổ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="modal fade" id="popup-talk-about-monkey" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title monkey-f-bold monkey-color-black monkey-fz-20 text-left" id="popup-talk-about-monkey-header">

                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row popup-talk-about-monkey-header text-left monkey-fz-14">
                            <div class="col-6">
                                <span class="mr-5" id="popup-talk-about-monkey-date"></span>
                                <span id="popup-talk-about-monkey-view">2500 lượt xem</span>
                            </div>
                        </div>
                        <div class="monkey-fz-14 popup-talk-about-monkey-content">
                            <div class="new-image mb-4 text-center background-style">
                                <img src="" id="image-thumb" class="img-fluid">
                            </div>
                            <div class="mb-4 mt-4 text-left" id="popup-talk-about-monkey-content">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="close-wrap">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>


    </div>

</main>
@endsection
