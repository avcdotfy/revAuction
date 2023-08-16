<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom:  20px;">
        <h1 style="text-align:center;text-decoration-line:underline;font-weight:700; text-transform: capitalize;">Welcome
            back to your dashboard </h1>
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
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Upcoming Event</span>
                                        <span class="info-box-number"><?php echo e(count($upcomingEvents)); ?></span>
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
                                        <span class="info-box-text">PARTICIPATED EVENTS</span>
                                        <span id="ContentPlaceHolder1_lbl_CeC"
                                            class="info-box-number"><?php echo e(count($participatedEvents)); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-red">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">CLOSED EVENTS</span>
                                        <span id="ContentPlaceHolder1_lbl_CeC"
                                            class="info-box-number"><?php echo e(count($closedEvents)); ?></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            
                            <!-- ./col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row div-display">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="<?php echo e(route('vendor.upcoming-events')); ?>" style="color: #000;">Upcoming Events</a>
                        </h4>
                        <hr style="margin-bottom: 14px;" />

                        <div class="holder">
                            <?php if(count($upcomingEvents)): ?>
                                <marquee direction="up" Scrollamount=4 onmouseover="this.stop();"
                                    onmouseout="this.start();">
                                    <ul id="ticker01">
                                        <?php $__currentLoopData = $upcomingEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><span><img src="<?php echo e(asset('images/new.png')); ?>" style="width: 30px"></span>
                                                <a href="<?php echo e(route('vendor.posted-event-info', $e->id)); ?>" target="_blank"
                                                    style="color: #000"> <?php echo e($e->title); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </marquee>
                            <?php else: ?>
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="<?php echo e(route('vendor.running-events')); ?>" style="color: #000;">Running Events</a>
                        </h4>
                        <hr style="margin-bottom: 14px;" />
                        <div class="holder">
                            <?php if(count($runningEvents)): ?>
                                <marquee direction="up" Scrollamount=4 onmouseover="this.stop();"
                                    onmouseout="this.start();">
                                    <ul id="ticker01">
                                        <?php $__currentLoopData = $runningEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><span><img src="<?php echo e(asset('images/new.png')); ?>" style="width: 30px"></span>
                                                <a href="<?php echo e(route('vendor.liveAuction', $e->id)); ?>" style="color: #000">
                                                    <?php echo e($e->title); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </marquee>
                            <?php else: ?>
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="#" style="color: #000;">Closed Events</a>
                        </h4>
                        <hr style="margin-bottom: 14px;" />
                        <div class="holder">
                            <?php if(count($closedEvents)): ?>
                                <marquee direction="up" Scrollamount=4 onmouseover="this.stop();"
                                    onmouseout="this.start();">
                                    <ul id="ticker01">
                                        <?php $__currentLoopData = $closedEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><span><img src="<?php echo e(asset('images/new.png')); ?>" style="width: 30px"></span>
                                                <a href="<?php echo e(route('vendor.posted-event-info', $e->id)); ?>" target="_blank"
                                                    style="color: #000"> <?php echo e($e->title); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </marquee>
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
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('vendor.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/vendor/pages/dashboard.blade.php ENDPATH**/ ?>