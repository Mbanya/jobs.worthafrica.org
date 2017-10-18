@extends('layouts.dashboardForms_layout')
@section('assets')

    <title>{{Sentinel::getUser()->organisation_name. "'s"}} Job Filter</title>
    <?php
    $majors = file_get_contents('http://filter.worthafrica.org/site/publicdata?getmajors=true');
    $industries = file_get_contents('http://filter.worthafrica.org/site/publicdata?getindustries=true');
    $countries = file_get_contents('http://filter.worthafrica.org/site/publicdata?getcountries=true');
    $departments = file_get_contents('http://filter.worthafrica.org/site/publicdata?getdepartments=true');
    ?>
@stop
@section('fixed_header')
@stop
@section('content')
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="{{route('index')}}" class="logo-text"><img src="{{ url('worthjobs.png')}}" alt="WorthJobs" style="max-width: 140px;"></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <span class="user-name">{{Sentinel::getUser()->organisation_name}}<i class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="{{route('profile')}}"><i class="fa fa-user"></i>Profile</a></li>
                                    <li role="presentation" class="divider"></li>
                                    {{--<li role="presentation"><a href="login.html"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>--}}
                                    <li role="presentation">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out m-r-xs"></i>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="log-out waves-effect waves-button waves-classic"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">
                        <a href="javascript:void(0);" id="profile-menu-link">
                            <div class="sidebar-profile-image">
                                <img src="admin/assets/images/profile-pic-medium.png" class="img-circle img-responsive" alt="">
                            </div>
                            <div class="sidebar-profile-details">
                                <span>{{Sentinel::getUser()->contact_name}}<br><small>{{Sentinel::getUser()->organisation_name}}</small></span>
                            </div>
                        </a>
                    </div>
                </div>
                <ul class="menu accordion-menu">
                    <li><a href="{{route('dashboard.index')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                    <li class="active"><a href="{{route('jobfilter')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-file"></span><p>Create new Job filter Request</p></a></li>
                    <li ><a href="{{route('findTalent')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Find Talent</p></a></li>
                    <li class=""><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-export"></span><p>Flex Hire</p></a></li>
                    <li><a href="" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-time"></span><p>History</p></a></li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>Job Filter</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                        <li class="active">Job Filter</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">

                            <div class="panel-body">
                                @if(session('message'))
                                    <div class="alert alert-success">
                                        {{session('message')}}
                                    </div>
                                @endif
                                <form id="application" method="POST" action="/jobfilter">
                                    {{csrf_field()}}
                                    <div class="row m-b-lg">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('organisation_size') }">
                                                    <label for="organisation_name"><span class="text-danger">*</span>Organisation Name</label>
                                                    <input type="text" v-validate.initial="'required'" class="form-control" value="{{Sentinel::getUser()->organisation_name}}" name="company_name" id="company_name" placeholder="Organisation Name" >
                                                </div>
                                                <input type="hidden" name="user_id" id="wajobid"
                                                       value="{{Sentinel::getUser()->getUserId()}}">
                                                <input type="hidden" id="contact_person"
                                                       value="{{Sentinel::getUser()->contact_name}}">
                                                <input type="hidden" id="telephone"
                                                       value="{{Sentinel::getUser()->phone_number}}">
                                                <div class="form-group  col-md-6" :class="{'has-warning' : errors.has('Physical_Address') }">
                                                    <label for="Physical_Address"><span class="text-danger">*</span>Physical Address</label>
                                                    <input type="text" class="form-control col-md-6" name="Physical_Address" v-validate="'required'"   value="{{Sentinel::getUser()->physical_address}}" id="Physical_Address" placeholder="Physical Address" >
                                                </div>
                                                <div class="form-group col-md-12" :class="{'has-warning' : errors.has('email') }">
                                                    <label for="email"><span class="text-danger">*</span>Email address</label>
                                                    <input type="email" v-validate.initial="'required|email'" :class="{'input': true, 'has-warning': errors.has('email') }"
                                                           class="form-control" name="email_address" id="email_address" required  value="{{Sentinel::getUser()->email}}"
                                                           placeholder="Enter email" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group col-md-12" :class="{'has-warning' : errors.has('job_title') }">
                                                    <label for="job_title">Job Title</label>
                                                    <input type="text" name="job_title" id="job_title" class="form-control"
                                                           placeholder="Job Title">
                                                </div>
                                                <div class="form-group col-md-12" :class="{'has-error' : errors.has('description') }">
                                                    <label for="description"><span class="text-danger">*</span>Job Description</label>
                                                    <textarea name="description" v-validate.initial="'required'" id="description" cols="30" rows="10" class="form-control" ></textarea>
                                                </div>
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('experience') }">
                                                    <label for="country_id"><span class="text-danger">*</span>Country</label>
                                                    <select name="countryid" v-validate.initial="'required'" id="country_id" onchange="GetLocations();"
                                                            class="form-control">
                                                        <?php echo $countries; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('location') }">
                                                    <label for="location_id"><span class="text-danger">*</span>Location</label>
                                                    <select name="locationid" v-validate.initial="'required'" id="location_id" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" form-group col-md-12" >
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('job_type') }" >
                                                    <label for="job_type">Job Type</label>
                                                    <select id="job_type" v-validate.initial="'required'"class="form-control">
                                                        <option selected disabled>Chooser One</option>
                                                        <option value="1">Contract</option>
                                                        <option value="4">Volunteer/Community Service</option>
                                                        <option value="2">Permanent</option>
                                                        <option value="3">Consultancy</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('industry_id') }">
                                                    <label for="industry_id"><span class="text-danger">*</span>Industry</label>
                                                    <select name="industry_id" v-validate.initial="'required'" id="industry_id"
                                                            class="form-control">
                                                        <?php echo $industries ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('major_id') }">
                                                    <label for="major_id"><span class="text-danger">*</span>Major</label>
                                                    <select name="major_id" id="major_id" v-validate.initial="'required'" class="form-control">
                                                        <?php echo $majors; ?>
                                                    </select>

                                                </div>
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('department_id') }">
                                                    <label for="department_id"><span class="text-danger">*</span>Major</label>
                                                    <select name="department_id" v-validate.initial="'required'" id="department_id" class="form-control">
                                                        <?php echo $departments; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Responsibilities</label>
                                                    <textarea class="form-control" v-validate.initial="'required'" id="responsibilities" cols="30" rows="10"
                                                              placeholder="What are the tasks that the person will be responsible for on a
                                                           day to day basis? (e.g. Plan weekly travel arrangements for the CEO,
                                                            clean up viruses from office computers)"> </textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Requirements</label>
                                                    <textarea class="form-control" v-validate.initial="'required'" id="requirements" cols="30" rows="10"
                                                              placeholder="What are the key skills required for this job Example (Software Development, Google Digital Marketing...etc)"> </textarea>
                                                </div>
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('minSal') }">
                                                    <label for="minSal"><span class="text-danger">*</span>Minimum Salary</label>
                                                    <input type="number" class="form-control"  v-validate.initial="'required'" name="minSal" id="minSal" placeholder="Minimum Salary" >
                                                </div>
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('maxSal') }">
                                                    <label for="maxSal"><span class="text-danger">*</span>Maximum Salary</label>
                                                    <input type="number" class="form-control" v-validate.initial="'required'" name="maxSal" id="maxSal" placeholder="Maximum Salary Salary" >
                                                </div>
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('start_date')}">
                                                    <label for="start_date"><span class="text-danger">*</span>Start Date</label>
                                                    <input type="date" class="form-control datepicker" v-validate.initial="'required|date_format'" name="start_date" id="start_date" placeholder="Expected Start Date" >
                                                </div>
                                                <div class="form-group col-md-6" :class="{'has-error' : errors.has('deadline')}">
                                                    <label for="deadline"><span class="text-danger">*</span>Application Deadline</label>
                                                    <input type="date" class="form-control datepicker" v-validate.initial="'required|date_format'" name="deadline" id="deadline" placeholder="Application Deadline" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="submit" class="btn pull-left" value="Submit Job"
                                                   onclick="event.preventDefault(); PostApplication();">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s"><?php echo date('Y')?> &copy; WorthAfrica</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

@stop
@section('nav')
@stop
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
    <script>
        Vue.use(VeeValidate);
    </script>


@stop