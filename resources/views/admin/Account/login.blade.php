<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
@include('layout.css')

<!-- //font-awesome icons -->
    @include('layout.js-head')
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main" >
        <h2>Sign In Now</h2>
        <form action="#" method="post">
            <input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
            <input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
            <span><input type="checkbox" />Remember Me</span>
            <h6><a href="#">Forgot Password?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
        </form>
        <p>Don't Have an Account ?<a href="/register">Create an account</a></p>
        <p><a href="javascript:history.go(-1)"><i class="fa fa-mail-reply"></i>  GO BACK</a></p>
    </div>
</div>
@include('layout.js-footer')
</body>
</html>
