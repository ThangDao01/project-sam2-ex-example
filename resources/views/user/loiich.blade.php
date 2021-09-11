@extends('layout.user-layout')
<title>E&K - Lợi ích</title>
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
                    class="go-item distance-center cursor go-top-item">
                    <i class="icon-monkey-go-top monkey-fz-15"></i>
                    <div class="text-item text-go-top">Kéo lên</div>
                </a>
                <a class="go-item distance-center cursor border-bottom-0"
                   onclick="ga('send',{'hitType': 'event', 'eventCategory': 'homemj_support_button',
                   'eventAction': 'Click', 'eventLabel': 'trang tru button support'})
                   "
                   href="/coming-soon" target="_blank">
                    <i class="icon-monkey-support monkey-fz-20"></i>
                    <div class="text-item text-support">Hỗ trợ khách hàng</div>
                </a>
            </div>
        </div>
    </div>
    <script>
        const elePopupSeoContent = document.getElementById("popup-seo-content");
        if (elePopupSeoContent) {
            window.addEventListener("scroll", function () {
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
                 data-src="http://media.monkeyuni.com/upload/web/storage_web/18-01-2021_15:51:20_loiich.jpg"/>
        </div>
    </section>
    <section class="form-search-wrapper">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="banner-customer-support-content banner-representative-students-content border-radius">
                        <div class="title monkey-fz-32 monkey-f-header text-uppercase">
                            Lợi ích
                        </div>
                        <i class="icon-monkey-form-search-1 d-mobile icon-form-search-1"></i>
                        <i class="icon-monkey-form-search-2 d-mobile icon-form-search-2"></i>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div id="breadcrumb-monkey" class="monkey-bg-light-gray position-relative monkey-manual benefit-wrapper">
            <div
                class="background-style bg-page bg-page-two d-desktop bg-monkey-full-set"
            ></div>
            <section class="breadcrumb-monkey">
                <div class="container-fluid container-xl">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <nav aria-label="breadcrumb">
                                <ol
                                    class="breadcrumb monkey-bg-transparent mb-0 p-0">
                                    <li class="breadcrumb-item ">
                                        <a class="monkey-f-medium text-uppercase"
                                           href="">Trang chủ</a>
                                    </li>
                                    <li class="breadcrumb-item active ">
                                        <a href=""
                                           class="monkey-f-bold text-uppercase"> Lợi ích</a>
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
                            <h3 class="monkey-f-bold monkey-fz-20 mt-4 mb-4 text-uppercase text-center d-mobile monkey-color-green">
                                BẮT ĐẦU HỌC TIẾNG ANH<br>DỄ DÀNG VÀ HIỆU QUẢ VỚI E&K!
                            </h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="banner-video background-style distance-center mb-3 lazyLoading"
                                         data-src = "{{URL::asset('/images/loi-ich.png')}}">
                                    </div>

                                </div>


                                <div class="col-lg-6">
                                    <div class="content monkey-color-white">
                                        <h3 class="monkey-f-bold monkey-fz-30 text-uppercase d-desktop">
                                            BẮT ĐẦU HỌC TIẾNG ANH<br>DỄ DÀNG VÀ HIỆU QUẢ VỚI E&K!
                                        </h3>
                                        <p class="monkey-f-medium mt-4">
                                            Dẫn dắt con những năm tháng đầu đời<br>Hành trang theo con suốt cả cuộc đời
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
                                class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
                                <div class="icon">
                                    <div class="distance-center bg-icon-title  mr-2">
                                        <i class="icon-monkey-benefit-a monkey-fz-24 monkey-color-white "></i>

                                    </div>
                                </div>
                                <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                                    <span class="text-uppercase">Lợi ích khi học E&K</span>
                                </div>
                            </div>
                            <div class="monkey-bg-white p-md-4 p-0 border-radius">
                                @foreach($listData as $article)
                                    <div class="manual-content-item border-bottom pb-3 mb-3">
                                        <h5 class="mb-3">
                                            <a class="monkey-f-bold monkey-fz-18 monkey-color-green d-block d-md-none custom-text-title-2 /loi-ich/{{$article->url}}"
                                               href="">{{$article->title}}</a>
                                        </h5>
                                        <div
                                            class="media parents-share-media"
                                        >
                                            <div class="mr-3 media-image effect-hover-circle ">
                                                <img
                                                    data-src="{{$article->thumbnail}}"
                                                    class=" lazy" alt="#"
                                                />

                                            </div>
                                            <div class="media-body columns-2-4">
                                                <h5
                                                    class="mt-0 monkey-f-bold monkey-fz-18 custom-text-title-2 d-none d-md-block"
                                                >
                                                    <a class="/loi-ich/{{$article->url}}"
                                                       href="/article={{$article->url}}">{{$article->title}}</a>

                                                </h5>
                                                <p
                                                    class="monkey-f-medium monkey-color-gray mb-4 text-justify custom-text-box-6 "
                                                 style="  text-overflow: ellipsis;">
{{--                                                    {!! $article->Detail !!}--}}
                                                </p>
                                                <a class="monkey-color-gray monkey-f-bold cursor"
                                                   href="/article={{$article->url}}">
                                                    Chi tiết</a>
                                            </div>
                                        </div>


                                    </div>

                                @endforeach
                                <div class="manual-content-item border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">
                                        <a class="monkey-f-bold monkey-fz-18 monkey-color-green d-block d-md-none custom-text-title-2 /loi-ich/hoc-luong-tu-vung-khong-lo-ngay-tai-nha-cung-monkey-junior.html"
                                           href="">Học
                                            lượng từ vựng khổng lồ ngay tại nhà cùng E&K</a>
                                    </h5>
                                    <div
                                        class="media parents-share-media"
                                    >
                                        <div class="mr-3 media-image effect-hover-circle ">
                                            <img
                                                data-src="{{asset('/images/anh2-loiich.PNG')}}"
                                                class=" lazy" alt="#"
                                            />

                                        </div>
                                        <div class="media-body columns-2-4">
                                            <h5
                                                class="mt-0 monkey-f-bold monkey-fz-18 custom-text-title-2 d-none d-md-block"
                                            >
                                                <a class="/loi-ich/hoc-luong-tu-vung-khong-lo-ngay-tai-nha-cung-monkey-junior.html"
                                                   href="">Học
                                                    lượng từ vựng khổng lồ ngay tại nhà cùng E&K</a>

                                            </h5>
                                            <p
                                                class="monkey-f-medium monkey-color-gray mb-4 text-justify custom-text-box-6 "
                                            >
                                                Với nền tảng là kho từ vựng và mẫu câu khổng lồ, E&K tự tin
                                                khẳng định giúp trẻ tích lũy và tư duy trực diện hơn 3,000 từ vựng,
                                                6,000 mẫu câu thuộc nhiều chủ đề tiếng Anh trong giai đoạn đầu tiếp xúc,
                                                tạo nền tảng vững vàng để trẻ có thể học lên các trình độ...
                                            </p>
                                            <a class="monkey-color-gray monkey-f-bold cursor"
                                               href="">
                                                Chi tiết</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="monkey-bg-white">
                <section
                    id="registration-mobile"
                    class="registration-mobile monkey-bg-white background-style mt-4 mb-4 pb-4">
                    <div class="container-fluid container-xl">
                        <div class="d-mobile pt-2">
                            <div
                                class="title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
                                <div class="icon">
                                    <div class="distance-center bg-icon-title  mr-2">
                                        <i class="icon-monkey-support-form monkey-fz-24 monkey-color-white "></i>
                                    </div>
                                </div>
                                <div class="monkey-f-header monkey-fz-30 monkey-color-green">
                                    <span class="text-uppercase">ĐĂNG KÝ TRẢI NGHIỆM<br/>E&K TRỌN BỘ</span>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div
                                    class="registration-wrapper background-style p-3 monkey-bg-red d-flex monkey-mt-20">
                                    <div class="media">
                                        <div
                                            class="mr-3 d-desktop media-title monkey-color-white monkey-f-bold monkey-fz-19">
                                            <p>
                                                Kích hoạt tư duy ngôn ngữ và giúp con bắt đầu học Tiếng Anh với E&K ngay hôm nay!
                                            </p>
                                        </div>
                                        <div class="media-body">
                                            <form id="form-registration-2" class="form-registration background-style"
                                                  onsubmit="registrationOrder2(event)">
                                                <div class="monkey-bg-white form-body overflow-hidden">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text monkey-bg-transparent">
                                                                <i class="icon-monkey-name monkey-color-green monkey-fz-18"></i>
                                                            </div>
                                                        </div>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Họ tên"
                                                            id="form-registration-name-2"
                                                        />
                                                    </div>
                                                    <div class="monkey-color-red pl-3 pt-2 pb-2" id="val-name-2"
                                                         style="display: none">
                                                        <i class="monkey-fz-12">*Vui lòng kiểm tra lại họ tên</i>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text monkey-bg-transparent">
                                                                <i class="icon-monkey-phone monkey-color-green monkey-fz-16"></i>
                                                            </div>
                                                        </div>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Số điện thoại"
                                                            id="form-registration-phone-2"/>
                                                    </div>
                                                    <div class="monkey-color-red pl-3 pt-2 pb-2" id="val-phone-2"
                                                         style="display: none">
                                                        <i class="monkey-fz-12"
                                                        >*Vui lòng kiểm tra lại SĐT</i>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div
                                                                class="input-group-text monkey-bg-transparent">
                                                                <i class="icon-monkey-email monkey-color-green monkey-fz-12"></i>
                                                            </div>
                                                        </div>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Email"
                                                            id="form-registration-email-2"/>
                                                    </div>
                                                    <div class="monkey-color-red pl-3 pt-2 pb-2" id="val-email-2"
                                                         style="display: none">
                                                        <i class="monkey-fz-12"
                                                        >*Vui lòng kiểm tra lại Email</i>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button id="button-registration-2"
                                                            type="submit"
                                                            data-toggle="modal"
                                                            class="mt-3 monkey-color-white btn-registration btn btn-warning rounded-pill monkey-fz-f17">
                                                        <i class="icon-monkey-loading monkey-fz-20 mr-2 align-middle"
                                                           id="icon-loading-1" style="display: none"></i>
                                                        Đăng ký tư vấn miễn phí
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="popup" data-backdrop="static"
                                 data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content p-4">
                                        <div class="modal-body text-center">
                                            <p class="monkey-f-regular monkey-fz-22">
                                            <p style="text-align: center;"><strong>E&K đã nhận được đăng ký
                                                    của ba mẹ.</strong></p>

                                            <p style="text-align: center;"><strong>E&K sẽ liên hệ ba mẹ để tư
                                                    vấn trong thời gian sớm nhất!</strong></p>
                                        </div>
                                        <div class="mt-2 text-center">
                                            <a href="/coming-soon" class="btn rounded-pill  monkey-color-white monkey-bg-green"
                                               data-dismiss=modal>
                                                Hoàn thành
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="popup-error" data-backdrop="static"
                                 data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content pt-3 pb-3">
                                        <div class="modal-body text-center pr-0 pl-0">
                                            <div class="icon-monkey-popup mb-3">
                                                <img
                                                    data-src="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets/img/icons/img-error.png"
                                                    class=" lazy" alt="#"
                                                />

                                            </div>
                                            <p class="monkey-f-regular monkey-fz-22">Oops!!! Đã có lỗi xảy ra!!!<br>Ba
                                                mẹ vui lòng thử lại nhé!
                                        </div>
                                        <div class="mt-2 text-center">
                                            <a href="/coming-soon" class="btn rounded-pill  monkey-color-white monkey-bg-red"
                                               data-dismiss=modal>
                                                Đồng ý
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const registrationOrder2 = async (e) => {
                                    e.stopPropagation();
                                    e.preventDefault();
                                    let name = $('#form-registration-name-2').val().trim();
                                    let phone = $('#form-registration-phone-2').val().trim();
                                    let email = $('#form-registration-email-2').val().trim();
                                    const country_code = JSON.parse(localStorage.getItem("language"))["phone_code"];
                                    let resultName = validateName(name, "val-name-2");
                                    let resultEmail = validateEmail(email, "val-email-2");
                                    let resultPhone = validatePhone(phone, "val-phone-2");

                                    if (!resultName || !resultEmail || !resultPhone) {
                                        return false
                                    }
                                    document.getElementById("icon-loading-1").setAttribute('style', 'display: inline-block');
                                    document.getElementById("button-registration-2").setAttribute('disabled', 'true');

                                    let fullDomain = document.URL;
                                    let domain = fullDomain.split("/");
                                    var url_current = domain[0] + "//" + domain[2] + "/order-register-custom";

                                    var options = {
                                        method: 'POST',
                                        headers: {
                                            "Content-Type": "application/json"
                                        },
                                        body: JSON.stringify({
                                            phone: phone,
                                            email: email,
                                            name: name,
                                            country_code: country_code,
                                            p: 2,
                                            product_id: 'com.earlystart.ltr.1year',
                                        })
                                    };

                                    var aPromise = fetch(url_current, options);
                                    aPromise
                                        .then(response => response.json())
                                        .then(data => {
                                            ga('send', {
                                                'hitType': 'event', 'eventCategory': 'homemj_orderbox2',
                                                'eventAction': 'Click', 'eventLabel': 'trang chu MJ form tu van 2'
                                            });
                                            document.getElementById("icon-loading-1").setAttribute('style', 'display: none');
                                            document.getElementById("button-registration-2").removeAttribute('disabled');
                                            if (data['code'] == 200) {
                                                $('#popup').modal('toggle')
                                                document.getElementById("form-registration-name-2").value = '';
                                                document.getElementById("form-registration-phone-2").value = '';
                                                document.getElementById("form-registration-email-2").value = '';
                                            } else {
                                                $('#popup-error').modal('toggle')
                                            }
                                        })
                                        .catch(error => {
                                            document.getElementById("icon-loading-1").setAttribute('style', 'display: none');
                                            document.getElementById("button-registration-2").removeAttribute('disabled');
                                            $('#popup-error').modal('toggle')
                                        });

                                }
                            </script>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </main>
@endsection

