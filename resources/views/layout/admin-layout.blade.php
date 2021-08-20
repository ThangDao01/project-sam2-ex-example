<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<head>
    <title>Dev4Fun -
        @yield('title')
    </title>
    <link rel="icon" href="{{URL::asset('images/logo-ek-title.png') }}" type="image/gif">
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

<!-- //calendar -->
    <!-- //font-awesome icons -->
    @include('layout.js-head')

</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{URL::asset('/admin') }}" class="logo">
                VISITORS
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="/coming-soon">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">8</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="">You have 8 pending tasks</p>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>25% , Deadline 12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Product Delivery</h5>
                                        <p>45% , Deadline 12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Payment collection</h5>
                                        <p>87% , Deadline 12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>33% , Deadline 12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>

                        <li class="external">
                            <a href="/coming-soon">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="/coming-soon">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">4</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p class="red">You have 4 Mails</p>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <span class="photo"><img alt="avatar" src="{{URL::asset('images/user3.png') }}"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <span class="photo"><img alt="avatar" src="{{URL::asset('images/user1.png') }}"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <span class="photo"><img alt="avatar" src="{{URL::asset('images/user3.png') }}"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/coming-soon">
                                <span class="photo"><img alt="avatar" src="{{URL::asset('images/user2.png') }}"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/coming-soon">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="/coming-soon">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">3</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>Notifications</p>
                        </li>
                        <li>
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="/coming-soon"> Server #1 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-danger clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="/coming-soon"> Server #2 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-success clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="/coming-soon"> Server #3 overloaded.</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="/coming-soon">
                        <img alt="" src="{{URL::asset('images/user2.png') }}">
                        <span class="username">John Doe</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="/coming-soon"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="/coming-soon"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::asset('/admin/login') }}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="/admin">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-group"></i>
                            <span>Account</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/account/list">List</a></li>
                            <li><a href="/register">Register</a></li>
                            <li><a href="/login">Logout</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-newspaper-o"></i>
                            <span>Article</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/article/list">List</a></li>
                            <li><a href="/admin/article/create">Create</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/tracking">
                            <i class="fa fa-glass"></i>
                            <span>Tracking</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-envelope"></i>
                            <span>Messenger </span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/feedback">Feedback</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-book" style="color: #fc3158d9"></i>
                            <span>Course</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/course/list">List</a></li>
                            <li><a href="/admin/course/create">Create</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-book" style="color: #53d769"></i>
                            <span>Lesson</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/lesson/list">List</a></li>
                            <li><a href="/admin/lesson/create">Create</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-book" style="color: #147efb"></i>
                            <span>Material</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/material/list">List</a></li>
                            <li><a href="/admin/material/create">Create</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-book" style="color: black"></i>
                            <span>Data</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/data-support/list">List</a></li>
                            <li><a href="/admin/data-support/create">Create</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">

        @yield('detail')

    <!-- footer -->
    <div class="footer" style=" position: fixed;  bottom: 0;width: 100%;height: 30px;padding: 1px">
        <div class="wthree-copyright text-left">
            <p>-2021 Dev4Fun-
            </p>
        </div>
    </div>
    </section>
    <!-- / footer -->
</section>

<!--main content end-->

</section>
@include('layout.js-footer')
<!-- //calendar -->
</body>
</html>
