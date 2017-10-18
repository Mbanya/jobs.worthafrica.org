@extends('layouts.dashboard_layout')
@section('assets')
    <title>Profile</title>
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
                                        <span class="user-name">{{Sentinel::getUser()->first_name. " ". Sentinel::getUser()->last_name}}<i class="fa fa-angle-down"></i></span>
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
            <div class="profile-cover">
                <div class="row">
                    <div class="col-md-12 profile-info">
                        <div class=" profile-info-value">
                            <h3>1020</h3>
                            <p>Followers</p>
                        </div>
                        <div class=" profile-info-value">
                            <h3>1780</h3>
                            <p>Friends</p>
                        </div>
                        <div class=" profile-info-value">
                            <h3>260</h3>
                            <p>Photos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-3 user-profile">
                        <h3 class="text-center">{{Sentinel::getUser()->first_name. " ". Sentinel::getUser()->last_name}}</h3>
                        <p class="text-center">
                            <?php
                            use App\Job;
                            $jobs = Job::with(['user'=>function ($query){
                            $user = Sentinel::getUser()->getUserId();
                            $query->where('user_id', 'like', $user);
                            }])->get()->pluck('profession');
                            if (array_key_exists('profession',$jobs)){
                                echo $jobs;
                            }else{
                                echo "No Profession listed";
                            }
                            ?>
                        </p>
                        <hr>
                        <ul class="list-unstyled text-center">
                            <li><p><i class="fa fa-map-marker m-r-xs"></i>
                                    <?php
                                    $jobs = Job::with(['user'=>function ($query){
                                        $user = Sentinel::getUser()->getUserId();
                                        $query->where('user_id', 'like', $user);
                                    }])->get()->pluck('location');
                                    if (array_key_exists('location',$jobs)){
                                        echo $jobs;
                                    }else{
                                        echo "No Location listed";
                                    }
                                    ?></p></li>
                            <li><p><i class="fa fa-envelope m-r-xs"></i><a href="#">{{Sentinel::getUser()->email}}</a></p></li>
                        </ul>
                        <hr>
                    </div>
                    <div class="col-md-6 m-t-lg">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <div class="post">
                                    <textarea class="form-control" placeholder="Post" rows="4=6"></textarea>
                                    <div class="post-options">
                                        <a href="#"><i class="icon-camera"></i></a>
                                        <a href="#"><i class="icon-camcorder"></i></a>
                                        <a href="#"><i class="icon-music-tone-alt"></i></a>
                                        <a href="#"><i class="icon-link"></i></a>
                                        <a href="#"><i class="icon-microphone"></i></a>
                                        <button class="btn btn-default pull-right">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-timeline">
                            <ul class="list-unstyled">
                                <li class="timeline-item">
                                    <div class="panel panel-white">
                                        <div class="panel-body">
                                            <div class="timeline-item-header">
                                                <img src="assets/images/avatar3.png" alt="">
                                                <p>Christopher palmer <span>Posted a Status</span></p>
                                                <small>5 hours ago</small>
                                            </div>
                                            <div class="timeline-item-post">
                                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                                <div class="timeline-options">
                                                    <a href="#"><i class="icon-like"></i> Like (7)</a>
                                                    <a href="#"><i class="icon-bubble"></i> Comment (2)</a>
                                                    <a href="#"><i class="icon-share"></i> Share (3)</a>
                                                </div>
                                                <div class="timeline-comment">
                                                    <div class="timeline-comment-header">
                                                        <img src="assets/images/avatar5.png" alt="">
                                                        <p>Nick Doe <small>1 hour ago</small></p>
                                                    </div>
                                                    <p class="timeline-comment-text">Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                                                </div>
                                                <div class="timeline-comment">
                                                    <div class="timeline-comment-header">
                                                        <img src="assets/images/avatar2.png" alt="">
                                                        <p>Sandra Smith <small>3 hours ago</small></p>
                                                    </div>
                                                    <p class="timeline-comment-text">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                </div>
                                                <textarea class="form-control" placeholder="Replay"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="panel panel-white">
                                        <div class="panel-body">
                                            <div class="timeline-item-header">
                                                <img src="assets/images/avatar2.png" alt="">
                                                <p>Sandra Smith <span>Uploaded Photo</span></p>
                                                <small>2 hours ago</small>
                                            </div>
                                            <div class="timeline-item-post">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                                                <img src="assets/images/post-image.jpg" alt="">
                                                <div class="timeline-options">
                                                    <a href="#"><i class="icon-like"></i> Like (14)</a>
                                                    <a href="#"><i class="icon-bubble"></i> Comment (1)</a>
                                                    <a href="#"><i class="icon-share"></i> Share (5)</a>
                                                </div>
                                                <div class="timeline-comment">
                                                    <div class="timeline-comment-header">
                                                        <img src="assets/images/avatar5.png" alt="">
                                                        <p>Nick Doe <small>1 hours ago</small></p>
                                                    </div>
                                                    <p class="timeline-comment-text">Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                                                </div>
                                                <textarea class="form-control" placeholder="Replay"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="panel panel-white">
                                        <div class="panel-body">
                                            <div class="timeline-item-header">
                                                <img src="assets/images/avatar5.png" alt="">
                                                <p>Nick Doe <span>Was in New York</span></p>
                                                <small>6 hours ago</small>
                                            </div>
                                            <div class="timeline-item-post">
                                                <div id="map-canvas" style="height: 200px; width: 100%;"></div>
                                                <div class="timeline-options">
                                                    <a href="#"><i class="icon-like"></i> Like (3)</a>
                                                    <a href="#"><i class="icon-bubble"></i> Comment (0)</a>
                                                    <a href="#"><i class="icon-share"></i> Share (2)</a>
                                                </div>
                                                <textarea class="form-control" placeholder="Write a comment..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 m-t-lg">
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <div class="panel-title">Team</div>
                            </div>
                            <div class="panel-body">
                                <div class="team">
                                    <div class="team-member">
                                        <div class="online on"></div>
                                        <img src="assets/images/avatar1.png" alt="">
                                    </div>
                                    <div class="team-member">
                                        <div class="online off"></div>
                                        <img src="assets/images/avatar2.png" alt="">
                                    </div>
                                    <div class="team-member">
                                        <div class="online on"></div>
                                        <img src="assets/images/avatar3.png" alt="">
                                    </div>
                                    <div class="team-member">
                                        <div class="online on"></div>
                                        <img src="assets/images/avatar5.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <div class="panel-title">Some Info</div>
                            </div>
                            <div class="panel-body">
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                            </div>
                        </div>
                        <div class="panel panel-white">
                            <div class="panel-heading">
                                <div class="panel-title">Skills</div>
                            </div>
                            <div class="panel-body">
                                <p>HTML5</p>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    </div>
                                </div>
                                <p>PHP</p>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    </div>
                                </div>
                                <p>Javascript</p>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-footer">
                <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

@stop
@section('nav')
@stop
@section('scripts')
@stop