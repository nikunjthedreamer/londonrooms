 <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
	
	
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Properties</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Add Tenant</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Add Tenant
                        
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <!-- BEGIN REGISTRATION FORM -->
		<div class="portlet">
		
		<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<?php
      //flash messages
      if($this->session->flashdata('flash_message')){ ?>
       
        <div class="alert alert-error">
           <a class="close" data-dismiss="alert">×</a>
            <strong>Oh snap! </strong><?php echo $this->session->flashdata('flash_message');  ?>
          </div>         
        
    <?php  }      
		$attributes = array('class' => 'form-horizontal register-form','enctype'=>'multipart/form-data');   
		echo form_open_multipart('admin/tenant/add/'.$this->uri->segment(4).'', $attributes);
		?>
		
		
		<div class="form-body">
		<div class="Tenant-detail ">
		<h3 class="tanant">Tenant Detail:</h3>
		<div class="form-group">
			<label class="col-md-2 control-label">Title</label>
				<div class="col-md-1">
					<select name="title">
						<option value="Mr">Mr.</option>
						<option value="Mrs">Mrs.</option>
						<option value="Ms">Ms.</option>
					</select>
				</div>
				<label class="col-md-1 control-label">Name:</label>
				<div class="col-md-3">
					<input type="text" value="" name="fname" class="form-control" required >
					<span class="help-block">  </span>
				</div>
				<label class="col-md-1 control-label">Surname:</label>
				<div class="col-md-3">
					<input type="text" value="" name="surname" class="form-control" required >
					<span class="help-block">  </span>
				</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-2 control-label">D.O.B.</label>
				<div class="col-md-4">
					<input type="text" name="dob" class="form-control date-picker" data-date-format="dd/mm/yyyy">
					<span class="help-block">  </span>
				</div>
			<label class="col-md-2 control-label">Nationality</label>
			<div class="col-md-4">
				
				<select name="nationality" id="country_list" class="select2 form-control">
                        <option value=""></option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and Mc Donald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic of)</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint LUCIA</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
				<span class="help-block">  </span>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-2 control-label">Mobile No.</label>
			<div class="col-md-4">
				<input type="text" value="" name="mobile" class="form-control">
				<span class="help-block">  </span>
			</div>
			<label class="col-md-2 control-label">Email</label>
			<div class="col-md-4">
				<input type="text" value="" name="email" class="form-control">
				<span class="help-block">  </span>
			</div>
		</div>		
        <div class="form-group">
			<label class="col-md-2 control-label">Passport/ID No</label>
			<div class="col-md-4">
				<input type="text" value="" name="passport_no" class="form-control">
				<span class="help-block">  </span>
			</div>
			<label class="col-md-2 control-label">Overseas Address</label>
			<div class="col-md-4">
				<input type="text" value="" name="address" class="form-control" >
			</div>
		</div> 
		  
		<div class="form-group">
			<label class="col-md-2 control-label">Postcode</label>
			<div class="col-md-4">
				<input type="text" value="" name="postcode" class="form-control">
				<span class="help-block">  </span>
			</div>
			<label class="col-md-2 control-label">City and Country</label>
			<div class="col-md-4">
				<input type="text" value="" name="city_country" class="form-control">
			</div>
		</div> 

        </div>
		<div class="proprty_detail">
		<h3 class="form-section">Contract Detail</h3>
		<div class="form-group">
			<label class="col-md-2 control-label">Property Reference</label>
			<div class="col-md-4">
			<input type="text" value="" name="property_ref" class="form-control">
			</div>
			<label class="col-md-2 control-label">Room No</label>
			<div class="col-md-4">
				<input type="text" value="" name="room_no" class="form-control">
			</div>
		</div>
		<div class="form-group">			
			<label class="col-md-2 control-label">Type Of Room</label>
			<div class="col-md-4">
				<input type="text" value="" name="room_type" class="form-control">
			</div>
			<label class="col-md-2 control-label">No of People</label>
			<div class="col-md-4">
				<input type="text" value="" name="no_people" id="no_people" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Standard Price</label>
			<div class="col-md-4">
				<input type="text" value="" name="price_weekly" id="std_rate"  onkeyup="updateMonthlyRate()" class="form-control input-inline"><span class="help-inline">per week</span>
			</div>
			<label class="col-md-2 control-label">Standard Price</label>
			<div class="col-md-4">
				<input type="text" value="" name="price_monthly" id="mnth_rate" class="form-control input-inline"><span class="help-inline">per month</span>
			</div>
		</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Agreement From</label>
				<div class="col-md-4">
					<input type="text" value="" name="agreement" id="agrmntFrom" class="form-control date-picker" data-date-format="dd/mm/yyyy">
				</div>
				<label class="col-md-2 control-label" style="padding-left:2px">Date of commencement</label>
				<div class="col-md-4">
					<input type="text" value="" name="date_commencement" class="form-control date-picker" data-date-format="dd/mm/yyyy">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Nights To End On 1st Or 15th</label>
				<div class="col-md-4">
					<input type="text" value="" name="nights_to_end"  id="nightsEnd" onKeyup="getnewdate()" class="form-control">
				</div>
				<label class="col-md-2 control-label">Nights To</label>
				<div class="col-md-4">
					<input type="text" value="" name="nights_to"  id="nightsTo" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Agreement For</label>
				<div class="col-md-4">
					<select name="agrmnt_for" id="agrmntFor" class="form-control" onChange="getMnthsTo(this)">
					<?php $mnth=0;
					for($mnth=0;$mnth<=6;$mnth++) {
					if($mnth==0) {  $mnth=$mnth+1;  ?>
						<option value="">Select</option>
						
					<?php }	?>
						<option value="<?php echo $mnth ; ?>"><?php echo $mnth ; ?> Month</option>
					<?php } ?>
					</select>
				</div>
				<label class="col-md-2 control-label">Months To</label>
				<div class="col-md-4">
					<input type="text" value="" name="months_to" id="mnthsTo"  class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Deposit</label>
				<div class="col-md-4">
					<select name="deposit" class="form-control" onChange="getDeposit(this)">
						<option value="0">Select</option>
						<option value="1">1 Week</option>
						<option value="2">2 Weeks</option>
						<option value="4">1 Month</option>
						<option value="6">6 Weeks</option>
					</select>
				</div>
				<label class="col-md-2 control-label">To Pay</label>
				<div class="col-md-4">
					<input type="text" value="" name="deposit_month" id="mnthDeposit" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Contract Fee</label>
				<div class="col-md-4">
				<input type="text" value="" name="contract_fee" id="fee" onKeyup="getFee()" class="form-control input-inline"><span class="help-inline">Per Person</span>
				</div>
                <label class="control-label col-md-2">Contract Documention</label>
                <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn green btn-file">
                                                            <span class="fileinput-new"> Select file </span>
                                                            <span class="fileinput-exists"> Change </span>
                                                            <input type="file" name="contract"> </span>
                        <span class="fileinput-filename"> </span> &nbsp;
                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                    </div>
                </div>
            </div>
			</div>
			<div class="Payment-Details">
			<h3 class="Payment-section">Payment Details</h3>
			<div class="form-group">
				<label class="col-md-2 control-label">Apportioned rent</label>
				<div class="col-md-4">
					<input type="text" value="" name="rent_payment" id="rentPayFrom"  class="form-control date-picker" data-date-format="dd/mm/yyyy"> 
				</div>
				<label class="col-md-2 control-label">Total Nights</label>
				<div class="col-md-4">
					<input type="text" value="" name="total_nights" id="totalNights" onKeyup="getRent()" class="form-control"> 
				</div>
			</div>
			<div class="form-group">				
				<label class="col-md-2 control-label">Total Months</label>
				<div class="col-md-4">
					<input type="text" value="" name="total_months" class="form-control"> 
				</div>
				<label class="col-md-2 control-label">Next Payment On</label>
				<div class="col-md-4">
					<input type="text" value="" name="nxt_pymnt" class="form-control date-picker" data-date-format="dd/mm/yyyy"> 
				</div>
			</div>
			<div class="form-group">				
				<label class="col-md-2 control-label">Other Costs</label>
				<div class="col-md-4">
					<input type="text" value="" name="other_costs" id="other_costs" class="form-control" onKeyup="updatePrice()"> 
				</div>
				<label class="col-md-2 control-label">Description</label>
				<div class="col-md-4">
					<input type="text" value="" name="cost_desc" class="form-control" placeholder="Description for other costs" > 
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Deposit</label>
				<div class="col-md-4">
					<input type="text" value="" name="deposit2" id="deposit" class="form-control"> 
				</div>
				<label class="col-md-2 control-label">Contract Fee</label>
				<div class="col-md-4">
					<input type="text" value="" name="contrctfee" id="contrctfee" class="form-control"> 
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Rent Payment</label>
				<div class="col-md-4">
					<input type="text" value="" name="rentpay" id="rentpay" class="form-control"> 
				</div>
				<label class="col-md-2 control-label">Total</label>
				<div class="col-md-4">
					<input type="text" value="" name="net_total" id="nettotal" class="form-control"> 
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Holding Deposit To Pay</label>
				<div class="col-md-4">
					<input type="text" value="" name="holding_deposit" id="holddeposit" onKeyup="updateBal()" class="form-control"> 
				</div>
				<label class="col-md-2 control-label">Outstanding Balance</label>
				<div class="col-md-4">
					<input type="text" value="" name="outstanding_balance" id="balance" class="form-control"><span>To be fully paid when check in</span> 
				</div>
			</div>
			
		</div>
			
			<p class="info">IMPORTANT INFORMATION: In the event of the landlord subsequently deciding that he/she does not wish to proceed with the tenancy for whatever reason, the above deposit will be wholy refundable. In the event of the tenant subsequently deciding that he/she does not wish to proceed with the tenancy for whatever reason, the holding deposit and admin fee will be non-refundable. </p>
			<p class="info">I AM receipt of the terms and conditions that apply to the licence to occupy, I understand that the admin fee is non refundable.</p>
			<p class="info">TERMS: In the event of the landlord subsequently deciding that he/she does not wish to proceed with the tenancy for whatever reason, the above deposit will be wholly refundable. In the event of the tenant subsequently deciding that he/she does not wish to proceed with the tenancy for whatever reason, the deposit will be non-refundable.</p>
			<p class="info">1. Money: Full deposit and rent in advance agreed it is required prior to moving in. Also £100 (per person) is charged for preparation & coordination of the agreement.
			2. Cleared funds: all money must be in cleared funds prior to moving in. This can be cash or Bank Transfer.	
			3. References: references will be required prior to moving in. These may include Employer, Bank, Existing Landlord, etc.	
			<p class="info">THE TENANT AGREES TO RENT THE PROPERTY AS SEEN, UNLESS BY WRITTEN IN THE AGREEMENT.</p>
			<div class="form-group">
				<label class="col-md-3 control-label">Tenant's Signature</label>
				<div class="col-md-4">
					<input type="file" value="" name="signature" class="">
											
					<div id="signature">
						
					</div>
					
				</div>
				
			</div>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn green">Submit</button>
						<a href="/index.php/admin/tenant/" class="btn default">Cancel</a>
						<button class="btn green" onClick="window.print()"> Print this page </button>
					</div>
				</div>
			</div>
		
		 <?php echo form_close(); ?>
		<!-- END FORM-->
		</div>
		</div>

            <!-- END REGISTRATION FORM -->
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                   
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
           
           
        </div>
        <!-- END CONTAINER -->
		
