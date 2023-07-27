

<?php $__env->startSection('main_section'); ?>
    <section class="content-header">
        <h1>Home | Settings | Mail Setting | Configuration <small id="ContentPlaceHolder1_hTag">Create
                Information</small></h1>
        <ol class="breadcrumb">
            <a href="<?php echo e(route('config.mail.list')); ?>" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">Go Back To List</a>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="<?php echo e(route('config.mail.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('admin.pages.settings.mail.configuration.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </form>
                            
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/settings/mail/configuration/create.blade.php ENDPATH**/ ?>