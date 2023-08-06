<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Live Auction Items Statistics List </h3>

    </section>
    <!-- Main content -->
    <section class="content" style="min-height: auto">
        <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px">
            <div class="box">
                <div class="box-body">
                    <h5 style=" margin-top: 10px; padding-bottom: 0px;"> <?php echo e($event->title); ?> <span
                            style="padding-left: 12px;"><a href="#" style="text-decoration: underline;">
                                <?php echo e('AVCDOTFYREVAUC000' . $event->id); ?></a></span></h5>
                </div>
            </div>
        </div>
    </section>

    <?php if($bidStarted > 0): ?>
        <?php $__currentLoopData = $event->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rpuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="content itemsBox" style="min-height: auto">
                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px">
                    <div class="box">
                        <div class="box-body">

                            
                            <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px">
                                <table class="table table-bordered dataTable">
                                    <thead>
                                        <tr style="background-color: #d5f7d5c2;">
                                            <th style="text-align: justify; border-top: 0px;">Item Code :
                                                <span id="ContentPlaceHolder1_lvIl_lbl_item_code_0"
                                                    title="HDHDHDH"><?php echo e($rpuItem->item->code); ?></span>
                                                <br />
                                                UoM :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_uom_0"><?php echo e($rpuItem->item->unit->name); ?></span>
                                            </th>
                                            <th style="text-align: justify; border-top: 0px;">Item Region :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_region_0"><?php echo e($rpuItem->region->name); ?></span>
                                                <br />
                                                Item Price : Rs.
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_price_0"><?php echo e($rpuItem->price); ?></span>
                                            </th>
                                            <th style="text-align: justify; border-top: 0px;">Item Unit :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_unit_0"><?php echo e($rpuItem->item_unit); ?></span>
                                                Unit
                                                <br />
                                                Item Unit Details :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_unit_details_0"><?php echo e($rpuItem->item_unit_details); ?></span>
                                            </th>
                                            <th style="text-align: justify; border-top: 0px;">Company Name :
                                                <span id="mostLeastBidCompanyName<?php echo e($rpuItem->id); ?>">
                                                    <?php $__currentLoopData = $rpuItem->availableBids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($value->least_status == 'L1'): ?>
                                                            <?php echo e($value->vendor->company_name); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </span>
                                                <br />
                                                Item Rank : L1 & Price : Rs.
                                                <span id="mostLeasBidPrice<?php echo e($rpuItem->id); ?>">
                                                    <span id="mostLeastBidCompanyName<?php echo e($rpuItem->id); ?>">
                                                        <?php $__currentLoopData = $rpuItem->availableBids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($value->least_status == 'L1'): ?>
                                                                <?php echo e($value->bidding_price); ?>

                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </span>
                                                </span>
                                            </th>
                                            <th style="border-top: 0px;">

                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                                <hr>
                            </div>
                            

                            
                            <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px">
                                <table class="table table-bordered dataTable" id="vendor_table<?php echo e($rpuItem->id); ?>">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Company Name</th>
                                            <th>Username</th>
                                            <th>Quantity</th>
                                            <th>Bidder Price</th>
                                            <th>Item Rank</th>
                                            <th
                                                title="Capping Price => The minimum amount at which the vendor can accept the deal but not below this amount.">
                                                Set Capping Price</th>
                                        </tr>
                                    </thead>

                                    <?php $__currentLoopData = $rpuItem->availableBids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyBid => $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tbody>
                                            <tr
                                                style="<?php echo e($bid->least_status == 'L1' ? 'background-color: #d5f7d5c2;' : ''); ?>">
                                                <td><?php echo e($keyBid + 1); ?></td>
                                                <td>
                                                    <span id="vendor_company<?php echo e($bid->id); ?>">
                                                        <?php echo e($bid->vendor->company_name); ?>

                                                    </span>
                                                    <span id="vendor_phone<?php echo e($bid->id); ?>">
                                                        (<?php echo e($bid->vendor->user->phone); ?>)
                                                    </span>
                                                </td>
                                                <td>
                                                    <span id="vendor_username<?php echo e($bid->id); ?>">
                                                        <?php echo e($bid->vendor->user->username); ?>

                                                    </span>
                                                </td>
                                                <td>
                                                    <span id="vendor_unit<?php echo e($bid->id); ?>">5</span>
                                                </td>
                                                <td>
                                                    <span id="vendor_bidding_price<?php echo e($bid->id); ?>">
                                                        <?php echo e($bid->bidding_price); ?>

                                                    </span>
                                                </td>
                                                <td>
                                                    <span><?php echo e($bid->least_status); ?></span>
                                                    <?php
                                                        $image = $bid->least_status == 'L1' ? 'up.png' : 'down.png';
                                                    ?>
                                                    <span><img src="<?php echo e(asset('media/logo/' . $image)); ?>"
                                                            style='height:12px;float:right;' /></span>
                                                </td>
                                                <td>
                                                    <span><?php echo e(CappingHelper::getCappingPrice($event->id, $rpuItem->id, $rpuItem->item->id, $bid->vendor->id) ? CappingHelper::getCappingPrice($event->id, $rpuItem->id, $rpuItem->item->id, $bid->vendor->id) : '-'); ?></span>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <?php $__env->startPush('scripts'); ?>
                                            <script>
                                                $(document).ready(function() {
                                                    Echo.private('bidderStatus.' + <?php echo e($event->id); ?> + '.' + <?php echo e($rpuItem->id); ?> + '.' +
                                                        <?php echo e($rpuItem->item->id); ?>).listen('BidEvent',
                                                        function(data) {
                                                            console.log(data);
                                                            // let vendors = data.bid_data.vendors.availableBids;

                                                            $(`#vendor_table${data.rpu_id} tbody`).remove();

                                                            data.vendors.forEach((v, k) => {
                                                                $image = v.least_status == 'L1' ? 'up.png' : 'down.png';
                                                                // console.log($image);
                                                                let vendorRow = `<tbody >
                                                                                    <tr style="${ v.least_status == "L1" ? 'background-color: #d5f7d5c2;' : '' }">
                                                                                        <td id="vendor_serial${data.rpu_id}">${k + 1 }</td>
                                                                                        <td>
                                                                                            <span id="vendor_company${data.rpu_id}">
                                                                                                ${v.company}
                                                                                            </span>
                                                                                            <span id="vendor_phone${data.rpu_id}">
                                                                                                (${v.phone})
                                                                                            </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span id="vendor_username${data.rpu_id}">
                                                                                                ${v.username}
                                                                                            </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span id="vendor_unit${data.rpu_id}">5</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span id="vendor_bidding_price${data.rpu_id}">
                                                                                                ${v.bidd_price}
                                                                                            </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span>${ v.least_status } </span>
                                                                                                                    
                                                                                            <span><img src="<?php echo e(asset('media/logo')); ?>/${$image}"
                                                                                                    style='height:12px;float:right;' /></span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span>${v.capping_price ? v.capping_price : ''}</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>`;
                                                                // console.log(v.capping_price)
                                                                if (v.least_status == "L1") {
                                                                    $(`#mostLeasBidPrice${data.rpu_id}`).text(v.bidd_price);
                                                                    $(`#mostLeastBidCompanyName${data.rpu_id}`).text(v.company);
                                                                }


                                                                $(`#vendor_table${data.rpu_id}`).append(vendorRow);

                                                            });

                                                        })
                                                });
                                            </script>
                                        <?php $__env->stopPush(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <h6 class="text-center" style="margin-top: 60px !important"> Bidding has not started yet </h6>
    <?php endif; ?>

    <?php $__currentLoopData = $eventWithAllRPus->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rpu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <?php $__env->startPush('scripts'); ?>
            <script>
                $(document).ready(function() {
                    Echo.private('bidStarted.' + <?php echo e($event->id); ?> + '.' + <?php echo e($rpu->id); ?> + '.' +
                        <?php echo e($rpu->item->id); ?>).listen('BidStartedEvent',
                        function(data) {
                            console.log(data.count);
                            if (data.count == 1) {
                                location.reload();
                            }
                        })
                });
            </script>
        <?php $__env->stopPush(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="row" style="margin: 20px">
        <?php echo $event->terms_condition; ?>

    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/admin/pages/event/statistics.blade.php ENDPATH**/ ?>