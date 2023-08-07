  <div class="col-sm-12" style="margin-bottom: 5px;">
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Company Type <span
                  style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">
              <select name="vendor_type" id="company_type" class="form-control" required>
                  <option value="">Select Company Type</option>
                  <option value="Sole Proprietorship">Sole Proprietorship</option>
                  <option value="Partnership Firm">Partnership Firm</option>
                  <option value="Private Limited Company">Private Limited Company</option>
                  <option value="Public Limited Company">Public Limited Company</option>
                  <option value="Limited Liability Partnership">Limited Liability Partnership</option>
              </select>
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Company Name <span
                  style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input name="company_name" value="{{ old('company_name') }}" type="text" id="company_name"
                  class="form-control" placeholder="Enter Company Name">
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px;">
      <div class="col-sm-6" style="padding: 0px;">
          <label for="contact_person" class="col-sm-12 control-label">Contact Person <span
                  style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">
              <input name="contact_person" value="{{ old('contact_person') }}" type="text" id="contact_person"
                  required class="form-control" placeholder="Enter Contact Person">
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="gst_number" class="col-sm-12 control-label">GSTIN <span
                  style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">
              <input name="GSTIN" type="text" value="{{ old('GSTIN') }}" id="gst_number" class="form-control"
                  required placeholder="Enter GSTIN">
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px">
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">PAN / TAN Number
              <span style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input name="pan_tan" type="text" value="{{ old('pan_tan') }}" id="pan_number" class="form-control"
                  required placeholder="Enter PAN / TAN Number">
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Establishment
              Year</label>
          <div class="col-sm-12">
              <input name="establish_year" type="text" value="{{ old('establish_year') }}" id="establishment_year"
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

                  <input name="mse_registration_number" value="{{ old('mse_registration_number') }}" type="text"
                      class="aspNetDisabled form-control" placeholder="Enter MSME Registration Number">
              </div>
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px">

      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Login ID /
              Username <span style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <span id="spn_check_username" style="display: none; color: red; font-size: 12px;">Login ID / Username
                  Already Exists.</span>
              <input name="username" type="text" id="username" value="{{ old('username') }}"
                  class="form-control" placeholder="Enter Login ID / Username">
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Password <span
                  style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input name="password" value="{{ old('password') }}" type="password" id="password"
                  class="form-control" placeholder="Enter Password">
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px;">
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Email ID <span
                  style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input name="email" type="text" value="{{ old('email') }}" id="email" class="form-control"
                  placeholder="Enter Email ID">
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Contact Number
              <span style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input name="phone" type="text" value="{{ old('phone') }}" id="phone" class="form-control"
                  placeholder="Enter Contact Number">
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom:5px;">
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Landline
              Number</label>
          <div class="col-sm-12">
              <input name="landline" type="text" value="{{ old('landline') }}" id="landline_number"
                  class="form-control" placeholder="Enter Landline Number">
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Fax Number</label>
          <div class="col-sm-12">
              <input name="fax_number" type="text" value="{{ old('fax_number') }}" id="fax_number"
                  class="form-control" placeholder="Enter Fax Number">
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px;">
      <div class="col-sm-12" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Registered Address
              <span style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input name="registered_address" value="{{ old('registered_address') }}" type="text"
                  id="registered_address" class="form-control" placeholder="Enter Registered Address">
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px;">
      <div id="up">
          <div class="col-sm-6" style="padding: 0px;">
              <label for="inputPassword3" class="col-sm-12 control-label">Country <span
                      style="color: red; font-size: 13px;">*</span></label>
              <div class="col-sm-12">

                  <select name="country_id" id="countrySelect" class=" form-control" style="padding: 2px 2px;"
                      required>
                      <option value="">Select Country</option>
                      @foreach ($countries as $c)
                          <option value="{{ $c->id }}">{{ $c->name }}</option>
                      @endforeach

                  </select>
              </div>
          </div>
          <div class="col-sm-6" style="padding: 0px;">
              <label for="inputPassword3" class="col-sm-12 control-label">State <span
                      style="color: red; font-size: 13px;">*</span></label>
              <div class="col-sm-12">

                  <select name="state_id" id="stateSelect" class="form-control" style="padding: 2px 2px;" required>
                      <option selected="selected" value="">Select State</option>
                  </select>
              </div>
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px;">
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">City</label>
          <div class="col-sm-12">
              <input name="city" type="text" id="city" value="{{ old('city') }}" class="form-control"
                  placeholder="Enter City">
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Pin / Zip Code
              <span style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input name="pin_code" type="text" id="pin_code" class="form-control"
                  value="{{ old('pin_code') }}" placeholder="Pin / Zip Code">
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 5px;">

      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Preference
              Category <span style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">
              <select name="preference_category[]" class="form-control select2" multiple id="category_id" required>

                  @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Preference Region
              <span style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <select class="form-control select2" multiple name="preference_region[]" id="region_id" required>

                  @foreach ($regions as $reg)
                      <option value="{{ $reg->id }}">{{ $reg->name }}</option>
                  @endforeach
              </select>
          </div>
      </div>
  </div>
  <div class="col-sm-12" style="margin-bottom: 20px;">
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Logo</label>
          <div class="col-sm-12">
              <input type="file" name="logo" id="fu_vlogo" class="form-control" style="padding:4px 6px;"
                  accept=".png , .jpg , .jpeg">
          </div>
      </div>
      <div class="col-sm-6" style="padding: 0px;">
          <label for="inputPassword3" class="col-sm-12 control-label">Documents <span
                  style="color: red; font-size: 13px;">*</span></label>
          <div class="col-sm-12">

              <input type="file" multiple="multiple" name="docs[]" id="fu_documents" class="form-control"
                  accept=".pdf,.doc,.docx , .xlsx" style="padding:4px 6px;" required>
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
