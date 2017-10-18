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
    <link href="admin/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="admin/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="admin/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/css/custom.css" rel="stylesheet" type="text/css"/>

    <script src="admin/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="admin/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('assets')
</head>
<body class="page-header-fixed">
<div class="overlay"></div>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
    <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
    <div class="slimscroll">
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar2.png')}}" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar3.png')}}" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar4.png')}}" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar5.png')}}" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar2.png')}}" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar3.png')}}" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar4.png')}}" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="{{asset('admin/assets/images/avatar5.png')}}" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
    </div>
</nav>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
    <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
    <div class="slimscroll chat">
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="{{asset('admin/assets/images/')}}" alt="">
            </div>
            <div class="chat-message">
                Hi There!
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Hi! How are you?
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="{{asset('admin/assets/images/avatar2.png')}}" alt="">
            </div>
            <div class="chat-message">
                Fine! do you like my project?
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Yes, It's clean and creative, good job!
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="{{asset('admin/assets/images/avatar2.png')}}" alt="">
            </div>
            <div class="chat-message">
                Thanks, I tried!
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Good luck with your sales!
            </div>
        </div>
    </div>
    <div class="chat-write">
        <form class="form-horizontal" action="javascript:void(0);">
            <input type="text" class="form-control" placeholder="Say something">
        </form>
    </div>
</nav>
<div class="menu-wrap">
    <nav class="profile-menu">
        <div class="profile"><img src="{{asset('admin/assets/images/profile-menu-image.png')}}" width="60" alt="David Green"/><span>David Green</span></div>
        <div class="profile-menu-list">
            <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
            <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
            <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
            <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
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
<div class="cd-overlay"></div>
<!-- Javascripts -->
<!-- Javascripts -->

<script src="admin/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="admin/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="admin/assets/js/pages/form-wizard.js"></script>
<script src="admin/assets/js/modern.min.js"></script>
<script src="admin/assets/js/pages/form-elements.js"></script>
<script src="admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="admin/assets/plugins/pace-master/pace.min.js"></script>
<script src="admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="admin/assets/plugins/switchery/switchery.min.js"></script>
<script src="admin/assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="admin/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="admin/assets/plugins/offcanvasmenueffects/js/main.js"></script>
<script src="admin/assets/plugins/waves/waves.min.js"></script>
<script src="admin/assets/plugins/3d-bold-navigation/js/main.js"></script>
<script src="admin/assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/vee-validate@2.0.0-rc.7/dist/vee-validate.js"></script>

</body>
@yield('scripts')
</html>

