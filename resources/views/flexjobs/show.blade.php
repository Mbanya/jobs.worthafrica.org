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
                        <h5>Job by <u>{{$hire->organisation_name}}</u></h5>
                    </div>
                    <div class="panel-body">
                        <span><b>Qualifications Needed include</b></span>
                        <p class="t-description">{{$hire->key_qualification}}</p><br>
                        <p class="t-description">{{$hire->Qualification_Description}}</p>
                        <hr>
                        <span><b>Responsibilities include</b></span>
                        <p class="t-description">{{$hire->Responsibilities}}</p> <br>

                        <span><b>Skills Required for the Job</b></span>
                        <p class="t-description">{{$hire->skills}}</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <a href="{{redirect()->back()}}" class="btn btn-block pull-center">Back</a>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
@endsection
@section('scripts')

@stop