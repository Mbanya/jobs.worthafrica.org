@extends("layouts.layout")
<title>Employers</title>
@section('assets')
    <link rel="stylesheet" type="text/css" href="{{asset('css/feeder/style.css')}}" />
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('navigation')
@endsection


@section('cover')
    <!-- ========== Hero Cover ========== -->

    <div id="home" class="animated-hero animated-hero1">
        <div class="bg-overlay">

            <!-- Hero Content -->
            <div class="hero-content-wrapper">
                <div class="hero-content">
                    <h1 style="font-size: 55px;" class="cd-headline slide hero-lead wow fadeIn" data-wow-duration="4s">
                  <span class="cd-words-wrapper">
                    <b class="is-visible">Employers</b>
                    <b>Find Talent</b>

                  </span>
                    </h1>
                    <div class="heading-block align-center centered-block">
                            <div class="signup-wrapper align-center">
                                <div class="row">
                                    <form class="form form-inline form-register form-register-small"  role="form" method="post" action="/employer" style="display: none">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="select-form" style="color: white;">Service Type</label>
                                            <select class="form-control" name="service" id="select-form">
                                                <option selected disabled>Choose one</option>
                                                <option value="flex_hire">Flex-Hire</option>
                                                <option value="permanent_hire">Permanent Hire</option>
                                                <option value="TOR">TOR</option>

                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="select-form" style="color: white">Location</label>
                                            <input size="25" type="text" class="form-control " name="Location"  placeholder="Enter Location of the Job">

                                        </div>

                                        <div class="form-group">
                                            <label for="select-form" style="color: white">Availability</label>
                                            <select class="form-control" name="job_type" id="select-form">
                                                <option selected disabled>Choose one</option>
                                                <option value="1 week">1 week</option>
                                                <option value="2 weeks">2 weeks</option>
                                                <option value="3 weeks">3 weeks</option>
                                                <option value="1 month">1 month</option>
                                                <option value="3 months">3 months</option>
                                            </select>

                                        </div>
                                        <div class="form-group submit-wrap">
                                            <input type="hidden" name="small-form"/>
                                            <button type="submit" class="btn btn-solid">Get Started</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <a href="#about" class="btn btn-light wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Learn More</a>

                </div>
                </div>

            <!-- Scroller -->
            <a href="#about" class="scroller">
                <span class="scroller-text">scroll down</span>
                <span class="linea-basic-magic-mouse"></span>
            </a>

        </div><!-- / .bg-overlay -->
    </div><!-- / .animated-hero -->

