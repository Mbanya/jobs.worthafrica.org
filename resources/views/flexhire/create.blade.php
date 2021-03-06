@extends('layouts.organisation_layout')
@section('header')
@endsection
@section('navigation')
    <title>Flex Hire Create</title>

@endsection

@section('cover')
    <!-- ========== Page Title ========== -->

    <header class="page-title pt-large pt-dark pt-plax-lg-dark">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Employer</h1>
                    <span class="subheading">Create  Job Post</span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li class="active">JobPost</li>
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
                        <h3 class="form-header">Flex hire</h3>
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
                                <form action="/flexhire" role="form" method="POST">
                        {{ csrf_field() }}
                        <!-- Organisation  Name -->
                            <ol>
                                <li><h3 class="t-description">Organisation Details</h3></li>
                                <div class="row">
                                    <div class="form-group col-md-6 no-gap-right {{ $errors->has('organisation_name') ? 'has-error' : '' }}">
                                        <input type="text"  class="form-control" value="{{Sentinel::getUser()->organisation_name}}" name="organisation_name" placeholder=" Organisation Name" required autofocus>
                                        <span class="text-danger">{{ $errors->first('organisation_name') }}</span>
                                        <label for="txt-forms"><span class="text-danger">*</span>Organisation Name</label>

                                    </div>
                                    <input type="hidden" name="user_id" value="{{Sentinel::getUser()->getUserId()}}">
                                    <input type="hidden" name="location" value="{{session('location')}}">
                                    <input type="hidden" name="job_type" value="{{session('industry')}}">
                                    <!-- Organization Size -->
                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('organisation_size') ? 'has-error' : '' }}" >
                                        <select name="organisation_size" class="form-control" id="select-form">
                                            <option selected value="{{Sentinel::getUser()->org_size}}">{{Sentinel::getUser()->org_size}}</option>
                                            <option value="1-15">1-15</option>
                                            <option value="16-50">16-50</option>
                                            <option value="51-200">51-200</option>
                                            <option value="201-500">201-500</option>
                                            <option value="501-above">501-above</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('organisation_size') }}</span>
                                        <label for="select-form"><span class="text-danger">*</span>Organisation Size</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Organization type -->
                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('organisation_type') ? 'has-error' : '' }}" >
                                        <select name="organisation_type" class="form-control" id="select-form">
                                            <option selected disabled>Choose One</option>
                                            <option value="Start-Up">Start-Up</option>
                                            <option value="Agency">Agency</option>
                                            <option value="SME">SME</option>
                                            <option value="Large -Corporation">Large -Corporation</option>
                                            <option value="Governmental Institution">Governmental Institution</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('organisation_type') }}</span>
                                        <label for="select-form"><span class="text-danger">*</span>Organisation Type</label>
                                    </div>
                                    <!-- Location -->
                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}" >
                                        <input type="text" name="Physical_Address"value="{{Sentinel::getUser()->physical_address}}"  class="form-control" placeholder="Physical Address " required autofocus>
                                        <span class="text-danger">{{ $errors->first('Physical_Address') }}</span>
                                        <label><span class="text-danger">*</span>Physical Address</label>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="row">
                                    <div class="form-group col-md-12 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <input type="email" name="email" class="form-control" value="{{Sentinel::getUser()->email}}" placeholder="Enter contact email" required autofocus>
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        <label><span class="text-danger">*</span>Contact Email</label>
                                    </div>
                                </div>
                                <li><h3 class="t-description">Qualifications</h3> </li>
                                <div class="row">
                                    <div class="form-group col-md-12 no-gap-right{{ $errors->has('key_qualification') ? 'has-error' : '' }}">
                                        <select name="key_qualification" class="form-control" id="select-form">
                                            <option selected disabled>Choose One</option>
                                            <option value="Form 4 graduate">Form 4 Graduate</option>
                                            <option value="Certificate Program">Certificate Program</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="Masters/PHD">Masters/PHD</option>
                                            <option value="Doesnt Matter">Doesn't Matter</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('key_qualification') }}</span>
                                        <label for="select-form"><span class="text-danger">*</span>Highest education</label>
                                    </div>
                                    <div class="form-group col-md-12 no-gap-right{{ $errors->has('Qualification_Description') ? 'has-error' : '' }}">
                                        <textarea class="form-control" name=" Qualification_Description" id="txt-forms" rows="10" placeholder="Do candidates need education in a specific subject (e.g. diploma or degree in marketing or communication)? If so, please indicate further here."></textarea>
                                        <span class="text-danger">{{ $errors->first('Qualification_Description') }}</span>
                                        <label for=""><span class="text-danger">*</span>Qualification Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 no-gap-right{{ $errors->has('experience') ? 'has-error' : '' }}">
                                        <select name="experience" class="form-control" id="select-form">
                                            <option selected disabled>Years of working experience</option>
                                            <option value="2 years">2 years</option>
                                            <option value="2-5 years">2-5 years</option>
                                            <option value="5-10 years">5-10 years</option>
                                            <option value="Above 10 years">Above 10 years</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('experience') }}</span>
                                        <label for="select-form"> <span class="text-danger">*</span>Years of Experience</label>
                                    </div>
                                </div>
                                <li><h3 class="t-description">Requirements</h3></li>What are the key skills required for this job Example (Software Development, Google Digital Marketing...etc)
                                <div class="row">
                                    <div class="form-group col-md-12 no-gap-right{{ $errors->has('Responsibilities') ? 'has-error' : '' }}">
                                        <textarea class="form-control" name="Responsibilities" id="txt-forms" rows="10" placeholder="What are the tasks that the person will be responsible for on a day to day basis? (e.g. Plan weekly travel arrangements for the CEO, clean up viruses from office computers)"></textarea>
                                        <span class="text-danger">{{ $errors->first('Responsibilities') }}</span>
                                        <label for="txt-forms"> <span class="text-danger">*</span>Key Responsibilities</label>
                                    </div>
                                    <div class="form-group col-md-12 no-gap-right{{ $errors->has('skills') ? 'has-error' : '' }}">
                                        <textarea class="form-control" name="skills" id="txt-forms" rows="10" placeholder="What are the key skills required for this job Example (Software Development, Google Digital Marketing...etc)"></textarea>
                                        <span class="text-danger">{{ $errors->first('skills') }}</span>
                                        <label for="txt-forms"> <span class="text-danger">*</span>Key Skills</label>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 no-gap-right{{ $errors->has('minSal') ? 'has-error' : '' }}">
                                            <input type="number" class="form-control"name="minSal" placeholder="Minimum salary">
                                            <span class="text-danger">{{ $errors->first('minSal') }}</span>
                                            <label for="nbr-form">Minimum Salary</label>
                                        </div>
                                        <div class="form-group col-md-6 no-gap-right{{ $errors->has('maxSal') ? 'has-error' : '' }}">
                                            <input type="number" class="form-control" name="maxSal" placeholder="Maximum salary ">
                                            <span class="text-danger">{{ $errors->first('maxSal') }}</span>
                                            <label for="nbr-form">Maximum Salary</label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 no-gap-right{{ $errors->has('Frequency_Rate') ? 'has-error' : '' }}">
                                            <select name=" Frequency_Rate" class="form-control" id="select-form">
                                                <option selected disabled>Mode of payment</option>
                                                <option value="Per Hour">Per Hour</option>
                                                <option value="Per day">Per Day</option>
                                                <option value="Per Week">Per Week</option>
                                                <option value="other">Other </option>
                                            </select>
                                            <span class="text-danger">{{ $errors->first('Frequency_Rate') }}</span>
                                            <label for="select-form"> <span class="text-danger">*</span>Mode of Payment</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Date -->
                                        <div class="form-group col-md-6 no-gap-right{{ $errors->has('start_date') ? 'has-error' : '' }}">
                                            <input class="form-control" type="date" name="start_date" id="date-form">
                                            <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                            <label for="date-form"> <span class="text-danger">*</span>Expected Start Date</label>
                                        </div>

                                        <!-- Date -->
                                        <div class="form-group col-md-6 no-gap-right{{ $errors->has('end_date') ? 'has-error' : '' }}">
                                            <input class="form-control" type="date" name="end_date" id="date-form">
                                            <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                            <label for="date-form"> <span class="text-danger">*</span>Expected End Date</label>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="form-group">
                                        <input type="submit" class="btn pull-left" value="Submit">
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
@endsection
@section('scripts')

@stop