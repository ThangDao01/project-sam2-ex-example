@extends('layout.user-layout')
<title>E&K - Phương pháp</title>
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
                    class = "go-item distance-center cursor go-top-item">
                    <i class = "icon-monkey-go-top monkey-fz-15" ></i >
                    <div class = "text-item text-go-top" >Kéo lên</div >
                </a >
                <a class = "go-item distance-center cursor border-bottom-0"
                   onclick = "ga('send',{'hitType': 'event', 'eventCategory': 'homemj_support_button',
                   'eventAction': 'Click', 'eventLabel': 'trang tru button support'})
                   "
                   href = "https://www.monkey.edu.vn/ho-tro-khach-hang.html" target = "_blank" >
                    <i class = "icon-monkey-support monkey-fz-20" ></i >
                    <div class = "text-item text-support" >Hỗ trợ khách hàng</div >
                </a >
            </div >
        </div >
    </div >
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
            <img style="width:100%;" class="lazyLoading" data-src="{{URL::asset('/images/phuong-phap-hoc.png')}}" />
        </div>
    </section>
    <section class="form-search-wrapper">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="banner-customer-support-content banner-representative-students-content border-radius">
                        <div class="title monkey-fz-32 monkey-f-header text-uppercase">
                            Phương pháp
                        </div>
                        <i class="icon-monkey-form-search-1 d-mobile icon-form-search-1"></i>
                        <i class="icon-monkey-form-search-2 d-mobile icon-form-search-2"></i>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="monkey-bg-light-gray position-relative monkey-manual learning-methods-wrapper">
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
                                           href="/">Trang chủ</a>
                                    </li>
                                    <li class="breadcrumb-item active ">
                                        <a href="#"
                                           class="monkey-f-bold text-uppercase"> Phương pháp</a>
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
                                DÙNG ĐÚNG CHIẾC CHÌA KHÓA GIÁO DỤC SỚM
                            </h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div
                                        class = "banner-video background-style distance-center mb-3 lazyLoading"
                                        data-src = "{{URL::asset('/images/phuong-phap-hoc.png')}}">
                                    </div >
                                </div>



                                <div class="col-lg-6">
                                    <div class="content monkey-color-white">
                                        <h3
                                            class="monkey-f-bold monkey-fz-30 text-uppercase d-desktop">
                                            DÙNG ĐÚNG CHIẾC CHÌA KHÓA GIÁO DỤC SỚM
                                        </h3>
                                        <p class="monkey-f-medium mt-4">
                                            Mở cánh cửa ngôn ngữ và tư duy của não bộ trong giai đoạn vàng, giúp trẻ bắt đầu học Tiếng Anh dễ dàng và hiệu quả!
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
                                class = "title-wrapper text-center monkey-fz-32 monkey-f-header distance-center mt-5 mb-4">
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

                                @foreach($listData as $article)
                                    <div class="manual-content-item border-bottom pb-3 mb-3">
                                        <h5 class="mb-3">
                                            <a class="monkey-f-bold monkey-fz-18 monkey-color-green d-block d-md-none custom-text-title-2 /phuong-phap/monkey-junior-ap-dung-phuong-phap-trao-the-nhanh-glenn-doman-nhu-the-nao.html" href="/coming-soon">E&K áp dụng phương pháp tráo thẻ nhanh Glenn Doman như thế nào?</a>
                                        </h5>
                                        <div
                                            class="media parents-share-media">
                                            <div class="mr-3 media-image effect-hover-circle ">

                                                <img src = "{{$article->thumbnail}}" alt = "#"/>
                                            </div>
                                            <div class="media-body columns-2-4">
                                                <h5
                                                    class="mt-0 monkey-f-bold monkey-fz-18 custom-text-title-2 d-none d-md-block"
                                                >
                                                    <a class="/phuong-phap/monkey-junior-ap-dung-phuong-phap-trao-the-nhanh-glenn-doman-nhu-the-nao.html" href="/article={{$article->url}}" >
                                                        {{$article->title}}</a>

                                                </h5>
                                                <p
                                                    class="monkey-f-medium monkey-color-gray mb-4 text-justify custom-text-box-6 "
                                                >
                                                    {{-- {!! $article->Detail !!}--}}
                                                </p>
                                                <a class="monkey-color-gray monkey-f-bold cursor" href="/article={{$article->url}}"> Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="manual-content-item border-bottom pb-3 mb-3">
                                    <h5 class="mb-3">
                                        <a class="monkey-f-bold monkey-fz-18 monkey-color-green d-block d-md-none custom-text-title-2 /phuong-phap/monkey-junior-ap-dung-phuong-phap-trao-the-nhanh-glenn-doman-nhu-the-nao.html" href="/coming-soon">E&K áp dụng phương pháp tráo thẻ nhanh Glenn Doman như thế nào?</a>
                                    </h5>
                                    <div
                                        class="media parents-share-media">
                                        <div class="mr-3 media-image effect-hover-circle ">

                                            <img src = "{{asset('/images/rectangle-41.png')}}" alt = "#"/>
                                        </div>
                                        <div class="media-body columns-2-4">
                                            <h5
                                                class="mt-0 monkey-f-bold monkey-fz-18 custom-text-title-2 d-none d-md-block"
                                            >
                                                <a class="/phuong-phap/monkey-junior-ap-dung-phuong-phap-trao-the-nhanh-glenn-doman-nhu-the-nao.html" href="/coming-soon" >E&K áp dụng phương pháp tráo thẻ nhanh Glenn Doman như thế nào?</a>

                                            </h5>
                                            <p
                                                class="monkey-f-medium monkey-color-gray mb-4 text-justify custom-text-box-6 "
                                            >
                                                Tiên phong tại Việt Nam trong việc sử dụng các phương pháp giáo dục sớm vào việc dạy học tiếng Anh cho trẻ em, E&K sẽ giúp ba mẹ áp dụng Glenn Doman - một trong những phương pháp giáo dục sớm nổi tiếng nhất một cách dễ dàng, đúng cách với chi phí bình dân để giúp trẻ...
                                            </p>
                                            <a class="monkey-color-gray monkey-f-bold cursor" href="/coming-soon"> Chi tiết</a>
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
        </div>
    </main>
@endsection
