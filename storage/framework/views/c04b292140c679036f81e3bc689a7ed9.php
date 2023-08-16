<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 id="ContentPlaceHolder1_hTag" style="text-align:center;text-decoration-line:underline;font-weight:700;">
            Welcome to Dotfy </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body" style="padding-bottom: 0px;">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-yellow">
                                    <span class="info-box-icon"><i class="ion ion-person-add"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">New Vendor Request</span>
                                        <span id="ContentPlaceHolder1_lblnewR"
                                            class="info-box-number"><?php echo e($newRequest); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-blue">
                                    <span class="info-box-icon"><i class="ion ion-person-add"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Approved Vendor</span>
                                        <span id="ContentPlaceHolder1_lblappc"
                                            class="info-box-number"><?php echo e($approvedRequest); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-maroon">
                                    <span class="info-box-icon"><i class="ion ion-person-add"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Rejected Vendor</span>
                                        <span id="ContentPlaceHolder1_lblrc"
                                            class="info-box-number"><?php echo e($rejectRequest); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-navy">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Empty Event</span>
                                        <span id="ContentPlaceHolder1_lblEe" class="info-box-number">0</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body" style="padding-bottom: 0px;">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-yellow">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Upcoming Event</span>
                                        <span id="ContentPlaceHolder1_lbl_UeC"
                                            class="info-box-number"><?php echo e(count($upcomingEvents)); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-blue">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Running Event</span>
                                        <span id="ContentPlaceHolder1_lbl_ReC"
                                            class="info-box-number"><?php echo e(count($runningEvents)); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-navy">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Closed Event</span>
                                        <span id="ContentPlaceHolder1_lbl_CeC"
                                            class="info-box-number"><?php echo e(count($closedEvents)); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Decision Taken Event</span>
                                        <span id="ContentPlaceHolder1_lbl_DTeC" class="info-box-number">0</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row div-display">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="<?php echo e(route('event.upcoming')); ?>" style="color: #000;">Upcoming Events</a>
                        </h4>
                        <hr style="margin-bottom: 14px;">
                        <div class="holder">

                            <?php if(count($upcomingEvents)): ?>
                                <ul id="ticker01">
                                    <?php $__currentLoopData = $upcomingEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><span><img src="<?php echo e(asset('images/new.png')); ?>" style="width: 30px"></span>
                                            <a href="<?php echo e(route('event.postedEventInformation', $e->id)); ?>"
                                                style="color: #000"> <?php echo e($e->title); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="<?php echo e(route('event.running')); ?>" style="color: #000;">Running Events</a>
                        </h4>
                        <hr />

                        <div class="holder">
                            <?php if(count($runningEvents)): ?>
                                <ul id="ticker01">
                                    <?php $__currentLoopData = $runningEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><span><img src="<?php echo e(asset('images/new.png')); ?>" style="width: 30px"></span>
                                            <a href="<?php echo e(route('event.statistics', $e->id)); ?>" style="color: #000">
                                                <?php echo e($e->title); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="<?php echo e(route('event.closed')); ?>" style="color: #000;">Closed Events</a>
                        </h4>
                        <hr />
                        <div class="holder">
                            <?php if(count($closedEvents)): ?>
                                <ul id="ticker01">
                                    <?php $__currentLoopData = $closedEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><span><img src="<?php echo e(asset('images/new.png')); ?>" style="width: 30px"></span>
                                            <a href="<?php echo e(route('event.postedEventInformation', $e->id)); ?>"
                                                style="color: #000"> <?php echo e($e->title); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            <?php endif; ?>
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
    <script>
        $(document).ready(function() {

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/admin/pages/dashboard/dashboard.blade.php ENDPATH**/ ?>