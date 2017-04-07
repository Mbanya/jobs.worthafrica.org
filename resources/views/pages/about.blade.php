@extends('layouts.layout')

@section('assets')
  @endsection
@section('navigation')
@endsection

@section('cover')
<!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.4">
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
              <img src="{{ url('images/logo-large-dark.png')}}" alt="WorthJObs">
              <h2 class="hidden">About Studio</h2>
              <span class="subheading hidden">Lorem ipsum dolor sit amet, consectetur</span>
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
                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-gear"></span></div>
                <span class="circle-text">Payroll</span>
              </div>

              <!-- Item 2 -->
              <div class="col-sm-6 col-lg-3 circle-item">
                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-display"></span></div>
                <span class="circle-text">External Recruiting</span>
              </div>

              <!-- Item 3 -->
              <div class="col-sm-6 col-lg-3 circle-item">
                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-photo"></span></div>
                <span class="circle-text">Legal Compliance</span>
              </div>

              <!-- Item 4 -->
              <div class="col-sm-6 col-lg-3 circle-item">
                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-star"></span></div>
                <span class="circle-text">Background Checks</span>
              </div>

            </div><!-- / .row -->
          </div><!-- / .container -->
        </div><!-- / .circle-counters -->



        <!-- ========== Team ========== -->

        <div class="gray-bg">
          <section class="container section team-4col">
            <div class="row">
              
              <header class="sec-heading">
                <h2>Meet the team</h2>
                <span class="subheading">We are dedicated professionals</span>
              </header>

              <!-- Member 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="t-item">

                  <!-- Image -->
                  <div class="t-image">
                    <img src="{{url('images/team-1.jpg')}}" alt="Team Member" class="img-responsive">
                    <div class="t-description">
                      <div class="content-wrapper">
                        <h4 class="h-alt">Hello!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Info -->
                  <div class="t-info">
                    <h4 class="t-name">Kelvin Storey</h4>
                    <span class="t-role">CEO &amp; Founder Partner</span>
                    <ul class="social-links">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                  </div>

                </div><!-- / .t-item -->
              </div><!-- / .col-lg-3 -->


              <!-- Member 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="t-item">

                  <!-- Image -->
                  <div class="t-image">
                    <img src="{{ url('images/team-2.jpg')}}" alt="Team Member" class="img-responsive">
                    <div class="t-description">
                      <div class="content-wrapper">
                        <h4 class="h-alt">Hello!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Info -->
                  <div class="t-info">
                    <h4 class="t-name">William Mbanya</h4>
                    <span class="t-role">Developer</span>
                    <ul class="social-links">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                  </div>

                </div><!-- / .t-item -->
              </div><!-- / .col-lg-3 -->


              <!-- Member 3 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="t-item">

                  <!-- Image -->
                  <div class="t-image">
                    <img src="{{url('images/team-3.jpg')}}" alt="Team Member" class="img-responsive">
                    <div class="t-description">
                      <div class="content-wrapper">
                        <h4 class="h-alt">Hello!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                      </div>
                    </div>
                  </div>

                  <!-- Info -->
                  <div class="t-info">
                    <h4 class="t-name">John Doe</h4>
                    <span class="t-role">Lead Designer</span>
                    <ul class="social-links">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                  </div>

                </div><!-- / .t-item -->
              </div><!-- / .col-lg-3 -->


            </div><!-- / .row -->
          </section><!-- / .contianer -->
        </div><!-- / .gray-bg -->



        <!-- ========== Number Counters ========== -->

        <div class="number-counters">
          <div class="container">
            <div id="counters" class="row count-wrapper">
              
              <!-- Item 1 -->
              <div class="col-md-3 mb-sm-100 count-item">
                <span id="count-1" class="count-nbr">467</span>
                <span class="count-text">Projects completed</span>
              </div>

              <!-- Item 2 -->
              <div class="col-md-3 mb-sm-100 count-item">
                <span id="count-2" class="count-nbr">12</span>
                <span class="count-text">Organisations Worked with</span>
              </div>

              <!-- Item 3 -->
              <div class="col-md-3 mb-sm-100 count-item">
                <span id="count-3" class="count-nbr">46,930</span>
                <span class="count-text">Applications  Reviewd</span>
              </div>

              <!-- Item 4 -->
              <div class="col-md-3 count-item">
                <span id="count-4" class="count-nbr">25</span>
                <span class="count-text">Happy clients</span>
              </div>

            </div><!-- / .row -->
          </div><!-- / .container -->
        </div><!-- / .number-counters -->



        <!-- ========== Features ========== -->

        <div class="gray-bg">
          <section class="container section ft-boxed-hover">
            <div class="row">

              <header class="sec-heading">
                <h2>Why chose us</h2>
                <span class="subheading">We provide high quality services</span>
              </header>

              <div class="col-md-12 no-gap">
                
                <ul>
                  <!-- Item 1 -->
                  <li>
                    <span class="linea-basic-headset ft-icon"></span>
                    <h5>Dedicated Support</h5>
                    <h6 class="h-alt">Lorem Ipsum Dolor</h6>

                    <div class="hover-content">
                      <span class="linea-basic-headset ft-icon"></span>
                      <span class="ft-heading">Support</span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                      </p>
                      <a href="#">Learn more</a>
                    </div><!-- / .hover-content -->
                  </li>

                  <!-- Item 2 -->
                  <li>
                    <span class="linea-basic-gear ft-icon"></span>
                    <h5>Adjustments</h5>
                    <h6 class="h-alt">Lorem Ipsum Dolor</h6>

                    <div class="hover-content">
                      <span class="linea-basic-gear ft-icon"></span>
                      <span class="ft-heading">Adjustments</span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                      </p>
                      <a href="#" class="link-btn">Learn More</a>
                    </div><!-- / .hover-content -->
                  </li>

                  <!-- Item 3 -->
                  <li>
                    <span class="linea-basic-joypad ft-icon"></span>
                    <h5>Gaming</h5>
                    <h6 class="h-alt">Lorem Ipsum Dolor</h6>

                    <div class="hover-content">
                      <span class="linea-basic-joypad ft-icon"></span>
                      <span class="ft-heading">Gaming</span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                      </p>
                      <a href="#" class="link-btn">Learn More</a>
                    </div><!-- / .hover-content -->
                  </li>

                  <!-- Item 4 -->
                  <li>
                    <span class="linea-basic-message-multiple ft-icon"></span>
                    <h5>Chat</h5>
                    <h6 class="h-alt">Lorem Ipsum Dolor</h6>

                    <div class="hover-content">
                      <span class="linea-basic-message-multiple ft-icon"></span>
                      <span class="ft-heading">Chat</span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                      </p>
                      <a href="#" class="link-btn">Learn More</a>
                    </div><!-- / .hover-content -->
                  </li>

                </ul>

              </div>

            </div><!-- / .row -->
          </section><!-- / .cotnainer -->
        </div><!-- / .gray-bg -->
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
                  <span class="subheading">Get in touch</span>
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

@endsection


@section('scripts')
@endsection