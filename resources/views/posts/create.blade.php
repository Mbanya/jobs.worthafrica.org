@extends('layouts.forms_layout')
@section('header')
    <title>Job Filter</title>
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
                                <h3 class="form-header">Job Filter</h3>
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
                                <form action="/posts" role="form" method="POST">
                                {{ csrf_field() }}
                                <!-- Organisation  Name -->
                                    <ol>
                                        <li><h3 class="t-description">Organisation Details</h3></li>
                                        <div class="row">
                                            <div class="form-group col-md-5 no-gap-right {{ $errors->has('organisation_name') ? 'has-error' : '' }}">
                                                <input type="text" disabled=""  value="{{Sentinel::getUser()->organisation_name}}"  class="form-control" name="organisation_name" placeholder=" Organisation Name" required autofocus>
                                                <span class="text-danger">{{ $errors->first('organisation_name') }}</span>
                                                <label for="txt-forms">Organisation Name</label>

                                            </div>
                                           <input type="hidden" name="user_id" value="{{Sentinel::getUser()->getUserId()}}">
                                            <!-- Organization Size -->
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('organisation_size') ? 'has-error' : '' }}" >
                                                <input type="text"  disabled  name="organisation_size" class="form-control" value="{{Sentinel::getUser()->org_size}}">

                                                <span class="text-danger">{{ $errors->first('organisation_size') }}</span>
                                                <label for="txt-form">Organisation Size</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Organization type -->
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('organisation_type') ? 'has-error' : '' }}" >
                                                <select name="organisation_type" class="form-control" id="select-form">
                                                    <option selected disabled>Choose One</option>
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
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}" >
                                                <input type="text" disabled name="Physical_Address"value="{{Sentinel::getUser()->physical_address}}"  class="form-control" placeholder="Physical Address " required autofocus>
                                                <span class="text-danger">{{ $errors->first('Physical_Address') }}</span>
                                                <label>Physical Address</label>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <input type="email"  disabled name="email" class="form-control" value="{{Sentinel::getUser()->email}}" placeholder="Enter contact email" required autofocus>
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                <label>Contact Email</label>
                                            </div>
                                            <div class="form-group col-md-10 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <input type="email"   name="email" class="form-control"  placeholder="Enter email for recieving applications" required autofocus>
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                <label>Email for recieving applications</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Qualifications</h3> </li>
                                        <div class="row">
                                            <div class="form-group col-md-5 no-gap-right {{$errors->has('Job_title') ? 'has-error':''}}">
                                                <input type="text" name="Job_title" class="form-control" placeholder="Job Title">
                                                <span class="text-danger">{{$errors->first('Job_title')}}</span>
                                                <label for="txt-forms">Job Title</label>
                                            </div>
                                            <div class="form-group col-md-5 no-gap-right{{$errors->has('location') ? 'has-error':''}}">
                                                <input type="text" name="location" class="form-control" placeholder="location of the job">
                                                <span class="text-danger">{{$errors->first('location')}}</span>
                                                <label for="txt-forms">Location</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-5 no-gap-right">
                                                <select name="job_type" class="form-control {{ $errors->has('jobtype') ? 'has-error':'' }}">
                                                    <option selected disabled>Chooser One</option>
                                                    <option value="Part-Time">Part-Time</option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="Voulunteer/Community Service">Volunteer/Community Service</option>
                                                    <option value="Permanent">Permanent</option>
                                                    <option value="Consultancy">Consultancy</option>
                                                </select>
                                                <span class="text-danger">{{$errors->first('job_type')}}</span>
                                                <label for="select-form">Job Type</label>
                                            </div>
                                            <div class="form-group col-md-5 no-gap-right {{$errors ->has('reference_code')?'has-error':''}}">
                                                <input class="form-control" name="reference_code" placeholder="Reference Number for the Job ">
                                                <span class="text-danger">{{$errors->first('reference_code')}}</span>
                                                <label for="txt-forms">Reference Number</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('key_qualification') ? 'has-error' : '' }}">
                                                <select name="key_qualification" class="form-control" id="select-form">
                                                    <option selected disabled>Choose One</option>
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
                                                <textarea class="form-control" name=" Qualification_Description" id="txt-forms" rows="10" placeholder="Do candidates need education in a specific subject (e.g. diploma or degree in marketing or communication)? If so, please indicate further here."></textarea>
                                                <span class="text-danger">{{ $errors->first('Qualification_Description') }}</span>


                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('experience') ? 'has-error' : '' }}">
                                                <select name="experience" class="form-control" id="select-form">
                                                    <option selected disabled>Years of working experience</option>
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
                                                <textarea class="form-control" name="Responsibilities" id="txt-forms" rows="8" placeholder="What are the tasks that the person will be responsible for on a day to day basis? (e.g. Plan weekly travel arrangements for the CEO, clean up viruses from office computers)"></textarea>
                                                <span class="text-danger">{{ $errors->first('Responsibilities') }}</span>
                                                <label for="txt-forms">Key Responsibilities</label>
                                            </div>
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('skills') ? 'has-error' : '' }}">
                                                <textarea class="form-control" name="skills" rows="7" placeholder="What are the key skills required for this job Example (Software Development, Google Digital Marketing...etc)"> </textarea>
                                                <span class="text-danger">{{ $errors->first('skills') }}</span>
                                                <label for="txt-forms">Key Skills</label>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-5 no-gap-right{{ $errors->has('minSal') ? 'has-error' : '' }}">
                                                    <input type="number" class="form-control" name="minSal" placeholder="Minimum salary">
                                                    <span class="text-danger">{{ $errors->first('minSal') }}</span>
                                                    <label for="nbr-form">Minimum Salary</label>
                                                </div>
                                                <div class="form-group col-md-5 no-gap-right{{ $errors->has('maxSal') ? 'has-error' : '' }}">
                                                    <input type="number" class="form-control" name="maxSal" placeholder="Maximum salary ">
                                                    <span class="text-danger">{{ $errors->first('maxSal') }}</span>
                                                    <label for="nbr-form">Maximum Salary</label>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <!-- Date -->
                                                <div class="form-group col-md-10 no-gap-right{{ $errors->has('start_date') ? 'has-error' : '' }}">
                                                    <input class="form-control" type="date" name="start_date" id="date-form">
                                                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                    <label for="date-form">Expected Start Date</label>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn pull-left" value="Submit Job">
                                            </div>
                                        </div>
                                    </ol>
                                </form>
                            </div> <!--/ .form-content-->
                        </div> <!-- / .form-wrapper-->
                            </div><!-- / .col-md-10 -->
                        </div><!-- / .row -->
                    </div><!-- / .container -->
                </div> <!-- / .big-overlay-->
            </div> <!-- / .bg-login-2 -->

@endsection

@section('footer')
@endsection
@section('scripts')

@stop