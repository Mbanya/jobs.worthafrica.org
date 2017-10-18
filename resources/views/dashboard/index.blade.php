@extends('layouts.dashboard_layout')
@section('assets')
    @if(Sentinel::check() &&Sentinel::getUser()->inRole('organisation'))
    <title>{{Sentinel::getUser()->organisation_name}} Dashboard</title>
@elseif(Sentinel::check() &&Sentinel::getUser()->inRole('jobfilter'))
    <title>{{Sentinel::getUser()->organisation_name}} Dashboard</title>
@elseif(Sentinel::check() && Sentinel::getUser()->inRole('individual'))
    <title>{{Sentinel::getUser()->first_name}}Dashboard</title>
@endif
    {{--<title>Dashboard</title>--}}
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
                                        <span class="user-name">{{Sentinel::getUser()->first_name}}<i class="fa fa-angle-down"></i></span>
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
                    <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                    <li><a href="{{route('jobfilter')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-file"></span><p>Create new Job filter Request</p></a></li>
                    <li><a href="{{route('findTalent')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Find Talent</p></a></li>
                    <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Flex Hire</p></a></li>
                    @elseif(Sentinel::getUser()->inRole('jobfilter'))
                        <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="{{route('jobfilter')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-file"></span><p>Create new Job filter Request</p></a></li>
                        <li><a href="{{route('findTalent')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Find Talent</p></a></li>
                        <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Flex Hire</p></a></li>
                        @else
                        <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="{{route('findTalent')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Create Profile</p></a></li>
                        <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Find a Flex Profile</p></a></li>
                        <li><a href="{{route('flexhire')}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-search"></span><p>Request Mock interview</p></a></li>
                        @endif
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>Dashboard</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li class="active"><a href="#"></a>Dashboard</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p style="font-size: 20px;">{{Sentinel::getUser()->created_at->format('F d, Y')}}</p>
                                    <span class="info-box-title">Date Joined</span>
                                </div>
                                <div class="info-box-icon">
                                    <i class="icon-users"></i>
                                </div>
                                <div class="info-box-progress">
                                    <div class="progress progress-xs progress-squared bs-n">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">

                                    <p style="font-size:15px;">
                                        <?php
                                        use App\Flexhire;use App\Hire;$lastlogin = Sentinel::getUser()->last_login;
                                        echo date('d M Y h.i.s A',strtotime($lastlogin));
                                        ?>
                                    </p>
                                    <span class="info-box-title">Last Login</span>
                                </div>
                                <div class="info-box-icon">
                                    <i class="icon-eye"></i>
                                </div>
                                <div class="info-box-progress">
                                    <div class="progress progress-xs progress-squared bs-n">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>
                                    <span >
                                       <?php
                                        $hires = Hire::withCount(['user'=>function ($query){
                                            $user = Sentinel::getUser()->getUserId();
                                            $query->where('user_id', 'like', $user);
                                        }])->pluck('user_count');
                                        echo $hires;
                                            ?>
                                    </span>
                                    </p>
                                    <span class="info-box-title">Number of Hires</span>
                                </div>
                                <div class="info-box-icon">
                                    <i class=" icon-user-follow"></i>
                                </div>
                                <div class="info-box-progress">
                                    <div class="progress progress-xs progress-squared bs-n">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel info-box panel-white">
                            <div class="panel-body">
                                <div class="info-box-stats">
                                    <p>
                                    <span >
                                        <?php
                                        $flexhires = Flexhire::withCount(['user'=>function ($query){
                                            $user = Sentinel::getUser()->getUserId();
                                            $query->where('user_id', 'like', $user);
                                        }])->pluck('user_count');
                                        echo $flexhires;
                                            ?>

                                    </span>
                                    </p>
                                    <span class="info-box-title">Number of Flex Hires</span>
                                </div>
                                <div class="info-box-icon">
                                    <i class="icon-envelope"></i>
                                </div>
                                <div class="info-box-progress">
                                    <div class="progress progress-xs progress-squared bs-n">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <h4 class="panel-title">Job Filter</h4>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive project-stats">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Title</th>
                                            <th>Location</th>
                                            <th>Deadline</th>
                                            <th>Date Added</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--@foreach($internships as $internship)--}}
                                        {{--<tr>--}}
                                            {{--<th scope="row">{{$internship->id}}</th>--}}
                                            {{--<td>{{$internship->job_title}}</td>--}}
                                            {{--<td>{{$internship->location_name}}</td>--}}
                                            {{--<td>{{$internship->deadline}}</td>--}}
                                            {{--<td>{{$internship->dateadded}}</td>--}}
                                        {{--</tr>--}}
                                       {{--@endforeach--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">&copy; WorthAfrica. <?php echo date('Y');?>  </p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
@stop
@section('nav')
    @stop
@section('scripts')
    <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

@stop