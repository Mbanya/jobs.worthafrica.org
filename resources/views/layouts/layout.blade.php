<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Home') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
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
    @yield('assets')
</head>



  <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<body id="page-top" data-spy="scroll" data-target=".navbar">

<!-- ========== Preloader ========== -->
<!--
<div class="preloader">
    <img src="{{ url('/images/loader.svg')}}" alt="Loading...">
</div>
--->

<nav class="navbar navbar-default navbar-fixed-top mega navbar-trans navbar-fw">
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Logo -->
        <a class="navbar-brand" href="{{route('index')}}"><img class="navbar-logo" src="{{('jobs.png')}}"  alt="Logo"></a>
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
                {{Sentinel::getUser()->contact_name}} <span class="caret"></span>
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
                            <a href="{{Sentinel::getUser()->getUserLoginName()}}">My profile</a>
                        </li>
                    </ul>

            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                       Register <span class="caret"></span>
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
