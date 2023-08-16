<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Closed Event List </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <?php echo $__env->make('admin.partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Small boxes (Stat box) -->
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
                                                style="width: 70.6354px;">Posted Event</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.6354px;">Consolidate Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 76.0521px;">L1 Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 76.0521px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo e($key + 1); ?></td>

                                                <td> <?php echo e('AVCDOTFYREVAUC000' . $event->id); ?></td>
                                                <td><?php echo e($event->title); ?></td>

                                                <td><a href="<?php echo e(route('event.postedEventInformation', $event->id)); ?>">View
                                                        Information</a></td>

                                                <td><a id="ContentPlaceHolder1_lvCe_btn_generate_report_0"
                                                        href="<?php echo e(route('report.closedEventConsolidateReport', $event->id)); ?>">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvCe_btn_l1_generate_report_2"
                                                        href="<?php echo e(route('report.closedEvenL1Report', $event->id)); ?>">Generate
                                                        Report</a></td>

                                                <td>
                                                    <?php if($event->decision_status == 'TAKEN'): ?>
                                                        <span><?php echo e('DECISION ' . $event->decision_status); ?></span>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('decision.take', $event->id)); ?>"
                                                            target="_blank">Take Decision</a>
                                                    <?php endif; ?>
                                                </td>


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

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/admin/pages/event/closed.blade.php ENDPATH**/ ?>