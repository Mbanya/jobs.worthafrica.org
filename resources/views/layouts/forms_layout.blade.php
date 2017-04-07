<!doctype html>
<html class="no-js" lang="{{config ('app.locale')}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{'favicon.ico'}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('fonts/et-lineicons/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/linea-font/css/linea-font.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <!-- Slider -->
    <link rel="stylesheet" href="{{asset('css/vendor/slick.css')}}">
    <!-- Lightbox -->
    <link rel="stylesheet" href="{{asset('css/vendor/magnific-popup.css')}}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/vendor/animate.css')}}">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('css/vendor/animated-heading.css')}}">


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


    <!-- JS -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    @yield('header')
</head>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<body id="page-top" data-spy="scroll" data-target=".navbar">

<!-- ========== Preloader ========== -->

<!--<div class="preloader">
    <img src="{{ url('images/loader.svg')}}" alt="Loading...">
</div> -->


<nav class="navbar navbar-default navbar-fixed-top mega navbar-trans navbar-fw">
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Logo -->
        <a class="navbar-brand" href="{{url('index')}}"> <img class="navbar-logo" src="{{('jobs.png')}}"  alt="Logo"></a>
    </div>

    <!-- Navbar Links -->
    <div id="navbar" class="navbar-collapse collapse page-scroll navbar-right">
        <ul class="nav navbar-nav">
            <li><a href="{{route('index')}}">Home<span class="sr-only"></span></a></li>
            <li><a href="{{url('/#how')}}">How it Works<span class="sr-only"></span></a></li>
            <li><a href="{{route('pricing')}}">Pricing<span class="sr-only"></span></a></li>
            <li><a href="{{url('/#faq')}}">FAQ'S<span class="sr-only"></span></a></li>
            <li><a href="{{route('about')}}">About Us<span class="sr-only"></span></a></li>
            <li><a href="{{route('contact')}}">Contact Us<span class="sr-only"></span></a></li>
            @if (Sentinel::check())

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{Sentinel::getUser()->first_name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li>
                            <a href="/profile/{{Sentinel::getUser()->getUserLoginName()}}">My profile</a>
                        </li>
                        <hr>
                        <li>
                            <a href="/flexjobs/create">Post Flex Profile</a>
                        </li>
                        <li>
                            <a href="/jobs/create">Post Job Profile</a>
                        </li>
                    </ul>

            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Register<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('organisation_register') }}">Employer Registration</a></li>
                        <li><a href="{{ route('register') }}">Job Seeker Registration</a></li>
                    </ul>
            @endif
        </ul><!-- / .nav .navbar-nav -->
    </div><!--/.navbar-collapse -->
    @yield('navigation')
</nav><!-- / .navbar -->
@yield('cover')

@yield('content')
<!-- ========== Footer Contact ========== -->

<!-- ========== Footer Contact ========== -->
<footer class="footer-contact">
    <div class="container-fluid">
        <div class="row">

            <!-- Map and address -->
            <div class="col-lg-6 no-gap contact-info">

                <!-- Show Info Button -->

                <div id="map-canvas" class="footer-map"></div>

                <address class="contact-info-wrapper">
                    <ul>
                        <!-- Address -->
                        <li class="contact-group">
                            <span class="adr-heading">Address</span>
                            <span class="adr-info">Greenhouse Ngong Rd, <br>3rd Floor West Wing, Suite 2</span>
                        </li>
                        <!-- Email -->
                        <li class="contact-group">
                            <span class="adr-heading">Email</span>
                            <span class="adr-info">info@worthafrica.org</span>
                        </li>
                    </ul>
                    <ul>
                        <!-- Phone -->
                        <li class="contact-group">
                            <span class="adr-heading">Phone</span>
                            <span class="adr-info">+254 732 548 039</span>
                        </li>
                        <!-- Mobile -->
                        <li class="contact-group">
                            <span class="adr-heading">Alternative </span>
                            <span class="adr-info">+ 254 723 754 861</span>
                        </li>
                    </ul>

                </address>

            </div><!-- / .col-lg-6 -->


            <!-- Contact Form -->
            <div class="col-lg-6 no-gap section contact-form">
                <header class="sec-heading">
                    <h2>Contact</h2>
                    <span class="subheading">We would love to hear from you</span>
                </header>

                <form action="" method="POST" class="form-ajax wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">

                    <!-- Name -->
                    <div class="form-group">
                        <input type="text" name="name" id="name-contact-1" class="form-control validate-locally" placeholder="Enter your name">
                        <label for="name-contact-1">Name</label>
                        <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <input type="email" name="email" id="email-contact-1" class="form-control validate-locally" placeholder="Enter your email">
                        <label for="email-contact-1">Email</label>
                        <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message-contact-1" rows="5" placeholder="Your Message"></textarea>
                        <label for="message-contact-1">Message</label>
                    </div>
                    <input type="submit" class="btn pull-right" value="Send Message">

                    <!-- Ajax Message -->
                    <div class="ajax-message col-md-12 no-gap"></div>

                </form>
            </div><!-- / .col-lg-6 -->

        </div><!-- / .row -->
    </div><!-- / .container-fluid -->


</footer><!-- / .footer-contact -->
  @yield('footer')

<!-- ========== Scripts ========== -->
<script src="{{ asset('js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{ asset('js/vendor/google-fonts.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.easing.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{ asset('js/vendor/smoothscroll.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.localScroll.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.parallax.js')}}"></script>
<script src="{{ asset('js/vendor/slick.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.easypiechart.min.js')}}"></script>
<script src="{{ asset('js/vendor/countup.min.js')}}"></script>
<script src="{{ asset('js/vendor/isotope.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/vendor/animated-heading.js')}}"></script>
<script src="{{ asset('js/vendor/wow.min.js')}}"></script>
<!-- Definity JS -->
<script src="{{ asset('js/main.js')}}"></script>
@yield('scripts')
</body>

</html>
