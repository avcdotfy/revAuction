<div class="col-sm-9" style="padding: 0px; border-right: 1px solid #9494df;">
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Service Type <span
                style="color: red; font-size: 13px">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                Service Type</span>
            <select name="service_type" id="ContentPlaceHolder1_ddl_service_type" class="form-control">
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
            <input name="smtp_host" type="text" id="ContentPlaceHolder1_txt_smtp_host" class="form-control"
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
            <input name="smtp_port" type="number" id="ContentPlaceHolder1_txt_smtp_port" class="form-control"
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
            <input name="mail_from" type="text" id="ContentPlaceHolder1_txt_mail_from" class="form-control"
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
            <input name="display_name" type="text" id="ContentPlaceHolder1_txt_display_name" class="form-control"
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
            <input name="email_username" type="text" id="ContentPlaceHolder1_txt_email_username" class="form-control"
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
            <input name="email_password" type="password" id="ContentPlaceHolder1_txt_email_password"
                class="form-control" placeholder="Password">
        </div>
    </div>
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">EnableSsl <span
                style="color: red; font-size: 13px">*</span></label>
        <div class="col-sm-12">
            <select name="enable_ssl" id="ContentPlaceHolder1_ddl_enable_ssl" class="form-control">
                <option value="True">True</option>
                <option value="False">False</option>

            </select>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Status (<span
                style="color: red; font-size: small">*</span>)</label>
        <div class="col-sm-12">
            <select name="status" id="ContentPlaceHolder1_ddl_status" class="form-control">
                <option value="True">Activate</option>
                <option value="False">Deactivate</option>

            </select>
        </div>
    </div>
    <div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
        <div class="col-sm-12">
            <input type="submit" value="Save Mail Configuration" id="ContentPlaceHolder1_btn_submit"
                class="btn btn-sm btn-primary">
        </div>
    </div>
</div>
