@extends('layouts.layout')
<title>Employer </title>
@section('assets')
    <link class="main-stylesheet" href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
    <link class="main-stylesheet" href="{{asset('css/duma.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('navigation')
@endsection

@section('cover')
    <!-- ========== Page Title ========== -->

    <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1>Employer </h1>
                    <span class="subheading">Services</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="{{url('index')}}">Home</a></li>
                    <li><a href="{{url('index')}}">Services</a></li>
                    <li class="active">Employer</li>
                </ol>
            </div>
        </div>
    </header>
@endsection


@section('content')
    <section id="about" class="container no-gap-right">
        <div id="signup-choice">
            <div class="row">
                <div class="small-12 medium-12 large-5 columns p-t-20">
                    <h1>Job Filter Code.<br> </h1>
                    <h4>Save Time & Money</h4>
                    <span class="et-search pull-center-inner p-t-15 p-b-15" style="font-size: 170px;"></span>
                    <div class="p-t-15 p-b-25">
                        <a class="btn-block btn btn-solid" href="{{route('posts.create')}}">Get Started</a>
                    </div>
                </div>
                <div class="large-2 column show-for-large-up o-or-divider">OR</div>
                <hr class="hide-for-large-up">
                <div class="small-12 medium-12 large-5 columns p-t-20">
                    <h1>Find Talent</h1>
                    <h4>Grow your Buisness</h4>
                    <i class="fa fa-handshake-o  p-t-15 p-b-15" style="font-size: 170px" aria-hidden="true"></i>
                    <div class="p-t-15 p-b-25">
                        <a class="btn-block btn btn-solid" href="{{route('employer')}}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li class="m-b-5 no-padding"><a href="http://nexus.worthafrica.org/" class="link text-white ">Nexus</a></li>
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
            <p class="fs-12 hint-text p-t-10 text-white">Copyright &copy; 2017. All Rights Reserved </p>
        </div>
    </section>
@endsection



@section('scripts')
@endsection
