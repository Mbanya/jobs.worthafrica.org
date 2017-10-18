@extends('layouts.layout')
<title>Home</title>
@section('assets')
    <link class="main-stylesheet" href="{{asset('css/pages1.css')}}" rel="stylesheet" type="text/css"/>
    {{--<link class="main-stylesheet" href="{{asset('css/pages-icons.css')}}" rel="stylesheet" type="text/css"/>--}}
    <link class="main-stylesheet" href="{{asset('css/swiper.css')}}" rel="stylesheet" type="text/css"/>
    {{--<link class="main-stylesheet" href="{{asset('css/pace-theme-flash.css')}}" rel="stylesheet" type="text/css"/>--}}
@endsection

@section('navigation')
    @endsection



<!-- ========== Features ========== -->
@section('content')
    <!-- ========== Hero Cover ========== -->
    <div id="home" class="landing-hero">
        <div class="bg-overlay">
            <div class="hero-wrapper">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">

                            <!-- Heading -->
                            <div class="col-md-5 heading-wrapper wow fadeInLeft" data-wow-duration="1.5s">
                                <h1 class="lead">Job Filter</h1>
                                <h4 class="h-alt subheading">Create Value. Save Money</h4>
                                <p style="color: white">JOBS FILTER is a total break through! In 3 simple steps
                                    JOB FILTER app guarantees 80% savings of what it traditionally costs
                                    HR teams to filter hundreds and thousands of job applications you receive
                                    when you advertise for a job. </p>
                                <a href="#How it works" class="link text-white">Learn more</a>
                            </div>

                            <!-- Call to action Form -->
                            <div class="col-md-offset-3 col-md-4 form-wrapper wow fadeInRight" data-wow-duration="1.5s">
                                <form action="{{route('jflogin')}}" method="POST" role="form" class="form-group">
                                    @if(session('error'))
                                        <div class="alert alert-danger" >
                                            {{session('error')}}
                                        </div>
                                    @endif
                                    {{csrf_field()}}
                                    <input type="email"  name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                <!-- Password -->
                                    <input type="password" name="password"  class="form-control" placeholder="Enter your password" required autofocus>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                    <input class="btn-block btn-ghost-light" type="submit" value="Login">
                                        <span><a href="{{route('account')}}" class="cta-btn">No Account? Register here</a></span>

                                </form>

                            </div>

                        </div><!-- / .row -->
                    </div><!-- / .container -->
                </div><!-- / .hero-content -->
            </div><!-- / .hero-wrapper -->


        </div><!-- / .bg-overlay -->
    </div><!-- / .main-op -->
    <section id="How it works" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2> How Job-Filter Works</h2>
                <span class="subheading">It only takes 3 simple steps</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>SUBSCRIBE  <br>
                    FOR FREE</h4>
                <p>Sign up today for free<br/> and get started on finding the right fit</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>FILL IN OUR<br>
                    JOB FILTER FORM</h4>
                <p>Indicate your requirements within the form and submit it to us</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>CREATE YOUR<br>
                   JOB RECIEVING TRY</h4>
                <p>Upon subbmission we give you a link to embed together with your job advert</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->


    <!-- ========== FAQS ========== -->
    <section class="p-t-55 bg-success-light scroll-x-hidden " style="margin: auto;" data-pages-bg-image="{{url('../images/284_Samburu-Plains_2560x1440.jpg')}}" data-pages="parallax"  >
        <div class="container p-b-100">
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
                            <h3 class="text-white no-margin lh-large">100%</h3>
                            <p class="text-white fs-12 font-arial">Questions Answered
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress progress-small transparent-white m-t-15">
                                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                </div>
                            </div>
                            <h3 class="text-white no-margin lh-large">24hrs</h3>
                            <p class="text-white fs-12 font-arial">To reply to any inquiry
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress progress-small transparent-white m-t-15">
                                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                </div>
                            </div>
                            <h3 class="text-white no-margin lh-large">10hrs</h3>
                            <p class="text-white fs-12 font-arial">Dedicated to Customer service each week
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="progress progress-small transparent-white m-t-15">
                                <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                </div>
                            </div>
                            <h3 class="text-white no-margin lh-large">100%</h3>
                            <p class="text-white fs-12 font-arial">Easy to use and understand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-triangle"></div>
        </div>
    </section>
    <section class="p-b-55 p-t-25">

        <div class="swiper-container " id="testimonials_slider">
            <div class="swiper-wrapper" style="margin-top: -75px">

                <div class="swiper-slide">
                    <div class="container text-left">
                        <h5 class="semi-bold m-b-30">Q: What will it cost us to subscribe to JOB FILTER?</h5>
                        <h5 class="m-b-30">“A: JOB FILTER is amazingly so cheap to believe. Subscription if
                            for free and it costs an average of only US$99per job. The popular pricing choice
                            among our clients is a premium option which involves an annual subscription
                            of US$499 only. Under premium option you have up to 6 jobs to post and shortlist
                            via the JOB FILTER app.”</h5>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="container text-left">
                        <h5 class="semi-bold m-b-30">Q: How exactly does JOB FILTER app work?</h5>
                        <h5 class="m-b-30">“JOB FILTER uses our advanced innovation technology to
                            shortlist best candidates within minutes. In 3 simple steps you are
                            ready to enjoy amazing benefits of JOB FILTER! 1) Create an account; 2)
                            generate job code for every job you want to advertise; 3) receive shortlist
                            for best candidates as within 48 hours of closing all applications.
                            Once you subscribe and post a job you track in real time as the shortlists
                            are formed based on the selection criteria you have provided us”</h5>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="container text-left">
                        <h5 class="semi-bold m-b-30">How accurate are the results we get from JOBS FILTER app?</h5>
                        <h5 class="m-b-30">“99% accurate! We have been honoured to be a pace setter in
                            developing such innovative and advanced technology solution.
                            To ensure absoluteness on our results we always engage our HR advisory
                            team to do final quality assurance checks on the shortlists to guarantee you the results.
                            ”</h5>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="container text-left">
                        <h5 class="semi-bold m-b-30">How safe and secure is it for us as a client to use JOBS FILTER app?</h5>
                        <h5 class="m-b-30">“JOB FILTER uses advanced encryption and storage technology to
                            ensure all data and information received is safe and secure. Our privacy and
                            confidentiality policy is top priority and ensures that information and data
                            of all job applications and our clients is securely safe.
                            ”</h5>
                    </div>
                </div>

            </div>


            <div class="container" style="margin-top: -108px ">
                <div class="swiper-pagination relative pull-left"></div>
            </div>
        </div>

    </section>

    <!-- ========== Footer ========== -->
    <section class="p-b-55 p-t-75 xs-p-b-20 bg-master-darker">

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 xs-m-b-40">
                    <p style="color: white;">Worth-Jobs is your premier source for quality recruiting services, dedicated to offering quality services with integrity.</p>
                </div>
                <div class="col-sm-2 col-xs-6 xs-m-b-20">
                    <h6 class="font-montserrat text-uppercase fs-14 text-white p-b-10">Other Services </h6>
                    <ul class="no-style">
                        <li class="m-b-5 no-padding"><a href="{{route('employer')}}" class="link text-white ">Flex Hire</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('job_seeker')}}" class="link text-white ">Flex Jobs</a></li>
                        <li class="m-b-5 no-padding"><a href="http://nexus.worthafrica.org/" class="link text-white ">Nexus</a></li>
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
                        <li class="m-b-5 no-padding"><a href="{{url('/contact')}}" class="link text-white">Contact Us</a></li>
                        <li class="m-b-5 no-padding"><a href="{{route('about')}}" class="link text-white">About Us</a></li>
                        <li class="m-b-5 no-padding"><a href="" class="link text-white">Terms & Conditions</a></li>
                        <li class="m-b-5 no-padding"><a href="" class="link text-white">Privacy Policy</a></li>

                    </ul>
                </div>
            </div>
            <p class="fs-12 hint-text p-t-10 text-white">Copyright &copy; <?php echo date("Y")?> All Rights Reserved </p>
        </div>
    </section>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
    {{--<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{ asset('js/swiper.jquery.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{ asset('js/pace.min.js')}}"></script>--}}


@endsection