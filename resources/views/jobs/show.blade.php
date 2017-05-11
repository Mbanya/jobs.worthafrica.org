@extends('layouts.layout')
@section('header')
    <title>Permanent Hire</title>
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
                    <span class="subheading">Permanent hire</span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li class="active">Permanent Hire</li>
                </ol>

            </div><!-- / .row -->
        </div>
    </header>

@endsection

@section('content')
    <header>
        <div class="bg-overlay" style="padding-bottom: 55px">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-md-offset-3">
                        <h1 class="text-master ">Your Permanent Hire Posts</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div container>
        <div class="row">
            <div class="col-md-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Profile for <u>{{$job->first_name}} {{$job->last_name}}</u></h3>
                    </div>
                    <div class="panel-body">
                        <span><b>Personal Details</b></span>
                        <p class="t-description">First Name: {{$job->first_name}}</p>
                        <p class="t-description">Last Name: {{$job->last_name}}</p>
                        <p class="t-description">Email: {{$job->email}}</p>
                        <p class="t-description">Phone Number: {{$job->phone}}</p>
                        <hr>
                        <span><b>Your Qualifications include</b></span>
                        <p class="t-description">Highest Education: {{$job->key_qualification}}</p>
                        <p class="t-description">Other Qualification(s): {{$job->other_key_qualification}}</p>
                        <p class="t-description">Experience in Years: {{$job->experience}}</p>
                        <p class="t-description">Key Skills: {{$job->skills}}</p>
                        <hr>
                        <span><b>Work Information</b></span>
                        <p class="t-description">Current Profession: {{$job->profession}}</p>
                        <p class="t-description">Availabile on: {{$job->availability}}</p>
                    </div>
                    <div class=" panel-footer">
                        <h4 class="t-description">Profile was Created on: {{$job->created_at}}</h4>
                        <a href="{{url('/jobs')}}" class="btn btn-small">Back</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
@endsection
@section('scripts')

@stop