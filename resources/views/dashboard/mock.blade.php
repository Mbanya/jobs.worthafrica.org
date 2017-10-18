@extends('layouts.dashboardForms_layout')
@section('assets')
    @if(Sentinel::getUser()->inRole('organisation'))
        <title>{{Sentinel::getUser()->organisation_name. "'s"}} Hire</title>
    @elseif(Sentinel::getUser()->inRole('jobfilter'))
        <title>{{Sentinel::getUser()->organisation_name. "'s"}} Hire</title>
    @else
        <title>{{Sentinel::getUser()->first_name. "'s"}}Job Profile</title>
    @endif
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
                                    @if(Sentinel::getUser()->inRole('organisation'))
                                        <span class="user-name">{{Sentinel::getUser()->organisation_name}}<i class="fa fa-angle-down"></i></span>
                                    @elseif(Sentinel::getUser()->inRole('jobfilter'))
                                        <span class="user-name">{{Sentinel::getUser()->organisation_name}}<i class="fa fa-angle-down"></i></span>
                                    @else
                                        <span class="user-name">{{Sentinel::getUser()->first_name." ".Sentinel::getUser()->last_name}}<i class="fa fa-angle-down"></i></span>
                                    @endif
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
                            @if(Sentinel::getUser()->inRole('organisation'))
                                <div class="sidebar-profile-details">
                                    <span>{{Sentinel::getUser()->contact_name}}<br><small>{{Sentinel::getUser()->organisation_name}}</small></span>
                                </div>

                            @elseif(Sentinel::getUser()->inRole('jobfilter'))
                                <div class="sidebar-profile-details">
                                    <span>{{Sentinel::getUser()->contact_name}}<br><small>{{Sentinel::getUser()->organisation_name}}</small></span>
                                </div>
                            @else
                                <div class="sidebar-profile-details">
                                    <span>{{Sentinel::getUser()->first_name}}<br><small>{{Sentinel::getUser()->last_name}}</small></span>
                                </div>
                            @endif
                        </a>
                    </div>
                </div>
                <ul class="menu accordion-menu">
                    @if(Sentinel::getUser()->inRole('organisation'))
                        <li ><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="{{route('jobfilter')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-file"></span><p>Create new Job filter Request</p></a></li>
                        <li class="active"><a href="{{route('findTalent')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Find Talent</p></a></li>
                        <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Flex Hire</p></a></li>
                    @elseif(Sentinel::getUser()->inRole('jobfilter'))
                        <li><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="{{route('jobfilter')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-file"></span><p>Create new Job filter Request</p></a></li>
                        <li class="active"><a href="{{route('findTalent')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Find Talent</p></a></li>
                        <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Flex Hire</p></a></li>
                    @else
                        <li ><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li class="active"><a href="{{route('findTalent')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Create Profile</p></a></li>
                        <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Create a Flex Profile</p></a></li>
                        <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Request Mock interview</p></a></li>
                    @endif
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>Looking To Hire</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                        @if(Sentinel::getUser()->inRole('organisation'))
                            <li class="active">Looking to Hire</li>
                        @elseif(Sentinel::getUser()->inRole('jobfilter'))
                            <li class="active">Looking to Hire</li>
                        @else
                            <li class="active">Job Profile</li>
                        @endif
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
                                @if(Sentinel::getUser()->inRole('individual'))
                                    <form action="POST" action="{{route('jobs.store')}}">
                                        {{csrf_field()}}
                                        <div class="row m-b-lg">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('first_name) }">
                                                        <label for="first_name"><span class="text-danger">*</span>First Name</label>
                                                        <input type="text" v-validate.initial="'required'" class="form-control" value="{{Sentinel::getUser()->first_name}}" name="first_name" id="first_name" placeholder="Enter First Name">
                                                    </div>
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('last_name) }">
                                                        <label for="last_name"><span class="text-danger">*</span>Last Name</label>
                                                        <input type="text" v-validate.initial="'required'" name="last_name" id="last_name" placeholder="Enter Last Name" value="{{Sentinel::getUser()->last_name}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6" :class="{ 'has-error' : errors.has('email')}">
                                                        <label for="email"><span class="text-danger">*</span>Email</label>
                                                        <input type="email" v-validate.initial="'required'" name="email" id="email" value="{{Sentinel::getUser()->email}}" placeholder="Enter Email" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone"><span class="text-danger">*</span>Phone Number</label>
                                                        <input type="number" v-validate.initial="'required'" name="phone_number" value="{{Sentinel::getUser()->phone_number}}" id="phone_number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('key_qualification) }">
                                                        <label for="key_qualification"><span class="text-danger">*</span>Key Qualification</label>
                                                        <select name="key_qualification"  v-validate.initial="'required'" class="form-control" id="key_qualification">
                                                            <option selected disabled>Choose One</option>
                                                            <option value="Form 4 graduate">Form 4 Graduate</option>
                                                            <option value="Certificate/Diploma">Diploma</option>
                                                            <option value="Degree">Degree</option>
                                                            <option value="Masters">Masters/PHD</option>
                                                            <option value="PHD">PHD</option>
                                                            <option value="none">None</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('other_key_qualification) }">
                                                        <label for="other_key_qualification"><span class="text-danger">*</span>Other Education</label>
                                                        <select name="other_key_qualification"  v-validate.initial="'required'" class="form-control" id="other_key_qualification">
                                                            <option selected disabled>Choose One</option>
                                                            <option value="Form 4 graduate">Form 4 Graduate</option>
                                                            <option value="Certificate Program">Certificate Program</option>
                                                            <option value="Diploma">Diploma</option>
                                                            <option value="Masters/PHD">Masters/PHD</option>
                                                            <option value="none">None</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('experience) }">
                                                        <label for="experience"><span class="text-danger">*</span>Years of Working Experience</label>
                                                        <select name="experience"  v-validate.initial="'required'" class="form-control" id="experience">
                                                            <option selected disabled>Years of working experience</option>
                                                            <option value="2 years">2 years</option>
                                                            <option value="2-5 years">2-5 years</option>
                                                            <option value="5-10 years">5-10 years</option>
                                                            <option value="Above 10 years">Above 10 years</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12" :class="{'has-error' : errors.has('skills') }">
                                                        <label for="skills"><span class="text-danger">*</span>Key Skills</label>
                                                        <textarea name="skills" id="skills" v-validate.initial="'required'" cols="30" rows="10"class="form-control" placeholder="What Skills do you have Eg (Software Development, Google Digital Marketing...etc)" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('CV) }">
                                                        <label for="CV"><span class="text-danger">*</span>Upload CV</label>
                                                        <input type="file"  v-validate.initial="'required'" name="CV" required>
                                                        <span class="text-danger">{{ $errors->first('CV') }}</span>
                                                        <p class="help-block">Only PDF &.DOCX allowed</p>


                                                    </div>
                                                    <div class="form-group col-md-6 no-gap-right" :class="{'has-error' : errors.has('cover_letter) }">
                                                        <label for="cover_letter"><span class="text-danger">*</span>Cover Letter  </label>
                                                        <input type="file"  v-validate.initial="'required'" name="cover_letter" required>
                                                        <p class="help-block">Only PDF &.DOCX allowed</p>

                                                        <div class="form-group col-md-6 ">
                                                            <label for="profession"><span class="text-danger">*</span>Profession</label>
                                                            <input type="text" v-validate.initial="'required'" class="form-control"name="profession" id="profession" placeholder="What is your Profession">
                                                        </div>
                                                        <div class="form-group col-md-6 no-gap-right">
                                                            <label for="availability"> <span class="text-danger">*</span>Availability</label>
                                                            <select name="availability" v-validate.initial="'required'" class="form-control" id="availability">
                                                                <option selected disabled>Choose One</option>
                                                                <option value="Immediately">Immediately</option>
                                                                <option value=" Within 1 week">Within 1 week</option>
                                                                <option value="Within 2 weeks">Within 2 weeks</option>
                                                                <option value="Within 3 weeks">Within 3 weeks</option>
                                                                <option value="Within 4 weeks">Within 4 weeks</option>
                                                                <option value="Within 3 months">Within 3 months</option>
                                                            </select>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="submit" class="btn btn-primary" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <form id="Form" method="POST" action="/hire">
                                        {{csrf_field()}}
                                        <div class="row m-b-lg">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('organisation_size') }">
                                                        <label for="organisation_name"><span class="text-danger">*</span>Organisation Name</label>
                                                        <input type="text" v-validate.initial="'required'" class="form-control" value="{{Sentinel::getUser()->organisation_name}}" name="organisation_name" id="organisation_name" placeholder="Organisation Name" >
                                                    </div>
                                                    <div class="form-group  col-md-6" :class="{'has-error' : errors.has('organisation_size') }">
                                                        <label for="organisation_size"><span class="text-danger">*</span>Organisation Size</label>
                                                        <input type="text" v-validate.initial="'required'" class="form-control col-md-6" name="organisation_size" value="{{Sentinel::getUser()->org_size}}" id="organisation_size" placeholder="Organisation Size"  >
                                                    </div>
                                                    <div class="form-group col-md-6" :class="{'has-error': errors.has('organisation_type') }">
                                                        <label for="organisation_type"><span class="text-danger">*</span>Organisation Type</label>
                                                        <input type="text" name="organisation_type"  v-validate.initial=" 'required'" id="organisation_type"  class="form-control">
                                                    </div>
                                                    <div class="form-group  col-md-6" :class="{'has-warning' : errors.has('Physical_Address') }">
                                                        <label for="Physical_Address"><span class="text-danger">*</span>Physical Address</label>
                                                        <input type="text" class="form-control col-md-6" name="Physical_Address" v-validate="'required'"   value="{{Sentinel::getUser()->physical_address}}" id="Physical_Address" placeholder="Physical Address" >
                                                    </div>
                                                    <div class="form-group col-md-12" :class="{'has-warning' : errors.has('email') }">
                                                        <label for="email"><span class="text-danger">*</span>Email address</label>
                                                        <input type="email" v-validate.initial="'required|email'" :class="{'input': true, 'has-warning': errors.has('email') }"
                                                               class="form-control" name="email" id="email" required  value="{{Sentinel::getUser()->email}}"
                                                               placeholder="Enter email" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12" :class="{'has-warning' : errors.has('key_qualification') }">
                                                        <label for="key_qualification"><span class="text-danger">*</span>Highest Education</label>
                                                        <select name="key_qualification" v-validate.initial="'required'" id="key_qualification" class="form-control" >
                                                            <option selected disabled>Choose One</option>
                                                            <option value="Form 4 graduate">Form 4 Graduate</option>
                                                            <option value="Certificate Program">Certificate Program</option>
                                                            <option value="Diploma">Diploma</option>
                                                            <option value="Masters/PHD">Masters/PHD</option>
                                                            <option value="Doesnt Matter">Doesn't Matter</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12" :class="{'has-error' : errors.has('Qualification_Description') }">
                                                        <label for="Qualification_Description"><span class="text-danger">*</span>Qualification Description</label>
                                                        <textarea name="Qualification_Description" v-validate.initial="'required'" id="Qualification_Description" cols="30" rows="10" class="form-control" ></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12" :class="{'has-error' : errors.has('experience') }">
                                                        <label for="experience"><span class="text-danger">*</span>Years of working experience</label>
                                                        <select name="experience" id="experience" v-validate.initial="'required'" class="form-control" >
                                                            <option selected disabled>Years of working experience</option>
                                                            <option value="2 years">2 years</option>
                                                            <option value="2-5 years">2-5 years</option>
                                                            <option value="5-10 years">5-10 years</option>
                                                            <option value="Above 10 years">Above 10 years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="Responsibilities" :class="{'has-error' : errors.has('Responsibilities') }"><span class="text-danger">*</span>Key Responsibilities</label>
                                                        <textarea name="Responsibilities" v-validate.initial="'required'" id="Responsibilities" cols="30" rows="10"class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12" :class="{'has-error' : errors.has('skills') }">
                                                        <label for="skills"><span class="text-danger">*</span>Skills</label>
                                                        <textarea name="skills" id="skills" v-validate.initial="'required'" cols="30" rows="10"class="form-control" ></textarea>
                                                    </div>

                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('minSal') }">
                                                        <label for="minSal"><span class="text-danger">*</span>Minimum Salary</label>
                                                        <input type="number" class="form-control"  v-validate.initial="'required'" name="minSal" id="minSal" placeholder="Minimum Salary" >
                                                    </div>
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('maxSal') }">
                                                        <label for="maxSal"><span class="text-danger">*</span>Maximum Salary</label>
                                                        <input type="number" class="form-control" v-validate.initial="'required'" name="maxSal" id="maxSal" placeholder="Maximum Salary Salary" >
                                                    </div>

                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('location') }">
                                                        <label for="location"><span class="text-danger">*</span>Location</label>
                                                        <input type="text" class="form-control"  v-validate.initial="'required'" name="location" id="location" placeholder="Location" >
                                                    </div>
                                                    <div class="form-group col-md-6" :class="{'has-error' : errors.has('start_date')}">
                                                        <label for="start_date"><span class="text-danger">*</span>Start Date</label>
                                                        <input type="date" class="form-control datepicker" v-validate.initial="'required|date_format'" name="start_date" id="start_date" placeholder="Expected Start Date" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="submit" class="btn btn-primary" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                @endif
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
    <script>
        Vue.use(VeeValidate);

    </script>

@stop