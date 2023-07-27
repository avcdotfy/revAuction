

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Settings | Mail Setting | Template Create Information </h3>
        <ol class="breadcrumb">
            <a href="<?php echo e(route('template.email.list')); ?>" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">
                Go Back To List</a>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php echo $__env->make('admin.partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">

                            <form action="<?php echo e(route('template.email.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('admin.pages.settings.mail.template.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </form>

                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/settings/mail/template/create.blade.php ENDPATH**/ ?>