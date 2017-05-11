@extends('layouts.layout')
<title>About Us</title>
@section('assets')
  <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
  @endsection
@section('navigation')
@endsection

@section('cover')
<!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-dark pt-plax-lg-dark">
          <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>About Us</h1>
                  <span class="subheading">Few words about us</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="{{url('index')}}">Home</a></li>
                  <li class="active">About</li>
                </ol>
              </div>

            </div>
        </header>
@endsection


@section('content')

        <!-- ========== About - Section ========== -->

        <section id="about" class="container">
          <div class="row section">
            
            <header class="sec-heading">
              <img src="{{ url('images/logo-large-dark.png')}}" alt="WorthJobs">
              <h2 class="hidden">About Us</h2>
            </header>

            <div class="col-md-4">
              <h3>Our Vision</h3>
              <p>We believe that sustainable software solutions that can work with any available technology; are a game
                changer for developing countries and development organizations. <br>
                Our work provides tangible and positive health outcomes that improve the quality of life for people across
                the globe. Our solutions make use of whatever technology is available, without requiring extensive and expensive
                upgrades in order to function.<br>
              </p>
            </div>
            <div class="col-md-4">
              <h3>Our Company</h3>
              <p>WORTHJOBS is a premier service of WORTHAFRICA and our mission is to match great people
                with great jobs. We use the world's most advanced technology to build bespoke solutions to help
                you find the best. We always create a productive and fruitful relationship with our clients by
                adding value to your business to ensure that you get the best return on your investment.</p>
            </div>
            <div class="col-md-4">
              <h3>Our Team</h3>
              <p> Our team brings extensive experience and a track record of accomplishments.
                We always aim to bring the highest levels of certainty and satisfaction through a deep-set
                commitment to our clients, and comprehensive industry expertise. Our HR solutions, advice
                and guidance are uniquely designed and shaped around your exact requirements and objectives.</p>
            </div>
          </div><!-- / .row -->
        </section><!-- / .container -->



        <!-- ========== Cricle Counters ========== -->
        <header class="sec-heading">
          <h2>Our SKills</h2>
        </header>
        <div id="skillsCircles" class="circles-counters">

          <div class="container">

            <div id="counters" class="row count-wrapper">
              
              <!-- Item 1 -->
              <div class="col-sm-6 col-lg-3 circle-item">
                <div class="chart" data-percent="75"><span class="circle-icon et-edit"></span></div>
                <span class="circle-text">Job Placement</span>
              </div>

              <!-- Item 2 -->
              <div class="col-sm-6 col-lg-3 circle-item">
                <div class="chart" data-percent="75"><span class="circle-icon fa fa-users"></span></div>
                <span class="circle-text">External Recruiting</span>
              </div>

              <!-- Item 3 -->
              <div class="col-sm-6 col-lg-3 circle-item">
                <div class="chart" data-percent="75"><span class="circle-icon linea-arrows-expand"></span></div>
                <span class="circle-text">Capacity Building</span>
              </div>

              <!-- Item 4 -->
              <div class="col-sm-6 col-lg-3 circle-item">
                <div class="chart" data-percent="75"><span class="circle-icon et-search"></span></div>
                <span class="circle-text">Background Checks</span>
              </div>

            </div><!-- / .row -->
          </div><!-- / .container -->
        </div><!-- / .circle-counters -->



        <!-- ========== Features ========== -->

        <div class="gray-bg">
          <section class="container section ft-boxed-hover">
            <div class="row">

              <header class="sec-heading">
                <h2>Why chose us</h2>
                <span class="subheading">We provide high quality services</span>
              </header>

              <div class="col-md-12 ">

                <ul>
                  <!-- Item 1 -->
                  <li>
                    <span class="fa fa-money ft-icon"></span>
                    <h5>GOOD VALUE FOR MONEY</h5>

                    <div class="hover-content">
                      <span class="fa fa-money ft-icon"></span>
                      <span class="ft-heading">VALUE FOR MONEY</span>
                      <p>
                          We guarantee value for money for all our services and products that guaranteed is our core policy in al we do everyday
                      </p>
                    </div><!-- / .hover-content -->
                  </li>

                  <!-- Item 2 -->
                  <li>
                    <span class="linea-basic-headset ft-icon"></span>
                    <h5>DEDICATED SUPPORT</h5>

                    <div class="hover-content">
                      <span class="linea-basic-headset ft-icon"></span>
                      <span class="ft-heading">SUPPORT</span>
                      <p>
                          Our teams and systems are on call 24/7 for our clients to get support and enjoy our services at any time at their convenience.
                      </p>
                    </div><!-- / .hover-content -->
                  </li>

                  <!-- Item 3 -->
                  <li>
                    <span class="fa fa-cogs ft-icon ft-icon"></span>
                    <h5>QUALITY <br>SERVICES</h5>


                    <div class="hover-content">
                      <span class="fa fa-cogs ft-icon"></span>
                      <span class="ft-heading">SERVICES</span>
                      <p>
                          We commit to never to compromise on quality on our products and services. Our business process are all tied to delivering quality and value.
                      </p>

                    </div><!-- / .hover-content -->
                  </li>

                  <!-- Item 4 -->
                  <li>
                    <span class="linea-basic-message-multiple ft-icon"></span>
                    <h5>RELIABLE CLIENT RELATIONS</h5>


                    <div class="hover-content">
                      <span class="linea-basic-message-multiple ft-icon"></span>
                      <span class="ft-heading">Relations</span>
                      <p>
                          We form solid partnership with our clients because we believe we are only successful when our customers are successful.
                      </p>

                    </div><!-- / .hover-content -->
                  </li>

                </ul>

              </div>

            </div><!-- / .row -->
          </section><!-- / .cotnainer -->
        </div><!-- / .gray-bg -->


        <!-- ========== Number Counters ========== -->

        <div class="number-counters">
            <div class="container">
                <div id="counters" class="row count-wrapper">

                    <!-- Item 1 -->
                    <div class="col-md-3 mb-sm-100 count-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <span id="count-1" class="count-nbr">467</span>
                        <span class="count-text">Projects completed</span>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-3 mb-sm-100 count-item wow fadeIn" data-wow-duration="1s">
                        <span id="count-1" class="count-nbr">12</span>
                        <span class="count-text">Organisations Worked With</span>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-3 mb-sm-100 count-item wow fadeIn" data-wow-duration="1s">
                        <span id="count-3" class="count-nbr">46,930</span>
                        <span class="count-text">Applications Reviewed</span>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-3 count-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <span id="count-4" class="count-nbr">25</span>
                        <span class="count-text">Happy clients</span>
                    </div>

                </div><!-- / .row -->
            </div><!-- / .container -->
        </div><!-- / .number-counters -->




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
            <p class="fs-12 hint-text p-t-10 text-white">Copyright &copy; 2017. All Rights Reserved </p>
          </div>
        </section>
@endsection


@section('scripts')
@endsection