<!DOCTYPE html>
<html>
<head>

    <!-- Title -->

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,admin" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{asset('admin/assets/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/assets/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{asset('admin/assets/css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('admin/assets/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@yield('assets')
</head>
<body class="page-header-fixed">
{{--<div class="overlay"></div>--}}
<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Search...">
        <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
    </div><!-- Input Group -->
    @yield('fixed_header')
</form><!-- Search Form -->
@yield('content')
<nav class="cd-nav-container" id="cd-nav">
    <header>
        <h3>Navigation</h3>
        <a href="#0" class="cd-close-nav">Close</a>
    </header>
    <ul class="cd-nav list-unstyled">
        <li class="cd-selected" data-menu="index">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                <p>Dashboard</p>
            </a>
        </li>
        <li data-menu="profile">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <p>Profile</p>
            </a>
        </li>
        <li data-menu="inbox">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                <p>Mailbox</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                <p>Tasks</p>
            </a>
        </li>
        <li data-menu="#">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                <p>Settings</p>
            </a>
        </li>
        <li data-menu="calendar">
            <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                <p>Calendar</p>
            </a>
        </li>
    </ul>
    @yield('nav')
</nav>
{{--<div class="cd-overlay"></div>--}}
<!-- Javascripts -->
<script src="{{asset('admin/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin/assets/js/modern.js')}}"></script>

<script src="{{asset('admin/assets/plugins/pace-master/pace.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
<script src="{{asset('admin/assets/plugins/offcanvasmenueffects/js/main.js')}}"></script>
<script src="{{asset('admin/assets/plugins/waves/waves.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/3d-bold-navigation/js/main.js')}}"></script>
<script src="admin/assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="{{asset('admin/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('admin/assets/plugins/metrojs/MetroJs.min.js')}}"></script>

</body>
@yield('scripts')
</html>

