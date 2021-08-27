<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="vADeoBTpAGDD2RJSSVZgA7BMnu1VHRVTbWtYpXve">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="E&K là chương trình dành cho trẻ 0 - 10 tuổi giúp trẻ bắt đầu học tiếng Anh dễ dàng, thú vị và hiệu quả hơn.">
    <meta name="keyword" content="">
    <script src="https://connect.facebook.net/signals/config/251806315213206?v=2.9.44&amp;r=stable" async=""></script>
    <script src="https://connect.facebook.net/signals/config/348913062202988?v=2.9.44&amp;r=stable" async=""></script>
    <script src="https://connect.facebook.net/signals/plugins/identity.js?v=2.9.44" async=""></script>
    <script type="text/javascript" async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PS37S79"></script>
    <script>
        window.addEventListener('load',function(){
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PS37S79');
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = true;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga( 'create', 'UA-156172818-2', 'auto' );
            ga( 'send', 'pageview' );
        })
    </script>
    <!-- End Google Tag Manager -->
    <link rel="canonical" href="https://www.monkeyjunior.vn">
    <link media="all" type="text/css" rel="stylesheet" href="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets//css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets//css/styles.min.css?v=19">

    <script type="text/javascript" src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fjquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fjquery.lazy.min.js"></script>
</head>

