<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px; text-align: center; text-decoration: underline;">Help & Support
        </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-xs-12" style=" text-align: center;">
                <h4 style="padding-bottom: 15px"> <?php echo $hs->msg; ?></h4>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-2">

            </div>
            <div class="col-xs-4">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12"
                                style="padding: 20px; padding-top: 0px;  padding-bottom: 0px; text-align: center;">
                                <h4 style="padding-bottom: 4px"> <i class='bx bx-phone-call' style="font-size: 40px"></i>
                                </h4>
                                <h4 style="padding-bottom: 15px">Call Us : <?php echo e($hs->phone); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12"
                                style="padding: 20px; padding-top: 0px;  padding-bottom: 0px; text-align: center;">
                                <h4 style="padding-bottom: 4px"> <i class='bx bx-mail-send' style="font-size: 40px"></i>
                                </h4>
                                <h4 style="padding-bottom: 15px">customer.<?php echo e($hs->email); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('vendor.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/vendor/pages/help-support.blade.php ENDPATH**/ ?>