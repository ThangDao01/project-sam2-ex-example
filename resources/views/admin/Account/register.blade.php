<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Registration :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->
@include('layout.css')

<!-- //font-awesome icons -->
    @include('layout.js-head')
</head>
<body>
<div class="reg-w3">
    <div class="w3layouts-main">
        <h2>Register Now</h2>
        <form action="/admin/account/create" method="post">
            @csrf
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="ggg" name="FirstName" placeholder="FirstName" required="">
                    @error('FirstName')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="email" class="ggg" name="LastName" placeholder="LastName" required="">
                    @error('LastName')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">

            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="ggg" name="Email" placeholder="Email" required="">
                    @error('Email')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="ggg" name="PasswordHash" placeholder="Password" required="">
                    @error('PasswordHash')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6">
                    <input type="text" class="ggg" name="Age" placeholder="Age" required="">
                    @error('Age')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <input type="text" class="ggg" name="Role" placeholder="Role" required="">
                    @error('Role')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="ggg" name="Phone" placeholder="Phone" required="">
                    @error('Phone')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <h4>
                <input type="checkbox"/>I agree to the Terms of Service and Privacy Policy</h4>

            <div class="clearfix"></div>
            <input type="submit" value="submit" name="register">
        </form>
        <p>Already Registered.<a href="/admin/login">Login</a></p>
        <p><a href="javascript:history.go(-1)"><i class="fa fa-mail-reply"></i>  GO BACK</a></p>
    </div>
</div>

</body>
</html>
