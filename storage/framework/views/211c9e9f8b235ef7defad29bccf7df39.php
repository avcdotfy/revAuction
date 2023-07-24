

<?php $__env->startSection('main_section'); ?>
    <section class="content-header">
        <h1>Home | Events | Running Events | Live Auction Items <small id="ContentPlaceHolder1_hTag">List</small>
        </h1>
    </section>
    <section class="content">

        <?php echo $__env->make('vendor.partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>
                                    <span id="ContentPlaceHolder1_lbltitle"><?php echo e($event->title); ?></span>
                                </h5>
                                <hr style="margin-bottom:5px;">
                            </div>

                        </div>
                        <div class="row" style="overflow: auto;">
                            <div class="col-sm-12">

                                <div id="dtable_Il_wrapper" class="dataTables_wrapper no-footer">

                                    <table id="dtable_Il" class="table table-bordered table-striped dataTable no-footer"
                                        role="grid">
                                        <thead>
                                            <tr role="row">
                                                <td colspan="8" rowspan="1">
                                                    <div class="row">
                                                        <div class="col-sm-6" style="text-align: left;">
                                                            <small style="font-size: 15px; font-weight: bold;">Material
                                                                Information</small>
                                                        </div>
                                                        <div class="col-sm-6" style="text-align: right;">
                                                            <label for="inputPassword3"
                                                                class="col-sm-9 control-label">Region</label>
                                                            <div class="col-sm-3">
                                                                <select name="region" id="region_select">
                                                                    <?php $__currentLoopData = $event->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php $__currentLoopData = $item->regionPriceUnit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rpu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($rpu->region->id); ?>">
                                                                                <?php echo e($rpu->region->name); ?>

                                                                            </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 40.2292px;">S.No.</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 190.781px;">Item Code &amp; Description</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 34.2812px;">UoM</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 179.198px;">Quantity</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 72px;">Base Price</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 146.229px;">Current Lowest Price</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 113.781px;">Remaining Time</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 72.8333px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $event->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr style="font-weight: 600;" role="row" class="odd">
                                                    <td><?php echo e($key + 1); ?></td>
                                                    <td><?php echo e($item->code); ?> (<span id="lblitem0"
                                                            title="18"><?php echo e($item->description); ?></span>)
                                                    </td>
                                                    <td><span id="lbl_uom_type0"
                                                            title="65"><?php echo e($item->unit->name); ?></span></td>
                                                    <td style="text-align: center"><span id="lbl_item_qty0"
                                                            title="1 Unit = Rs. 25000"><?php echo e($item->regionPriceUnit[0]->item_unit); ?></span>
                                                        Unit | <span id="lbl_lot_number0">1 Unit = Rs.
                                                            <?php echo e($item->regionPriceUnit[0]->price); ?></span>

                                                    </td>
                                                    <td style="text-align: center; width: 82px">
                                                        <span id="lbl_fob_price0"
                                                            title="0.00"><?php echo e($item->regionPriceUnit[0]->item_unit * $item->regionPriceUnit[0]->price); ?></span>
                                                    </td>
                                                    <td style="text-align: center">
                                                        <span class="clsbidPrice<?php echo e($item->id); ?>"
                                                            id="bidPrice<?php echo e($item->id); ?>"><?php echo e(BidHelper::getLowestPrice($event->id, $item->id) ?? 00); ?></span>
                                                    </td>
                                                    <td style="text-align: center">
                                                        <span class="countDown" title=""></span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary "
                                                            id="statusBtn<?php echo e($item->id); ?>"
                                                            style="padding:8px 9px; display:<?php echo e(!BidHelper::checkIfVendorhasLowestBid($event->id, $item->id) ? 'none' : ''); ?>">
                                                            L1</a>
                                                        
                                                        <a href="#" data-toggle="modal" class="btn btn-success"
                                                            data-target="#bidModal<?php echo e($item->id); ?>"
                                                            id="btn_bid<?php echo e($item->id); ?>"
                                                            style="padding:8px 9px; display:<?php echo e($event->status == COMPLETED || BidHelper::checkIfVendorhasLowestBid($event->id, $item->id) ? 'none' : ''); ?>">
                                                            Bid Now </a>

                                                        <a href="#" class="btn btn-danger"
                                                            id="btn_closed<?php echo e($item->id); ?>"
                                                            style="padding:8px 9px; display:<?php echo e($event->status == RUNNING ? 'none' : ''); ?>">
                                                            Closed </a>


                                                    </td>
                                                </tr>

                                                
                                                <div id="bidModal<?php echo e($item->id); ?>" class="modal fade" role="dialog">
                                                    <form action="<?php echo e(route('vendor.submit-bid')); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="event_id"
                                                            value="<?php echo e($event->id); ?>">
                                                        <input type="hidden" name="item_id"
                                                            value="<?php echo e($item->id); ?>">
                                                        <input type="hidden" name="item_rpu_id" value="1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content" style="border-radius: 4px;">
                                                                <div class="modal-header" style="padding-bottom: 0px;">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span></button>
                                                                    <h4 class="modal-title"
                                                                        style="font-weight: 600; text-align: center; text-decoration-line: underline;">
                                                                        Material Information</h4>
                                                                    <h5 style="text-align: center"><?php echo e($item->code); ?>

                                                                        (<span id="lblitem0"
                                                                            title="18"><?php echo e($item->description); ?></span>)
                                                                    </h5>
                                                                    <div class="col-sm-12" style="padding: 0px;">
                                                                        <div class="col-sm-6">
                                                                            <span>
                                                                                <label>Quantity : </label>
                                                                            </span>
                                                                            <span>
                                                                                <label>
                                                                                    <?php echo e($item->regionPriceUnit[0]->item_unit); ?>

                                                                                    Unit
                                                                                </label>
                                                                                |
                                                                                <label>1 Unit = 1
                                                                                    <?php echo e($item->unit->name); ?></label>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-sm-6" style="text-align: right;">
                                                                            <span>
                                                                                <label>Time Left : </label>
                                                                            </span>

                                                                            <span>
                                                                                <label id="time_left0">

                                                                                    <span class="countDown"
                                                                                        title="12-07-2023 06:08:PM"></span>

                                                                                </label>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="box">
                                                                                <div class="box-body">
                                                                                    <div class="col-sm-12">
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3">Base Price
                                                                                        </label>

                                                                                        <div class="col-sm-3">
                                                                                            <label><?php echo e($item->regionPriceUnit[0]->item_unit * $item->regionPriceUnit[0]->price); ?></label>
                                                                                        </div>
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3">Last Bidder
                                                                                            Price
                                                                                        </label>

                                                                                        <div class="col-sm-3">
                                                                                            <label
                                                                                                id="lastBidderPrice<?php echo e($item->id); ?>"><?php echo e(BidHelper::getLastBidderPrice($event->id, $item->id) ? BidHelper::getLastBidderPrice($event->id, $item->id)->bidding_price : '00'); ?></label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3"
                                                                                            title="Minimum Bidding Price Limit">Set
                                                                                            Capping Price </label>

                                                                                        <div class="col-sm-3">
                                                                                            <input type="number"
                                                                                                id="txt_auto_biding_price0"
                                                                                                onchange="checking_capping_bidding_price_0()"
                                                                                                maxlength="10"
                                                                                                name="capping_price"
                                                                                                class="form-control"
                                                                                                style="height: 25px; color: red"
                                                                                                placeholder="Capping Price"
                                                                                                title="1">
                                                                                        </div>
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3"
                                                                                            style="color: green;">Bidding
                                                                                            Price
                                                                                        </label>

                                                                                        <?php if($item->is_manually_change_bidding_price): ?>
                                                                                            <div class="col-sm-3"
                                                                                                style="display:block">
                                                                                                <input type="number"
                                                                                                    id="txt_bidding_price0"
                                                                                                    onchange="checking_manual_bidding_price_0()"
                                                                                                    maxlength="10"
                                                                                                    name="bidding_price"
                                                                                                    class="form-control"
                                                                                                    style="height: 25px; color: green"
                                                                                                    placeholder="Bidding Price"
                                                                                                    title="24500.00">
                                                                                            </div>
                                                                                        <?php else: ?>
                                                                                            <div class="col-sm-3">
                                                                                                <label
                                                                                                    style="color: green;"
                                                                                                    id="lbl_bidding_price<?php echo e($item->id); ?>"><?php echo e(BidHelper::getLastBidderPrice($event->id, $item->id) != null ? BidHelper::getLastBidderPrice($event->id, $item->id)->bidding_price - $item->decrement_price : $item->regionPriceUnit[0]->item_unit * $item->regionPriceUnit[0]->price - $item->decrement_price); ?></label>
                                                                                                <input type="hidden"
                                                                                                    id="bidding_price_hidden<?php echo e($item->id); ?>"
                                                                                                    onchange="checking_manual_bidding_price_0()"
                                                                                                    name="bidding_price"
                                                                                                    class="form-control"
                                                                                                    style="height: 25px; color: green"
                                                                                                    placeholder="Bidding Price"
                                                                                                    value="<?php echo e(BidHelper::getLastBidderPrice($event->id, $item->id) != null ? BidHelper::getLastBidderPrice($event->id, $item->id)->bidding_price - $item->decrement_price : $item->regionPriceUnit[0]->item_unit * $item->regionPriceUnit[0]->price - $item->decrement_price); ?>">
                                                                                            </div>
                                                                                        <?php endif; ?>


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer" style="text-align: center;">
                                                                    <div class="col-sm-12">
                                                                        <button id="btn_save0" type="submit"
                                                                            href="" value="Submit the Bid"
                                                                            class="btn btn-sm btn-primary"> Submit Bid
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                    </form>

                                                </div>
                                                

                                                <?php $__env->startPush('scripts'); ?>
                                                    <script>
                                                        setInterval(() => {
                                                            console.log("RES");

                                                            $.ajax({
                                                                type: "post",
                                                                url: "<?php echo e(route('vendor.live-data')); ?>",
                                                                data: {
                                                                    '_token': "<?php echo e(csrf_token()); ?>",
                                                                    'eId': '<?php echo e($event->id); ?>',
                                                                    'iId': '<?php echo e($item->id); ?>',
                                                                },

                                                                success: function(res) {
                                                                    $("#bidPrice<?php echo e($item->id); ?>").text(res.lowestBid);
                                                                    $("#lastBidderPrice<?php echo e($item->id); ?>").text(res.lastBidderPrice);

                                                                    if (res.isMyBidIsLowest) {
                                                                        $("#statusBtn<?php echo e($item->id); ?>").show();

                                                                        $("#btn_bid<?php echo e($item->id); ?>").hide();
                                                                    } else {
                                                                        $("#statusBtn<?php echo e($item->id); ?>").hide();

                                                                        $("#btn_bid<?php echo e($item->id); ?>").show();
                                                                    }

                                                                    $("#bidding_price_hidden<?php echo e($item->id); ?>").val(res.lastBidderPrice - res
                                                                        .decrementAmount);
                                                                    $("#lbl_bidding_price<?php echo e($item->id); ?>").text(res.lastBidderPrice - res
                                                                        .decrementAmount);
                                                                },
                                                                error: function(err) {
                                                                    console.log("ERR", err);
                                                                }
                                                            });
                                                        }, 1500);
                                                    </script>
                                                <?php $__env->stopPush(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('vendor.partials.terms-condition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <?php echo $__env->make('vendor.partials.bidding-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <form action="<?php echo e(route('vendor.filterLiveAuction')); ?>" method="post" id="filterForm">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="event_id" value="<?php echo e($event->id); ?>">
        <input type="hidden" name="region_id" value="" id="reg_id">
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function convertMillisecondsToHMS(milliseconds) {
            //Get hours from milliseconds
            var hours = milliseconds / (1000 * 60 * 60);
            var absoluteHours = Math.floor(hours);
            var h = absoluteHours > 9 ? absoluteHours : '0' + absoluteHours;

            //Get remainder from hours and convert to minutes
            var minutes = (hours - absoluteHours) * 60;
            var absoluteMinutes = Math.floor(minutes);
            var m = absoluteMinutes > 9 ? absoluteMinutes : '0' + absoluteMinutes;

            //Get remainder from minutes and convert to seconds
            var seconds = (minutes - absoluteMinutes) * 60;
            var absoluteSeconds = Math.floor(seconds);
            var s = absoluteSeconds > 9 ? absoluteSeconds : '0' + absoluteSeconds;


            return h + ':' + m + ':' + s;
        }

        $(document).ready(function() {
            var duration = <?php echo e($event->closing_date_time_millis); ?>; // Duration in milliseconds				

            function updateTimer() {
                let remaing_time = duration - Date.now();
                if (remaing_time < 0) {
                    var formattedTime = 00;
                    $('#btn_closed').show();
                    $('#btn_bid').hide();
                } else {
                    var formattedTime = convertMillisecondsToHMS(remaing_time);
                }

                $('.countDown').text(formattedTime);
            }

            updateTimer();

            setInterval(function() {

                updateTimer();
            }, 1000);
        });
    </script>

    <script>
        $('#region_select').change(function(e) {
            $("#reg_id").val(e.target.value);
            $("#filterForm").submit();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('vendor.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/vendor/pages/live-auction.blade.php ENDPATH**/ ?>