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

    <div class="login-1">
        <div class="bg-overlay">

            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">

                        <!-- Log in -->
                        <div class="panel-group" id="login-accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel top-panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#login-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Register your account
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                    <div class="form-register">
                <form action="{{ route('register') }}" role="form" method="POST">
                {{ csrf_field() }}
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                @endif
                <!-- First Name -->
                    <div class="form-group col-md-6 no-gap-left {{ $errors->has('first_name') ? 'has-error' :'' }}">
                        <input type="text"  class="form-control" name="first_name" placeholder="First Name" required autofocus>
                        <label for="name-login-1">First Name</label>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <!-- Last name -->
                    <div class="form-group col-md-6 no-gap-right {{ $errors->has('lastname') ? 'has-error' :'' }}">
                        <input type="text" name="last_name"  class="form-control" placeholder="Last Name" required autofocus>
                        <label for="last-name-signup-1">Last Name</label>
                        @if($errors->has('last_name'))
                            <span class="help-block">
                                          <strong>{{ $errors->first('last_name') }}</strong>
                                      </span>
                        @endif
                    </div>
                    <!-- Email -->
                    <div class="form-group {{$errors->has('email') ? 'has-error': ''}}">
                        <input type="email"  name="email" class="form-control" placeholder="Enter your email" required autofocus>
                        <label for="email-signup-1">Email</label>
                        @if($errors->has('email'))
                            <span class="help-block">
                                          <strong>{{$errors->first('email')}}</strong>
                                      </span>
                        @endif
                    </div>
                    <!-- phone -->
                    <div class="form-group {{$errors->has('phone') ? 'has-error': ''}}">
                        <input type="tel"  class="form-control" name="phone_number" placeholder="Enter your phone number" required autofocus>
                        <label for="phone-signup-1">Phone</label>
                        @if($errors->has('phone'))
                            <span class="help-block">
                                          <strong>{{$errors->first('phone')}}</strong>
                                      </span>
                        @endif
                    </div>
                    <!-- Password -->
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password"  class="form-control" placeholder="Enter a password" required autofocus>
                        <label for="pass-signup-1">Password</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <!-- Password -->
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="confirm_password"  class="form-control" placeholder="Enter a password" required autofocus>
                        <label for="pass-signup-1">Password</label>
                        @if ($errors->has('confirm_password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <!-- Submit -->
                    <input type="submit" value="Register" class="btn">
                </form>
            </div><!-- / .form-wrapper -->

    </div><!-- / #register-login-page-2 .panel-colapse -->
                                <div class="panel bottom-panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button"   href="{{route('login')}}" >
                                                Login account
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div> <!--collapse-->
                        </div> <!-- panel -->
                    </div> <!--col-offset -->

                </div> <!--row -->
            </div> <!-- container -->
        </div> <!-- big-overlay -->
    </div> <!--login-1 -->
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