@endsection
@section('content')

    <!-- ========== About - Section ========== -->

    <section id="about" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2> How it Works </h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>JUST TELL US  <br>
                    YOUR VACANCY</h4>
                <p>Simply you tell us the talent you are <br/> looking for and your criteria.</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>WE SEARCH AND<br>
                    MATCH FOR YOU</h4>
                <p>We search from our extensive up-to-date<br/> database or networks.</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>WE GIVE YOU<br>
                    BEST JOBS FIT</h4>
                <p>Within hours we give you a shortlist <br/>top 3 pre-screened candidates</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->

    <div class=" container no-gap-right">
    <div class="work-with-us">
        <div class="row">
            <div class="col-lg-5 ">
                <h2 style="font-size: 30px; font-weight:700; text-transform: uppercase;">Why <span style="color: green;">work with us?</span></h2>
                <div class="row">
                    <div class="col-lg-11">
                        <p style="font-size: 15px;">Competition for top talent can get pretty fierce. That's because many of the best
                            candidates are already working. Do you want to settle for the best of what's available,
                            or do you really want to find the best person for the job? Let's just assume you said
                            "the best person for the job." Well, we know people like that. Top-notch, hard-to-reach
                            passive candidates. The people you may not find through a small agency or a job board.
                            The people who will make a move for the right opportunity — your opportunity.
                            Those are the people we place every day, in every industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-horz-center">
                    <img class="img-responsive" src="{{url('images/hero/employee_engagment.jpg')}}" alt="work with us">
                </div>
            </div>
        </div>
    </div>

    </div>
    <style>
        .pmj{
            background-color: #d9e7ed;

        }
    </style>
    <div style=" padding-bottom: 10%"></div>
    <section class="pmj">
        <div class="container">
            <div class="work-with-us">
                <div class="row">
                    <div class="col-lg-11 ">
                        <h2 style="font-size: 30px;  text-transform: uppercase;">Permanent Hire </h2>
                        <div class="margin-bottom-20"></div>
                        <div class="row">
                            <div class="col-lg-11">
                                <h2 style="font-size: 20px; ">SAVE MONEY</h2>
                                <p style="font-size: 13px">When you work with us you reduce your hiring risk and save your business
                                    time and money because we focus on alleviating all the administrative burden of recruiting, evaluating,
                                    screening, and interviewing to find best candidates in the market. </p>
                                <h2 style="font-size: 20px;  text-transform: uppercase;">DEDICATED AND FOCUSED TO GET YOU THE BEST</h2>
                                <p style="font-size: 13px">
                                    We focus on providing leading employers with the highest calibre of talent while maintaining our
                                    commitment to integrity, honesty, and responsiveness. We understand that choosing someone to work
                                    for your organization is an important decision, so we do all our candidate searches with absolute
                                    dedication and focused effort. We leverage our unparalleled database of candidates and industry-specific
                                    expertise to successfully match our clients with the professionals they need to push business forward
                                </p>

                                <h2 style="font-size: 20px; ">INNOVATION FOR QUALITY AND EFFICIENCY</h2>
                                <p style="font-size: 13px">
                                    We approach recruitment from a holistic perspective, continually implementing new and innovative
                                    ways to improve talent quality, compliance, and cost-effectiveness. Our expert teams act as an
                                    extension of our clients’ recruiting departments, offering a centralized model and a single provider
                                    for all their needs—from project-based support to comprehensive end-to-end solutions.
                                    With experienced recruiters already operating in critical markets and industries, we deliver
                                    strategic advantage our clients.
                                </p>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2> How Permanent <span style="color: #002d49; ">Hire Works</span></h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>STEP  <br>
                    ONE</h4>
                <p> You let us know the talent<br/> you are looking for</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>STEP<br>
                    TWO</h4>
                <p>We confirm to
                    customize your <br/>vacancy needs</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>STEP<br>
                    THREE</h4>
                <p> We match you for best <br/> fit candidates</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->
    <style>
        .fj{
            background-color: rgba(114,192,44,0.3);

        }
    </style>
    <section class="fj">
        <div class="container">

            <div class="work-with-us ">
                <div class="row">
                    <div class="col-lg-11 ">
                        <h2 style="font-size: 30px;  text-transform: uppercase;">Flex <span style="color: #002d49; ">Hire</span></h2>
                        <div class="margin-bottom-20"></div>
                        <div class="row">
                            <div class="col-lg-11">
                                <h2 style="font-size: 20px;">SAVE MONEY</h2>
                                <p >When you work with us you reduce your hiring risk and save your business
                                    time and money because we focus on alleviating all the administrative burden of recruiting, evaluating,
                                    screening, and interviewing to find best candidates in the market. </p>
                                <h2 style="font-size: 20px;  text-transform: uppercase;">DEDICATED AND FOCUSED TO GET YOU THE BEST</h2>
                                <p>
                                    We focus on providing leading employers with the highest calibre of talent while maintaining our
                                    commitment to integrity, honesty, and responsiveness. We understand that choosing someone to work
                                    for your organization is an important decision, so we do all our candidate searches with absolute
                                    dedication and focused effort. We leverage our unparalleled database of candidates and industry-specific
                                    expertise to successfully match our clients with the professionals they need to push business forward
                                </p>

                                <h2 style="font-size: 20px; ">INNOVATION FOR QUALITY AND EFFICIENCY</h2>
                                <p>
                                    We approach recruitment from a holistic perspective, continually implementing new and innovative
                                    ways to improve talent quality, compliance, and cost-effectiveness. Our expert teams act as an
                                    extension of our clients’ recruiting departments, offering a centralized model and a single provider
                                    for all their needs—from project-based support to comprehensive end-to-end solutions.
                                    With experienced recruiters already operating in critical markets and industries, we deliver
                                    strategic advantage our clients.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
               <h2> How Flex <span style="color: #002d49; "> Hire Works</span></h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>STEP  <br>
                    ONE</h4>
                <p> You let us know the talent<br/> you are looking for</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>STEP<br>
                    TWO</h4>
                <p>We confirm to
                    customize your <br/>vacancy needs</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>STEP<br>
                    THREE</h4>
                <p> We match you for best <br/> fit candidates</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->
    <!-- ========== Footer ========== -->
    <section class="p-b-55 p-t-75 xs-p-b-20 bg-master-darker ">

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 xs-m-b-40">
                    <p class="" style="color: white;">Worth-Jobs is your premier source for quality recruiting services, dedicated to offering quality services with integrity.</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
@endsection

