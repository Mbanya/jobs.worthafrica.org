@extends('layouts.layout')

@section('assets')
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('navigation')
    @endsection
@section('cover')
<!-- ========== Hero Cover ========== -->
<div id="home" class="landing-hero">
    <div class="bg-overlay">
        <div class="hero-wrapper">
            <div class="hero-content">
                <div class="container">
                    <div class="row">

                        <!-- Heading -->
                        <div class="col-md-5 heading-wrapper wow fadeInLeft" data-wow-duration="1.5s">
                            <h1 class="lead">Reach the top</h1>
                            <h4 class="h-alt subheading">Catchy Subheading</h4>
                            <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita neque praesentium eum earum aperiam quas impedit commodi hic, architecto, error, quae. Commodi, similique! Voluptatum iste necessitatibus eum aut temporibus, alias!</p>
                            <a href="#How it works" class="cta-btn">Learn more</a>
                        </div>

                        <!-- Call to action Form -->
                        <div class="col-md-offset-3 col-md-4 form-wrapper wow fadeInRight" data-wow-duration="1.5s">
                            <form action="" class="form-group">
                                <input class="form-control" type="text" placeholder="Full Name">
                                <input class="form-control" type="password" placeholder="Password">
                                <input class="form-control" type="email" placeholder="Email">
                                <input class="btn-ghost-light" type="submit" value="Get Started">
                            </form>
                        </div>

                    </div><!-- / .row -->
                </div><!-- / .container -->
            </div><!-- / .hero-content -->
        </div><!-- / .hero-wrapper -->

        <!-- Scroller -->
        <a href="#how" class="scroller">
            <span class="scroller-text">scroll down</span>
            <span class="linea-basic-magic-mouse"></span>
        </a>

    </div><!-- / .bg-overlay -->
</div><!-- / .main-op -->
    @endsection


