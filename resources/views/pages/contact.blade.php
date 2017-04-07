@extends('layouts.layout')

@section('assets')

@show
@section('navigation')

@show
@section('cover')
        <!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light" data-stellar-background-ratio="0.4">
          <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>Contact</h1>
                  <span class="subheading">Love to hear from you</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li class="active">Contact</li>
                </ol>

              </div>
            </div>
        </header>
@endsection

        @section('content')
        <!-- ========== Contact ========== -->

        <section id="contact" class="contact-3">
          <div class="container">
            <div class="row">
              
              <div class="col-md-12 col-lg-offset-2 col-lg-8">
                <div class="form-wrapper">
                  <div class="from-header">
                    <h2>Get in touch</h2>
                    <p>Have a project you would like us to consider or just want to say hello? We would love to hear from you. Use the form below to describe your project and contact us. We promise to get in touch with you shortly.</p>
                  </div>

                  <form action="" method="POST" class="form-minimal form-ajax">

                    <!-- Name -->
                    <div class="form-group">
                      <input type="text" name="name" id="name-contact-3" class="form-control validate-locally">
                      <label for="name-contact-3">Name *</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                      <input type="email" name="email" id="email-contact-3" class="form-control validate-locally">
                      <label for="email-contact-3">Email *</label>
                      <span class="pull-right alert-error"></span>
                    </div>

                    <!-- Phone -->
                    <div class="form-group ws-s">
                      <input type="tel" name="phone" id="phone-contact-3" class="form-control">
                      <label for="email-contact-3">Phone</label>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                      <p>Just say hello, or tell me about your project</p>
                      <textarea class="form-control" name="message" id="message-contact-1" rows="5"></textarea>
                      <label for="message-contact-1">Message *</label>
                    </div>

                    <input type="submit" class="btn-text" value="Send Message">

                    <!-- Ajax Message -->
                    <div class="ajax-message"></div>

                  </form>
                </div>
              </div>

            </div>
          </div><!-- / .container -->
        </section><!-- / .contact-3 -->

        <!-- ========== Footer Litle ========== -->
        <footer class="footer-litle">
          <div class="gray-bg">

            <!-- Contact Info -->
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
          </div><!-- / .gray-bg -->


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
                  <small>&copy; 2017 Copyright by <a class="no-style-link" href="http://worthafrica.org" target="_blank">WorthAfrica</a></small>
                </div>

                <div class="col-md-6">
                  <small><a href="#page-top" class="pull-right to-the-top">To the top<i class="fa fa-angle-up"></i></a></small>
                </div>

              </div><!-- / .row -->
            </div><!-- / .container -->
          </div><!-- / .copyright -->
        </footer><!-- / .footer-litle -->
@endsection

@section('scripts')
@stop