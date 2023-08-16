<?php $__env->startSection('main_section'); ?>
    <section class="content-header">
        <h1>Home | Reports | Closed Event Wise Report <small id="ContentPlaceHolder1_hTag">List</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <td colspan="6" rowspan="1">
                                                <div class="col-sm-2" style="display:none;">
                                                    <select name="ctl00$ContentPlaceHolder1$ddl_eSlist"
                                                        id="ContentPlaceHolder1_ddl_eSlist" class="form-control">
                                                        <option selected="selected" value="Re">Running Events
                                                        </option>
                                                        <option value="Ce">Closed Events</option>
                                                        <option value="DTe">Decision Taken Events</option>

                                                    </select>
                                                </div>
                                                <form action="<?php echo e(route('report.closedEvent')); ?>" id="categoryForm"
                                                    method="get">
                                                    <div class="col-sm-3">

                                                        <select id="categorySelect" class="form-control" name="cat_id">
                                                            <option <?php echo e($catId == null ? 'selected' : ''); ?> value="">
                                                                Select Category
                                                            </option>
                                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option <?php echo e($cat->id == $catId ? 'selected' : ''); ?>

                                                                    value="<?php echo e($cat->id); ?>">
                                                                    <?php echo e($cat->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4" style="padding: 0px;">
                                                        <label for="inputPassword3" class="col-sm-5 control-label">Closed
                                                            From
                                                            Date :</label>
                                                        <div class="col-sm-7">
                                                            <input name="fromdate" type="date" id="txt_fromdate"
                                                                value="<?php echo e($fromDate); ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4" style="padding: 0px;">
                                                        <label for="inputPassword3" class="col-sm-5 control-label">Closed
                                                            To
                                                            Date :</label>
                                                        <div class="col-sm-7">
                                                            <input name="todate" type="date" id="txt_todate"
                                                                class="form-control" value="<?php echo e($toDate); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="text-align:right;">
                                                        <input type="submit" value="Search" id="btn_search"
                                                            class="btn btn-sm btn-primary">
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 29.6771px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 104.083px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 488.854px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 92.8958px;">Consolidate Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 79.8125px;">L1 Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 87.3438px;">Posted Event</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="even">
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><a data-toggle="modal"
                                                        href="#model_<?php echo e($event->id); ?>"><?php echo e(EVENT_ID_PREFIX . $event->id); ?></a>
                                                </td>
                                                <td><?php echo e($event->title); ?></td>
                                                <td><a
                                                        href="<?php echo e(route('report.closedEventConsolidateReport', $event->id)); ?>">Generate
                                                        Report</a></td>
                                                <td><a href="<?php echo e(route('report.closedEvenL1Report', $event->id)); ?>">Generate
                                                        Report</a>
                                                </td>
                                                <td><a href="<?php echo e(route('event.postedEventInformation', $event->id)); ?>">View
                                                        Information</a></td>
                                            </tr>

                                            
                                            <div class="modal fade" id="model_<?php echo e($event->id); ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="border-radius: 4px;">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title"
                                                                style="font-weight: 600;text-align:center">Event
                                                                Basic Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="box">
                                                                        <div class="box-body">
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Open
                                                                                    Date
                                                                                    &amp; Time
                                                                                    : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label><?php echo e($event->opening_date); ?>

                                                                                        <?php echo e($event->opening_time); ?></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Close
                                                                                    Date &amp; Time
                                                                                    : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label><?php echo e($event->closing_date); ?>

                                                                                        <?php echo e($event->closing_time); ?></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Created
                                                                                    By :
                                                                                </label>
                                                                                <div class="col-sm-8">
                                                                                    <label><?php echo e($event->user->name); ?></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Created
                                                                                    Date :
                                                                                </label>
                                                                                <div class="col-sm-8">
                                                                                    <label><?php echo e($event->created_at); ?></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="col-sm-12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
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


<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            // $('#txt_fromdate').datepicker({
            //     minDate: 0
            // });
            // $('#txt_todate').datepicker({
            //     minDate: 0
            // });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/admin/pages/report/closed-event.blade.php ENDPATH**/ ?>