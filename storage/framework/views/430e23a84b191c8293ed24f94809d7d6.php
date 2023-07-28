

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Region List </h3>
        <ol class="breadcrumb">
            <a href="<?php echo e(route('region.create')); ?>" style="color: white; font-weight: 600" class="btn-block btn-primary btn-sm">
                + Create New Region</a>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <?php echo $__env->make('admin.partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 43.3333px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width:100.812px;">Region Name</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 190.156px;">Region Message </th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 80.156px;">Is Alert ?</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.156px;">Updated on</th>


                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo e($key + 1); ?></td>
                                                <td class="sorting_1"><?php echo e($region->name); ?></td>
                                                <td class="sorting_1"><?php echo e($region->description); ?></td>
                                                <td class="sorting_1"><?php echo e($region->is_alert ? 'Yes' : 'No'); ?></td>
                                                <td class="sorting_1"><?php echo e($region->updated_at); ?></td>
                                                <td class="sorting_1">
                                                    <label
                                                        class="label  <?php echo e($region->is_active ? 'label-success' : 'label-danger'); ?> "
                                                        style="font-size: 11px; font-weight: 600;text-transform:capitalize;">
                                                        <?php echo e($region->is_active ? 'Active' : 'Deative'); ?>

                                                </td>
                                                <td class="sorting_1"><a href="<?php echo e(route('region.edit', $region->id)); ?>"><i
                                                            class="fa fa-edit"></i>
                                                        Edit</a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
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

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/settings/master/region/list.blade.php ENDPATH**/ ?>