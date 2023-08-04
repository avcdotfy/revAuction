@extends('public.layout.base')

@section('login-form')
    <form method="post" action="{{ route('admin-login') }}">
        @csrf
        <div class="login-box" style="border-radius:6px;background-color:#fff;border:1px solid #d2d6de;">
            <div class="login-logo" style="margin-bottom:0px;padding-top:20px;">
                <a href="login.html"><img src="images/logo.png" style="height:76px;" /></a>
            </div>

            <div class="login-box-body" style="background-color:transparent">

                <p class="login-box-msg" style="font-size:16px;color:#000;font-weight:300;">
                    <span style="border-bottom:1px solid #000"><b>Account</b> | Forgot Password</span>
                </p>

                <span id="RequiredFieldValidator1" style="color:red;font-size:12px;display:none;">Please enter email
                    id</span>
                <div class="form-group" style="margin-bottom:20px;">
                    <input name="txt_email_id" type="email" id="txt_email_id" class="form-control"
                        placeholder="Enter Email ID" />
                </div>
                <div class="form-group">

                </div>
                <div class="row" style="margin-bottom:20px;">
                    <div class="col-xs-12">
                        <input type="button" name="btn_forgot_password" value="Reset Password"
                            class="btn btn-primary btn-block btn-sm"
                            style="font-weight:400;font-size:14px;height:34px;border-radius:4px;" />
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-xs-12" style="text-align:center;font-size:12px;"><a href="login.html">
                            < Back To Login</a>
                    </div>
                </div>
                <!-- /.social-auth-links -->
            </div>

            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
    </form>
@endsection


@push('scripts')
@endpush
