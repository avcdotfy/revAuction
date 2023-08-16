<?php $__env->startSection('main_section'); ?>
    <section class="content-header">
        <h1>Home | Help &amp; Support <small id="ContentPlaceHolder1_hTag">Setup</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <?php echo $__env->make('admin.partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <form action="<?php echo e(route('help.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($hs ? $hs->id : ''); ?>">
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Help &amp; Support <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <textarea name="msg" id="default" cols="30" rows="10"> <?php echo e($hs ? $hs->msg : ''); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Phone <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <input name="phone" type="number" class="form-control" required
                                            value="<?php echo e($hs ? $hs->phone : ''); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Email <span
                                            style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <input name="email" type="email" class="form-control" required
                                            value=<?php echo e($hs ? $hs->email : ''); ?>>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-sm btn-primary" />
                                        <a href="<?php echo e(route('admin-dashboard')); ?>" class="btn btn-sm btn-primary"
                                            style="color: White; margin-left: 4px">Back</a>
                                    </div>
                                </div>
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

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/admin/pages/helpSupport/help-support.blade.php ENDPATH**/ ?>