<!-- ========== Features ========== -->
@section('content')
    <div id="how" class="container-fluid ft-layout-50">
        <div class="row">

            <!-- Step 1 -->
            <div class="ft-item">
                <div class="col-lg-6 ft-img-wrapper">
                    <img src="{{url('/images/landing-ft-1.jpg')}}" alt="Features Image">
                </div>
                <div class="col-lg-6 ft-content-wrapper">
                    <h5>Step 1</h5>
                    <h6 class="h-alt">Lorem ipsum dolor sit amet</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="btn-ghost">Call to Action</button>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="ft-item">
                <div class="col-lg-6 ft-content-wrapper">
                    <h5>Step Two</h5>
                    <h6 class="h-alt">Lorem ipsum dolor sit amet</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="btn-ghost">Call to Action</button>
                </div>
                <div class="col-lg-6 ft-img-wrapper">
                    <img src="{{ url('/images/landing-ft-2.jpg')}}" alt="Features Image">
                </div>
            </div>

            <!-- Step 3 -->
            <div class="ft-item">
                <div class="col-lg-6 ft-img-wrapper">
                    <img src="{{ url('/images/landing-ft-2.jpg')}}" alt="Features Image">
                </div>
                <div class="col-lg-6 ft-content-wrapper">
                    <h5>Step Three</h5>
                    <h6 class="h-alt">Lorem ipsum dolor sit amet</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="btn-ghost">Call to Action</button>
                </div>

            </div>

        </div>
    </div>

    <!--End FAQ's -->

    <!-- ========== FAQS ========== -->
    <section class="p-t-55 bg-success-light scroll-x-hidden" data-pages-bg-image="{{ url('/images/work.jpg')}}" data-pages="parallax">
        <div class="container p-b-100" id="faq">
            <h5 class="block-title text-white ">FAQ'S</h5>
            <div class="row p-b-65 p-t-55">
                <div class="col-sm-6">
                    <h1 class="m-t-5 light text-white">
                        Frequently asked questions by our clients
                    </h1>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="progress progress-small transparent-white m-t-15">
                                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                </div>
                            </div>
                            <h3 class="text-white no-margin lh-large">200%</h3>
                            <p class="text-white fs-12 font-arial">Smoother
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress progress-small transparent-white m-t-15">
                                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                </div>
                            </div>
                            <h3 class="text-white no-margin lh-large">23%</h3>
                            <p class="text-white fs-12 font-arial">Lighter
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress progress-small transparent-white m-t-15">
                                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                </div>
                            </div>
                            <h3 class="text-white no-margin lh-large">12.23ma</h3>
                            <p class="text-white fs-12 font-arial">Micro Awesomness
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress progress-small transparent-white m-t-15">
                                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                </div>
                            </div>
                            <h3 class="text-white no-margin lh-large">12.23ma</h3>
                            <p class="text-white fs-12 font-arial">Micro Awesomness
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-triangle"></div>
        </div>
    </section>
    <section class="p-b-55 p-t-25">

        <div class="swiper-container" id="testimonials_slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="container text-left">
                        <h5 class="semi-bold m-b-30">- Richard Hall</h5>
                        <h3 class="m-b-30">“Pages is the right balance of proven solution and true partner. We choose vendors that we can partner and scale with.”</h3>
                        <h6 class="block-title hint-text fs-12">DIRECTOR OF REVENUE OPERATIONS AT REVOX</h6>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="container text-left">
                        <h5 class="semi-bold m-b-30">- John Smith</h5>
                        <h3 class="m-b-30">“Pages is the right balance of proven solution and true partner. We choose vendors that we can partner and scale with.”</h3>
                        <h6 class="block-title hint-text fs-12">CEO & Co-founder AT REVOX</h6>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="container text-left">
                        <h5 class="semi-bold m-b-30">- David Nester</h5>
                        <h3 class="m-b-30">“Pages is the right balance of proven solution and true partner. We choose vendors that we can partner and scale with.”</h3>
                        <h6 class="block-title hint-text fs-12">Creative Director & UI Specialist AT REVOX</h6>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="swiper-pagination relative pull-left"></div>
            </div>
        </div>
    </section>

    <!-- ========== Footer ========== -->
    <section class="p-b-55 p-t-75 xs-p-b-20 bg-master-darker ">

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 xs-m-b-40">
                    <p class="" style="color: white;">Worth-Jobs is your premier source for quality recruiting services, dedicated to offering quality services with integrity.</p>
                </div>
                <div class="col-sm-2 col-xs-6 xs-m-b-20">
                    <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10">Our Company </h6>
                    <ul class="no-style">
                        <li class="m-b-5 no-padding"><a href="http://worthafrica.org" target="_blank" class="link text-white ">Worth Africa</a></li>
                        <li class="m-b-5 no-padding"><a href="http://www.worthafrica.org/worth-index/" target="_blank" class="link text-white">Worth Index</a></li>
                        <li class="m-b-5 no-padding"><a href="http://www.worthafrica.org/a2b/" target="_blank" class="link text-white">A2B</a></li>
                        <li class="m-b-5 no-padding"><a href="http://www.worthafrica.org/nobell/" target="_blank" class="link text-white">Nobell</a></li>
                        <li class="m-b-5 no-padding"><a href="http://www.worthafrica.org/worth-it/" target="_blank" class="link text-white">Worth IT</a></li>

                    </ul>
                </div>
                <div class="col-sm-2 col-xs-6 xs-m-b-20">
                    <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10">Other Services </h6>
                    <ul class="no-style">
                        <li class="m-b-5 no-padding"><a href="{{route('employer')}}" class="link text-white ">Flex Hire</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('job_seeker')}}" class="link text-white ">Flex Jobs</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('consult_hub')}}" class="link text-white ">Consult hub</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('job_seeker')}}" class="link text-white">Mock Interviews</a></li>
                    </ul>
                </div>

                <div class="col-sm-2 col-xs-6 xs-m-b-20">
                    <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10">Pages </h6>
                    <ul class="no-style">
                        <li class="m-b-5 no-padding"><a href="{{route('job_seeker')}}" class="link text-white ">Looking for a Job</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('employer')}}" class="link text-white">Looking to Hire</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('pricing')}}" class="link text-white">Pricing</a></li>

                    </ul>
                </div>
                <div class="col-sm-2 col-xs-6 xs-m-b-20">
                    <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10">Links </h6>
                    <ul class="no-style">
                        <li class="m-b-5 no-padding"><a href="{{route('contact')}}" class="link text-white">Contact Us</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('about')}}" class="link text-white">About Us</a></li>
                        <li class="m-b-5 no-padding"><a href="" class="link text-white">Terms & Conditions</a></li>
                        <li class="m-b-5 no-padding"><a href="" class="link text-white">Privacy Policy</a></li>

                    </ul>
                </div>
            </div>
            <p class="fs-12 hint-text p-t-10 text-white">Copyright &copy; 2017. All Rights Reserved </p>
        </div>
    </section>
    <script src="{{ asset('js/vendor/jquery-2.1.4.min.js')}}"></script>

@endsection
@section('scripts')

    <script type="text/javascript" src="{{ asset('/js/swiper.jquery.min.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>


@endsection