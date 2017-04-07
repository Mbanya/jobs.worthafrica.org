@extends('layouts.forms_layout')
@section('header')
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
                    <span class="subheading">Looking to hire?</span>
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

    <div class="login-2">
        <div class="bg-overlay">

            <div class="container">
                <div class="row ws-m">
                    <div class="col-md-offset-1 col-md-10">

                        <div class="form-wrapper">
                            <div class="form-content">
                                <ol>
                                {!! Form::open(
  array(
    'route' => 'flex_hire.store',
    'class' => 'form')
  ) !!}
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        There were some problems adding the job posting.<br />
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <li><h3>Organisation Details</h3></li>
                            <div class="row">
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Organisation Name') !!}
                                    {!! Form::text('organisation_name', null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Organisation Name'
                                      )) !!}
                                </div>
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Organisation Size') !!}
                                    {!! Form::select('organisation_size',['1-15'=>'1-15','16-50'=>'16-50','51-200'=>'51-200','201-500','201-500','501-above'=>'501-above'], null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Choose One'
                                            )) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Organisation Type') !!}
                                    {!! Form::select('organisation_type',['Start-Up'=>'Start-Up','Agency'=>'Agency','SME'=>'SME','Large -Corporation','Large -Corporation','Governmental Institution'=>'Governmental Institution'], null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Choose One'
                                            )) !!}
                                </div>
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Physical Address') !!}
                                    {!! Form::text('Physical_Address', null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Physical Address'
                                      )) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 no-gap-right">
                                {!! Form::label('Contact Email') !!}
                                {!! Form::email('email', null,
                                  array(
                                    'class'=>'form-control',
                                    'placeholder'=>'Enter contact email'
                                  )) !!}
                            </div>
                            </div>
                                    <li><h3>Qualifications Required</h3></li>
                            <div class="row">
                                <div class="form-group col-md-8 no-gap-right">
                                {!! Form::label('Highest education') !!}
                                {!! Form::select('key_qualification',['Form 4 graduate'=>'Form 4 graduate','Certificate Diploma/'=>'Certificate/Diploma','Masters'=>'Masters','PHD','PHD','Does not Matter'=>'Does not Matter'], null,
                                  array(
                                    'class'=>'form-control',
                                    'placeholder'=>'Choose One'
                                        )) !!}
                            </div>
                                <div class="form-group col-md-8 no-gap-right">
                                    {!! Form::label('Qualification Description') !!}
                                    {!! Form::textarea('Qualification_Description', null,
                                      array(
                                        'class'=>'form-control',
                                        'cols'=>50,
                                        'row'=>5,
                                        'placeholder'=>'Do candidates need education in a specific subject (e.g. diploma or degree in marketing or communication)? If so, please indicate further here.'
                                      )) !!}
                                </div>
                            </div>
                                    <div class="row">
                                <div class="form-group col-md-8 no-gap-right">
                                    {!! Form::label('Years of Experience') !!}
                                    {!! Form::select('experience',['Under 3 years'=>'Under 3 years','4-15 years'=>'4-15 years','Above 15 years'=>'Above 15 years'], null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Years of working experience'
                                            )) !!}
                                </div>
                                <div class="form-group col-md-8 no-gap-right">
                                    {!! Form::label('Key Responsibilities') !!}
                                    {!! Form::textarea('Responsibilities', null,
                                      array(
                                        'class'=>'form-control',
                                        'cols'=>50,
                                        'row'=>5,
                                        'placeholder'=>'What are the tasks that the person will be responsible for on a day to day basis? (e.g. Plan weekly travel arrangements for the CEO, clean up viruses from office computers)'
                                      )) !!}
                                </div>
                                    </div>
                                    <div class="row">
                                <div class="form-group col-md-8 no-gap-right">
                                    {!! Form::label('Key Skills') !!}
                                    {!! Form::textarea('skills', null,
                                      array(
                                        'class'=>'form-control',
                                        'cols'=>50,
                                        'row'=>5,
                                        'placeholder'=>'What are the key skills required for this job Example (Software Development, Google Digital Marketing...etc)'
                                      )) !!}
                                </div>
                                    </div>
                                    <li><h3>Other Requirements</h3></li>
                                    <div class="row">
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Minimum Salary') !!}
                                    {!! Form::number('minSal', null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Minimum Salary'
                                      )) !!}
                                </div>
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Maximum Salary') !!}
                                    {!! Form::number('maxSal', null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Maximum Salary'
                                      )) !!}
                                </div>
                                    </div>
                                    <div class="row">
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Frequency of Payment') !!}
                                    {!! Form::select('Frequency_Rate',['Per Hour'=>'Per Hour','Per day'=>'Per day','Per Week'=>'Per Week'], null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Payment Model'
                                            )) !!}
                                </div>
                                <div class="form-group col-md-6 no-gap-right">
                                    {!! Form::label('Expected Start Date') !!}
                                    {!! Form::date('stdate', \Carbon\Carbon::now(),null,
                                      array(
                                        'class'=>'form-control',
                                        'placeholder'=>'Start Date'
                                             )) !!}
                                </div>
                                    </div>

                                <div class="form-group">
                                    {!! Form::submit('Create Job Posting!',
                                      array('class'=>'btn btn-primary'
                                    )) !!}
                                </div>
                                {!! Form::close() !!}
                                </ol>
                            </div>

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