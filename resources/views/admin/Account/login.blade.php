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
    <style>
        .alert-success{
            color: green;
        }
        .alert-error{
            color: red !important;
        }
    </style>

<!-- //font-awesome icons -->
    @include('layout.js-head')
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main" >
        <h2>Sign In Now</h2>

{{--        @if(\Illuminate\Support\Facades\Session::has('error'))--}}
{{--            <p style="color: red" class=" alert alert">{{ Session::get('error') }}</p>--}}
{{--        @endif--}}

        @if(Session::has('message'))
            <p  class="alert alert-{{Session::get('type') }}">{{Session::get('message') }}</p>
        @endif

        <form action="/admin/login" method="post">
            @csrf
            <div class="form-group">
            <input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="" value="{{old('Email')}}">
                @error('Email')
                <div class="text-danger"> *{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            @error('password')
            <div class="text-danger"> *{{$message}}</div>
            @enderror
            </div>
            <span>
                <input type="checkbox"/>Remember Me</span>
            <h6><a href="#">Forgot Password?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
        </form>
        <p>Don't Have an Account ?<a href="/admin/register">Create an account</a></p>
    </div>
</div>
@include('layout.js-footer')
</body>
</html>
