@extends('public.layout.base')

@section('login-form')
    <form method="post" action="{{ route('admin-login') }}">
        @csrf
        <div class="login-box" style="border-radius:6px;background-color:#fff;border:1px solid #d2d6de;">
            <div class="login-logo" style="margin-bottom:0px;padding-top:20px;">
                <a href=""><img src="{{ Storage::url('company_logo/' . CompanyHelper::getCompanyLogo()) }}"
                        style="height:76px;" /></a>
            </div>
            <div class="login-logo" style="margin-bottom:0px;font-size:28px; ">
                <a href="" style="border-bottom:1px solid #000"><b id="company_name"
                        style="color:#000;"><b>{{ env('APP_NAME') }}</b></a>
            </div>
            <div class="login-box-body" style="background-color:transparent">
                <div class="login-box-msg" style="margin-bottom:0px;font-size:16px;color:#000;">
                    <span style="border-bottom:1px solid #000"><b>{{ env('APP_NAME') }}</b> <span
                            style="font-size: 16px;font-weight:300;"> | Admin</span></span>
                </div>
                <p class="login-box-msg" style="font-size:16px;color:#000;font-weight:300;">
                    <span style="border-bottom:1px solid #000"><b>Account</b> | Sign In to Get started</span>
                </p>

                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ $error }}<br />
                    </div>
                @endforeach

                <span id="RequiredFieldValidator2" style="color:red;font-size:12px;display:none;">Please enter employee
                    id</span>
                <div class="form-group" style="margin-bottom:15px;">
                    <input name="username" type="text" id="txt_user_name" class="form-control"
                        placeholder="Enter Employee ID" />
                </div>
                <span id="RequiredFieldValidator1" style="color:red;font-size:12px;display:none;">Please enter
                    password</span>
                <div class="form-group" style="margin-bottom:20px;">
                    <input name="password" type="password" id="txt_password" class="form-control"
                        placeholder="Enter Password" />
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <input name="captcha" type="text" id="txt_password" class="form-control" required />
                    </div>
                    <div class="col-sm-4">
                        <p style="text-align: left ;transform: skew(15deg, 15deg); padding-top:1em; margin-bottom:0px">
                            <span> {{ $captcha_number }}</span>
                        </p>
                    </div>
                </div>
                <div class="row" style="margin-bottom:20px;">
                    <div class="col-xs-12">
                        <input type="submit" name="btnLogin" value="Login" id="btnLogin"
                            class="btn btn-primary btn-block btn-sm" style="font-weight:400;font-size:14px;" />
                    </div>
                    <!-- /.col -->
                </div>
                {{-- <div class="row">
                    <div class="col-xs-12" style="text-align:center;"><a href="forgot-password.html"
                            style="font-size:12px;">Forgot Password ?</a></div>
                </div> --}}
                <!-- /.social-auth-links -->
            </div>

            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <div class="modal fade" id="modal_otp">
            <div class="modal-dialog" style="width: 350px;">
                <div class="modal-content" style="border-radius: 6px;">
                    <div id="UpdatePanel1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 id="h_otp_title" class="modal-title" style="text-align: center; font-weight: bold;">
                                Authenticate your login through OTP sent to your Mobile Number</h4>
                        </div>
                        <div class="modal-body" style="padding-bottom: 0px; padding-top: 0px;">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-sm-12" style="padding: 0px;">

                                        <span id="RequiredFieldValidator3"
                                            style="color:Red;font-size:12px;font-weight:bold;display:none;">Please
                                            enter OTP.</span>
                                        <input name="txt_otp" type="text" id="txt_otp" class="form-control"
                                            placeholder="Enter OTP" />
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form>
@endsection


@push('scripts')
@endpush
