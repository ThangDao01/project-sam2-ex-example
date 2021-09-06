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
    <style>
        .text-danger{
            color: red !important;
        }
        .alert-danger{
            color: red !important;
        }
        .alert-success{
            color: greenyellow !important;
        }
        .btn-submit {
            padding: 12px 38px;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: #f0bcb4;
            color: white;
            border: none;
            outline: none;
            display: table;
            cursor: pointer;
            margin: 45px auto 31px;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -o-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -ms-transition: 0.5s all;
        }
        .btn-submit:hover {
            background:#8b5c7e;
            transition:0.5s all;
            -webkit-transition:0.5s all;
            -o-transition:0.5s all;
            -moz-transition:0.5s all;
            -ms-transition:0.5s all;
        }
    </style>
    <!-- bootstrap-css -->
@include('layout.css')

<!-- //font-awesome icons -->
    @include('layout.js-head')
</head>
<body>
<div class="reg-w3">
    <div class="w3layouts-main">
        <h2>Register Now</h2>
        <p class="alert alert-danger}">{{ Session::get('message') }}</p>
    @if(Session::has('message'))
            <p class="alert alert-{{ Session::get('type-message') }}">{{ Session::get('message') }}</p>
        @endif
        <form action="/admin/register" method="post">
            @csrf
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="ggg" name="FirstName" placeholder="FirstName" >
                    @error('FirstName')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="text" class="ggg" name="LastName" placeholder="LastName" >
                    @error('LastName')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">

            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="email" class="ggg" name="Email" placeholder="Email" >
                    @error('Email')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="password" class="ggg" name="password" placeholder="Password" >
                    @error('password')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="password" class="ggg" placeholder="Password Confirmation" name="password_confirmation">
                    @error('password_confirmation')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4">
                    <input type="text" class="ggg" name="Age" placeholder="Age" >
                    @error('Age')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
                <div class="col-lg-8">
                    <input type="text" class="ggg" name="PhoneNumber" placeholder="Phone" >
                    @error('PhoneNumber')
                    <div class="text-danger"> * {{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn-submit">Submit
            </button>
        </form>
        <p>Already Registered.<a href="/admin/login">Login</a></p>
        <p><a href="javascript:history.go(-1)"><i class="fa fa-mail-reply"></i> GO BACK</a></p>
    </div>
</div>

</body>
</html>