<script>
    	
	function updatePrice()
    {
		var stdrate = ($("#std_rate").val() ) == ""  ? 0 : parseFloat($("#std_rate").val() );
		var contrctfee = ($("#contrctfee").val() ) == ""  ? 0 : parseFloat($("#contrctfee").val() );
        var rentpay = ($("#rentpay").val() ) == ""  ? 0 : parseFloat($("#rentpay").val() );
		var otherCosts = ($("#other_costs").val() ) == ""  ? 0 : parseFloat($("#other_costs").val() );
		var deposit = 2*stdrate;
		
        var total = (deposit + +contrctfee + +rentpay + +otherCosts);
        var total = Math.round(total.toFixed(2));
        var deposit = Math.round(deposit.toFixed(2));		
		
        $("#nettotal").val(total);
        $("#holddeposit").val(deposit);
		
		var holddeposit = parseFloat($("#holddeposit").val() );
		var balance = (total - holddeposit); 
		var balance = balance.toFixed(2);
		$("#balance").val(balance);
    }
	function updateBal()
	{
		var total=  parseFloat($("#nettotal").val() );
		var deposit =  ($("#holddeposit").val() ) == ""  ? 0 : parseFloat($("#holddeposit").val() );
		
		var bal = (total - deposit); 
		var bal = bal.toFixed(2);
		$("#balance").val(bal);
		
	}
	function updateMonthlyRate()
	{
		 var stdRate = ($("#std_rate").val() ) == ""  ? 0 : parseFloat($("#std_rate").val() );
		 var mnthRate = (stdRate*52)/12;
		 var mnthRate = Math.round(mnthRate.toFixed(2));
		 $("#mnth_rate").val(mnthRate);		 
	}
	function getnewdate() {
		var noOfDays =  parseFloat($("#nightsEnd").val() );
		var tt = document.getElementById('agrmntFrom').value;
		var array = new Array();
		array = tt.split('/');
		var nDate = (array[1] + "/" + array[0] + "/" + array[2]);
		
		var date = new Date(nDate);
		var newdate = new Date(date);
		
		newdate.setDate(newdate.getDate() + noOfDays);
		
		var dd = newdate.getDate();
		var mm = newdate.getMonth() + 1;
		var y = newdate.getFullYear();

		var someFormattedDate = dd + '/' + mm + '/' + y;
		$('#nightsTo').val(someFormattedDate);
	}
	function getMnthsTo(noOfMnths) {
		var selectedValue = noOfMnths.value;
		
		var mnths =  parseFloat(selectedValue);
		var currentDt = document.getElementById('agrmntFrom').value;
		var array = new Array();
		array = currentDt.split('/');
		var nDate = (array[1] + "/" + array[0] + "/" + array[2]);
		
		var date = new Date(nDate);		
		var newDt = new Date(date);		
		
		newDt.setMonth(newDt.getMonth() + mnths);
		
		var dd = newDt.getDate();
		var mm = newDt.getMonth() + 1;
		var y = newDt.getFullYear();

		var newFormattedDate = dd + '/' + mm + '/' + y;
		$('#mnthsTo').val(newFormattedDate);
	}
	function getDeposit(duration){
		var selectedValue = duration.value;
		var stdrate = ($("#std_rate").val() ) == ""  ? 0 : parseFloat($("#std_rate").val() );
		var stdrateMonth = ($("#mnth_rate").val() ) == ""  ? 0 : parseFloat($("#mnth_rate").val() );
		
		 
		if(selectedValue == 1) 
		{
			 var deposit = stdrate;
		}
		else if (selectedValue == 4){
			 var deposit = stdrateMonth;
		}
		else {			
			var noDays = selectedValue*7;			
			var deposit = (stdrate/7)*noDays;
		}		
		 var deposit = deposit.toFixed(2);
		 $("#mnthDeposit").val(deposit);	
		 $("#deposit").val(deposit);	
		
	}
	function getFee()
	{
		var people = ($("#no_people").val() ) == ""  ? 0 : parseFloat($("#no_people").val() );
		var fee = ($("#fee").val() ) == ""  ? 0 : parseFloat($("#fee").val() );
		
		var totalFee = (people*fee);
		var totalFee = totalFee.toFixed(2);
		
		$("#contrctfee").val(totalFee);	
	}
	function getRent()
	{
		 var nights = document.getElementById('totalNights').value;
		 var oneDayPrice = (parseFloat($("#mnth_rate").val())*12)/365;
		 var rent	= nights*oneDayPrice;
		 var rent	= Math.round(rent.toFixed(2));
		
		
		/*  var stdrateMonth = ($("#mnth_rate").val() ) == ""  ? 0 : parseFloat($("#mnth_rate").val() );
				
		if(agrmntDate == rentPayFrom){
			
			var rent = stdrateMonth;
			var rent = Math.round(rent.toFixed(2));
					
		}
		else{
			var aF 		= $('#agrmntFrom').val();
			var rPF 	= $('#rentPayFrom').val();
			
			var smdy 	= aF.split('/')
			var startDate = new Date(smdy[1] + "/" + smdy[0] + "/" + smdy[2]);			
			
			var emdy 	= rPF.split('/')
			var endDate = new Date(emdy[1] + "/" + emdy[0] + "/" + emdy[2]);
			var nights 	= daydiff(startDate, endDate);
			
			var rent	= nights*oneDayPrice;
			var rent	= Math.round(rent.toFixed(2));
		}
		
		$("#totalNights").val(nights);	*/	
		$("#rentpay").val(rent); 
		
		updatePrice();
	}
	
	function daydiff(agrmntFrom, rentPayFrom) {
		return (rentPayFrom-agrmntFrom)/(1000*60*60*24)
	}	
</script>
