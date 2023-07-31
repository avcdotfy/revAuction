@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Vendor Profile Information </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 5px;">
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Company Name <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">

                                        <input name="company_name" value="{{ $v->company_name }}" type="text"
                                            value="NAAS Steel Works Ltd" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Username <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">

                                        <input name="username" type="text" value="{{ $v->user->username }}"
                                            class="form-control">

                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Contact Number <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">

                                        <input name="contat_number" type="text" value="{{ $v->user->phone }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom: 5px;">
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Alternate Contact
                                        Number</label>
                                    <div class="col-sm-12">
                                        <input name="contact_number" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Email ID <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator9"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            Email ID</span>
                                        <input name="email_id" type="text" value="{{ $v->user->email }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Alternate Email ID</label>
                                    <div class="col-sm-12">
                                        <input name="alternate_email_id" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom: 5px;">

                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Address </label>
                                    <div class="col-sm-12">
                                        <input name="address_2" type="text" value="{{ $v->user->registered_address }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom: 5px;">
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">City</label>
                                    <div class="col-sm-12">
                                        <input name="city" type="text" value="{{ $v->user->city }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">State <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator8"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                                            State</span>
                                        <select name="ctl00$ContentPlaceHolder1$ddl_state" class="form-control">
                                            <option value="0">Select State</option>
                                            <option value="31">ANDAMAN &amp; NICOBAR</option>
                                            <option value="1">ANDHRA PRADESH</option>
                                            <option value="3">ARUNACHAL PRADESH</option>
                                            <option value="2">ASSAM</option>
                                            <option value="5">BIHAR</option>
                                            <option value="30">CHANDIGARH</option>
                                            <option value="34">CHATTISGARH</option>
                                            <option value="29">DADRA &amp; NAGAR</option>
                                            <option value="28">DAMAN &amp; DIU</option>
                                            <option selected="selected" value="35">DELHI</option>
                                            <option value="25">GOA</option>
                                            <option value="4">GUJRAT</option>
                                            <option value="6">HARYANA</option>
                                            <option value="7">HIMACHAL PRADESH</option>
                                            <option value="8">JAMMU &amp; KASHMIR</option>
                                            <option value="33">JHARKHAND</option>
                                            <option value="9">KARNATAKA</option>
                                            <option value="10">KERALA</option>
                                            <option value="27">LAKSHDWEEP</option>
                                            <option value="11">MADHYA PRADESH</option>
                                            <option value="12">MAHARASHTRA</option>
                                            <option value="13">MANIPUR</option>
                                            <option value="14">MEGHALAYA</option>
                                            <option value="15">MIZORAM</option>
                                            <option value="16">NAGALAND</option>
                                            <option value="17">ORISSA</option>
                                            <option value="26">PONDICHERY</option>
                                            <option value="18">PUNJAB</option>
                                            <option value="19">RAJASTHAN</option>
                                            <option value="20">SIKKIM</option>
                                            <option value="21">TAMIL NADU</option>
                                            <option value="36">TELANGANA</option>
                                            <option value="22">TRIPURA</option>
                                            <option value="23">UTTAR PRADESH</option>
                                            <option value="32">UTTARANCHAL</option>
                                            <option value="24">WEST BENGAL</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Country <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">

                                        <input name="country" type="text" value="{{ $v->user->country->name }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom:5px;">
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Pin / Zip Code <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">

                                        <input name="pin_code" type="text"
                                            value="{{ $v->user->pin_code }}"class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Landline Number</label>
                                    <div class="col-sm-12">
                                        <input name="landline_number" type="text" class="form-control"
                                            value="{{ $v->user->landline }}">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Fax Number</label>
                                    <div class="col-sm-12">
                                        <input name="fax_number" type="text" value="{{ $v->user->fax_number }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom:5px;">
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">GSTIN <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">

                                        <input name="txt_gstin" type="text" value="{{ $v->GSTIN }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">PAN Number <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator16"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter PAN
                                            Number</span>
                                        <input name="pan" value="{{ $v->pan_tan }}" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">ECC Number</label>
                                    <div class="col-sm-12">
                                        <input name="ecc" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom:5px">
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Vendor Type <span
                                            style="color: red; font-size: 13px;">*</span></label>
                                    <div class="col-sm-12">
                                        <input name="ecc" type="text" value="{{ $v->vendor_type }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-bottom:5px">
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Product Range Information
                                        <span style="color: red; font-size: 13px;">*</span></label>

                                    <div class="col-sm-4" style="padding:0px;">


                                        <div class="col-sm-6">
                                            <span class="multiselect-native-select">
                                                <div class="btn-group">
                                                    <b>Prefered Region</b>
                                                    <p class="multiselect-selected-text">{{ $v->region->name }}</p>


                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-sm-6">
                                            <span class="multiselect-native-select">
                                                <div class="btn-group">
                                                    <b>Prefered Category</b>
                                                    <p class="multiselect-selected-text">{{ $v->category->name }}</p>


                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="padding:0px;">

                                        <div class="col-sm-12">
                                            <span class="multiselect-native-select">
                                                <div class="btn-group">
                                                    <b>Documents</b>
                                                    @foreach (UploadHelper::listDocs($v->id) as $doc)
                                                        <div>
                                                            <a href="{{ Storage::url('document/' . $doc->path) }}"
                                                                download __target="blank"
                                                                class="multiselect-selected-text">{{ $doc->path }}</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </span>
                                        </div>

                                    </div>



                                    {{-- <div class="col-sm-4" style="padding:0px;">
                                        <label for="inputPassword3" class="col-sm-12 control-label"><span
                                                id="ContentPlaceHolder1_lvPrI_lbl_product_range_name_1"
                                                title="105">Aluminium Pipe</span></label>
                                        <div class="col-sm-6">
                                            <span class="multiselect-native-select">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="multiselect dropdown-toggle btn btn-default"
                                                        data-toggle="dropdown" title="Select Item">
                                                        <span class="multiselect-selected-text">Select Item</span> <b
                                                            class="caret"></b>
                                                    </button>
                                                    <ul class="multiselect-container dropdown-menu"
                                                        style="    padding: 4px 7px;">
                                                        <li class="multiselect-item multiselect-all"><a tabindex="0"
                                                                class="multiselect-all">
                                                                <label class="checkbox"
                                                                    style="    margin-top: 0px; margin-bottom: 0px;">
                                                                    <input type="checkbox" value="multiselect-all"> Select
                                                                    all</label></a>
                                                        </li>
                                                        <li><a tabindex="0"><label class="checkbox"
                                                                    style="    margin-top: 0px; margin-bottom: 0px;">
                                                                    <input type="checkbox" value="ALPIM02"> ALPIM02 (
                                                                    Large_Pipe-8011/DPE(UY)/KKL-1836)</label></a>
                                                        </li>
                                                        <li><a tabindex="0"><label class="checkbox"
                                                                    style="    margin-top: 0px; margin-bottom: 0px;">
                                                                    <input type="checkbox" value="ALPIM01"> ALPIM01 (
                                                                    Pipe-8011/DPE(UY)/KKL-1835)</label></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-sm-6">
                                            <span class="multiselect-native-select">
                                                <div class="btn-group"><button type="button"
                                                        class="multiselect dropdown-toggle btn btn-default"
                                                        data-toggle="dropdown" title="Select Region"><span
                                                            class="multiselect-selected-text">Select Region</span> <b
                                                            class="caret"></b></button>

                                                    <ul class="multiselect-container dropdown-menu"
                                                        style="    padding: 4px 7px;">
                                                        <li class="multiselect-item multiselect-all"><a tabindex="0"
                                                                class="multiselect-all">
                                                                <label class="checkbox"
                                                                    style="    margin-top: 0px; margin-bottom: 0px;"><input
                                                                        type="checkbox" value="multiselect-all"> Select
                                                                    all</label></a>
                                                        </li>
                                                        <li><a tabindex="0"><label class="checkbox" title="PAN India"
                                                                    style="    margin-top: 0px; margin-bottom: 0px;"><input
                                                                        type="checkbox" value="105"> PAN India</label>
                                                            </a>
                                                        </li>
                                                    </ul>


                                                </div>

                                            </span>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                            <div class="col-sm-12" style="text-align: right;">
                                <div class="col-sm-offset-2 col-sm-10">
                                    {{-- <input type="button" name="ctl00$ContentPlaceHolder1$btnsubmit" value="Update"
                                        onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btnsubmit','')"
                                        id="ContentPlaceHolder1_btnsubmit" class="btn btn-sm btn-primary"> --}}
                                    <a href="{{ route('vendor.new_requests') }}" class="btn btn-sm btn-sm btn-primary"
                                        style="color: White; margin-left: 4px">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
@endpush
