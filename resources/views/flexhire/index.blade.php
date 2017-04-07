@extends('layouts.la')
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
    <!-- ========== Login From ========== -->
            <div class="container">
                @forelse($flexhires as $flexhire)
                    <div class="col-md-offset-3 col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <span>William Mbanya</span>
                            <span class="pull-right">
                                {{ $flexhire->responsibilities }}

                            </span>
                        </div>
                        </div>
                    </div>
                    @endforelse
            </div>

@endsection

@section('footer')
@endsection
@section('scripts')

@stop