<body class="home">
    <header id="monkey-header" class="monkey-header monkey-bg-white monkey-nav-wrapper">
        <div class="container-fluid container-xl">
            <nav class="navbar navbar-expand-lg navbar-light p-0 monkey-nav">
          <span class="toggler-icon d-mobile">
            <span class="hamburger"></span>
          </span>
                <a class="p-0 m-auto d-desktop" href="/home">
                    <img class="logo" src="{{URL::asset('/images/logo-ek.png')}}" alt="#">
                </a>
                <div class="monkey-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item monkey-nav-item pr-4">
                            <a class="nav-link nav-link-monkey distance-center">
                                Giới thiệu
                                <span class="icon-caret-down"><i class="icon-monkey-dropdown" aria-hidden="true"></i></span>
                            </a>
                            <div class="monkey-dropdown-menu">
                                <a class="d-block monkey-dropdown-item subsite_menu_course" target="_self" href="/chuong-trinh-hoc">
                                    Chương trình học
                                </a>
                            </div>
                        </li>
                        <li class="nav-item monkey-nav-item">
                            <a class="nav-link nav-link-monkey distance-center" target="_self" href="/phuong-phap">
                                Phương pháp
                            </a>
                        </li>
                        <li class="nav-item monkey-nav-item">
                            <a class="nav-link nav-link-monkey distance-center" href="/loi-ich" target="_self">
                                Lợi ích
                            </a>
                        </li>
                        <li class="nav-item monkey-nav-item">
                            <a class="nav-link nav-link-monkey distance-center" href="/huong-dan-hoc" target="_self">
                                Hướng dẫn học
                            </a>
                        </li>

                        <li class="nav-item monkey-nav-item">
                            <a class="nav-link nav-link-monkey distance-center" href="/course" target="_self">
                                Bảng giá
                            </a>
                        </li>

                        <li class="nav-item monkey-nav-item">
                            <a class="nav-link nav-link-monkey distance-center" href="/ho-tro-khach-hang" target="_blank">
                                Hỗ trợ khách hàng
                            </a>
                        </li>
                        <li class="nav-item distance-center d-desktop">
                            <a onclick=" ga('send',{'hitType': 'event', 'eventCategory': 'homems_menu_registration',
                            'eventAction': 'Click', 'eventLabel': 'menu MS dang ky'})" class="btn monkey-color-green monkey-bc-green rounded-pill monkey-f-bold distance-center hvr-icon-registration-white" href="/coming-soon">
                                <i class="icon-lang rounded-circle icon-monkey-registration monkey-fz-18 mr-1 distance-center"></i>Đăng ký
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="dropdown-languages nav-item monkey-nav-item d-desktop">
            <a class="nav-link nav-link-languages d-flex justify-content-end cursor">
                <img id="icon-lang" class="icon-lang rounded-circle border lazyLoading" data-src="https://monkeymedia.vcdn.com.vn/upload/web/background-web/vi.svg" alt="#" src="https://monkeymedia.vcdn.com.vn/upload/web/background-web/vi.svg">
            </a>

            <div class="monkey-dropdown-menu monkey-dropdown-languages monkey-bg-white">
                <a class="dropdown-item item-language" href="https://www.monkeyjunior.vn/">
                    <span class="mr-2"><img class="icon-lang border rounded-circle" src="https://monkeymedia.vcdn.com.vn/upload/web/background-web/vi.svg" alt="#"></span>Việt Nam</a>
            </div>
        </div>

    </header>
    @yield('detail')
    <footer id="footer">
        <div class="monkey-bg-green title text-center monkey-pt-20 monkey-pb-20 text-uppercase monkey-color-white monkey-fz-30 monkey-f-header">Liên hệ</div>
        <div class="footer-body monkey-bg-green monkey-pt-25 monkey-pb-25">
            <div class="container-fluid container-xl">
                <div class="contact-content text-center">
                    <ul class="list-inline monkey-color-white ">
                        <li class="list-inline-item border-line monkey-f-bold text-left mb-2 monkey-color-white"><a x-apple-data-detectors="true">Hotline: 1900 1508</a></li>
                    </ul>

                    <ul class="list-inline">
                        <li class="list-inline-item cursor">
                            <a class="size-icon-title monkey-bg-white distance-center rounded-circle" href="/coming-soon" target="_blank">
                                <i class="icon-monkey-share monkey-color-green monkey-fz-18"></i>
                            </a>
                        </li>
                        <li class="list-inline-item cursor">
                            <a class="size-icon-title monkey-bg-white distance-center rounded-circle" href="/coming-soon" target="_blank">
                                <i class="icon-monkey-youtube monkey-color-green monkey-fz-18"></i>
                            </a>
                        </li>
                        <li class="list-inline-item cursor">
                            <a class="size-icon-title monkey-bg-white distance-center rounded-circle" href="/coming-soon" target="_blank">
                                <i class="icon-monkey-face monkey-color-green monkey-fz-18"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-group mt-2 mb-2 text-center monkey-color-white">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-9">
                            <div class="footer-group-body pt-3 pb-3 d-flex justify-content-center align-items-center border monkey-bc-white">
                                <div class="monkey-fz-14 monkey-f-medium footer-group-text">
                                    Cộng đồng hơn 140.000 ba mẹ thông thái <span class="monkey-f-bold monkey-fz-16">Đồng hành cùng con học E&K:</span>
                                </div>
                                <a target="_blank" href="/coming-soon" class="hvr-icon-registration ml-md-3 btn monkey-bc-white rounded-pill monkey-color-white monkey-fz-14 monkey-f-bold">
                                    THAM GIA NGAY</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="monkey-f-bold footer-item monkey-color-white d-block d-lg-flex">

                    <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                        <span class="mr-2">	●</span>
                        <span>Đăng ký Đại lý</span>
                    </a>
                    <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                        <span class="mr-2">	●</span>
                        <span>Kích hoạt tài khoản</span>
                    </a>
                    <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                        <span class="mr-2">	●</span>
                        <span>Tuyển dụng</span>
                    </a>
                    <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                        <span class="mr-2">	●</span>
                        <span>Tải App</span>
                    </a>
                    <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_self">
                        <span class="mr-2">	●</span>
                        <span>Chính sách bảo mật</span>
                    </a>
                    <a class="monkey-color-white mr-lg-3 ml-ld-3 d-flex" href="/coming-soon" target="_blank">
                        <span class="mr-2">	●</span>
                        <span>Điều khoản sử dụng</span>
                    </a>
                    <a href="http://www.online.gov.vn/Home/WebDetails/40473" alt="#">
                        <img data-src="https://monkeymedia.vcdn.com.vn/upload/web/background-web/logo-footer" class="img-certification d-block d-lg-none lazy" alt="#">

                    </a>

                </div>
                <div class="address-content monkey-pt-20 monkey-pb-20 mt-3 mb-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="row justify-content-end">
                                <div class="col-lg-9 monkey-f-regular monkey-color-white text-center">
                                    <p class="monkey-fz-12"></p><p class="monkey-fz-12">© 2021 - Bản quyền của T2009A-Dev4Fun</p>
                                </div>
                                <div class="col-lg-2 d-lg-block d-none">
                                    <a href="http://www.online.gov.vn/Home/WebDetails/40473" alt="#">
                                        <img data-src="https://monkeymedia.vcdn.com.vn/upload/web/background-web/logo-footer" class="img-certification lazy" alt="#">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="seo-body text-center monkey-color-white">
                            <ul class="list-inline monkey-f-regular monkey-fz-12">
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
<script type="text/javascript" src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fowl.carousel.min.js"></script>
<script type="text/javascript" src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fbootstrap4.min.js"></script>
<script type="text/javascript" src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fjquery.fancybox.min.js"></script>
<script type="text/javascript" src="https://monkeymedia2020.s3.ap-southeast-1.amazonaws.com/upload%2Fweb%2Ffiles__js_web%2Fmodernizr-3.6.0.min.js"></script>
<script type="text/javascript" src="https://www.monkeyjunior.vn/themes/monkey-junior-v2/assets/js/site.js?v=19"></script>
</body>
</html>
