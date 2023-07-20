@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | SMS Setting | Configuration <small id="ContentPlaceHolder1_hTag">Information</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-9" style="padding:0px;border-right: 1px solid #9494df;">
                                <div class="col-sm-12" style="padding:0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">SMS API <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter SMS
                                            API</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_sms_api" type="text"
                                            value="https://www.smsapi.test.com/SendSMS/sendmsg.php?uname=bmmtrans&amp;pass=bmmsms$&amp;send=BMMNAV&amp;dest={number}&amp;msg={text}"
                                            id="ContentPlaceHolder1_txt_sms_api" class="form-control"
                                            placeholder="Enter SMS API">
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">To / Number Syntax</label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator3"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter To /
                                            Number Syntax</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_to_number_syntax" type="text"
                                            value="{number}" id="ContentPlaceHolder1_txt_to_number_syntax"
                                            class="form-control" placeholder="Enter To / Number Syntax">
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Text / Message Syntax
                                    </label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator2"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Text
                                            / Message Syntax</span>
                                        <input name="ctl00$ContentPlaceHolder1$txt_text_message_syntax" type="text"
                                            value="{text}" id="ContentPlaceHolder1_txt_text_message_syntax"
                                            class="form-control" placeholder="Enter Text / Message Syntax">
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Status </label>
                                    <div class="col-sm-12">
                                        <select name="ctl00$ContentPlaceHolder1$ddl_sms_status"
                                            id="ContentPlaceHolder1_ddl_sms_status" class="form-control">
                                            <option value="True">Activated</option>
                                            <option selected="selected" value="False">Deactivated</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
                                    <div class="col-sm-12">
                                        <input type="button" name="ctl00$ContentPlaceHolder1$btn_submit" value="Submit"
                                            onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_submit','')"
                                            id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
                                        <a href="sms-configuration.aspx" class="btn btn-sm btn-primary"
                                            style="color: White; margin-left: 4px">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3" style="padding:0px;">
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Test Mobile Number</label>
                                    <div class="col-sm-12">
                                        <input name="ctl00$ContentPlaceHolder1$txt_test_mobile_number" type="number"
                                            id="ContentPlaceHolder1_txt_test_mobile_number" class="form-control"
                                            placeholder="Enter Test Mobile Number">
                                    </div>
                                    <label for="inputPassword3" class="col-sm-12 control-label">Test Message</label>
                                    <div class="col-sm-12">
                                        <input name="ctl00$ContentPlaceHolder1$txt_test_message" type="text"
                                            id="ContentPlaceHolder1_txt_test_message" class="form-control"
                                            placeholder="Enter Test Message">
                                    </div>
                                    <div class="col-sm-12" style="text-align: center;margin-top:10px;">

                                        <input type="button" name="ctl00$ContentPlaceHolder1$btn_send_test_sms"
                                            value="Send Test SMS"
                                            onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_send_test_sms','')"
                                            id="ContentPlaceHolder1_btn_send_test_sms" class="btn btn-primary btn-sm">
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
