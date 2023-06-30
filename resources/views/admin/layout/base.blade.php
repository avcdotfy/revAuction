<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo/favicon.ico" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="Ionicons/css/ionicons.min.css" />
    <link href="simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- DataTables -->
    <link rel="stylesheet" href="datatables/dataTables.bootstrap.css" />
    <link rel="stylesheet" href="dist/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="dist/css/buttons.dataTables.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="dist/css/skins/all-skins.min.css" />
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .title {
            margin-left: 10px;
            vertical-align: text-bottom;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 15px;
        }

        .bx {
            font-size: 18px;
        }
    </style>
    <script src="jquery/dist/jquery.min.js"></script>

    <title>Home | Dashboard</title>
    <style type="text/css">
        label>a {
            color: #08085c;
        }

        label>a:hover {
            text-decoration-line: underline;
        }

        .small_box {
            background-color: #ffffff;
            border: 1px solid #d2d6de;
            border-radius: 4px;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .div-display {
            display: flex;
            margin-left: -5px;
            margin-right: -5px;
            min-height: 220px;
        }

        @media only screen and (max-width: 991px) {
            .div-display {
                display: block;
                margin-left: 0px;
                margin-right: 0px;
            }

            .small_box {
                margin-left: 0px;
                margin-right: 0px;
            }
        }

        .holder {

            width: 300px;
            height: 250px;
            overflow: hidden;
            padding: 0px;

        }

        .holder .mask {
            position: relative;
            left: 0px;
            top: 10px;
            width: 300px;
            height: 240px;
            overflow: hidden;
        }

        .holder ul {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .holder ul li {
            padding: 10px 0px;
        }

        .holder ul li a {
            color: darkred;
            text-decoration: none;
        }
    </style>

</head>

<body class="sidebar-mini skin-blue" style="background: #222d32;">

    @include('admin.partials.top-nav')

    @include('admin.partials.side-nav')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 926px;">

        @yield('main_section')

    </div>
    <!-- /.content-wrapper -->
    @include('admin.partials.footer')

    @include('admin.partials.scripts')

    @stack('scripts')
</body>

</html>
