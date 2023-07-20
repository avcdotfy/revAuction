@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | Mail Setting | Configuration <small id="ContentPlaceHolder1_hTag">Create
                Information</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('config.mail.list') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">Go Back To List</a>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <div class="col-sm-9" style="padding: 0px; border-right: 1px solid #9494df;">
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Service Type <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                                            Service Type</span>
                                        <select name="ctl00$ContentPlaceHolder1$ddl_service_type"
                                            id="ContentPlaceHolder1_ddl_service_type" class="form-control">
                                            <option value="0">Select Service Type</option>
                                            <option value="New Registration">New Registration</option>
                                            <option value="Request Accepted">Request Accepted</option>
                                            <option value="Request Rejected">Request Rejected</option>
                                            <option value="Forgot Password">Forgot Password</option>
                                            <option value="New Event Invitation">New Event Invitation</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">SMTP Host <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator2"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            SMTP Host</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_smtp_host" type="text"
                                            id="ContentPlaceHolder1_txt_smtp_host" class="form-control"
                                            placeholder="SMTP Host">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">SMTP Port <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator3"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            SMTP Port</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_smtp_port" type="number"
                                            id="ContentPlaceHolder1_txt_smtp_port" class="form-control"
                                            placeholder="SMTP Port">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Mail From <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator4"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            Mail From</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_mail_from" type="text"
                                            id="ContentPlaceHolder1_txt_mail_from" class="form-control"
                                            placeholder="Mail From">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Display Name <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator5"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            Display Name</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_display_name" type="text"
                                            id="ContentPlaceHolder1_txt_display_name" class="form-control"
                                            placeholder="Display Name">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Username <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator6"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            Username</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_email_username" type="text"
                                            id="ContentPlaceHolder1_txt_email_username" class="form-control"
                                            placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Password <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator9"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            Password</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_email_password" type="password"
                                            id="ContentPlaceHolder1_txt_email_password" class="form-control"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">EnableSsl <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <select name="ctl00$ContentPlaceHolder1$ddl_enable_ssl"
                                            id="ContentPlaceHolder1_ddl_enable_ssl" class="form-control">
                                            <option value="True">True</option>
                                            <option value="False">False</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding: 0px;">
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
                                            value="Save Mail Configuration"
                                            onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_submit','')"
                                            id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3" style="padding: 0px;">
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Test Mail
                                        Configuration</label>
                                    <div class="col-sm-12">
                                        <input name="ctl00$ContentPlaceHolder1$txt_test_email_id" type="text"
                                            id="ContentPlaceHolder1_txt_test_email_id" class="form-control"
                                            placeholder="Enter Test Email ID">
                                    </div>
                                    <div class="col-sm-12" style="text-align: center;">

                                        <input type="button" name="ctl00$ContentPlaceHolder1$btn_send_test_mail"
                                            value="Send Test Mail"
                                            onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_send_test_mail','')"
                                            id="ContentPlaceHolder1_btn_send_test_mail" class="btn btn-primary btn-sm">
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
