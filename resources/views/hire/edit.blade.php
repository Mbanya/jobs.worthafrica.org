@extends('layouts.organisation_layout')
@section('header')
    <title>Permanet Hire</title>
@endsection
@section('navigation')
@endsection

@section('cover')
    <!-- ========== Page Title ========== -->

    <header class="page-title pt-large pt-dark pt-plax-lg-dark">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Employer</h1>
                    <span class="subheading">Create Job Post</span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li class="active">Job Post</li>
                </ol>

            </div><!-- / .row -->
        </div>
    </header>

@endsection

@section('content')
    <!-- ========== Login From ========== -->

    <div class="login-2">
        <div class="bg-overlay">

            <div class="container">
                <div class="row ws-m">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="form-wrapper">
                            <div class="form-content">
                                <h3 class="form-header">Edit Your Permanent hire Post</h3>
                                @if(count($errors))
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <br/>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('message'))
                                    <div class="alert alert-success">
                                        {{session('message')}}
                                    </div>

                                @endif
                                <form action="/hire" role="form" method="POST">
                                {{method_field('PUT')}}
                                {{ csrf_field() }}
                                <!-- Organisation  Name -->
                                    <ol>
                                        <li><h3 class="t-description">Organisation Details</h3></li>
                                        <div class="row">
                                            <div class="form-group col-md-4 no-gap-right {{ $errors->has('organisation_name') ? 'has-error' : '' }}">
                                                <input type="text"  value="{{$hire->organisation_name}}"  class="form-control" name="organisation_name" placeholder=" Organisation Name" required autofocus>
                                                <span class="text-danger">{{ $errors->first('organisation_name') }}</span>
                                                <label for="txt-forms">Organisation Name</label>

                                            </div>
                                            <input type="hidden" name="user_id" value="{{Sentinel::getUser()->getUserId()}}">
                                            <!-- Organization Size -->
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('organisation_size') ? 'has-error' : '' }}" >
                                                <select name="organisation_size" class="form-control" id="select-form">
                                                    <option selected disabled>{{$hire->organisation_size}}</option>
                                                    <option value="1-15">1-15</option>
                                                    <option value="16-50">16-50</option>
                                                    <option value="51-200">51-200</option>
                                                    <option value="201-500">201-500</option>
                                                    <option value="501-above">501-above</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('organisation_size') }}</span>
                                                <label for="select-form">Organisation Size</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Organization type -->
                                            <div class="form-group col-md-4 no-gap-right{{ $errors->has('organisation_type') ? 'has-error' : '' }}" >
                                                <select name="organisation_type" class="form-control" id="select-form">
                                                    <option selected disabled>{{$hire->organisation_type}}</option>
                                                    <option value="Start-Up">Start-Up</option>
                                                    <option value="Agency">Agency</option>
                                                    <option value="SME">SME</option>
                                                    <option value="Large -Corporation">Large -Corporation</option>
                                                    <option value="Governmental Institution">Governmental Institution</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('organisation_type') }}</span>
                                                <label for="select-form">Organisation Type</label>
                                            </div>
                                            <!-- Location -->
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}" >
                                                <input type="text" name="Physical_Address"value="{{$hire->Physical_Address}}"  class="form-control" placeholder="Physical Address " required autofocus>
                                                <span class="text-danger">{{ $errors->first('Physical_Address') }}</span>
                                                <label>Physical Address</label>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <input type="email"  name="email" class="form-control" value="{{$hire->email}}" placeholder="Enter contact email" required autofocus>
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                <label>Contact Email</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Qualifications</h3> </li>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('key_qualification') ? 'has-error' : '' }}">
                                                <select name="key_qualification" class="form-control" id="select-form">
                                                    <option selected disabled>{{$hire->key_qualification}}</option>
                                                    <option value="Form 4 graduate">Form 4 Graduate</option>
                                                    <option value="Certificate Program">Certificate Program</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Masters/PHD">Masters/PHD</option>
                                                    <option value="Doesnt Matter">Doesn't Matter</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('key_qualification') }}</span>
                                                <label for="select-form">Highest education</label>
                                            </div>
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('Qualification_Description') ? 'has-error' : '' }}">
                                                <textarea class="form-control" name=" Qualification_Description" id="txt-forms" rows="10"
                                                 placeholder="Do candidates need education in a specific subject (e.g. diploma or degree in marketing or communication)?
                                                  If so, please indicate further here.">
                                                    {{$hire->Qualification_Description}}</textarea>
                                                <span class="text-danger">{{ $errors->first('Qualification_Description') }}</span>


                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('experience') ? 'has-error' : '' }}">
                                                <select name="experience" class="form-control" id="select-form">
                                                    <option selected disabled>{{$hire->experience}}</option>
                                                    <option value="Under 3 years">Under 3 years</option>
                                                    <option value="4-15 years">4-15 years-</option>
                                                    <option value="Above 15 years">Above 15 years</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('experience') }}</span>
                                                <label for="select-form">Years of Experience</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Requirements</h3></li>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('Responsibilities') ? 'has-error' : '' }}">
                                                <textarea class="form-control" name="Responsibilities" id="txt-forms" rows="8"
                                                placeholder="What are the tasks that the person will be responsible for on a day to day basis?
                                                (e.g. Plan weekly travel arrangements for the CEO, clean up viruses from office computers)">{{$hire->Responsibilities}}</textarea>
                                                <span class="text-danger">{{ $errors->first('Responsibilities') }}</span>
                                                <label for="txt-forms">Key Responsibilities</label>
                                            </div>
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('skills') ? 'has-error' : '' }}">
                                                <textarea class="form-control" name="skills" rows="7"
                                                          placeholder="What are the key skills required for this job
                                                          Example (Software Development, Google Digital Marketing...etc)"> {{$hire->skills}}</textarea>
                                                <span class="text-danger">{{ $errors->first('skills') }}</span>
                                                <label for="txt-forms">Key Skills</label>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-5 no-gap-right{{ $errors->has('minSal') ? 'has-error' : '' }}">
                                                    <input type="number" class="form-control"name="minSal" value="{{$hire->minSal}}" placeholder="Minimum salary">
                                                    <span class="text-danger">{{ $errors->first('minSal') }}</span>
                                                    <label for="nbr-form">Minimum Salary</label>
                                                </div>
                                                <div class="form-group col-md-5 no-gap-right{{ $errors->has('maxSal') ? 'has-error' : '' }}">
                                                    <input type="number" class="form-control" name="maxSal" value="{{$hire->maxSal}}" placeholder="Maximum salary ">
                                                    <span class="text-danger">{{ $errors->first('maxSal') }}</span>
                                                    <label for="nbr-form">Maximum Salary</label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <!-- Date -->
                                                <div class="form-group col-md-5 no-gap-right{{ $errors->has('start_date') ? 'has-error' : '' }}">
                                                    <input class="form-control" type="date" name="start_date" value="{{$hire->start_date}}" id="date-form">
                                                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                    <label for="date-form">Expected Start Date</label>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn pull-left" value="update Job">
                                            </div>
                                        </div>
                                    </ol>
                                </form>

                            </div><!-- / .col-md-10 -->
                        </div><!-- / .row -->
                    </div><!-- / .container -->
                </div>
            </div>
        </div><!-- / .bg-overlay -->
    </div><!-- / .bg-login -->

@endsection

@section('footer')
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

@stop