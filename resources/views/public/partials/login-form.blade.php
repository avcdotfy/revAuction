<div class="login-box-body" style="background-color:transparent">
    <div class="login-box-msg" style="margin-bottom:0px;font-size:16px;color:#000;">
        <span style="border-bottom:1px solid #000"><b>Reverse.Sysaler</b> <span style="font-size: 16px;font-weight:300;">
                | Admin</span></span>
    </div>

    <span id="RequiredFieldValidator2" style="color:red;font-size:12px;display:none;">Please enter employee
        id</span>
    <div class="form-group" style="margin-bottom:15px;">
        <input name="username" type="text" class="form-control" placeholder="Enter Employee ID" />
    </div>
    <span id="RequiredFieldValidator1" style="color:red;font-size:12px;display:none;">Please enter
        password</span>
    <div class="form-group" style="margin-bottom:20px;">
        <input name="password" type="password" class="form-control" placeholder="Enter Password" />
    </div>

    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-12">
            <input type="submit" value="Login" id="btnLogin" class="btn btn-primary btn-block btn-sm"
                style="font-weight:400;font-size:14px;" />
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-xs-6" style="text-align:left;"><a href="forgot-password.html" style="font-size:12px;">Forgot
                Password ?</a> </div>

        <div class="col-xs-6" style="text-align:right;"> <a href="{{ route('vendor.create') }}"
                style="font-size:12px; text-align: right;">New Registration</a></div>
    </div>
    <!-- /.social-auth-links -->
</div>
