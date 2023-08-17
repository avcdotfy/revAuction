<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        Dotfy | Vendor | Login
    </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ Storage::url('fav_ico/' . CompanyHelper::getCompanyFavIcon()) }}" />

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('Ionicons/css/ionicons.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('login/css/AdminLTE.min.css') }}" />
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .form-group {
            margin-bottom: 10px;
        }
    </style>
    <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>

</head>

<body class="hold-transition login-page">

    <div class="login-box" style="border-radius:6px;background-color:#fff;border:1px solid #d2d6de;">
        <div class="login-logo" style="margin-bottom:0px;padding-top:20px;">
            <img src="{{ Storage::url('company_logo/' . CompanyHelper::getCompanyLogo()) }}" style="height:66px;">
        </div>
        @include('vendor.partials.alerts')
        <form action="{{ route('vendor.login') }}" method="post">
            @csrf
            @include('public.partials.login-form')
        </form>

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
                                        style="color:Red;font-size:12px;font-weight:bold;display:none;">Please enter
                                        OTP.</span>
                                    <input name="txt_otp" type="text" id="txt_otp" class="form-control"
                                        placeholder="Enter OTP" />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <div class="col-sm-6 col-xs-6">
                            <input type="button" name="btn_verify_otp" value="Verify" id="btn_verify_otp"
                                class="btn btn-sm btn-block btn-success"
                                style="font-weight:400;font-size:14px;height:34px;border-radius:4px;" />
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <input type="button" name="btn_resend_otp" value="Re-Send OTP" id="btn_resend_otp"
                                class="btn btn-sm btn-block btn-warning"
                                style="font-weight:400;font-size:14px;height:34px;border-radius:4px;" />
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>


</html>
