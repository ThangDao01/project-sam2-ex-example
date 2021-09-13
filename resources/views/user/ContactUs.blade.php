@extends('layout.user-layout')
@section('title')
    <title>E&K - Liên hệ với chúng tôi</title>
@endsection
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
        class="breadcrumb-monkey monkey-bg-light-gray"
    >
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <nav aria-label="breadcrumb">
                        <ol
                            class="breadcrumb monkey-bg-transparent mb-0 p-0"
                        >
                            <li class="breadcrumb-item breadcrumb-no-background">
                                <a class="monkey-f-medium text-uppercase"
                                   href="/home">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active breadcrumb-no-background">
                                <a href="#"
                                   class="monkey-f-bold text-uppercase"> Contact Us</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div id="app">
            <div class="customer-support-wrapper">
                <section class="monkey-bg-light-gray">
                    <div class="container-fluid container-xl">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div
                                    class="nav-question-mobile rounded-pill mb-4 border-0 d-mobile monkey-bg-white">
                                    <span data-target="common-questions"
                                          class="cursor nav-question-item-mobile nav-question-item rounded-pill monkey-f-bold">Câu hỏi thường gặp</span>
                                    <span data-target="all-questions"
                                          class="cursor nav-question-item-mobile nav-question-item rounded-pill monkey-f-bold active">Tất cả câu hỏi</span>
                                    <div class="active-animation start-nav-mobile rounded-pill">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div id="panels">
                    <div class="container-fluid container-xl">
                        <div class="justify-content-center row">
                            <div class="col-lg-11">
                                <div class="border-radius mb-3 monkey-bg-white support-question-wrapper">
                                    <div class="support-question-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 1. Tại  Chi Nhánh/ Phòng Giao Dịch<em> </em> </a></div>


                                                    <div>Quý khách có thể đến Chi nhánh/ Phòng Giao dịchChi nhánh/ Phòng Giao dịch để t&igrave;m chi nhánh hoặc phòng giao dịch gần nhất thuận tiện nhất v&agrave; trao đổi trực tiếp với nh&acirc;n vi&ecirc;n của ch&uacute;ng t&ocirc;i. Ngo&agrave;i ra Quý khách cũng có thể điền &quot;Phiếu Góp ý của Khách h&agrave;ng&quot; đặt tại các Chi nhánh/ Phòng Giao dịch</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 2. Trực tuyến <em> </em> </a></div>

                                                    <div>Ch&uacute;ng t&ocirc;i sẽ phản hồi Quý khách trong vòng 2 ng&agrave;y l&agrave;m việc đối với những y&ecirc;u cầu gửi trực tuyến. Nếu Quý khách cần hỗ trợ khẩn cấp, vui lòng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i th&ocirc;ng qua những cách thức khác.</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 2.1 Quý khách có thể gửi thư điện tử đến ch&uacute;ng t&ocirc;i: <em> </em> </a></div>

                                                    <div>Khách h&agrave;ng cá nh&acirc;n: user@ek.com.vn<br />
                                                        Khách h&agrave;ng Premier: ekpremiervn@ek.com.vn</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 2.2 Điền th&ocirc;ng tin v&agrave;o mẫu thư trực tuyến <em> </em> </a></div>

                                                    <div>Thư Thắc Mắc/ Khiếu Nại/ Phản hồi<br />
                                                        Thắc Mắc/ Khiếu Nại/ Phản hồi để v&agrave;o trang đăng ký th&ocirc;ng tin li&ecirc;n hệ của EK Đường dẫn n&agrave;y sẽ dẫn đến một cửa sổ mới Thư Khen ngợi nh&acirc;n vi&ecirc;n</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 3 Gọi điện cho ch&uacute;ng t&ocirc;i <em> </em> </a></div>

                                                    <div>(+84)0369630471</div>
                                                </div>

                                                <div>
                                                    <div class="monkey-color-gray monkey-f-medium monkey-fz-15 support-question-item"><a href="" target="_blank"> 4 Gửi thư cho ch&uacute;ng t&ocirc;i <em> </em> </a></div>

                                                    <div>Quý khách có thể gửi thư cho ch&uacute;ng t&ocirc;i (d&agrave;nh cho ý kiến đóng góp v&agrave; khiếu nại) đến địa chỉ sau: Bộ phận Quan hệ Khách h&agrave;ng<br />
                                                        Dịch vụ EK (Việt Nam)<br />
                                                        Số 8 T&ocirc;n Thất Thuyết<br />
                                                        Việt Nam</div>
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
        </div>

    </main>

    <script src="/js/app.js"></script>
    <script>
    </script>
@endsection

