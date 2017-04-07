@extends('layouts.forms_layout')
@section('header')
    <title>Consultant </title>
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
                    <span class="subheading">Consultant </span>
                </div>

                <ol class="col-md-6 text-right breadcrumb">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('consult_hub')}}">consult_hub</a></li>
                    <li class="active">Consultant Profile</li>
                </ol>

            </div><!-- / .row -->
        </div>
    </header>

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
                                <h3 class="form-header">Consultant Profile</h3>
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
                                <form action="/mock" role="form" method="POST">
                                {{ csrf_field() }}
                                <!-- Organisation  Name -->
                                    <ol>
                                        <li><h3 class="t-description">Personal Details</h3></li>
                                        <!--First Name -->
                                        <div class="row">
                                            <div class="form-group col-md-4 no-gap-right {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                                <input type="text"  class="form-control" name="first_name" placeholder=" Enter FirstName" required autofocus>
                                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                <label for="txt-forms">First Name</label>

                                            </div>
                                            <input type="hidden" name="user_id" value="{{Sentinel::getUser()->getUserId()}}">
                                            <!-- Last Name -->
                                            <div class="form-group col-md-4 no-gap-right{{ $errors->has('last_name') ? 'has-error' : '' }}" >
                                                <input type="text"  class="form-control" name="last_name" placeholder=" Enter LastName" required autofocus>
                                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                                <label for="txt-forms">Last Name</label>
                                            </div>
                                            <!-- Email -->
                                            <div class="form-group col-md-4 no-gap-right {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <input type="email"  name="email" class="form-control" value="{{old('email')}}" placeholder="Enter contact email" required autofocus>
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            <label>Contact Email</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <!-- Phone -->
                                            <div class="form-group col-md-4 no-gap-right{{ $errors->has('Physical_Address') ? 'has-error' : '' }}" >
                                                <input type="tel" name="phone_number"value="{{old('phone_number')}}"  class="form-control" placeholder="Enter Your Phone Number " required autofocus>
                                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                                <label>Phone Number</label>
                                            </div>
                                            <!-- City -->
                                            <div class="form-group col-md-4 no-gap-right{{ $errors->has('city') ? 'has-error' : '' }}" >
                                                <input type="text" name="city"value="{{old('city')}}"  class="form-control" placeholder=" City   " required autofocus>
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                                <label>City</label>
                                            </div>
                                            <!-- City -->
                                            <div class="form-group col-md-4 no-gap-right{{ $errors->has('country') ? 'has-error' : '' }}" >
                                                <select class="form-control" name="country">
                                                    <option value="1" selected disabled>Country</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antartica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France, Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                                    <option value="Moldova">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                    <option value="Span">Spain</option>
                                                    <option value="SriLanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Viet Nam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                                <label>City</label>
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
                                                    <option value="Masters">Masters</option>
                                                    <option value="PHD">PHD</option>
                                                    <option value="none">None</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('key_qualification') }}</span>
                                                <label for="select-form">Highest education</label>
                                            </div>

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
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-12 no-gap-right{{ $errors->has('skills') ? 'has-error' : '' }}">
                                                    <select multiple name="technical[]" class="form-control" required>
                                                        <option value='Agriculture and Rural Development' >Agriculture and Rural Development</option>
                                                        <option value='Anti-Corruption' >Anti-Corruption</option>
                                                        <option value='Assessments' >Assessments</option>
                                                        <option value='Budget/Cost Management' >Budget/Cost Management</option>
                                                        <option value='Business Development' >Business Development</option>
                                                        <option value='Capacity Building' >Capacity Building</option>
                                                        <option value='Civil Society' >Civil Society</option>
                                                        <option value='Competitiveness/Trade' >Competitiveness/Trade</option>
                                                        <option value='Conflict Prevention/Resolution' >Conflict Prevention/Resolution</option>
                                                        <option value='Democracy and Governance' >Democracy and Governance</option>
                                                        <option value='Economics' >Economics</option>
                                                        <option value='Education' >Education</option>
                                                        <option value='Environment and Natural Resources' >Environment and Natural Resources</option>
                                                        <option value='Gender' >Gender</option>
                                                        <option value='Health' >Health</option>
                                                        <option value='HICD' >HICD</option>
                                                        <option value='HR/Recruitment' >HR/Recruitment</option>
                                                        <option value='Impact Evaluation' >Impact Evaluation</option>
                                                        <option value='Infrastructure' >Infrastructure</option>
                                                        <option value='Legislative Strengthening' >Legislative Strengthening</option>
                                                        <option value='Media' >Media</option>
                                                        <option value='MIS/IT and Knowledge Management' >MIS/IT and Knowledge Management</option>
                                                        <option value='Monitoring' >Monitoring</option>
                                                        <option value='Operations' >Operations</option>
                                                        <option value='Organizational Development/Strategic Planning' >Organizational Development/Strategic Planning</option>
                                                        <option value='Performance Evaluation' >Performance Evaluation</option>
                                                        <option value='Performance Management/Project Design' >Performance Management/Project Design</option>
                                                        <option value='Policy, Legal and Regulatory Reform' >Policy, Legal and Regulatory Reform</option>
                                                        <option value='Private Sector Development/Economic Growth' >Private Sector Development/Economic Growth</option>
                                                        <option value='Procurement' >Procurement</option>
                                                        <option value='Program Finance/Grant Management' >Program Finance/Grant Management</option>
                                                        <option value='Program/Project Management' >Program/Project Management</option>
                                                        <option value='Public Financial Management/Development Finance' >Public Financial Management/Development Finance</option>
                                                        <option value='Rule of Law/Administration of Justice' >Rule of Law/Administration of Justice</option>
                                                        <option value='SME/Micro-Enterprise Development' >SME/Micro-Enterprise Development</option>
                                                        <option value='Strategic Communications/Outreach' >Strategic Communications/Outreach</option>
                                                        <option value='Tourism' >Tourism</option>
                                                        <option value='Training Design and Delivery' >Training Design and Delivery</option>
                                                        <option value='Water, Sanitation and Hygiene' >Water, Sanitation and Hygiene &#40;WASH&#41;</option>
                                                        <option value='Youth' >Youth</option>
                                                        <option value="none">None</option>
                                                </select>
                                                <span class="text-danger">{{ $errors->first('skills') }}</span>
                                                <label for="select-form">Technical SKills</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right">
                                                <select multiple name="donor[]" class="form-control" required>
                                                    <option value='ADB' >ADB</option>
                                                    <option value='AusAID/DFAT' >AusAID/DFAT</option>
                                                    <option value='CDC' >CDC</option>
                                                    <option value='CIDA' >CIDA</option>
                                                    <option value='DFID' >DFID</option>
                                                    <option value='EU' >EU</option>
                                                    <option value='Foundation' >Foundation</option>
                                                    <option value='MCC' >MCC</option>
                                                    <option value='None' >None</option>
                                                    <option value='Othe' >Other</option>
                                                    <option value='Private Donor' >Private Donor</option>
                                                    <option value='UN' >UN</option>
                                                    <option value='USAID' >USAID</option>
                                                    <option value='USDA' >USDA</option>
                                                    <option value='USDOS' >USDOS</option>
                                                    <option value='WBG' >WBG</option>
                                                    <option value="none">None</option>
                                                </select>
                                                <label for="select-form">Donor Experience</label>
                                            </div>
                                            <div class="form-group col-md-6 no-gap-right">
                                            <select multiple name="wkexp[]"  class="form-control" required>
                                                <option value='Asia and the Pacific' >Asia and the Pacific</option>
                                                <option value='astern Europe and Central Asia' >Eastern Europe and Central Asia</option>
                                                <option value='Latin America and the Caribbean' >Latin America and the Caribbean</option>
                                                <option value='Middle East/North Africa' >Middle East/North Africa</option>
                                                <option value='North America' >North America</option>
                                                <option value='Sub-Saharan Africa' >Sub-Saharan Africa</option>
                                                <option value='South America' >South America</option>
                                                <option value="none">None</option>

                                            </select>
                                                <label for="select-form">Regional Experience</label>
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

                                            <div class="form-group col-md-6 no-gap-right">
                                                <input type="number" class="form-control" name="salary_rate" placeholder="Daily salary rate">
                                                <label for="nbr-forms">Daily Salary Rate</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 no-gap-right{{ $errors->has('profession') ? 'has-error' : '' }}">
                                                <select name="conflict" class="form-control" required>
                                                    <option value='1' selected disabled>Please select</option>
                                                    <option value='Yes - Permanent or consulting' >Yes - Permanent or consulting</option>
                                                    <option value='Yes - Short-term consulting only' >Yes - Short-term consulting only</option>
                                                    <option value='No - I am not interested in conflict zones or unaccompanied posts' >No - I am not interested in conflict zones or unaccompanied posts</option>
                                                </select>
                                                <label for="txt-form">Confict Unaccompanied</label>
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
                                            </div>
                                            <div class="row">
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