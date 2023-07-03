<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Company Type <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <select name="vendor_type" id="ddl_company_type" class="form-control">
                <option value="Select Company Type">Select Company Type</option>
                <option value="Sole Proprietorship">Sole Proprietorship</option>
                <option value="Partnership Firm">Partnership Firm</option>
                <option value="Private Limited Company">Private Limited Company</option>
                <option value="Public Limited Company">Public Limited Company</option>
                <option value="Limited Liability Partnership">Limited Liability
                    Partnership</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Company Name <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator1" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Company Name</span>
            <input name="company_name" value="{{ old('company_name') }}" type="text" id="txt_company_name"
                class="form-control" placeholder="Enter Company Name">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Contact Person <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator6" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Username</span>
            <input name="contact_person" value="{{ old('contact_person') }}" type="text" id="txt_contact_person"
                class="form-control" placeholder="Enter Contact Person">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">GSTIN <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator15" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter GSTIN</span>
            <input name="GSTIN" type="text" value="{{ old('GSTIN') }}" id="txt_gst_number" class="form-control"
                placeholder="Enter GSTIN">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">PAN / TAN Number
            <span style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator16" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter PAN Number</span>
            <input name="pan_tan" type="text" value="{{ old('pan_tan') }}" id="txt_pan_number" class="form-control"
                placeholder="Enter PAN / TAN Number">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Establishment
            Year</label>
        <div class="col-sm-12">
            <input name="establish_year" type="text" value="{{ old('establish_year') }}" id="txt_establishment_year"
                class="form-control" placeholder="Enter Establishment Year">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px">


    <div id="upM">
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">Is MSME
                Registered? <span style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <input type="checkbox" value="{{ old('is_mse_registered') }}" name="is_mse_registered"> Yes <input
                    type="checkbox" name=""> No
            </div>
        </div>
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">MSME
                Registration Number </label>
            <div class="col-sm-12">
                <span id="RequiredFieldValidator7"
                    style="font-size:12px;color:red;font-weight:600;display:none;">Please
                    Enter MSME Registration Number</span>
                <input name="mse_registration_number" value="{{ old('mse_registration_number') }}" type="text"
                    class="aspNetDisabled form-control" placeholder="Enter MSME Registration Number">
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px">
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/ajax-1.8.3.jquery.min.js"></script>

    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Login ID /
            Username <span style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator2" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Login ID / Username</span>
            <span id="spn_check_username" style="display: none; color: red; font-size: 12px;">Login ID / Username
                Already Exists.</span>
            <input name="username" type="text" id="txt_username" value="{{ old('username') }}"
                class="form-control" placeholder="Enter Login ID / Username">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Password <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator4" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Password</span>
            <input name="password" value="{{ old('password') }}" type="password" id="txt_password"
                class="form-control" placeholder="Enter Password">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Email ID <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator9" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Email ID</span>
            <input name="email" type="text" value="{{ old('email') }}" id="txt_email_id" class="form-control"
                placeholder="Enter Email ID">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Contact Number
            <span style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator5" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Contact Number</span>
            <input name="phone" type="text" value="{{ old('phone') }}" id="txt_contact_number"
                class="form-control" placeholder="Enter Contact Number">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom:5px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Landline
            Number</label>
        <div class="col-sm-12">
            <input name="landline" type="text" value="{{ old('landline') }}" id="txt_landline_number"
                class="form-control" placeholder="Enter Landline Number">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Fax Number</label>
        <div class="col-sm-12">
            <input name="fax_number" type="text" value="{{ old('fax_number') }}" id="txt_fax_number"
                class="form-control" placeholder="Enter Fax Number">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Registered Address
            <span style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator3" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Registered Address</span>
            <input name="registered_address" value="{{ old('registered_address') }}" type="text"
                id="txt_registered_address" class="form-control" placeholder="Enter Registered Address">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div id="up">
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">Country <span
                    style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <span id="RequiredFieldValidator11"
                    style="font-size:12px;color:red;font-weight:600;display:none;">Please
                    Select Country</span>
                <select name="country_id" class="form-control" style="padding: 2px 2px;">
                    <option value="0">Select Country</option>
                    <option selected="selected" value="1">India (IN)</option>

                </select>
            </div>
        </div>
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">State <span
                    style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <span id="RequiredFieldValidator8"
                    style="font-size:12px;color:red;font-weight:600;display:none;">Please
                    Select State</span>
                <select name="state_id" id="ddl_state" class="form-control" style="padding: 2px 2px;">
                    <option selected="selected" value="0">Select State</option>
                    <option value="1">Delhi (DL)</option>

                </select>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">City</label>
        <div class="col-sm-12">
            <input name="city" type="text" id="txt_city" value="{{ old('city') }}" class="form-control"
                placeholder="Enter City">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Pin / Zip Code
            <span style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator13" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Enter Pin / Zip Code</span>
            <input name="pin_code" type="text" id="txt_pin_code" class="form-control"
                value="{{ old('pin_code') }}" placeholder="Pin / Zip Code">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <script src="assets/js/bootstrap.min.js"></script>
    <link href="assets/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">

    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Preference
            Category <span style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator10"
                style="font-size: 12px; color: red; font-weight: 600; display: inline;">Please
                Select Preference Category</span>
            <select name="preference_category" class="form-control">
                <option value="05">Area, Ethnic, Cultural, Gender, And Group
                    Studies</option>
                <option value="13">Education</option>
                <option value="03">Natural Resources And Conservation</option>
                <option value="40">Physical Sciences</option>
                <option value="14">Engineering</option>
                <option value="28">Military Science, Leadership And Operational Art
                </option>
                <option value="09">Communication, Journalism, And Related Programs
                </option>
                <option value="52">Business, Management, Marketing, And Related
                    Support Services</option>
                <option value="50">Visual And Performing Arts</option>
                <option value="42">Psychology</option>
                <option value="11">Computer And Information Sciences And Support
                    Services</option>
                <option value="45">Social Sciences</option>
                <option value="38">Philosophy And Religious Studies</option>
                <option value="30">Multi/Interdisciplinary Studies</option>
                <option value="44">Public Administration And Social Service
                    Professions</option>
                <option value="51">Health Professions And Related Programs</option>
                <option value="27">Mathematics And Statistics</option>
                <option value="43">Homeland Security, Law Enforcement, Firefighting
                    And Related Protective Services</option>
                <option value="04">Architecture And Related Services</option>
                <option value="16">Foreign Languages, Literatures, And Linguistics
                </option>
                <option value="22">Legal Professions And Studies</option>
                <option value="23">English Language And Literature/Letters</option>
                <option value="24">Liberal Arts And Sciences, General Studies And
                    Humanities</option>
                <option value="54">History</option>
                <option value="26">Biological And Biomedical Sciences</option>

            </select>

        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Preference Region
            <span style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator12" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Select Preference Region</span>
            <select class="form-control" name="preference_region">
                <option>PAN India</option>

            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 20px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Logo</label>
        <div class="col-sm-12">
            <input type="file" name="logo" id="fu_vlogo" class="form-control" style="padding:4px 6px;">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Documents <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="RequiredFieldValidator14" style="font-size:12px;color:red;font-weight:600;display:none;">Please
                Upload Documents</span>
            <input type="file" multiple="multiple" name="fu_documents" id="fu_documents" class="form-control"
                style="padding:4px 6px;">
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="col-sm-12" style="text-align: center;">
        <hr>
        <span id="lblErrorMsg"></span>
        <input type="submit" name="btnsubmit" value="Submit" id="btnsubmit" class="btn btn-sm btn-primary">

    </div>
</div>
