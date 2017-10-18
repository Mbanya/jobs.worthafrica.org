@extends('layouts.layout')
@section('header')
@endsection
@section('navigation')
    <title>Flex Jobs</title>
@endsection

@section('cover')
    <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.3">
        <div class="bg-overlay">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <h1>Flex Jobs</h1>
                        <span class="subheading">Your Recent Flex Job Profile Posts </span>
                    </div>
                    <ol class="col-sm-6 text-right breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('job_seeker')}}">Job Seeker</a></li>
                        <li class="active">Flex Jobs</li>
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
                        <h1 class="text-master ">Your FlexJob</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @forelse($flexjobs as $flexjob)
        <div class="row">
            <div class="col-md-6 col-lg-offset-3">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Profile For  <u>{{$flexjob->first_name}} {{$flexjob->last_name}}</u></h5>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <h5><b>Contact Details include</b></h5>
                            <div class="col-md-6 col-md-offset-2">
                                <blockquote class="t-description"><u>Email</u> {{$flexjob->email}}</blockquote>
                                <blockquote class="t-description"><u>Phone Number</u> {{$flexjob->phone_number}}</blockquote>
                            </div>

                        </div>

                        <div class="row">
                            <h5><b>Qualifications</b></h5>
                            <div class="col-md-6 col-md-offset-2">
                            <blockquote class="t-description"><u>Key Qualification</u> {{$flexjob->key_qualification}}</blockquote>
                            <blockquote class="t-description"><u>Experience in Years</u> {{$flexjob->experience}}</blockquote>
                            </div>
                        </div>
                        <div class="row">
                        <h5><b>Work Details</b></h5>
                            <div class="col-md-6 col-md-offset-2">
                        <blockquote class="t-description"><u>Current Profession</u> {{$flexjob->profession}}</blockquote>
                        <blockquote class="t-description"><u>Availability</u> {{$flexjob->availability}}</blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        {{--<a class="btn btn-small" href="/hire/{{$flexjob->id}}">Read More</a>--}}
                    </div>
                </div>
            </div>
            @empty
                <h3 class="text-center">You don't Have a profile available</h3>
        </div>

    @endforelse
    <div class="row">
        <div class="col-md-8 col-lg-offset-3">
            {{$flexjobs->links()}}
        </div>
    </div>

@endsection


@section('footer')
@endsection
@section('scripts')

@stop