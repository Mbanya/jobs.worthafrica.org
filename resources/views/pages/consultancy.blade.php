@extends("layouts.layout")
@section('assets')
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
                
                <h1 class="cd-headline slide hero-lead wow fadeIn" data-wow-duration="6s">
                  <span class="cd-words-wrapper">
                    <b class="is-visible">Consult Hub</b>
                    <b>Post TOR</b>
                    <b>Post Profile</b>
                    <b>Consultancies</b>
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

        <!-- ========== About - Section ========== -->

        <section id="about" class="container">
          <div class="row section">
            
            <header class="sec-heading">
              <h2>Consult Hub</h2>
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
          <div class="row ws-sm">
            <div class="col-md-12 text-center">
              <a href="{{url('about')}}" class="btn">More about us</a>
            </div>
          </div>
        </section><!-- / .container -->




        <!-- ========== Featured Projects ========== -->
        <section class="container-fluid portfolio-layout portfolio-columns-fw">
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
                        <img src="{{url('images/landing-ft-1.jpg')}}" alt="View COnsultancies">
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
        <!-- ========== Footer Contact ========== -->
        
        <footer id="contact" class="footer-contact">
          <div class="container-fluid">
            <div class="row">

              <!-- Map and address -->
              <div class="col-lg-6 no-gap contact-info">

                <!-- Show Info Button -->

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
@endsection

