@extends('layouts.organisation_layout')
@section('assets')
    <title>Job Filter</title>

    <?php
    $majors = file_get_contents('http://filter.worthafrica.org/site/publicdata?getmajors=true');
    $industries = file_get_contents('http://filter.worthafrica.org/site/publicdata?getindustries=true');
    $countries = file_get_contents('http://filter.worthafrica.org/site/publicdata?getcountries=true');
    $departments = file_get_contents('http://filter.worthafrica.org/site/publicdata?getdepartments=true');
    ?>
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
                    <li><a href="{{url('organisation')}}">Services</a></li>
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
                                <form action="/posts" role="form" id="application" method="POST">
                                {{ csrf_field() }}
                                <!-- Organisation  Name -->
                                    <ol>
                                        <li><h3 class="t-description">Organisation Details</h3></li>
                                        <div class="row">
                                            <div class="form-group col-md-5 no-gap-right {{ $errors->has('organisation_name') ? 'has-error' : '' }}">
                                                <input type="text" disabled="" id="company_name"
                                                       value="{{Sentinel::getUser()->organisation_name}}"
                                                       class="form-control" name="organisation_name"
                                                       placeholder=" Organisation Name" required autofocus>
                                                <span class="text-danger">{{ $errors->first('organisation_name') }}</span>
                                                <label for="txt-forms">Organisation Name</label>
                                            </div>
                                            <input type="hidden" name="user_id" id="wajobid"
                                                   value="{{Sentinel::getUser()->getUserId()}}">
                                            <input type="hidden" id="contact_person"
                                                   value="{{Sentinel::getUser()->contact_name}}">
                                            <input type="hidden" id="telephone"
                                                   value="{{Sentinel::getUser()->phone_number}}">
                                            <!-- Organization Size -->
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('organisation_size') ? 'has-error' : '' }}">
                                                <input type="text" disabled name="organisation_size"
                                                       class="form-control" value="{{Sentinel::getUser()->org_size}}">
                                                <span class="text-danger">{{ $errors->first('organisation_size') }}</span>
                                                <label for="txt-form">Organisation Size</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Organization type -->
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('organisation_type') ? 'has-error' : '' }}">
                                                <select name="organisation_type" class="form-control" id="select-form">
                                                    <option selected disabled>Choose One</option>
                                                    <option value="Start-Up">Start-Up</option>
                                                    <option value="Agency">Agency</option>
                                                    <option value="SME">SME</option>
                                                    <option value="Large -Corporation">Large -Corporation</option>
                                                    <option value="Governmental Institution">Governmental Institution
                                                    </option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('organisation_type') }}</span>
                                                <label for="select-form">Organisation Type</label>
                                            </div>
                                            <!-- Location -->
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}">
                                                <input type="text" disabled name="Physical_Address"
                                                       value="{{Sentinel::getUser()->physical_address}}"
                                                       class="form-control" placeholder="Physical Address " required
                                                       autofocus>
                                                <span class="text-danger">{{ $errors->first('Physical_Address') }}</span>
                                                <label>Physical Address</label>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <input type="email" disabled name="email" id="email_address"
                                                       class="form-control" value="{{Sentinel::getUser()->email}}"
                                                       placeholder="Enter contact email" required autofocus>
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                <label>Contact Email</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Job Details</h3></li>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right {{$errors->has('Job_title') ? 'has-error':''}}">
                                                <input type="text" name="Job_title" id="job_title" class="form-control"
                                                       placeholder="Job Title">
                                                <span class="text-danger">{{$errors->first('Job_title')}}</span>
                                                <label for="txt-forms">Job Title</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right {{$errors->has('Job_title') ? 'has-error':''}}">
                                                <textarea class="form-control" id="description" rows="8"
                                                          placeholder=""></textarea>
                                                <span class="text-danger">{{$errors->first('description')}}</span>
                                                <label for="txt-forms">Job Title</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-5 no-gap-right{{$errors->has('country') ? 'has-error':''}}">
                                                <select name="countryid" id="country_id" onchange="GetLocations();"
                                                        class="form-control">
                                                    <?php echo $countries; ?>
                                                </select>
                                                <span class="text-danger">{{$errors->first('country')}}</span>
                                                <label for="txt-forms">Country</label>
                                            </div>
                                            <div class="form-group col-md-5 no-gap-right{{$errors->has('location') ? 'has-error':''}}">
                                                <select name="locationid" id="location_id" class="form-control">
                                                </select>
                                                <span class="text-danger">{{$errors->first('location')}}</span>
                                                <label for="txt-forms">Location</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-5 no-gap-right">
                                                <select id="job_type"
                                                        class="form-control {{ $errors->has('jobtype') ? 'has-error':'' }}">
                                                    <option selected disabled>Chooser One</option>
                                                    <option value="1">Contract</option>
                                                    <option value="4">Volunteer/Community Service</option>
                                                    <option value="2">Permanent</option>
                                                    <option value="3">Consultancy</option>
                                                </select>
                                                <span class="text-danger">{{$errors->first('job_type')}}</span>
                                                <label for="select-form">Job Type</label>
                                            </div>
                                            <div class="form-group col-md-5 no-gap-right {{$errors ->has('reference_code')?'has-error':''}}">
                                                <select name="industry_id" id="industry_id"
                                                        class="form-control {{ $errors->has('jobtype') ? 'has-error':'' }}">
                                                    <?php echo $industries ?>
                                                </select>
                                                <label for="txt-forms">Industry</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('major_id') ? 'has-error' : '' }}">
                                                <select name="major_id" id="major_id" class="form-control">
                                                    <?php echo $majors; ?>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('major_id') }}</span>
                                                <label for="select-form">Major</label>
                                            </div>
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('major_id') ? 'has-error' : '' }}">
                                                <select name="department_id" id="department_id" class="form-control">
                                                    <?php echo $departments; ?>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('department_id') }}</span>
                                                <label for="select-form">Department</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Requirements</h3></li>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('Responsibilities') ? 'has-error' : '' }}">
                                                <textarea class="form-control" id="responsibilities" rows="5"
                                                          placeholder="What are the tasks that the person will be responsible for on a day to day basis? (e.g. Plan weekly travel arrangements for the CEO, clean up viruses from office computers)"></textarea>
                                                <span class="text-danger">{{ $errors->first('Responsibilities') }}</span>
                                                <label for="txt-forms">Key Responsibilities</label>
                                            </div>
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('skills') ? 'has-error' : '' }}">
                                                <textarea class="form-control" id="requirements" rows="5"
                                                          placeholder="What are the key skills required for this job Example (Software Development, Google Digital Marketing...etc)"> </textarea>
                                                <span class="text-danger">{{ $errors->first('skills') }}</span>
                                                <label for="txt-forms">Key Requirements / Skills</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('minSal') ? 'has-error' : '' }}">
                                                <input type="number" class="form-control" name="minSal"
                                                       placeholder="Minimum salary">
                                                <span class="text-danger">{{ $errors->first('minSal') }}</span>
                                                <label for="nbr-form">Minimum Salary</label>
                                            </div>
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('maxSal') ? 'has-error' : '' }}">
                                                <input type="number" class="form-control" name="maxSal"
                                                       placeholder="Maximum salary ">
                                                <span class="text-danger">{{ $errors->first('maxSal') }}</span>
                                                <label for="nbr-form">Maximum Salary</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <!-- Date -->
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('start_date') ? 'has-error' : '' }}">
                                                <input class="form-control" type="date" name="start_date"
                                                       id="date-form">
                                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                <label for="date-form">Expected Start Date</label>
                                            </div>
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('') ? 'has-error' : '' }}">
                                                <input class="form-control" type="date" name="deadline" id="deadline">
                                                <span class="text-danger">{{ $errors->first('deadline') }}</span>
                                                <label for="date-form">Application Deadline</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="submit" class="btn pull-left" value="Submit Job"
                                                       onclick="event.preventDefault(); PostApplication();">
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
    <script type="text/javascript">
        function GetLocations() {
            var link = 'http://filter.worthafrica.org/site/publicdata';
            var countryid = document.getElementById('country_id').value;
            jQuery.ajax({
                url: link,
                type: 'POST',
                data: {
                    'getlocations': countryid
                },
                cache: false,
                success: function (data) {
                    $('#location_id').html(data);
                },
                error: function () {
                }
            });
        }
    </script>
    <script type="text/javascript">
        function PostApplication() {
            var link = 'http://filter.worthafrica.org/site/companydata';
            var company_name = document.getElementById('company_name').value;
            var wajobid = document.getElementById('wajobid').value;
            var email_address = document.getElementById('email_address').value;
            var contact_person = document.getElementById('contact_person').value;
            var telephone = document.getElementById('telephone').value;
            var job_title = document.getElementById('job_title').value;
            var industry_id = document.getElementById('industry_id').value;
            var location_id = document.getElementById('location_id').value;
            var description = document.getElementById('description').value;
            var responsibilities = document.getElementById('responsibilities').value;
            var requirements = document.getElementById('requirements').value;
            var job_type = document.getElementById('job_type').value;
            var country_id = document.getElementById('country_id').value;
            var deadline = document.getElementById('deadline').value;
            var department_id = document.getElementById('department_id').value;
            var major_id = document.getElementById('major_id').value;
            jQuery.ajax({
                url: link,
                type: 'POST',
                data: {
                    'wajobsdata': true,
                    'wajobid': wajobid,
                    'company_name': company_name,
                    'email_address': email_address,
                    'contact_person': contact_person,
                    'telephone': telephone,
                    'job_title': job_title,
                    'industry_id': industry_id,
                    'location_id': location_id,
                    'description': description,
                    'responsibilities': responsibilities,
                    'requirements': requirements,
                    'job_type': job_type,
                    'country_id': country_id,
                    'deadline': deadline,
                    'department_id': department_id,
                    'major_id': major_id
                },
                cache: false,
                success: function (data) {
//                    $('#jobdetails').html('Added successfully, please check your email address for details.');
                    alert('Added successfully, please check your email address for details.');
                    $('#application').submit();
                },
                error: function () {
                }
            });
        }
    </script>
@stop