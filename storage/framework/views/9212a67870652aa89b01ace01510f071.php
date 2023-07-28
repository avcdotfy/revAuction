

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Upcoming Event List </h3>

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
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 38.5104px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 44.7292px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 170.583px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.6354px;">Event Mode</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 76.0521px;">Posted Event</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo e($key + 1); ?></td>

                                                <td><?php echo e($event->id); ?></td>
                                                <td><?php echo e($event->title); ?></td>

                                                <td><?php echo e($event->eventmode->mode); ?></td>
                                                <td>-</td>
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

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/event/upcoming.blade.php ENDPATH**/ ?>