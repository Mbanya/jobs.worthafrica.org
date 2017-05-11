@extends("layouts.layout")
@section('assets')
    <link rel="stylesheet" type="text/css" href="{{asset('css/feeder/style.css')}}" />
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>

    {{--<link href="{{asset('css/Custom.css')}}" rel="stylesheet" />--}}
    <title>Mock Interviews</title>
@endsection
@section('navigation')
@endsection


@section('cover')
    <!-- ========== Hero Cover ========== -->

    <div id="home" class="animated-hero animated-hero4">
        <div class="bg-overlay">

            <!-- Hero Content -->
            <div class="hero-content-wrapper">
                <div class="hero-content">
                    <h1 style="font-size: 55px;" class="cd-headline slide hero-lead wow fadeIn" data-wow-duration="4s">
                  <span class="cd-words-wrapper">
                    <b class="is-visible">Mock Interviews</b>
                    <b>Get Prepared </b>
                  </span>
                    </h1>
                    <div class="heading-block align-center centered-block">
                        <div class="signup-wrapper align-center">
                            <div class="row">
                                <form class="form form-inline form-register form-register-small"  role="form" method="POST" action="/seekers">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="select-form" style="color: white;">Service Type</label>
                                        <select class="form-control" name="service" id="select-form">
                                            <option selected disabled="">Choose one</option>
                                            <option value="FlexTalent">Level 1(For Students)</option>
                                            <option value="PermanentJob">Level 2 (For Professionals)</option>
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
                                            <option value="internship">Internship</option>
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
            <a href="#mockinterviewprocess" class="scroller">
                <span class="scroller-text">scroll down</span>
                <span class="linea-basic-magic-mouse"></span>
            </a>

        </div><!-- / .bg-overlay -->
    </div><!-- / .animated-hero -->

@endsection
@section('content')

    <!-- ========== About - Section ========== -->

    <section id="mockinterviewprocess" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2> Our Work Process</h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>SUBMIT YOUR REQUEST FOR FREE</h4>
                <p>Let us know your job of interest for an interview</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>GET AN INTERVIEW<br>
                </h4>
                <p>We set a panel & arrange an interview session for you</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>RECIEVE RESULTS<br>
                </h4>
                <p>  We review results & provide you support to improve</p>
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
    <div style=" padding-bottom: 10%"></div>

    <style>
        /*.mj{*/
            /*background-color: rgba(214, 197, 34, 0.3);*/

        /*}*/
    </style>
    <section class="mj">
        <div class="container">

            <div class="work-with-us ">
                <div class="row">
                    <div class="col-lg-11">
                        <h2 style="font-size: 30px; font-weight:700; text-transform: uppercase;">Mock <span style="color: #72c02c; ">Interviews</span></h2>
                        <div class="margin-bottom-20"></div>
                        <div class="row">
                            <div class="col-lg-11">
                                <h3 style="text-transform: uppercase;">Level-1 Mock Interviews (For Students) </h3>
                                <p >The purpose of Level 1 Mock Interview is to provide you (students/alumni) with
                                    an opportunity to practice interviewing skills in an environment similar to an actual
                                    interview. A mock interview is a great opportunity to become familiar with interview
                                    questions and interview etiquette. Interview apprehension or even anxiety can be very
                                    uncomfortable for the interviewee. Two of the best defences to counter the stresses
                                    associated with interviews are preparation and practice. A mock interview provides the
                                    interviewee both an opportunity to practice and prepare for an interview. WORTHJOBS offer
                                    mock interviews each quarter of the academic year in partnership with your College/University.

                                    Interviews generally run around 45 minutes in total length: 20-30 minutes of interviewing
                                    and 10-15 minutes of critiquing. Students are also encouraged to bring any specific
                                    questions about interviewing, job searching, resumes, etc. Level 1 Mock Interview is
                                    offered for FREE for all College/University Students. To arrange for
                                    Level 1 Mock Interviews simply submit your Application Form and provide ALL required
                                    details. </p>
                                <h3 style="text-transform: uppercase;">Level-2 Mock interviews (For Professionals)</h3>
                                <p >
                                    If you are already professional with some years of work experience, Level 2 Mock Interviews
                                    is designed to help you get that dream job! Our Level 2 Mock Interviews are aimed to sharpen
                                    improve your interviewing confidence and ability to make a positive impression with an employer.
                                    To make your mock interview as realistic as possible, WORTHJOBS requires you to provide the key
                                    information outlined in the Application Form; this allows our mock interviewers to prepare questions
                                    and Interview Panel unique and relevant to your interview situation. All our Interviewers are
                                    seasoned experts in respective fields/Industry
                                    Level 2 Mock Interviews are offered online or face-to-face depending on the Client’s choice or
                                    convenience. Online Interviews are available for Clients wherever they are based in the world
                                    while face-to-face are currently only available in Nairobi, Kenya. The price for
                                    Level 2 Mock interviews (For Professionals) is US$99 per interview.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style=" padding-bottom: 6%"></div>



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

