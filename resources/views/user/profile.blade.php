@extends('layouts.app')

<style>
    .profile-img{
        max-width: 150px;
        border: 5px solid #000000;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0,0,0,0.4);
    }
</style>
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <img src="{{url('images/team-1.jpg')}}" class="profile-img">

                    <h3>{{Sentinel::getUser()->email}}</h3>
                    <h3></h3>
                </div>
            </div>
        </div>
    </div>
    @endsection