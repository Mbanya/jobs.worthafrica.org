@extends("layouts.layout")
<title>Consult-Hub</title>
@section('assets')
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('navigation')
@endsection


@section('cover')
        <!-- ========== Hero Cover ========== -->

        <div id="home" class="animated-hero animated-hero3">
          <div class="bg-overlay">
                            
            <!-- Hero Content -->
            <div class="hero-content-wrapper">
              <div class="hero-content">
                
                <h1 style="font-size: 60px;" class="cd-headline slide hero-lead wow fadeIn" data-wow-duration="6s">
                  <span class="cd-words-wrapper">
                    <b class="is-visible">Consult Hub</b>
                    <b>Find Consultants</b>
                    <b>Get Jobs</b>

                  </span>
                </h1>
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
    <section id="flexjobsprocess" class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2> How ConsultHub Works</h2>
                <span class="subheading">Three Simple Steps to get started</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>CONSULTANTS <br/>
                    CREATE YOUR PROFILE</h4>
                <p> Create your profile to join ConsultHub database.</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>CLIENTS<br>
                    FIND CONSULTANTS</h4>
                <p>Post consultancy jobs to find quality consultants. </p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>CONSULTANTS<br>
                    GET ALERTS</h4>
                <p> Get alerts via SMS or E-mail for matching jobs.</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->

    <!-- ========== Featured Projects ========== -->
    <section class="container-fluid portfolio-layout portfolio-columns-fw">
        <header class="sec-heading ws-s">
            <h1> Find your Service.</h1>
            <span class="subheading">So easy and convenient to get started.</span>
        </header>
        <div class="row">
            <div id="pfolio">

                <!-- Hover Side Panel -->
                <div class="col-md-4 portfolio-item hover-side">
                    <figure>
                        <img src="{{url('images/charts.jpeg')}}" alt="TOR">
                        <figcaption>
                            <h5 class="hover-heading">Post TOR</h5>
                            <p class="hover-text">You tell us who you are looking for and we will alert the potential candidates.</p>
                            <a href="{{route('tor.create')}}" class="hover-more-btn"><span class="linea-arrows-slim-right"></span></a>
                        </figcaption>
                    </figure>
                </div><!-- / .portfolio-item -->


                <!-- Hover Side Panel -->
                <div class="col-md-4 portfolio-item hover-side">
                    <figure>
                        <img src="{{url('images/man.jpg')}}" alt="Consultant Profile">
                        <figcaption>
                            <h5 class="hover-heading">Consultant Profile</h5>
                            <p class="hover-text">By registering you have the privilledge to view consultancies currently available.</p>
                            <a href="{{route('consultants.create')}}" class="hover-more-btn"><span class="linea-arrows-slim-right"></span></a>

                        </figcaption>
                    </figure>
                </div><!-- / .portfolio-item -->


                <!-- Hover Side Panel -->
                <div class="col-md-4 portfolio-item hover-side">
                    <figure>
                        <img src="{{url('images/pexels-photo-246658.jpeg')}}" alt="View Consultancies">
                        <figcaption>
                            <h5 class="hover-heading">View Consultancies</h5>
                            <p class="hover-text">Here you can view available consultancies from our clients.</p>
                            <a href="" class="hover-more-btn"><span class="linea-arrows-slim-right"></span></a>

                        </figcaption>
                    </figure>
                </div><!-- / .portfolio-item -->

            </div><!-- / #pfolio -->
        </div><!-- / .row -->
    </section>
        <!-- ========== About - Section ========== -->

        <section id="about" class="container">
          <div class="row section">
            
            <header class="sec-heading">
              <h2>More about ConsultHub</h2>
              <span class="subheading">Here is what you get?</span>
            </header>

            <div class="col-md-offset-1 col-md-5">
            <p> Our Consult Hub is an innovative platform aimed to provide opportunities for individual consultants and
                consulting entities (firms, universities, NGOs, etc.) for accessing wide range of technical assistance and
                consulting assignments. We leverage our industry expertise and personal service to find you projects that fit
                your background, skills and interest. Our goal is to make the process of consultancy easier for Consultants
                and for the Organizations in need of their expertise. <br/>
                </p>
            </div>
            <div class="col-md-5">
              <p> For some consultants, our service also covers the administrative issues associated with consultancy projects, including coordination, negotiation of contract
                  terms and conditions, invoicing, debt collection.As an online system, Consult Hub allows consultants to create and update their profile, search opportunities,
                  and their consultants' performance evaluation reports. Consultants also use the Consult Hub to register in
                  our consultant database from which that they can be called join expressions of interest (EOIs),
                  or non-committal inquiries (NCIs), prepare and submitted by our partner firms.</p>
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

