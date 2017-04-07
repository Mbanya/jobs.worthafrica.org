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
                <ol class="col-md-offset-1 col-md-10">

                  <div class="form-wrapper">
                    <div class="form-content">
                      <h3 class="form-header">Looking to hire</h3>

                      <form action="" method="post" role="form">

                        <form action="{{ url('') }}" role="form" method="POST">
                        {{ csrf_field() }}
                        <!-- Organisation  Name -->
                            <ol>
                            <li><h3 class="t-description">Organisation Details</h3></li>
                          <div class="row">
                            <div class="form-group col-md-6 no-gap-right">
                              <input type="text"  class="form-control" name="Organisation" placeholder=" Organisation Name" required autofocus>
                              <label for="txt-forms">Organisation Name</label>

                            </div>
                            <!-- Organization Size -->
                            <div class="form-group col-md-6 no-gap-right" >
                              <select name="org_size" class="form-control" id="select-form">
                                <option selected disabled>Choose One</option>
                                <option value="1-15">1-15</option>
                                <option value="16-50">16-50</option>
                                <option value="51-200">51-200</option>
                                <option value="201-500">201-500</option>
                                <option value="501-above">501-above</option>
                              </select>
                              <label for="select-form">Organisation Size</label>
                            </div>
                          </div>
                          <div class="row">
                                <!-- Organization type -->
                            <div class="form-group col-md-6 no-gap-right" >
                              <select name="org_type" class="form-control" id="select-form">
                                <option selected disabled>Choose One</option>
                                <option value="Start-Up">Start-Up</option>
                                <option value="Agency">Agency</option>
                                <option value="SME">SME</option>
                                <option value="201-500">Large -Corporation</option>
                                <option value="Governmental Institution">Governmental Institution</option>
                              </select>
                              <label for="select-form">Organisation Type</label>
                            </div>
                                    <!-- Location -->
                            <div class="form-group col-md-6 no-gap-right" >
                              <input type="text" name="Headquarters"  class="form-control" placeholder="Physical Address " required autofocus>
                              <label>Headquarters</label>
                            </div>
                          </div>

                          <!-- Email -->
                          <div class="row">
                            <div class="form-group col-md-12 no-gap-right">
                              <input type="email"  name="email" class="form-control" placeholder="Enter contact email" required autofocus>
                              <label>Contact Email</label>
                            </div>
                          </div>
                                <li><h3 class="t-description">Qualifications</h3> </li>
                                <div class="row">
                                    <div class="form-group col-md-10 no-gap-right">
                                        <select name="key_qualification" class="form-control" id="select-form">
                                            <option selected disabled>Choose One</option>
                                            <option value="Form 4 graduate">Form 4 Graduate</option>
                                            <option value="Certificate/Diploma">Certificate/Diploma</option>
                                            <option value="Masters">Masters</option>
                                            <option value="PHD">PHD</option>
                                            <option value="Doesnt Matter">Doesn't Matter</option>
                                        </select>
                                        <label for="select-form">Highest education</label>
                                    </div>
                                    <div class="form-group col-md-10 no-gap-right">
                                        <textarea class="form-control" name="Qualification Description" id="txt-forms" rows="5" placeholder="If candidates need education in a specific subject (e.g. diploma or degree in marketing or communication)? If so, please indicate further here."></textarea>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 no-gap-right">
                                        <select name="key_qualification" class="form-control" id="select-form">
                                            <option selected disabled>Years of working experience</option>
                                            <option value="Under 3 years">Under 3 years</option>
                                            <option value="4-15 years">4-15 years-</option>
                                            <option value="Above 15 years">Above 15 years</option>
                                        </select>
                                        <label for="select-form">Years of Experience</label>
                                    </div>
                                </div>
                                <li><h3 class="t-description">Requirements</h3></li>
                            <div class="row">
                                <div class="form-group col-md-10 no-gap-right">
                                    <textarea class="form-control" name="Responsibilities" id="txt-forms" rows="5" placeholder="What are the tasks that the person will be responsible for on a day to day basis? (e.g. Plan weekly travel arrangements for the CEO, clean up viruses from office computers)"></textarea>
                                        <label for="txt-forms">Key Responsibilities</label>
                                </div>
                                <div class="form-group col-md-10 no-gap-right">
                                    <textarea class="form-control" name="skills" rows="5" placeholder="What are the key skills required for this job Example (Software Development, Google Digital Marketing...etc)"> </textarea>
                                        <label for="txt-forms">Key Skills</label>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 no-gap-right">
                                        <input type="number" class="form-control" placeholder="Minimum salary">
                                        <label for="nbr-form">Minimum Salary</label>
                                    </div>
                                    <div class="form-group col-md-6 no-gap-right">
                                    <input type="number" class="form-control" placeholder="Maximum salary ">
                                        <label for="nbr-form">Maximum Salary</label>
                                </div>

                                </div>
                                <div class="form-group">
                                    <input type="button" class="btn pull-right" value="Step 2">
                                </div>
                            </div>
                            </ol>
                      </form>




                </div><!-- / .col-md-6 -->
              </div><!-- / .row -->
            </div><!-- / .container -->

          </div><!-- / .bg-overlay -->
        </div><!-- / .bg-login -->

@endsection

@section('footer')
  @endsection



@section('scripts')

  @stop