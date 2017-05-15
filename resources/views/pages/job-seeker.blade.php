@extends("layouts.forms_layout")
@section('assets')
    <link rel="stylesheet" type="text/css" href="{{asset('css/feeder/style.css')}}" />
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>

    {{--<link href="{{asset('css/Custom.css')}}" rel="stylesheet" />--}}
<title>Job Seekers</title>
@endsection
@section('navigation')
@endsection


@section('cover')
    <!-- ========== Hero Cover ========== -->

    <div id="home" class="animated-hero animated-hero2">
        <div class="bg-overlay">

            <!-- Hero Content -->
            <div class="hero-content-wrapper">
                <div class="hero-content">
                    <h1 style="font-size: 50px;" class="cd-headline slide hero-lead wow fadeIn" data-wow-duration="4s">
                  <span class="cd-words-wrapper">
                    <b class="is-visible">Find a Job</b>
                    <b>Get Hired </b>
                  </span>
                    </h1>

                    <div class="heading-block align-center centered-block">

                        <div class="signup-wrapper align-center">
                            <div class="row">

                                <form class="form form-inline form-register form-register-small"  role="form" method="POST" action="/seekers">
                                    @if(session('message'))
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h5 style="color: white;">{{ session('message') }}</h5>
                                        </div>
                                    @endif
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="select-form" style="color: white;">Service Type</label>
                                        <select class="form-control" name="service" id="select-form">
                                            <option selected disabled="">Choose one</option>
                                            <option value="FlexTalent">Flex-Job</option>
                                            <option value="PermanentJob">Permanent Job</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="select-form" style="color: white">Location</label>
                                        <input size="25" type="text" class="form-control " name="location"  placeholder="Enter Location of the Job">

                                    </div>

                                    <div class="form-group">
                                        <label for="select-form" style="color: white">Job Type</label>
                                        <select class="form-control" name="job_type" id="select-form">
                                            <option selected disabled="">Choose one</option>
                                            <option value="Part_time">Part-Time</option>
                                            <option value="full_time">Full-Time</option>
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
                <h2>How it Works</h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>SUBSCRIBE  <br>
                    FOR FREE</h4>
                <p>Sign up today at a small fee to receive alerts about new jobs that meet your criteria.</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>CHOOSE THE JOB<br>
                    TYPE YOU WANT</h4>
                <p>Explore different job opportunities we offer–Flexible jobs or Permanent Jobs</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>CREATE YOUR<br>
                    CV/PROFILE</h4>
                <p>Tell us your job skills and leave the rest for us to connect you to great employers 24/7</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->

    <div class=" container no-gap-right">
        <div class="work-with-us">
            <div class="row">
                <div class="col-lg-5 ">
                    <h2 style="font-size: 30px; font-weight:700; text-transform: uppercase;">Why <span style="color: #72c02c;">work with us?</span></h2>
                    <div class="row">
                        <div class="col-lg-11">
                            <p style="font-size: 15px;">At WORTHJOBS, we understand that every job search is unique. Whether you are
                                seeking roles that are long-term or short-term, we have hundreds of positions to choose
                                from. We do not measure success through our ability to simply make a match between an
                                employer and job seeker, but rather, our ability to help you take the next step towards
                                achieving your career goals
                                By working with us, you’ll have access to industry experts specializing in your field as
                                well as a personalized search strategy tailored to your specific needs. Our career
                                experts will be with you every step of the way as you bring your job search—and your
                                career—to the next level</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-horz-center">
                        <img class="img-responsive" src="{{url('images/hero/scholarships-for-african-american-students.jpg')}}" alt="work with us">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <style>
        .fj{
            background-color: #d9e7ed;

        }
    </style>
    <div style=" padding-bottom: 10%"></div>
    <section class="fj">

    <div class="container">

        <div class="work-with-us ">
            <div class="row">
                <div class="col-lg-11">
                    <h1>FLEX  <span style="color: #72c02c; ">Jobs</span></h1>
                    <div class="margin-bottom-20"></div>
                    <div class="row">
                        <div class="col-lg-11">
                            <h3>DIFFERENT NEEDS AND FLEXIBILITY:</h3>
                            <p>We understand that all of our candidates have different needs. For those who
                                want greater flexibility, the opportunity to pick up new skills and diversify their experience,
                                we offer temporary placement services across all industries and sectors. </p>
                            <div class="margin-bottom-20"></div>
                            <h3>CONVENIENCE:</h3>
                            <p >
                                We make everything from submitting finding your temporary job to managing your
                                timesheets and payment from employer easy. As our client on our Flexi Jobs you
                                just tell us the schedules you are available for flexi jobs and we alert you when
                                there is an opportunity. This means you have an opportunity to work on multiple jobs
                                which different employer in any single day or period if your schedule permits.
                            </p>
                            <div class="margin-bottom-20"></div>
                            <h3>CAREER GUIDANCE:</h3>
                            <p>
                                When you join our Flexi Jobs team as a temporary employee, we do more than just find
                                you a job. We also become an advocate working on your behalf to ensure you receive competitive pay and that you are always placed in a role that is the right fit for you. As a true career partner, we will proactively help you make the connections you need for long-term success in your field.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="flexjobsprocess" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2> How Flex-Jobs Works</h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>SUBSCRIBE <br/>
                    FOR FREE</h4>
                <p>You subscribe for free by posting your flexjob profile</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>GET SCREENED<br>
                    & REGISTERED</h4>
                <p>We recieve your profile screen it and register you on to our database</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>MANAGE YOUR ACCOUNT<br>
                   WITH EMPLOYER</h4>
                <p>We then help you manage your account with the employer</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->
    <div class="margin-bottom-30"></div>
    <style>
        .pmj{
            background-color: rgba(114,192,44,0.3);

        }
    </style>
    <section class="pmj" >
        <div class="container">

            <div class="work-with-us ">
                <div class="row">
                    <div class="col-lg-11">
                        <h1 style=" text-transform: uppercase;">PERMANENT <span style="color: #72c02c; ">Jobs</span></h1>
                        <div class="margin-bottom-20"></div>
                        <div class="row">
                            <div class="col-lg-11">
                                <h3>HOW ARE WE GOING TO FIND YOUR DREAM JOB? </h3>
                                <p >It is simple really. We have access to a hidden pool of permanent jobs that
                                    are unavailable to most because some of our employer clients approach us directly.
                                    This means that the vast majority of the amazing job opportunities that we offer are
                                    available only through us. What is even better is that access to this amazing world of
                                    hidden job opportunities is absolutely free. The employer pays for the recruiting services
                                    once they decide to hire you.  That is right. We help you find a dream job for free. </p>
                                <h3>JUST SEND US YOUR SPECIFIC INTEREST AND WE DO THE REST: </h3>
                                <p >
                                    When you are submitting your application with us, we ask that you include specific details
                                    to help us match your skills and the available job opportunities. All resumes received will
                                    be reviewed in 3 – 5 business days. If we believe you are a good fit for one of our job
                                    opportunities, we will contact you to arrange an interview with one of our Recruiting
                                    Associates. If you do not hear from us, it is most likely that we do not have a position
                                    for you at this time.
                                </p>

                                <h3>WE VALUE CONFIDENTIALITY AND PRIVACY OF YOUR INFORMATION: </h3>
                                <p>
                                    More importantly note that when you submit your resume for our consideration, you can
                                    be confident that your information is safe throughout our recruiting services process
                                    because we commit to providing confidential and unbiased recruitment and job placement
                                    service abiding by a strict code of ethics. With us you have nothing to lose and everything
                                    to gain.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="flexjobsprocess" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2> How Permanent Jobs Works</h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>SUBSCRIBE <br/>
                    FOR FREE</h4>
                <p>Submit your Job interest for free</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>STEP<br>
                    TWO</h4>
                <p>Get interviewed and join our Database of ready candidates</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>STEP<br>
                    THREE</h4>
                <p> Get matched to permanent jobs with employers</p>
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
@endsection

