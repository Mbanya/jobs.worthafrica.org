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
              <h1 class="col-sm-6">Login Page</h1>
              <ol class="col-sm-6 text-right breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">login</li>
              </ol>
            </div>
          </div>
        </header>

@endsection

@section('content')
        <!-- ========== Login From ========== -->

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
                            Login to your account
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">

                          <div class="form-login">


                              <form id="login-form" role="form" action="{{route('login')}}" method="POST">
                                  @if(session('error'))
                                      <div class="alert alert-danger" >
                                          {{session('error')}}
                                      </div>
                                  @endif
                                  @if(session('success'))
                                      <div class=" alert alert-success">
                                          {{session('success')}}
                                      </div>
                                  @endif
                                  @if(session('message'))
                                      <div class="alert alert-success">
                                          {{ session('message') }}
                                      </div>
                                  @endif
                                      {{csrf_field()}}
                                  <!-- email -->
                              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email"  name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email" required autofocus>
                                <label for="username-login-1">Email</label>
                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  @endif
                              </div>
                              <!-- Password -->
                              <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                                <input type="password" name="password"  class="form-control" placeholder="Enter your password" required autofocus>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  @endif
                                  <label for="pass-login-1">Password</label>

                              </div>
                                  <span><a href="{{route('forgot-password')}}" class="forget-pass-link">Forget password?</a> </span>
                                  <div class="form-group">
                                          <div>
                                              <label class="checkbox-inline">
                                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                              </label>
                                          </div>

                                  </div>
                              <!-- Submit -->
                              <input type="submit" value="Login" class="btn">
                            </form>
                          </div><!-- / .form-wrapper -->

                        </div><!-- / .panel-body -->
                      </div><!-- / .panel-collapse -->
                    </div><!-- / .panel -->

                      <!-- Register-->
                      <div class="panel bottom-panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                  <a class="collapsed" role="button"  href="{{route('register')}}" >
                                      Register account
                                  </a>
                              </h4>
                          </div>

        </div><!-- / .bg-login -->


                  </div><!-- / .col-md-6 -->
                </div><!-- / .row -->
              </div><!-- / .container -->

            </div><!-- / .bg-overlay -->


    <!-- ========== Footer Contact ========== -->

    <footer class="footer-contact">
        <div class="container-fluid">
            <div class="row">

                <!-- Map and address -->
                <div class="col-lg-6 no-gap contact-info">

                    <!-- Show Info Button -->
                    <a href="#" class="show-info-link"><i class="fa fa-info"></i>Show info</a>

                    <div id="map-canvas" class="footer-map"></div>

                    <address class="contact-info-wrapper">
                        <ul>
                            <!-- Address -->
                            <li class="contact-group">
                                <span class="adr-heading">Address</span>
                                <span class="adr-info">100 Street, Il, US</span>
                            </li>
                            <!-- Email -->
                            <li class="contact-group">
                                <span class="adr-heading">Email</span>
                                <span class="adr-info">sayhello@email.com</span>
                            </li>
                        </ul>
                        <ul>
                            <!-- Phone -->
                            <li class="contact-group">
                                <span class="adr-heading">Phone</span>
                                <span class="adr-info">+ 123 4567 890</span>
                            </li>
                            <!-- Mobile -->
                            <li class="contact-group">
                                <span class="adr-heading">Mobile</span>
                                <span class="adr-info">+ 123 4567 890</span>
                            </li>
                        </ul>

                        <a href="#" class="show-map"><span class="linea-basic-geolocalize-05"></span>show on map</a>
                    </address>

                </div><!-- / .col-lg-6 -->


                <!-- Contact Form -->
                <div class="col-lg-6 no-gap section contact-form">
                    <header class="sec-heading">
                        <h2>Contact</h2>
                        <span class="subheading">Lorem ipsum dolor sit amet</span>
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
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Behance</a></li>
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
