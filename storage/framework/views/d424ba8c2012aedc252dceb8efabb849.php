<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/logo/favicon.ico')); ?>" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('font-awesome/css/font-awesome.min.css')); ?>" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('Ionicons/css/ionicons.min.css')); ?>" />

    <!-- DataTables -->

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/all-skins.min.css')); ?>" />
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
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
    <?php echo $__env->yieldContent('page_style'); ?>
    <script src="<?php echo e(asset('jquery/dist/jquery.min.js')); ?>"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .select2-selection__choice__display {
            color: #08085c
        }

        .error {
            color: red;
        }
    </style>


    <?php echo $__env->yieldContent('page_style'); ?>

</head>

<body class="sidebar-mini skin-blue" style="background: #222d32;">

    <?php echo $__env->make('admin.partials.top-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.partials.side-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 926px;">

        <?php echo $__env->yieldContent('main_section'); ?>

    </div>
    <!-- /.content-wrapper -->

    <?php echo $__env->make('admin.partials.logout-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <script>
        ClassicEditor
            .create(document.querySelector('#default'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('.default'))
            .catch(error => {
                console.error(error);
            });


        new DataTable('#dtable', {});
        new DataTable('.dtable', {});

        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    <script>
        function showToast(message) {
            Toastify({
                text: message,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "bottom", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\resources\views/admin/layout/base.blade.php ENDPATH**/ ?>