@extends('layouts.layout')

@section('assets')
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
<title>Registration | Job Seeker</title>
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
                                                {{--@foreach($errors->all() as $error)--}}
                                                    {{--<li class="text-danger">{{ $error }}</li>--}}
                                                {{--@endforeach--}}
                                            {{--@foreach($errors as $error)--}}
                                            {{--<div class="alert alert-danger">--}}
                                            {{--{{$error}}--}}
                                            {{--</div>--}}
                                            {{--@endforeach--}}
                                            <!-- First Name -->
                                                <div class="form-group col-md-6 no-gap-left {{$errors->has('first_name') ? 'has-error' : ''}}">
                                                    <input type="text"  class="form-control" value="{{old('first_name')}}" name="first_name" placeholder="First Name" required autofocus>
                                                    <label for="name-login-1">First Name</label>
                                                    <span class="text-danger">{{$errors->first('first_name')}}</span>
                                                </div>
                                                <!-- Last name -->
                                                <div class="form-group col-md-6 no-gap-right {{$errors->has('last_name') ? 'has-error' : ''}}">
                                                    <input type="text" name="last_name" value="{{old('last_name')}}"  class="form-control" placeholder="Last Name" required autofocus>
                                                    <label for="last-name-signup-1">Last Name</label>
                                                    <span class="text-danger">{{$errors->first('last_name')}}</span>
                                                </div>
                                                <!-- Email -->
                                                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                                    <input type="email"  name="email" value="{{old('email')}}" class="form-control" placeholder="Enter your email" required autofocus>
                                                    <label for="email-signup-1">Email</label>
                                                    <span class="text-danger">{{$errors->first('email')}}</span>

                                                </div>
                                                <!-- phone -->
                                                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                                    <input type="tel"  class="form-control" value="{{old('phone_number')}}" name="phone_number" placeholder="Enter your phone number" required autofocus>
                                                    <label for="phone-signup-1">Phone</label>
                                                    <span class="text-danger">{{$errors->first('phone_number')}}</span>

                                                </div>
                                                <!-- Password -->
                                                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                                    <input type="password" name="password"  class="form-control" placeholder="Enter a password" required autofocus>
                                                    <label for="pass-signup-1">Password</label>
                                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                                </div>
                                                <!-- Password -->
                                                <div class="form-group {{$errors->has('password') ? 'has-error': ''}}">
                                                    <input type="password" name="password_confirmation"  class="form-control" placeholder="Enter a password" required autofocus>
                                                    <label for="pass-signup-1">Confirm Password</label>
                                                    <span class="text-danger">{{$errors->first('password')}}</span>
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