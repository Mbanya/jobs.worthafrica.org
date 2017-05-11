@extends('layouts.layout')
@section('header')
    <title>Permanent Jobs</title>
@endsection
@section('navigation')
@endsection

@section('cover')
    <header class="page-title pt-dark pt-plax-md-dark" data-stellar-background-ratio="0.3">
        <div class="bg-overlay">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <h1>Flex Jobs</h1>
                        <span class="subheading">Your Job Profile </span>
                    </div>
                    <ol class="col-sm-6 text-right breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="{{route('job_seeker')}}">Job Seeker</a></li>
                        <li class="active">Permanent Jobs</li>
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
                        <h1 class="text-master ">Your Permanent Job Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @forelse($jobs as $job)
        <div class="row">
            <div class="col-md-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Profile For  <u>{{$job->first_name}} {{$job->last_name}}</u></h5>
                    </div>
                    <div class="panel-body">
                        <span><b>Personal Details</b></span>
                        <p class="t-description">First Name: {{$job->first_name}}</p>
                        <p class="t-description">Last Name: {{$job->last_name}}</p>
                        <p class="t-description">Email: {{$job->email}}</p>
                            <hr>
                        <span><b>Your Qualifications include</b></span>
                        <p class="t-description">Highest Education: {{$job->key_qualification}}</p>
                        <p class="t-description">Other Qualification(s): {{$job->other_key_qualification}}</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-small" href="/jobs/{{$job->id}}">Read More</a>
                        <a class="btn btn-small" href="/jobs/{{$job->id}}/edit">Edit</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="panel-default">
                    <div class="panel-body">
                        <h3 class="text-center">You don't Have a profile available</h3>
                    </div>
                </div>

        </div>

    @endforelse
    <div class="row">
        <div class="col-md-8 col-lg-offset-3">
            {{$jobs->links()}}
        </div>
    </div>

@endsection


@section('footer')
@endsection
@section('scripts')

@stop