@extends('layouts.forms_layout')
@section('header')
    <title>Mock Interview</title>
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
                    <span class="subheading">Mock Interview </span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{url('services')}}">Services</a></li>
                    <li class="active">Mock Interview</li>
                </ol>

            </div><!-- / .row -->
        </div>
    </header>
    {{--<script>--}}
        {{--$(".form").each(function()--}}
        {{--{--}}
            {{--if ($(this).find(".service").val() == "level2")--}}
                {{--$(this).find(".level2").show();--}}
            {{--else--}}
                {{--$(this).find(".level1").hide();--}}

            {{--if  ($(this).find(".service").val()=="level1")--}}
                {{--$(this).find(".level1").show();--}}
            {{--else--}}
                {{--$(this).find(".level2").hide();--}}
        {{--});--}}
    {{--</script>--}}
@endsection

@section('content')
    <!-- ==========  From ========== -->

    <div class="login-2">
        <div class="bg-overlay">

            <div class="container">
                <div class="row ws-m">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="form-wrapper">
                            <div class="form-content">
                                <h3 class="form-header">Mock Interview For Professionals</h3>
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
                                <form>
                                    <input type="hidden" class="service" value="{{session('service')}}">
                                </form>

                                <form action="/mock" id="form" role="form" class="level2" method="POST">
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
                                                <div class="form-group col-md-6 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                                    <input type="email"  name="email" class="form-control" value="{{old('email')}}" placeholder="Enter contact email" required autofocus>
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    <label>Contact Email</label>
                                                </div>
                                            <!-- Phone -->
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}" >
                                                <input type="tel" name="phone_number"value="{{old('phone_number')}}"  class="form-control" placeholder="Enter Your Phone Number " required autofocus>
                                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                                <label>Phone Number</label>
                                            </div>
                                        </div>
                                        <li><h3 class="t-description">Other Information</h3> </li>
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('category') ? 'has-error' : '' }}">
                                                <select name="category" class="form-control" required >
                                                    <option value='1' selected disabled>Please select</option>
                                                    <option value="Accounting Auditing">Accounting &amp; Auditing</option>
                                                    <option value="Banking  Micro-finance">Banking &amp; Micro-finance </option>
                                                    <option value="Executive/Top Management">Executive/Top Management</option>
                                                    <option value="Creatives (Art,Design,Fashion)">Creatives (Art,Design,Fashion)</option>
                                                    <option value="Customer Service  Customer Support">Customer Service &amp; Customer Support</option>
                                                    <option value="Education  Training">Education &amp; Training</option>
                                                    <option value="Engineering/Mechanics/Construction">Engineering/Mechanics/Construction</option>
                                                    <option value="Farming  Agriculture">Farming &amp; Agriculture</option>
                                                    <option value="Government">Government</option>
                                                    <option value="Healthcare  Pharmaceutical">Healthcare &amp; Pharmaceutical</option>
                                                    <option value="Human Resources  Recruitment">Human Resources &amp; Recruitment</option>
                                                    <option value="Insurance">Insurance</option>
                                                    <option value="IT  Telecommunication">IT &amp; Telecoms</option>
                                                    <option value="Legal">Legal</option>
                                                    <option value="Manufacturing/Production">Manufacturing/Production</option>
                                                    <option value="Marketing, Communications  PR">Marketing, Communications &amp; PR</option>
                                                    <option value="NGO, Community  Social Develpoment">NGO, Community &amp; Social Develpoment</option>
                                                    <option value="Administration  Office Support">Administration &amp; Office Support</option>
                                                    <option value="Project / Programme Management">Project / Programme Management</option>
                                                    <option value="Research, Quality Control/ Quality Assurance">Research, Quality Control/ Quality Assurance</option>
                                                    <option value="Retail">Retail</option>
                                                    <option value="Sales/Business Development">Sales/Business Development</option>
                                                    <option value="Security">Security</option>
                                                    <option value="Strategy  Consulting">Strategy &amp; Consulting</option>
                                                    <option value="Tourism Travel">Tourism &amp; Travel</option>
                                                    <option value="Trades  Services">Trades &amp; Services</option>
                                                    <option value="Transport , Logistics, Procurement">Transport , Logistics, Procurement</option>
                                                    <option value="Real Estate">Real Estate</option>
                                                    <option value="Hospitality/Leisure/Travel">Hospitality/Leisure/Travel</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                                <label for="select-form">In what industry is the Job</label>
                                            </div>
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('date_interview') ? 'has-error' : '' }}">
                                                <input type="date" name="date_interview" class="form-control" name="">
                                                <span class="text-danger">{{ $errors->first('date_interview') }}</span>
                                                <label for="select-form">Date of Interview</label>
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
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('JD') ? 'has-error' : '' }}">
                                                <label for="txt-forms">Upload Job Description</label>
                                                <input type="file" name="JD" required>
                                                <span class="text-danger">{{ $errors->first('JD') }}</span>
                                                <p class="help-block">Only PDF &.DOCX allowed</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="submit" class="btn pull-left" value="Submit Profile">
                                            </div>
                                        </div>
                                    </ol>
                                </form>
                            </div>



                                <div class="form-wrapper">
                                    <div class="form-content">
                                        <h3 class="form-header">Mock Interview For Students</h3>
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

                                        <form action="/mock" id="form" role="form" class="level1" method="POST">
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
                                                    <div class="form-group col-md-6 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                                        <input type="email"  name="email" class="form-control" value="{{old('email')}}" placeholder="Enter contact email" required autofocus>
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        <label>Contact Email</label>
                                                    </div>
                                                    <!-- Phone -->
                                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}" >
                                                        <input type="tel" name="phone_number"value="{{old('phone_number')}}"  class="form-control" placeholder="Enter Your Phone Number " required autofocus>
                                                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                                        <label>Phone Number</label>
                                                    </div>
                                                </div>
                                                <li><h3 class="t-description">Other Information</h3> </li>
                                                <div class="row">
                                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('category') ? 'has-error' : '' }}">
                                                        <select name="category" class="form-control" required >
                                                            <option value='1' selected disabled>Please select</option>
                                                            <option value="Accounting Auditing">Accounting &amp; Auditing</option>
                                                            <option value="Banking  Micro-finance">Banking &amp; Micro-finance </option>
                                                            <option value="Executive/Top Management">Executive/Top Management</option>
                                                            <option value="Creatives (Art,Design,Fashion)">Creatives (Art,Design,Fashion)</option>
                                                            <option value="Customer Service  Customer Support">Customer Service &amp; Customer Support</option>
                                                            <option value="Education  Training">Education &amp; Training</option>
                                                            <option value="Engineering/Mechanics/Construction">Engineering/Mechanics/Construction</option>
                                                            <option value="Farming  Agriculture">Farming &amp; Agriculture</option>
                                                            <option value="Government">Government</option>
                                                            <option value="Healthcare  Pharmaceutical">Healthcare &amp; Pharmaceutical</option>
                                                            <option value="Human Resources  Recruitment">Human Resources &amp; Recruitment</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="IT  Telecommunication">IT &amp; Telecoms</option>
                                                            <option value="Legal">Legal</option>
                                                            <option value="Manufacturing/Production">Manufacturing/Production</option>
                                                            <option value="Marketing, Communications  PR">Marketing, Communications &amp; PR</option>
                                                            <option value="NGO, Community  Social Develpoment">NGO, Community &amp; Social Develpoment</option>
                                                            <option value="Administration  Office Support">Administration &amp; Office Support</option>
                                                            <option value="Project / Programme Management">Project / Programme Management</option>
                                                            <option value="Research, Quality Control/ Quality Assurance">Research, Quality Control/ Quality Assurance</option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Sales/Business Development">Sales/Business Development</option>
                                                            <option value="Security">Security</option>
                                                            <option value="Strategy  Consulting">Strategy &amp; Consulting</option>
                                                            <option value="Tourism Travel">Tourism &amp; Travel</option>
                                                            <option value="Trades  Services">Trades &amp; Services</option>
                                                            <option value="Transport , Logistics, Procurement">Transport , Logistics, Procurement</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Hospitality/Leisure/Travel">Hospitality/Leisure/Travel</option>
                                                        </select>
                                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                                        <label for="select-form"> Industry of Interest</label>
                                                    </div>
                                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('major') ? 'has-error' : '' }}">
                                                        <input type="text" name="major" class="form-control" name="">
                                                        <span class="text-danger">{{ $errors->first('degree_major') }}</span>
                                                        <label for="select-form">Major</label>
                                                    </div>

                                                </div>
                                                <li><h3 class="t-description">Work Information</h3></li>
                                                <div class="row">
                                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('CV') ? 'has-error' : '' }}">
                                                        <label for="txt-forms">Upload CV</label>
                                                        <input type="file" name="CV" >
                                                        <span class="text-danger">{{ $errors->first('CV') }}</span>
                                                        <p class="help-block">Only PDF &.DOCX allowed</p>
                                                    </div>
                                                    <div class="form-group col-md-6 no-gap-right{{ $errors->has('JD') ? 'has-error' : '' }}">
                                                        <label for="txt-forms">Upload Cover Letter</label>
                                                        <input type="file" name="cover" >
                                                        <span class="text-danger">{{ $errors->first('JD') }}</span>
                                                        <p class="help-block">Only PDF &.DOCX allowed</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <input type="submit" class="btn pull-left" value="Submit Profile">
                                                    </div>
                                                </div>
                                            </ol>
                                        </form>
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