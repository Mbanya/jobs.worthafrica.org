@extends('layouts.organisation_layout')
@section('header')
    <title>Flex Hire</title>
    <link class="main-stylesheet" href="{{asset('/css/pages.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('navigation')
@endsection

@section('cover')
    <header class="page-title pt-dark pt-plax-md-dark" data-stellar-background-ratio="0.3">
        <div class="bg-overlay">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <h1>Flex Hire</h1>
                        <span class="subheading">Your Recent Flex Hire Posts </span>
                    </div>
                    <ol class="col-sm-6 text-right breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Employers</a></li>
                        <li class="active">Flex Hire</li>
                    </ol>

                </div>
            </div>
        </div>
    </header>

@endsection
@section('content')
    <header>
        <div class="bg-overlay" style="padding-bottom: 55px">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-md-offset-3">
    <h1 class="text-master ">Your Flex Hire Posts</h1>
        </div>
            </div>
        </div>
        </div>
    </header>

    @forelse($flexhires as $flexhire)

    <div class="row">

        <div class="col-md-6 col-lg-offset-3">
            @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Job by <u>{{$flexhire->organisation_name}}</u></h5>
                </div>
                <div class="panel-body">
                    <span><b>Qualifications Needed include</b></span>
                    <p class="t-description">{{$flexhire->ShortContent}}</p>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-small" href="/flexhire/{{$flexhire->id}}">Read More</a>
                    <a class="btn btn-small" href="/flexhire/{{$flexhire->id}}/edit">Edit</a>
                </div>
            </div>
        </div>
        @empty
            <h3 class="text-center">You don't Have any Job Posts available</h3>
    </div>

@endforelse
    <div class="row">
      <div class="col-md-8 col-lg-offset-3">
                {{$flexhires->links()}}
      </div>
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
            <p class="fs-12 hint-text p-t-10 text-white">Copyright &copy; 2017. All Rights Reserved </p>
        </div>
    </section>
@endsection


@section('footer')
@endsection
@section('scripts')

@stop