@extends('layouts.layout')
@section('header')
    <title>Permanent Hire</title>
@endsection
@section('navigation')
@endsection

@section('cover')
    <header class="page-title pt-dark pt-plax-md-dark" data-stellar-background-ratio="0.3">
        <div class="bg-overlay">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <h1>Permanent Hire</h1>
                        <span class="subheading">Your Recent Permanent Hire Posts </span>
                    </div>
                    <ol class="col-sm-6 text-right breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Employers</a></li>
                        <li class="active">Permanent Hire</li>
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
                        <h1 class="text-master ">Your Permanent Hire Posts</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @forelse($hires as $hire)

        <div class="row">
            <div class="col-md-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Job by <u>{{$hire->organisation_name}}</u></h5>
                    </div>
                    <div class="panel-body">
                        <span><b>Qualifications Needed include</b></span>
                        <p class="t-description">{{$hire->ShortContent}}</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-small" href="/hire/{{$hire->id}}">Read More</a>
                    </div>
                </div>
            </div>
            @empty
                <h3 class="text-center">You don't Have any Job Posts available</h3>
        </div>

    @endforelse
    <div class="row">
        <div class="col-md-8 col-lg-offset-3">
            {{$hires->links()}}
        </div>
    </div>

@endsection


@section('footer')
@endsection
@section('scripts')

@stop