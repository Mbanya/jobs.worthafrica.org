@extends('layouts.layout')
@section('assets')
    <title>Registration|Employers</title>
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
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
                    <div class="col-md-offset-2 col-md-8">

                        <!-- Log in -->
                        <div class="panel-group" id="login-accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel top-panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#login-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Register your Organisation
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="form-register">
                                            <form action="{{ route('organisation_register') }}" role="form" method="POST">
                                                {{ csrf_field() }}
                                                @if(session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                            @endif
                                            <!-- Organisation  Name -->
                                                <div class="row">
                                                    <div class="form-group col-md-6 no-gap-right">
                                                        <input type="text"  class="form-control" name="organisation_name" placeholder=" Organisation Name" required autofocus>
                                                        <label for="txt-forms">Organisation Name</label>

                                                    </div>
                                                    <!-- Last name -->
                                                    <div class="form-group col-md-6 no-gap-right" >
                                                        <select name="org_size" class="form-control" id="select-form">
                                                            <option selected disabled>Choose One</option>
                                                            <option value="1-15">1-15</option>
                                                            <option value="16-50">16-50</option>
                                                            <option value="51-200">51-200</option>
                                                            <option value="201-500">201-500</option>
                                                            <option value="501-above">501-above</option>
                                                        </select>
                                                        <label for="select-form">Organisation Size</label>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="form-group col-md-6 no-gap-right" >
                                                        <input type="text" name="contact_name"  class="form-control" placeholder="Contact  Name" required autofocus>
                                                        <label>Contact person Name</label>
                                                    </div>

                                                    <div class="form-group col-md-6 no-gap-right" >
                                                        <input type="text" name="physical_address"  class="form-control" placeholder="Physical Address " required autofocus>
                                                        <label>Physical address</label>
                                                    </div>
                                                </div>
                                                <!-- Email -->
                                                <div class="row">
                                                    <div class="form-group col-md-6 no-gap-right">
                                                        <input type="email"  name="email" class="form-control" placeholder="Enter contact email" required autofocus>
                                                        <label>Contact Email</label>
                                                    </div>
                                                    <!-- phone -->
                                                    <div class="form-group col-md-6 no-gap-right">
                                                        <input type="tel"  class="form-control" name="phone_number" placeholder="Enter phone number" required autofocus>
                                                        <label>Phone</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <!-- Password -->

                                                    <div class="form-group col-md-6 no-gap-right">
                                                        <input type="password" name="password"  class="form-control" placeholder="Enter a password" required autofocus>
                                                        <label>Password</label>

                                                    </div>
                                                    <!-- Password -->
                                                    <div class="form-group col-md-6 no-gap-right">
                                                        <input type="password" name="password_confirmation"  class="form-control" placeholder="Enter a password" required autofocus>
                                                        <label for="pass-signup-1">Confirm Password</label>
                                                    </div>
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