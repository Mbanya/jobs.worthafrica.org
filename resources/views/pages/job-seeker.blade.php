@extends("layouts.layout")
@section('assets')
    <link rel="stylesheet" type="text/css" href="{{elixir('css/feeder/style.css')}}" />
@endsection
@section('navigation')
@endsection


@section('cover')
    <!-- ========== Hero Cover ========== -->

    <div id="home" class="animated-hero">
        <div class="bg-overlay">

            <!-- Hero Content -->
            <div class="hero-content-wrapper">
                <div class="hero-content">
                    <h1 style="font-size: 55px;" class="cd-headline slide hero-lead wow fadeIn" data-wow-duration="4s">
                  <span class="cd-words-wrapper">
                    <b class="is-visible">Job Seekers</b>
                    <b>Post Profile </b>
                    <b>Mock Interviews</b>
                  </span>
                    </h1>
                    <div class="heading-block align-center centered-block">
                        <div class="signup-wrapper align-center">
                            <div class="row">
                                <form class="form form-inline form-register form-register-small"  role="form" method="post" action="">

                                    <div class="form-group">
                                        <label for="select-form" style="color: white;">Service Type</label>
                                        <select class="form-control" id="select-form">
                                            <option>Choose one</option>
                                            <option>Flex-talent</option>
                                            <option>Permanent Job</option>
                                            <option>Mock inteview (For Students)</option>
                                            <option>Mock interview (For Professionals)</option>


                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="select-form" style="color: white">Location</label>
                                        <input size="25" type="text" class="form-control " name="Location"  placeholder="Enter Location of the Job">

                                    </div>

                                    <div class="form-group">
                                        <label for="select-form" style="color: white">Industry</label>
                                        <select class="form-control" id="select-form">
                                            <option>Choose one</option>
                                            <option>Internship</option>
                                            <option>Part-Time</option>
                                            <option>Full-Time</option>
                                            <option>Consultancy</option>

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
                <h2> Our Work Process</h2>
                <span class="subheading">Lorem ipsum dolor sit amet, consectetur</span>
            </header>

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">01</span>
                <h4>SUBSCRIBE  <br>
                    FOR FREE</h4>
                <p>Sign up today at a small fee to receive alerts<br/> about new jobs that meet your criteria.</p>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">02</span>
                <h4>CHOOSE THE JOB<br>
                    TYPE YOU WANT</h4>
                <p>Explore different job opportunities we <br/>offer–Flexible jobs or Permanent Jobs</p>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6 mb-sm-100 ft-item">
                <span class="ft-nbr">03</span>
                <h4>CREATE YOUR<br>
                    CV/PROFILE</h4>
                <p>Tell us your job skills and leave the rest for us <br/> to connect you to great employers 24/7</p>
            </div>

        </div><!-- / .row -->
    </section><!-- / .container -->








    <!-- ========== Featured Projects ========== -->

    <div class="bg-container-fluid ft-hover-item">
        <div class="row">

            <!-- Item 1 -->
            <div class="ft-item ft-1 col-sm-4">
                <div class="bg-overlay">

                    <div class="content-wrapper">
                        <h3>Post TOR</h3>
                        <p>You tell us who you are looking for and we will alert the potential candidates</p>
                        <a href="{{url('tor')}}" class="btn-ghost btn-ghost-light ft-button">Post TOR</a>
                    </div>

                </div><!-- / .bg-overlay -->
            </div><!-- / .ft-item -->

            <!-- Item 2 -->
            <div class="ft-item ft-2 col-sm-4">
                <div class="bg-overlay">

                    <div class="content-wrapper">
                        <h3>Consultant Profile</h3>
                        <p> By registering with us you have the privilledge to view any consultancies currently available</p>
                        <a href="{{url('consultant')}}" class="btn-ghost btn-ghost-light ft-button">Post Profile</a>
                    </div>

                </div><!-- / .bg-overlay -->
            </div><!-- / .ft-item -->
            <div class="ft-item ft-3 col-sm-4">
                <div class="bg-overlay">

                    <div class="content-wrapper">
                        <h3>View Consultancy</h3>
                        <p>Here you can view available consultancies from our clients</p>
                        <a href="{{url('consultancy_view')}}" class="btn-ghost btn-ghost-light ft-button">View Consultancies</a>
                    </div>

                </div><!-- / .bg-overlay -->
            </div><!-- / .ft-item -->

        </div><!-- / .row -->
    </div><!-- / .container-fluid -->

    <!-- ========== Footer Contact ========== -->

    <footer id="contact" class="footer-contact">
        <div class="container-fluid">
            <div class="row">

                <!-- Map and address -->
                <div class="col-lg-6 no-gap contact-info">

                    <!-- Show Info Button -->
                    <a href="#" class="show-info-link"><i class="fa fa-info"></i>Show info</a>

                    <div id="map-canvas" class="footer-map"></div>

                    <address>
                        <ul>
                            <!-- Address -->
                            <li>
                                <span class="linea-basic-map adr-icon"></span>
                                <div class="adr-group">
                                    <span class="adr-heading">Address</span>
                                    <span class="adr-info">Greenhouse Ngong Rd, <br>3rd Floor West Wing, Suite 2</span>
                                </div>
                            </li>

                            <!-- Email -->
                            <li>
                                <span class="linea-basic-paperplane adr-icon"></span>
                                <div class="adr-group">
                                    <span class="adr-heading">Email</span>
                                    <span class="adr-info">info@worthafrica.org</span>
                                </div>
                            </li>

                            <!-- Phone -->
                            <li>
                                <span class="linea-basic-smartphone adr-icon"></span>
                                <div class="adr-group">
                                    <span class="adr-heading">Phone</span>
                                    <span class="adr-info">+254 732 548 039
</span>
                                </div>
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


        <!-- Social Links -->
        <div class="dark-bg">
            <div class="container footer-social-links">
                <div class="row">

                    <ul>
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>

                </div>
            </div><!-- / .container -->
        </div><!-- / .dark-bg -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <small>&copy; 2017 Copyright by <a class="no-style-link" href="http://worthafrica.org" target="_blank">Worth Africa</a></small>
                    </div>

                    <div class="col-md-6">
                        <small><a href="#page-top" class="pull-right to-the-top">To the top<i class="fa fa-angle-up"></i></a></small>
                    </div>

                </div><!-- / .row -->
            </div><!-- / .container -->
        </div><!-- / .copyright -->
    </footer><!-- / .footer-contact -->
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
@endsection

