<!doctype html>
<html lang="{{ config('app.locale') }}">

<!-- Mirrored from pivot.mediumra.re/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Mar 2017 08:01:52 GMT -->
<head>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{'favicon.ico'}}">
    <link href="{{asset('css/pivot/flexslider.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/pivot/line-icons.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/pivot/elegant-icons.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/pivot/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/pivot/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/pivot/theme-aquatica.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{asset('css/pivot/ie9.css')}}" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/pivot/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>
<body>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
    <nav class="top-bar">
        <div class="container">

            <div class="row utility-menu">
                <div class="col-sm-12">
                    <div class="utility-inner clearfix">
                        <span class="alt-font"><i class="icon icon_pin"></i> 300 Collins St Melbourne</span>
                        <span class="alt-font"><i class="icon icon_mail"></i> hello@pivot.net</span>

                        <div class="pull-right">
                            <a href="login.html" class="btn btn-primary login-button btn-xs">Login</a>
                            <a href="#" class="btn btn-primary btn-filled btn-xs">Signup</a>
                            <a href="#" class="language"><img alt="English" src="img/english.png"></a>
                            <a href="#" class="language"><img alt="English" src="img/denmark.png"></a>
                        </div>
                    </div>
                </div>
            </div><!--end of row-->


            <div class="row nav-menu">
                <div class="col-sm-3 col-md-2 columns">
                    <a href="{{route('/')}}">
                        <img class="logo logo-light" alt="Logo" src="img/logo-light.png">
                        <img class="logo logo-dark" alt="Logo" src="img/logo-dark.png">
                    </a>
                </div>

                <div class="col-sm-9 col-md-10 columns">
                    <ul class="menu">
                        <li class="has-dropdown"><a href="#">Home Pages</a>
                            <div class="subnav subnav-fullwidth">
                                <div class="col-md-3">
                                    <h6 class="alt-font">Home Layouts</h6>
                                    <ul class="subnav">
                                        <li><a href="index.html">Home Classic</a></li>
                                        <li><a href="home-2.html">Home Education</a></li>
                                        <li><a href="home-3.html">Home Business</a></li>
                                        <li><a href="home-4.html">Home Agency</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Home Layouts</h6>
                                    <ul class="subnav">
                                        <li><a href="home-5.html">Home Corporate</a></li>
                                        <li><a href="personal.html">Home Personal</a></li>
                                        <li><a href="launching-soon-2.html">Service Launch</a></li>
                                        <li><a href="launching-soon.html">Product Launch</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Home Layouts</h6>
                                    <ul class="subnav">
                                        <li><a href="home-resume.html">Home Resume</a></li>
                                        <li><a href="launching-soon-3.html">Launch with video</a></li>
                                        <li><a href="coming-soon.html">Launch with countdown</a></li>
                                        <li><a href="one-page.html">One Page</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <a class="btn btn-primary" href="http://www.mediumra.re/pivot/variant/builder.html">Build your own</a>
                                    <a class="btn btn-primary btn-filled" href="#">Purchase Pivot</a>
                                </div>
                            </div>
                        </li>
                        <li class="has-dropdown"><a href="#">Pages</a>
                            <ul class="subnav">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-2.html">About Us 2</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-2.html">Services 2</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="404.html">404 Error</a></li>
                                <li><a href="500.html">500 Error</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a  href="#">Blog</a>
                            <div class="subnav subnav-halfwidth">
                                <div class="col-sm-6">
                                    <h6 class="alt-font">Article Lists</h6>
                                    <ul class="subnav">
                                        <li><a href="blog-masonry.html">Masonry</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry Sidebar</a></li>
                                        <li><a href="blog.html">Blog Large List</a></li>
                                        <li><a href="blog-large-image.html">Blog Image List</a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <h6 class="alt-font">Article Singles</h6>
                                    <ul class="subnav">
                                        <li><a href="blog-single.html">Article Basic</a></li>
                                        <li><a href="blog-single-2.html">Article Basic 2</a></li>
                                        <li><a href="blog-single-sidebar.html">Article Sidebar</a></li>
                                        <li><a href="blog-single-media.html">Article Media</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-dropdown"><a href="#">Projects</a>
                            <ul class="subnav">
                                <li><a href="projects.html">Projects Fullwidth</a></li>
                                <li><a href="projects-2.html">Projects Contained</a></li>
                                <li><a href="project-single-2.html">Project Single</a></li>
                                <li><a href="project-single.html">Project Single 2</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="#">Contact</a>
                            <ul class="subnav">
                                <li><a href="contact-3.html">Large Map</a></li>
                                <li><a href="contact-2.html">Map with form</a></li>
                                <li><a href="contact.html">Header with form</a></li>
                                <li><a href="contact-4.html">Fullscreen photo</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="social-icons text-right">
                        <li>
                            <a href="#">
                                <i class="icon social_twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end of row-->

            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>

        </div><!--end of container-->
    </nav>
    @yield('navigation')
</div>

@yield('cover')
@yield('content')

<script src="{{asset('js/pivot/jquery.min.js')}}"></script>
<script src="{{asset('js/pivot/jquery.plugin.min.js')}}"></script>
<script src="{{asset('js/pivot/bootstrap.min.js')}}"></script>
<script src="{{asset('js/pivot/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/pivot/smooth-scroll.min.js')}}"></script>
<script src="{{asset('js/pivot/skrollr.min.js')}}"></script>
<script src="{{asset('js/pivot/spectragram.min.js')}}"></script>
<script src="{{asset('js/pivot/scrollReveal.min.js')}"></script>
<script src="{{asset('js/pivot/isotope.min.js')}"></script>
<script src="{{asset('js/pivot/twitterFetcher_v10_min.js')}"></script>
<script src="{{asset('js/pivot/lightbox.min.js"></script>
<script src="{{asset('js/pivot/jquery.countdown.min.js"></script>
<script src="{{asset('js/pivot/scripts.js"></script>