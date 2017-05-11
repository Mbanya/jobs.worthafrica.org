@extends('layouts.layout')
@section('assets')
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
<title>Login</title>
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
                <li><a href="{{route('index')}}">Home</a></li>
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
                                      @if(session('status'))
                                          <div class="alert alert-danger">
                                              {{ session('status') }}
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

          </div>
        </div>
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
