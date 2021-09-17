<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Dev4Fun</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{URL::asset('/images/logo-ek.png')}}"/>

    <link rel="stylesheet" type="text/css"
          href="https://colorlib.com/etc/lf/Login_v2/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
          href="https://colorlib.com/etc/lf/Login_v2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
          href="https://colorlib.com/etc/lf/Login_v2/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v2/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css"
          href="https://colorlib.com/etc/lf/Login_v2/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css"
          href="https://colorlib.com/etc/lf/Login_v2/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v2/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css"
          href="https://colorlib.com/etc/lf/Login_v2/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v2/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v2/css/main.css">
    @include('layout.css')

    <meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="/login" method="post" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-26">Welcome</span>
                <span class="login100-form-title p-b-48">
                    <img src="https://res.cloudinary.com/thangdao04/image/upload/v1630303243/g2y8chmwfp0vdklngvo6.png" style="width: 150px;" alt="">

</span>
                @if(Session::has('message'))
                    <p  class="alert alert-{{Session::get('type-message') }}">{{Session::get('message') }}</p>
                @endif
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="Email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass"><i class="zmdi zmdi-eye">
                        </i>
                    </span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>
                <div class="text-center p-t-115"><span class="txt1">Don’t have an account?</span>
                    <a class="txt2" href="/register">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>

<script src="https://colorlib.com/etc/lf/Login_v2/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v2/vendor/animsition/js/animsition.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v2/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v2/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v2/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v2/vendor/daterangepicker/moment.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v2/vendor/daterangepicker/daterangepicker.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v2/vendor/countdowntime/countdowntime.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v2/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"68a6e43e1f8e34a5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
</body>
</html>
