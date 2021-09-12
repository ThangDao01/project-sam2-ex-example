@extends('layout.user-layout')
<<<<<<< HEAD
<<<<<<< HEAD
<title>E&K - Hỗ trợ khách hàng</title>
=======
=======
@section('title')
<title>E&K - Hỗ trợ khách hàng</title>
>>>>>>> 9219904b145cfed2f4c7a3c491f7889b635d4b48
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
</style>
@endsection
<<<<<<< HEAD
>>>>>>> 25b7535497b4686dcdf2e1967a030ecc6125909a
=======
>>>>>>> 9219904b145cfed2f4c7a3c491f7889b635d4b48
@section('detail')

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

        localStorage.setItem('language', '{"language":"vi","country":"VN","phone_code":"84"}');
        if (localStorage.getItem('isShowPopupDownload') === null) {
            localStorage.setItem('isShowPopupDownload', "true");
        }
        if (``) {
            localStorage.setItem('isUserFromApp', '``');
        }
        if (localStorage.getItem('showCampaignPopup') === null) {
            localStorage.setItem('showCampaignPopup', 'true');
        }
    </script>

    <section class="banner-customer-support">
        <div class="banner-desktop background-style d-mobile">
            <img style="width:100%;"
                 data-src="/image/original//page/page/2020/10/07/214755387/images/web-me-ho-tro-ipad-mobile.png"
                 class="lazyLoading"
            />
        </div>
    </section>
    <section class="form-search-wrapper  ">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="banner-customer-support-content  border-radius">
                        <div class="title monkey-fz-32 monkey-f-header text-uppercase">
                            hỗ trợ khách hàng
                        </div>
                        <i class="icon-monkey-form-search-1 d-mobile icon-form-search-1"></i>
                        <i class="icon-monkey-form-search-2 d-mobile icon-form-search-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section
        id="breadcrumb-monkey"
        class="breadcrumb-monkey monkey-bg-light-gray">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <nav aria-label="breadcrumb">
                        <ol
                            class="breadcrumb monkey-bg-transparent mb-0 p-0">
                            <li class="breadcrumb-item breadcrumb-no-background">
                                <a class="monkey-f-medium text-uppercase"
                                   href="/">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active breadcrumb-no-background">
                                <a href="#"
                                   class="monkey-f-bold text-uppercase"> Hỗ trợ</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div id="app">
            <div data-v-5fb4acd1="" class="customer-support-wrapper">
                <section data-v-09047962="" data-v-5fb4acd1="" class="monkey-bg-light-gray">
                    <div data-v-09047962="" class="container-fluid container-xl">
                        <div data-v-09047962="" class="row justify-content-center">
                            <div data-v-09047962="" class="col-lg-11">
                                <div data-v-09047962=""
                                     class="nav-question-mobile rounded-pill mb-4 border-0 d-mobile monkey-bg-white">
                                    <span data-v-09047962="" data-target="common-questions"
                                          class="cursor nav-question-item-mobile nav-question-item rounded-pill monkey-f-bold">Câu hỏi thường gặp</span>
                                    <span data-v-09047962="" data-target="all-questions"
                                          class="cursor nav-question-item-mobile nav-question-item rounded-pill monkey-f-bold active">Tất cả câu hỏi</span>
                                    <div data-v-09047962="" class="active-animation start-nav-mobile rounded-pill">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div data-v-5fb4acd1="" id="panels">
                    <section data-v-a3c336fa="" data-v-5fb4acd1=""
                             class="common-questions panel-question support-question monkey-bg-light-gray">
                        <div data-v-a3c336fa="" class="container-fluid container-xl">
                            <div data-v-a3c336fa="" class="row justify-content-center">
                                <div data-v-a3c336fa="" class="col-lg-11">
                                    <div data-v-a3c336fa=""
                                         class="support-question-wrapper border-radius monkey-bg-white mb-3">
                                        <div data-v-a3c336fa=""
                                             class="title mb-4 monkey-f-bold monkey-fz-22 monkey-color-black d-flex align-items-center">
                                            <i data-v-a3c336fa=""
                                               class="icon-monkey-question monkey-fz-25 bg-icon-title distance-center monkey-color-white"></i>
                                            <span data-v-a3c336fa="" class="monkey-color-red ml-2"></span> Câu hỏi
                                            thường gặp
                                        </div>
                                        <div data-v-a3c336fa="" class="support-question-content">
                                            <div data-v-a3c336fa="" class="row">
                                                <div data-v-a3c336fa="" class="col-lg-6">
                                                    <div data-v-a3c336fa="">
                                                        <div data-v-a3c336fa=""
                                                             class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                            <a data-v-a3c336fa="" href="" alt="" target="_blank">
                                                                <span data-v-a3c336fa="" class="mr-3">1.</span> Làm thế
                                                                nào kích hoạt gói học đã đăng ký?
                                                                <i data-v-a3c336fa="" aria-hidden="true"
                                                                   class="fa fa-angle-double-right">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div data-v-a3c336fa="" href="" data-caption="video"
                                                             data-fancybox="gallery">
                                                            <span data-v-a3c336fa="" class="monkey-color-red cursor">
												&gt;&gt;&gt; Xem nhanh video hướng dẫn
											</span>
                                                        </div>
                                                    </div><!---->
                                                    <div data-v-a3c336fa="">
                                                        <div data-v-a3c336fa=""
                                                             class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                            <a data-v-a3c336fa="" href="" alt="" target="_blank">
                                                                <span data-v-a3c336fa="" class="mr-3">3.</span> Hướng
                                                                dẫn ba mẹ cài đặt ứng dụng E&K trên Máy tính/Laptop
                                                                <i data-v-a3c336fa="" aria-hidden="true"
                                                                   class="fa fa-angle-double-right">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div data-v-a3c336fa="" href="" data-caption="video"
                                                             data-fancybox="gallery">
                                                            <span data-v-a3c336fa="" class="monkey-color-red cursor">
												&gt;&gt;&gt; Xem nhanh video hướng dẫn
											            </span>
                                                        </div>
                                                    </div><!---->
                                                    <div data-v-a3c336fa="">
                                                        <div data-v-a3c336fa=""
                                                             class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                            <a data-v-a3c336fa="" href="" alt="" target="_blank">
                                                                <span data-v-a3c336fa="" class="mr-3">5.</span> Hướng
                                                                dẫn tải học liệu trên ứng dụng E&K
                                                                <i data-v-a3c336fa="" aria-hidden="true"
                                                                   class="fa fa-angle-double-right">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div data-v-a3c336fa="" href="" data-caption="video"
                                                             data-fancybox="gallery">
                                                            <span data-v-a3c336fa="" class="monkey-color-red cursor">
												&gt;&gt;&gt; Xem nhanh video hướng dẫn
											</span>
                                                        </div>
                                                    </div><!---->
                                                </div>
                                                <div data-v-a3c336fa="" class="col-lg-6"><!---->
                                                    <div data-v-a3c336fa="">
                                                        <div data-v-a3c336fa=""
                                                             class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                            <a data-v-a3c336fa="" href="" alt="" target="_blank">
                                                                <span data-v-a3c336fa="" class="mr-3">2.</span> Hướng
                                                                dẫn ba mẹ cài đặt các chương trình E&K trên thiết bị di
                                                                động
                                                                <i data-v-a3c336fa="" aria-hidden="true"
                                                                   class="fa fa-angle-double-right">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div data-v-a3c336fa="" href="" data-caption="video"
                                                             data-fancybox="gallery">
                                                            <span data-v-a3c336fa="" class="monkey-color-red cursor">
												&gt;&gt;&gt; Xem nhanh video hướng dẫn
											</span>
                                                        </div>
                                                    </div><!---->
                                                    <div data-v-a3c336fa="">
                                                        <div data-v-a3c336fa=""
                                                             class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                            <a data-v-a3c336fa="" href="" alt="" target="_blank">
                                                                <span data-v-a3c336fa="" class="mr-3">4.</span> Hướng
                                                                dẫn ba mẹ cài đặt ứng dụng E&K trên Máy tính/Laptop
                                                                <i data-v-a3c336fa="" aria-hidden="true"
                                                                   class="fa fa-angle-double-right">
                                                                </i>
                                                            </a>
                                                        </div>
                                                        <div data-v-a3c336fa="" href="" data-caption="video"
                                                             data-fancybox="gallery">
                                                            <span data-v-a3c336fa="" class="monkey-color-red cursor">
												&gt;&gt;&gt; Xem nhanh video hướng dẫn
											                </span>
                                                        </div>
                                                    </div><!---->
                                                    <div data-v-a3c336fa="">
                                                        <div data-v-a3c336fa=""
                                                             class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                            <a data-v-a3c336fa="" href="" alt="" target="_blank">
                                                                <span data-v-a3c336fa="" class="mr-3">6.</span> Mua ứng
                                                                dụng học tập E&K được những ưu đãi gì
                                                                <i data-v-a3c336fa="" aria-hidden="true"
                                                                   class="fa fa-angle-double-right">

                                                                </i>
                                                            </a>
                                                        </div> <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-v-5fb4acd1="" class="all-questions panel-question active">
                        <div data-v-5fb4acd1="" class="all-support-question monkey-bg-white">
                            <div data-v-5fb4acd1="" class="container-fluid container-xl">
                                <div data-v-5fb4acd1="" class="row justify-content-center">
                                    <div data-v-5fb4acd1="" class="col-lg-11">
                                        <div data-v-5fb4acd1=""
                                             class="title mb-4 monkey-f-bold monkey-fz-22 monkey-color-black">
                                            <img data-v-5fb4acd1=""
                                                 src="https://monkeymedia.vcdn.com.vn/upload/web/background-web/icon-question-1.png"
                                                 alt="#" class="icon-title rounded-circle">
                                            Tất cả câu hỏi
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-418a2b4e="" data-v-5fb4acd1="" class="support-question-tabs">
                                <nav data-v-418a2b4e="" class="monkey-bg-white mb-4">
                                    <div data-v-418a2b4e="" class="container-fluid container-xl">
                                        <div data-v-418a2b4e="" class="row justify-content-center">
                                            <div data-v-418a2b4e="" class="col-lg-11">
                                                <div data-v-418a2b4e=""
                                                     class="nav nav-tabs nav-tabs-desktop rounded-pill">
                                                    <a data-v-418a2b4e="" id="truoc-mua"
                                                       class="nav-item nav-question-item rounded-pill cursor nav-link text-capitalize active">
                                                        <span data-v-418a2b4e="">Trước mua</span>
                                                        <i data-v-418a2b4e="" aria-hidden="true"
                                                           class="icon-monkey-button-registration fa-arrow-down">
                                                        </i>
                                                    </a>
                                                    <a data-v-418a2b4e="" id="dang-mua"
                                                       class="nav-item nav-question-item rounded-pill cursor nav-link text-capitalize">
                                                        <span data-v-418a2b4e="">Đang mua</span>
                                                        <i data-v-418a2b4e="" aria-hidden="true"
                                                           class="icon-monkey-button-registration fa-arrow-down">
                                                        </i>
                                                    </a>
                                                    <a data-v-418a2b4e="" id="sau-mua"
                                                       class="nav-item nav-question-item rounded-pill cursor nav-link text-capitalize">
                                                        <span data-v-418a2b4e="">Sau mua</span>
                                                        <i data-v-418a2b4e="" aria-hidden="true"
                                                           class="icon-monkey-button-registration fa-arrow-down">
                                                        </i>
                                                    </a>
                                                    <div data-v-418a2b4e=""
                                                         class="active-animation start-nav rounded-pill">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                                <div data-v-a493a5a2="" data-v-418a2b4e=""
                                     class="tab-content monkey-bg-light-gray pt-4 pb-4">
                                    <div data-v-a493a5a2="" id="nav-question-before-purchasing"
                                         class="tab-pane fade show active">
                                        <div data-v-a493a5a2="" class="container-fluid container-xl">
                                            <div data-v-a493a5a2="" class="row justify-content-center">
                                                <div data-v-a493a5a2="" class="col-lg-11">
                                                    <div data-v-a493a5a2="" class="row">
                                                        <div data-v-1b238e11="" data-v-a493a5a2=""
                                                             class="col-lg-4 d-desktop">
                                                            <div data-v-1b238e11=""
                                                                 class="monkey-bg-white tab-sidebar border-radius p-3">
                                                                <div data-v-1b238e11=""
                                                                     class="title monkey-f-bold monkey-fz-22">
                                                                    <span data-v-1b238e11="" class="monkey-color-red">Danh mục hỗ trợ</span>
                                                                </div>
                                                                <div data-v-1b238e11="" class="list-content">
                                                                    <div data-v-1b238e11=""
                                                                         class="nav flex-column nav-pills">
                                                                        <a data-v-1b238e11=""
                                                                           id="customer-support-faq-31"
                                                                           class="nav-link list-content-item monkey-bg-light-gray monkey-f-bold active">
                                                                            <span data-v-1b238e11=""
                                                                                  class="mr-3">●</span>
                                                                            Chính sách bán hàng
                                                                        </a>
                                                                        <a data-v-1b238e11=""
                                                                           id="customer-support-faq-31"
                                                                           class="nav-link list-content-item monkey-bg-light-gray monkey-f-bold">
                                                                            <span data-v-1b238e11=""
                                                                                  class="mr-3">●</span>
                                                                            Các hình thức thanh toán
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-f7d22084="" data-v-a493a5a2="" class="col-lg-8">
                                                            <div data-v-f7d22084="" class="tab-content">
                                                                <div data-v-f7d22084=""
                                                                     class="tab-pane fade show active d-desktop">
                                                                    <div data-v-f7d22084=""
                                                                         class="monkey-bg-white sales-policy border-radius p-3">
                                                                        <div data-v-f7d22084=""
                                                                             class="title monkey-f-bold monkey-color-red monkey-fz-22">
                                                                            Chính sách bán hàng
                                                                        </div>
                                                                        <div data-v-f7d22084=""
                                                                             class="support-question-content">
                                                                            <div data-v-f7d22084=""
                                                                                 class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                                                <a data-v-f7d22084="" href="" alt=""
                                                                                   target="_blank"
                                                                                   class="monkey-color-gray">
                                                                                    <span data-v-f7d22084=""
                                                                                          class="mr-3">1.</span> Mua ứng
                                                                                    dụng học tập E&K được những ưu đãi
                                                                                    gì
                                                                                    <i data-v-f7d22084=""
                                                                                       aria-hidden="true"
                                                                                       class="fa fa-angle-double-right">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div data-v-f7d22084=""
                                                                                 class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                                                <a data-v-f7d22084="" href="" alt=""
                                                                                   target="_blank"
                                                                                   class="monkey-color-gray">
                                                                                    <span data-v-f7d22084=""
                                                                                          class="mr-3">2.</span> Sau bao
                                                                                    lâu thì ba mẹ nhận được gói học đã
                                                                                    đăng ký mua?
                                                                                    <i data-v-f7d22084=""
                                                                                       aria-hidden="true"
                                                                                       class="fa fa-angle-double-right"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div data-v-f7d22084=""
                                                                                 class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                                                <a data-v-f7d22084="" href="" alt=""
                                                                                   target="_blank"
                                                                                   class="monkey-color-gray">
                                                                                    <span data-v-f7d22084=""
                                                                                          class="mr-3">3.</span> Mua ứng
                                                                                    dụng học tập E&K được những ưu đãi
                                                                                    gì?
                                                                                    <i data-v-f7d22084=""
                                                                                       aria-hidden="true"
                                                                                       class="fa fa-angle-double-right"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div data-v-f7d22084=""
                                                                                 class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                                                <a data-v-f7d22084="" href="" alt=""
                                                                                   target="_blank"
                                                                                   class="monkey-color-gray">
                                                                                    <span data-v-f7d22084=""
                                                                                          class="mr-3">4.</span> Mua ứng
                                                                                    dụng học tập E&K Math được những ưu
                                                                                    đãi gì?
                                                                                    <i data-v-f7d22084=""
                                                                                       aria-hidden="true"
                                                                                       class="fa fa-angle-double-right">

                                                                                    </i></a></div>
                                                                            <div data-v-f7d22084=""
                                                                                 class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                                                <a data-v-f7d22084="" href="" alt=""
                                                                                   target="_blank"
                                                                                   class="monkey-color-gray">
                                                                                    <span data-v-f7d22084=""
                                                                                          class="mr-3">5.</span> Mua ứng
                                                                                    dụng học tập E&K được những ưu đãi
                                                                                    gì?
                                                                                    <i data-v-f7d22084=""
                                                                                       aria-hidden="true"
                                                                                       class="fa fa-angle-double-right">

                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div data-v-f7d22084=""
                                                                                 class="support-question-item monkey-fz-15 monkey-f-medium monkey-color-gray">
                                                                                <a data-v-f7d22084="" href="" alt=""
                                                                                   target="_blank"
                                                                                   class="monkey-color-gray">
                                                                                    <span data-v-f7d22084=""
                                                                                          class="mr-3">6.</span> Mua
                                                                                    giải pháp E&K trọn bộ được những ưu
                                                                                    đãi gì?
                                                                                    <i data-v-f7d22084=""
                                                                                       aria-hidden="true"
                                                                                       class="fa fa-angle-double-right">

                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-v-f7d22084=""
                                                                     class="before-purchasing-content monkey-mt-30 d-mobile">
                                                                    <div data-v-f7d22084="" id="content-faq-mobile"
                                                                         class="accordion">
                                                                        <div data-v-f7d22084="" class="card">
                                                                            <div data-v-f7d22084="" id="heading31"
                                                                                 class="card-header">
                                                                                <h2 data-v-f7d22084="" class="mb-0">
                                                                                    <button data-v-f7d22084=""
                                                                                            type="button"
                                                                                            id="question-31"
                                                                                            data-target="#collapseOne-question31"
                                                                                            aria-controls="collapseOne-question31"
                                                                                            class="btn btn-link btn-block text-left position-relative">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="mr-3">	●</span>
                                                                                        Chính sách bán hàng
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="icon-monkey-dropdown monkey-fz-12 fa-chevron-down"></i>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div data-v-f7d22084=""
                                                                                 id="collapseOne-question31"
                                                                                 aria-labelledby="heading31"
                                                                                 class="collapse">
                                                                                <div data-v-f7d22084=""
                                                                                     class="card-body">
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">1.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084=""
                                                                                           href="https://www.monkey.edu.vn/ho-tro-khach-hang/mua-ung-dung-hoc-tap-monkey-junior-duoc-nhung-uu-dai-gi.html">
                                                                                            Mua ứng dụng học tập E&K
                                                                                            được những ưu đãi gì
                                                                                        </a>
                                                                                    </div>
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">2.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084="" href="">
                                                                                            Sau bao lâu thì ba mẹ nhận
                                                                                            được gói học đã đăng ký mua?
                                                                                        </a>
                                                                                    </div>
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">3.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084="" href="">
                                                                                            Mua ứng dụng học tập E&K
                                                                                            được những ưu đãi gì?
                                                                                        </a>
                                                                                    </div>
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">4.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084="" href="">
                                                                                            Mua ứng dụng học tập E&K
                                                                                            Math được những ưu đãi gì?
                                                                                        </a>
                                                                                    </div>
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">5.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084="" href="">
                                                                                            Mua ứng dụng học tập E&K
                                                                                            được những ưu đãi gì?
                                                                                        </a>
                                                                                    </div>
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">6.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084="" href="">
                                                                                            Mua giải pháp E&K trọn bộ
                                                                                            được những ưu đãi gì?
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div data-v-f7d22084="" class="card">
                                                                            <div data-v-f7d22084="" id="heading32"
                                                                                 class="card-header">
                                                                                <h2 data-v-f7d22084="" class="mb-0">
                                                                                    <button data-v-f7d22084=""
                                                                                            type="button"
                                                                                            id="question-32"
                                                                                            data-target="#collapseOne-question32"
                                                                                            aria-controls="collapseOne-question32"
                                                                                            class="btn btn-link btn-block text-left position-relative">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="mr-3">	●</span>
                                                                                        Các hình thức thanh toán
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="icon-monkey-dropdown monkey-fz-12 fa-chevron-down">

                                                                                        </i>
                                                                                    </button>
                                                                                </h2>
                                                                            </div>
                                                                            <div data-v-f7d22084=""
                                                                                 id="collapseOne-question32"
                                                                                 aria-labelledby="heading32"
                                                                                 class="collapse">
                                                                                <div data-v-f7d22084=""
                                                                                     class="card-body">
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">1.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084="" href="">
                                                                                            Có những hình thức thanh
                                                                                            toán nào khi mua ứng dụng
                                                                                            học tập của E&K?
                                                                                        </a>
                                                                                    </div>
                                                                                    <div data-v-f7d22084=""
                                                                                         class="question-item-detail position-relative mb-3">
                                                                                        <span data-v-f7d22084=""
                                                                                              class="numerical-order">2.</span>
                                                                                        <i data-v-f7d22084=""
                                                                                           aria-hidden="true"
                                                                                           class="fa fa-angle-double-right"></i>
                                                                                        <a data-v-f7d22084="" href="">
                                                                                            Làm thế nào để chuyển đổi
                                                                                            hình thức thanh toán khi mua
                                                                                            ứng dụng E&K?
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <form class="form-horizontal bucket-form" action="/admin/feedback/create" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label
                                                                class="col-sm-3 control-label"></label>
                                                            <textarea style="resize: none" rows="8" type="text"
                                                                      class="form-control" name="Message"
                                                                      id="ckeditor1"
                                                                      placeholder="vui lòng nhập thông tin...."></textarea>
                                                            @error('Message')
                                                            <div class="text-danger"> * {{$message}}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
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
                                                        <div class="form-group">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-10 form-group" style="text-align: center">
                                                                <button type="submit" class="btn btn-info">Send</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script src="/js/app.js"></script>
    <script src="{{URL::asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor3');
        CKEDITOR.replace('ckeditor4');
        CKEDITOR.replace('id4');
    </script>
@endsection

