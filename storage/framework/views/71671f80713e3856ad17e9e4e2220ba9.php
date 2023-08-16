<div class="login-box-body" style="background-color:transparent">
    <div class="login-box-msg" style="margin-bottom:0px;font-size:16px;color:#000;">
        <span style="border-bottom:1px solid #000"><b><?php echo e(env('APP_NAME')); ?></b> <span
                style="font-size: 16px;font-weight:300;">
                | Admin</span></span>
    </div>

    <span id="RequiredFieldValidator2" style="color:red;font-size:12px;display:none;">Please enter employee
        id</span>
    <div class="form-group" style="margin-bottom:15px;">
        <input name="username" type="text" class="form-control" placeholder="Enter Employee ID" required />
    </div>
    <span id="RequiredFieldValidator1" style="color:red;font-size:12px;display:none;">Please enter
        password</span>
    <div class="form-group" style="margin-bottom:20px;">
        <input name="password" type="password" class="form-control" placeholder="Enter Password" required />
    </div>

    <div class="form-group row">
        <div class="col-sm-2"></div>
            <div class="col-sm-4">
            <input name="captcha" type="text" id="txt_password" class="form-control" required />
        </div>
        <div class="col-sm-4">
            <p style="text-align: left ;transform: skew(15deg, 15deg); padding-top:1em; margin-bottom:0px">
                <span> <?php echo e($captcha_number); ?></span>
            </p>
        </div>
    </div>

    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-12">
            <input type="submit" value="Login" id="btnLogin" class="btn btn-primary btn-block btn-sm"
                style="font-weight:400;font-size:14px;" />
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-xs-6" style="text-align:left;"><a href="<?php echo e(route('reset-link')); ?>"
                style="font-size:12px;">Forgot
                Password ?</a> </div>

        <div class="col-xs-6" style="text-align:right;"> <a href="<?php echo e(route('vendor.create')); ?>"
                style="font-size:12px; text-align: right;">New Registration</a></div>
    </div>
    <!-- /.social-auth-links -->
</div>
<?php /**PATH C:\xampp\htdocs\resources\views/public/partials/login-form.blade.php ENDPATH**/ ?>