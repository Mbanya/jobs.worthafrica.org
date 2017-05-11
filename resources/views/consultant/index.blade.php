@extends('layouts.layout')
@section('header')
    <title>Flex Hire</title>
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
                    <span class="subheading">Flex hire</span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li class="active">Employer</li>
                </ol>

            </div><!-- / .row -->
        </div>
    </header>

@endsection

@section('content')

    @forelse($flexhires as $flexhire)
        <div class="body-content clearfix" >
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-offset-3">
                        <!-- box listing -->
                        <div class="block-section-sm box-list-area">

                            <!-- item list -->
                            <div class="box-list">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <h3 class="no-margin-top"><a href="" class=""><u>Organisation Name</u> {{$flexhire->organisation_name}}</a></h3>
                                            <h5><span class="color-black"><u>Organisation Type</u> {{$flexhire->organisation_type}}</span> - <span class="color-white-mute"> <u>Physical Address</u> {{$flexhire->Physical_Address}}</span></h5>
                                            <u>Job Qualification Details</u><p class="text-truncate ">{{$flexhire->Qualification_Description}}</p>
                                            <div><span class="color-white-mute"><u>Start Date</u> {{$flexhire->start_date}}</span></div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-small">Edit</button>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-small">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end item list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @empty
                No FlexHires available
    @endforelse


@endsection





@section('footer')
@endsection
@section('scripts')

@stop