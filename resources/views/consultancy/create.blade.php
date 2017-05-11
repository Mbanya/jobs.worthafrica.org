@extends('layouts.forms_layout')
@section('header')
    <title>TOR Assignment</title>
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
                    <span class="subheading">Create TOR Post</span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('consult_hub')}}">Consult_hub</a></li>
                    <li class="active">TOR</li>
                </ol>

            </div><!-- / .row -->
        </div>
    </header>

@endsection

@section('content')
    <!-- ========== Login From ========== -->

    <div class="login-2">
        <div class="bg-overlay">

            <div class="container">
                <div class="row ws-m">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="form-wrapper">
                            <div class="form-content">
                                <h3 class="form-header">TOR </h3>
                                @if(count($errors))
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <br/>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('message'))
                                    <div class="alert alert-success">
                                        {{session('message')}}
                                    </div>

                                @endif
                                <form action="{{route('tor.store')}}" role="form" method="POST">
                                {{ csrf_field() }}
                                    <ol>
                                        <li><h3 class="t-description">Details</h3> </li>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('title') ? 'has-error' : '' }}">
                                                <input type="text" name="title" class="form-control">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                                <label for="txt-forms">Title of Assignment</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-10 no-gap-right{{ $errors->has('summary') ? 'has-error' : '' }}">
                                                <textarea class="form-control" name=" summary" id="txt-forms" rows="10" placeholder="Do candidates need education in a specific subject (e.g. diploma or degree in marketing or communication)? If so, please indicate further here."></textarea>
                                                <span class="text-danger">{{ $errors->first('summary') }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Date -->
                                            <div class="form-group col-md-5 no-gap-right{{ $errors->has('start_date') ? 'has-error' : '' }}">
                                                <input class="form-control" type="date" name="start_date" id="date-form">
                                                <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                <label for="date-form">Expected Start Date</label>
                                            </div>
                                            <div class="form-group col-md-6 no-gap-right">
                                                <label>TOR document</label>
                                                <input type="file" class="form-control" name="tor">
                                                <p class="help-block">Only PDF &.DOCX allowed</p>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn pull-left" value="Submit Assignment">
                                            </div>
                                        </div>
                                    </ol>
                                </form>

                            </div><!-- / .col-md-10 -->
                        </div><!-- / .row -->
                    </div><!-- / .container -->
                </div>
            </div>
        </div><!-- / .bg-overlay -->
    </div><!-- / .bg-login -->

@endsection

@section('footer')
@endsection
@section('scripts')

@stop