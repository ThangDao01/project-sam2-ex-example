<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <title>Sign Up</title>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->

@include('layout.css-dangki')

</head>
<body>
<div style="background-image:url({{asset('/images/kids.jpg')}})">
    <link rel="icon" href="{{URL::asset('/images/logo-ek-title.png') }}" type="image/gif">


    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 py-5">
                    <h3>Register</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" placeholder=" John" id="fname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" placeholder=" Smith" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group first">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" placeholder="john@your-domain.com" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label for="lname">Phone Number</label>
                                    <input type="text" class="form-control" name="Phone" placeholder="+84" id="lname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group first">
                                    <label for="lname">Facabook</label>
                                    <input type="text" class="form-control" placeholder="https://facebook.com" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" id="password">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group last mb-3">
                                    <label for="re-password">Re-type Password</label>
                                    <input type="password" class="form-control" placeholder="Enter the Password" id="re-password">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex mb-5 mt-4 align-items-center">
                            <div class="d-flex align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Creating an account means you're okay with our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</span>
                                    <input type="checkbox" checked="checked">
                                    <div class="control__indicator">

                                    </div>
                                </label>
                            </div>
                        </div>

                        <input type="submit" value="Register" class="btn px-5 btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


--@include('layout.js-dangki')--
</body>
</html>
<?php
