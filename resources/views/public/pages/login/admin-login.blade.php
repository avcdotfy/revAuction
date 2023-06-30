@extends('public.layout.base')

@section('login-form')
    <form method="post" action="{{ route('admin-login') }}" onsubmit="javascript:return WebForm_OnSubmit();"
        onkeypress="javascript:return WebForm_FireDefaultButton(event, 'btnLogin')" id="form1">
        @csrf
        <div class="aspNetHidden">
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="/wEPDwULLTEyMjcxMTMzNzcPZBYCAgMPZBYCAgEPFgIeCWlubmVyaHRtbAUJQk1NIElzcGF0ZGR2gZDqQELGSpTHlwkvm2JgcqzQTaXAKO/UAiKWyJN9XQ==" />
        </div>

        <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['form1'];
            if (!theForm) {
                theForm = document.form1;
            }

            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
        </script>


        <script
            src="https://reverse.sysaler.com/WebResource.axd?d=tn9KdEIze2w-72uDmQabwFlfAUxzEsmw9HqhZIFLvDMfAi8Kdl4iMl7otSNLtbe4A8X8X0WNF3qlEzFNU--NPNqPBMN2BYry90pallj0DYI1&amp;t=637811927229275428"
            type="text/javascript"></script>


        <script
            src="https://reverse.sysaler.com/ScriptResource.axd?d=DcXF4-AS7KmhTGeSBFYWrLzq0lNHMyCYrzjKIqOjLdmWFpXOwb_LBsUBzyVndwMl5sZLrUGcqz9ZFvDzdAGZ5jKiMWXjAdCc5-h51wEZ14Y80PwLNvqGCDjrXUVFIVoV_AISlT1WFC5X-m3Z6yb0goUKmcXmz1lvp3PnAFbrxq01&amp;t=2265eaa7"
            type="text/javascript"></script>
        <script
            src="https://reverse.sysaler.com/ScriptResource.axd?d=NTeKW99xdDnADdNk9evfIStv1cASRDinuSb_Qi5mGMEq8SaqX81JLnNvkhD3dPM34nOF6xFcWnUIRD1ZBqqCPeb663UTjhUSjOq2O8r5AWsM7-IymY21nmJamHrMwmKu5psbNGZSU9s8ouWgMk7BFw2&amp;t=7c776dc1"
            type="text/javascript"></script>
        <script type="text/javascript">
            //<![CDATA[
            if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
            //]]>
        </script>

        <script
            src="https://reverse.sysaler.com/ScriptResource.axd?d=sDknXAlBKd7iVymY5axlx2AT8Dcpl6J0SZM63w1KeW7HmfYIVUrMFZFtPfA9zV3JLOHJwWTcugWPLOBzu6utmlrMej-l3O3JB3LVXgbg3u7XCZFv4GFf2pb9IzOOoweQETE8maPMkFfstaeVokLZfw2&amp;t=7c776dc1"
            type="text/javascript"></script>
        <script
            src="https://reverse.sysaler.com/WebResource.axd?d=NW5Xe7yGfFAdpvAxlvAquqrSnNqQYz4zqAn1pk3zIhlS68ytseBJol6bxR4pe4IuI9o_lA3E0MLOhszKZUOBfbHB5g-DWutX7Q6sYlK4yG41&amp;t=637811927229275428"
            type="text/javascript"></script>
        <script type="text/javascript">
            //<![CDATA[
            function WebForm_OnSubmit() {
                if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
                return true;
            }
            //]]>
        </script>

        <div class="aspNetHidden">

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="82312306" />
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="/wEdAAd0b8DJalQc2KNI2+dCHza4GPuLhnb0WwxQhyhKoGIq9C/yb/VVqFmvGO/9JabxfEuinihG6d/Xh3PZm3b5AoMQY5omMsp0VI69Xte6QTgG6QC1kRaGgI4+GL88eSditVyGzYL6BJ7wKtb7mAKJJx16X8Oo0ShbAQFkAt06Z88BksBHjcG5IYCPWEtXgNecNaE=" />
        </div>
        <div class="login-box" style="border-radius:6px;background-color:#fff;border:1px solid #d2d6de;">
            <div class="login-logo" style="margin-bottom:0px;padding-top:20px;">
                <a href="login.html"><img src="{{ asset('images/logo.png') }}" style="height:76px;" /></a>
            </div>
            <div class="login-logo" style="margin-bottom:0px;font-size:28px;padding-top:20px;">
                <a href="#" style="border-bottom:1px solid #000"><b id="company_name"
                        style="color:#000;"><b>{{ env('APP_NAME') }}</b></a>
            </div>
            <div class="login-box-body" style="background-color:transparent">
                <div class="login-box-msg" style="margin-bottom:0px;font-size:16px;color:#000;">
                    <span style="border-bottom:1px solid #000"><b>Reverse.Sysaler</b> <span
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
                <div class="form-group">

                </div>
                <div class="row" style="margin-bottom:20px;">
                    <div class="col-xs-12">
                        <input type="button" name="btnLogin" value="Login"
                            onclick="if(Page_ClientValidate(&#39;m&#39;)){this.disabled=true;this.value=&#39;Login ...&#39;;};__doPostBack(&#39;btnLogin&#39;,&#39;&#39;)"
                            id="btnLogin" class="btn btn-primary btn-block btn-sm"
                            style="font-weight:400;font-size:14px;" />
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-xs-12" style="text-align:center;"><a href="forgot-password.html"
                            style="font-size:12px;">Forgot Password ?</a></div>
                </div>
                <!-- /.social-auth-links -->
            </div>

            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        <script type="text/javascript">
            //<![CDATA[
            Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'form1', ['tUpdatePanel1', 'UpdatePanel1'], [], [],
                90, '');
            //]]>
        </script>

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
                        <div class="modal-footer" style="text-align: center;">
                            <div class="col-sm-6 col-xs-6">
                                <input type="button" name="btn_verify_otp" value="Verify"
                                    onclick="if(Page_ClientValidate(&#39;F&#39;)){this.disabled=true;this.value=&#39;Verifying ...&#39;;};__doPostBack(&#39;btn_verify_otp&#39;,&#39;&#39;)"
                                    id="btn_verify_otp" class="btn btn-sm btn-block btn-success"
                                    style="font-weight:400;font-size:14px;height:34px;border-radius:4px;" />
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <input type="button" name="btn_resend_otp" value="Re-Send OTP"
                                    onclick="this.disabled=true;this.value=&#39;Re-sending OTP ...&#39;;__doPostBack(&#39;btn_resend_otp&#39;,&#39;&#39;)"
                                    id="btn_resend_otp" class="btn btn-sm btn-block btn-warning"
                                    style="font-weight:400;font-size:14px;height:34px;border-radius:4px;" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <script type="text/javascript">
            var Page_Validators = new Array(document.getElementById("RequiredFieldValidator2"), document.getElementById(
                "RequiredFieldValidator1"), document.getElementById("RequiredFieldValidator3"));
        </script>

        <script type="text/javascript">
            var RequiredFieldValidator2 = document.all ? document.all["RequiredFieldValidator2"] : document.getElementById(
                "RequiredFieldValidator2");
            RequiredFieldValidator2.controltovalidate = "txt_user_name";
            RequiredFieldValidator2.errormessage = "Please enter employee id";
            RequiredFieldValidator2.display = "Dynamic";
            RequiredFieldValidator2.validationGroup = "m";
            RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
            RequiredFieldValidator2.initialvalue = "";
            var RequiredFieldValidator1 = document.all ? document.all["RequiredFieldValidator1"] : document.getElementById(
                "RequiredFieldValidator1");
            RequiredFieldValidator1.controltovalidate = "txt_password";
            RequiredFieldValidator1.errormessage = "Please enter password";
            RequiredFieldValidator1.display = "Dynamic";
            RequiredFieldValidator1.validationGroup = "m";
            RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
            RequiredFieldValidator1.initialvalue = "";
            var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById(
                "RequiredFieldValidator3");
            RequiredFieldValidator3.controltovalidate = "txt_otp";
            RequiredFieldValidator3.errormessage = "Please enter OTP.";
            RequiredFieldValidator3.display = "Dynamic";
            RequiredFieldValidator3.validationGroup = "F";
            RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
            RequiredFieldValidator3.initialvalue = "";
            //]]>
        </script>


        <script type="text/javascript">
            //<![CDATA[

            var Page_ValidationActive = false;
            if (typeof(ValidatorOnLoad) == "function") {
                ValidatorOnLoad();
            }

            function ValidatorOnSubmit() {
                if (Page_ValidationActive) {
                    return ValidatorCommonOnSubmit();
                } else {
                    return true;
                }
            }
            WebForm_AutoFocus('btnLogin');
            document.getElementById('RequiredFieldValidator2').dispose = function() {
                Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator2'));
            }
            document.getElementById('RequiredFieldValidator1').dispose = function() {
                Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator1'));
            }
            document.getElementById('RequiredFieldValidator3').dispose = function() {
                Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator3'));
            }
            //]]>
        </script>
    </form>
@endsection


@push('scripts')
@endpush
