@extends('layouts.forms_layout')
@section('header')
    <title>Permanet Hire</title>
@endsection
@section('navigation')
@endsection

@section('cover')
    <!-- ========== Page Title ========== -->

    <header class="page-title pt-large pt-dark pt-plax-lg-dark">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Job Seekers</h1>
                    <span class="subheading">Create Profile</span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li class="active">Job Post</li>
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
                                <h3 class="form-header">Flex Jobs</h3>
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
                                <form action="/flexjob" role="form" method="POST">
                                {{ csrf_field() }}
                                <!-- Organisation  Name -->
                                    <ol>
                                        <li><h3 class="t-description">Personal Details</h3></li>
                                        <!--First Name -->
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                                <input type="text"  class="form-control" name="first_name" placeholder=" Enter FirstName" required autofocus>
                                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                <label for="txt-forms">First Name</label>

                                            </div>
                                            <input type="hidden" name="user_id" value="{{Sentinel::getUser()->getUserId()}}">
                                            <!-- Last Name -->
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('last_name') ? 'has-error' : '' }}" >
                                                <input type="text"  class="form-control" name="last_name" placeholder=" Enter LastName" required autofocus>
                                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                                <label for="txt-forms">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Email -->
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('email') ? 'has-error' : '' }}" >
                                                <div class="form-group col-md-10 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                                    <input type="email"  name="email" class="form-control" value="{{old('email')}}" placeholder="Enter contact email" required autofocus>
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    <label>Contact Email</label>
                                                </div>
                                            </div>
                                            <!-- Location -->
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}" >
                                                <input type="tel" name="phone_number"value="{{old('phone_number')}}"  class="form-control" placeholder="Enter Your Phone Number " required autofocus>
                                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                                <label>Phone Number</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Qualifications</h3> </li>
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('key_qualification') ? 'has-error' : '' }}">
                                                <select name="key_qualification" class="form-control" id="select-form">
                                                    <option selected disabled>Choose One</option>
                                                    <option value="Form 4 graduate">Form 4 Graduate</option>
                                                    <option value="Certificate/Diploma">Diploma</option>
                                                    <option value="Degree">Degree</option>
                                                    <option value="Masters">Masters/PHD</option>
                                                    <option value="PHD">PHD</option>
                                                    <option value="none">None</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('key_qualification') }}</span>
                                                <label for="select-form">Highest education</label>
                                            </div>
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('other_key_qualification') ? 'has-error' : '' }}">
                                                <select name="other_key_qualification" class="form-control" id="select-form">
                                                    <option selected disabled>Choose One</option>
                                                    <option value="Form 4 graduate">Form 4 Graduate</option>
                                                    <option value="Certificate Program">Certificate Program</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Masters/PHD">Masters/PHD</option>
                                                    <option value="none">None</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('other_key_qualification') }}</span>
                                                <label for="select-form">Other education</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('experience') ? 'has-error' : '' }}">
                                                <select name="experience" class="form-control" id="select-form">
                                                    <option selected disabled>Years of working experience</option>
                                                    <option value="Under 3 years">Under 3 years</option>
                                                    <option value="4-15 years">4-15 years-</option>
                                                    <option value="Above 15 years">Above 15 years</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('experience') }}</span>
                                                <label for="select-form">Years of Experience</label>
                                            </div>
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('skills') ? 'has-error' : '' }}">
                                                <textarea class="form-control" name="skills"  placeholder="What Skills do you have Eg (Software Development, Google Digital Marketing...etc)"></textarea>
                                                <span class="text-danger">{{ $errors->first('skills') }}</span>
                                                <label for="txt-forms">Key Skills</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Work Information</h3></li>
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('CV') ? 'has-error' : '' }}">
                                                <label for="txt-forms">Upload CV</label>
                                                <input type="file" name="CV" required>
                                                <span class="text-danger">{{ $errors->first('CV') }}</span>
                                                <p class="help-block">Only PDF &.DOCX allowed</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('profession') ? 'has-error' : '' }}">
                                                <input type="text" class="form-control"name="profession" placeholder="What is your Profession">
                                                <span class="text-danger">{{ $errors->first('profession') }}</span>
                                                <label for="txt-form">Profession</label>
                                            </div>
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('availability') ? 'has-error' : '' }}">
                                                <select name="availability" class="form-control" id="select-form">
                                                    <option selected disabled>Choose One</option>
                                                    <option value="Immediately">Immediately</option>
                                                    <option value=" Within 1 week">Within 1 week</option>
                                                    <option value="Within 2 weeks">Within 2 weeks</option>
                                                    <option value="Within 3 weeks">Within 3 weeks</option>
                                                    <option value="Within 4 weeks">Within 4 weeks</option>
                                                    <option value="Within 3 months">Within 3 months</option>
                                                </select>
                                                <label for="select-form">Availability</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn pull-left" value="Submit Profile">
                                            </div>
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