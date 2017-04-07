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
                    <h1>Pricing </h1>
                    <span class="subheading">Pricing Chart </span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="{{url('index')}}">Home</a></li>
                    <li class="active">Pricing</li>
                </ol>
            </div>
        </div>
        </header>
@endsection


@section('content')
    <section id="about" class="container">
        <div class="row section">
            <div>
                <header class="sec-heading">
                    <h1>Pricing Chart</h1>
                </header>
                <img src="{{url('images/pricing.jpg')}}" class="md-image-responsive-width" alt="Pricing Chart" style="width: 77%;height: auto; padding-left: 70px;">

            </div>
        </div>
    </section>

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
                        <span class="subheading">We would love to hear from you</span>
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
