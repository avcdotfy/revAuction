<!DOCTYPE html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        {{ env('APP_NAME') }} | Admin | Forgot Password
    </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo/favicon.ico') }}" />
    <!-- Tell the browser to be responsive to screen width -->
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

        .error {
            color: red;
        }

        .ellipsis {
            text-overflow: ellipsis width: 100% white-space: nowrap overflow: hidden
        }


            {
            .apply-selection display: none width: 100% margin: 0 padding: 5px 10px border-bottom: 1px solid #ccc
        }

            {
            .ajax-link display: none
        }

            {
            .checkboxes margin: 0 display: none border: 1px solid #ccc border-top: 0
        }

            {
            .inner-wrap padding: 5px 10px max-height: 140px overflow: auto
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="hold-transition login-page" style="background: #eaeaea">
    <section class="content-header" style="padding:0px; background: #fff">
        <h1 style="text-align: center;text-transform:uppercase;border-bottom: 1px solid #dedede;">
            <span><img src="{{ asset('media/logo/logo.png') }}" style="height:66px;"> </span>
        </h1>
    </section>

    <section class="content"
        style="min-height: 250px;
    padding: 0px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 1px;
    padding-right: 0px;">
        @include('admin.partials.alerts')
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-5" style="padding: 0px;">
                                <div class="col-sm-12">
                                    <a href=" " id="aTag_Banner_Image" target="_blank" title=" "><img
                                            id="img_banner_image" class="img-responsive"
                                            src="{{ asset('media/logo/banner_image.jpg') }}"></a>
                                    <a href="{{ route('vendor.login') }}" id="aTag_Banner_Image" target="_blank"
                                        title=" " class="btn btn-primary">Vendor Login </a>
                                </div>
                            </div>
                            <div class="col-sm-7" style="border-left: 1px solid #d2d6de;padding:0px;">
                                <form action="{{ route('vendor.store') }}" method="post" enctype="multipart/form-data"
                                    id="registerForm">
                                    @csrf
                                    @include('public.pages.register.form') 
                                </form>
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


    <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="{{ asset('validations/register-form-validator.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#countrySelect').on('change', function(ev) {
                fetchStates(ev.target.value);
            })

            function fetchStates(country_id) {
                $.ajax({
                    type: "get",
                    url: `{{ route('states.byCountry') }}`,
                    data: {
                        'country_id': country_id
                    },

                    success: function(res) {
                        $('#stateSelect').empty();
                        $('#stateSelect').append(
                            `<option value="">-- select state--</option>`
                        );

                        console.log(res.state);
                        res.state.forEach(state => {
                            $('#stateSelect').append(
                                `<option value=${state.id}>${state.name}</option>`
                            );
                        });
                        //
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }

            $(document).ready(function() {
                $('.select2').select2();
            });
        });
    </script>
</body>

</html>
