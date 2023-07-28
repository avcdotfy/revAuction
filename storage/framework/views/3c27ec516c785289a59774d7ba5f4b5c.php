

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px">
        <h3>Home | Settings| Master Setting | Region </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="<?php echo e(route('region.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('admin.pages.settings.master.region.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </form>
                        </div>


                    </div>
                </div>


                <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/settings/master/region/create.blade.php ENDPATH**/ ?>