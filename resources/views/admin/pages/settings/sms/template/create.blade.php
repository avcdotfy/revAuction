@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | SMS Setting | Template <small id="ContentPlaceHolder1_hTag">Create Information</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('template.sms.list') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">Go Back To List</a>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <div class="col-sm-12" style="padding: 0px;">
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Service Type <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                                            Service Type</span>
                                        <select name="ctl00$ContentPlaceHolder1$ddl_service_type"
                                            id="ContentPlaceHolder1_ddl_service_type" class="form-control">
                                            <option value="0">Select Service Type</option>
                                            <option value="Login OTP">Login OTP</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">SMS Template <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator2"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter SMS
                                            Template</span>
                                        <textarea name="ctl00$ContentPlaceHolder1$txt_sms_template" rows="2" cols="20"
                                            id="ContentPlaceHolder1_txt_sms_template" class="form-control" placeholder="SMS Template"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Status (<span
                                            style="color: red; font-size: small">*</span>)</label>
                                    <div class="col-sm-12">
                                        <select name="ctl00$ContentPlaceHolder1$ddl_status"
                                            id="ContentPlaceHolder1_ddl_status" class="form-control">
                                            <option value="True">Activate</option>
                                            <option value="False">Deactivate</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
                                    <div class="col-sm-12">
                                        <input type="button" name="ctl00$ContentPlaceHolder1$btn_submit"
                                            value="Save SMS Template"
                                            onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_submit','')"
                                            id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection
