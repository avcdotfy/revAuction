

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Events | Upcoming Events List </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12">
                                <div id="dtable_wrapper" class="dataTables_wrapper no-footer">

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
                                                    style="width: 70.6354px;">Documents</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 1;
                                            ?>
                                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($event->status == 'SCHEDULED'): ?>
                                                    <tr>
                                                        <td><?php echo e($i); ?></td>
                                                        <td> <a href=""><?php echo e($event->id); ?> </a></td>

                                                        <td>
                                                            <?php echo e($event->title); ?> <span class="badge "
                                                                style="background-color: yellow ; color:black !important"><?php echo e($event->status); ?></span>
                                                        </td>
                                                        <td>-</td>
                                                    </tr>
                                                    <?php
                                                        $i = $i + 1;
                                                    ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </tbody>
                                    </table>



                                </div>
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

<?php echo $__env->make('vendor.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/vendor/pages/upcomming-events.blade.php ENDPATH**/ ?>