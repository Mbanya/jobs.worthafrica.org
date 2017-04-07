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
                <h1 class="col-sm-6">Register Page</h1>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
    </header>

@endsection


@section('content')

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
                                    <span class="adr-info">+254 732 548 039
                                </li>
                                <!-- Mobile -->
                                <li class="contact-group">
                                    <span class="adr-heading">ALternate</span>
                                    <span class="adr-info">+ 254 723 754 861</span>
                                </li>
                            </ul>

                        </address>

                    </div><!-- / .col-lg-6 -->


                    <!-- Contact Form -->
                    <div class="col-lg-6 no-gap section contact-form">
                        <header class="sec-heading">
                            <h2>Contact</h2>
                            <span class="subheading">Get in Touch</span>
                        </header>

                        <form action=""method="POST" class="form-ajax wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">

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
                            <small>&copy; 2017 Worthjobs. Made by <a class="no-style-link" href="http://worthafrica.org" target="_blank">WorthAfrica</a></small>
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
