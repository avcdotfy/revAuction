

<?php $__env->startSection('main_section'); ?>
    <section class="content-header">
        <h1>Take Event Decision <small id="ContentPlaceHolder1_hTag">List</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php if($bidders): ?>
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>

                                        <span id="ContentPlaceHolder1_lbl_event_title"
                                            title="69"><?php echo e($event->title); ?></span>

                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="<?php echo e(route('decision.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="event_id" value="<?php echo e($event->id); ?>">
                        <div id="ContentPlaceHolder1_div_auto_decision" class="box">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12" style="padding:0px;">
                                        <div class="col-sm-2">
                                            <input id="ContentPlaceHolder1_chk_auto_decision" type="checkbox" name=""
                                                checked="checked">
                                            <label>Auto Decision</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <label>L1 Remarks</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="" type="text" id="l1RemarkSource" class="form-control"
                                                placeholder="Enter L1 Remarks">
                                        </div>
                                        <div class="col-sm-1">
                                            <label>Rejected Remarks</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="" type="text" id="rejectedRemark" class="form-control"
                                                placeholder="Enter Rejected Remarks">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="button" value="Update Decision for All" id="btn_auto_update"
                                                class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php $__currentLoopData = $bidders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bidder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="hidden" name="vendor[id][<?php echo e($bidder->details->vendor->id); ?>]"
                                value="<?php echo e($bidder->details->vendor->id); ?>">

                            <div class="box box-default">
                                <div class="box-header with-border" style="padding-bottom:0px;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>S.No.</th>
                                                        <th>Select</th>
                                                        <th>Company Name</th>
                                                        <th>Username</th>
                                                        <th>Mobile Number</th>
                                                        <th>Email ID</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="background-color:ghostwhite">
                                                        <td><?php echo e($key + 1); ?></td>
                                                        <td>
                                                            <input id="ContentPlaceHolder1_lvVl_chvc_0" type="checkbox"
                                                                name="">
                                                        </td>
                                                        <td><span
                                                                id="ContentPlaceHolder1_lvVl_lbl_company_name_0"><?php echo e($bidder->details->vendor->company_name); ?></span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                id="ContentPlaceHolder1_lvVl_lblusername_0"><?php echo e($bidder->details->vendor->user->username); ?></span>
                                                            <input type="hidden" name=""
                                                                id="ContentPlaceHolder1_lvVl_hf_0" value="1">
                                                            <input type="hidden" name=""
                                                                id="ContentPlaceHolder1_lvVl_hfemail_0"
                                                                value="mithkumarsah@gmail.com">
                                                        </td>
                                                        <td><span
                                                                id="ContentPlaceHolder1_lvVl_lblcmobile_0"><?php echo e($bidder->details->vendor->user->phone); ?></span>
                                                        </td>
                                                        <td>

                                                            <?php echo e($bidder->details->vendor->user->email); ?>

                                                        </td>
                                                        <td>
                                                            <div class="box-tools">
                                                                <button type="button" class="btn btn-box-tool"
                                                                    data-widget="collapse"><i
                                                                        class="fa fa-minus"></i></button>
                                                                <button type="button" style="display: none;"
                                                                    class="btn btn-box-tool" data-widget="remove"><i
                                                                        class="fa fa-remove"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                

                                <div class="box-body" style="padding-top:0px;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable">
                                                <thead>
                                                    <tr>
                                                        <th style="display:none;">#</th>
                                                        <th>Item Name</th>
                                                        <th>UoM</th>
                                                        <th>Region</th>
                                                        <th>Item Price</th>
                                                        <th>Quantity</th>
                                                        <th>Item Status &amp; Bidder Amount</th>
                                                        <th>Accept Qty.</th>
                                                        <th>Accept Amount</th>
                                                        <th>Decision</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <?php $__currentLoopData = $bidder->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iKey => $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <input type="hidden"
                                                        name="vendor[id][<?php echo e($bidder->details->vendor->id); ?>][item_id]"
                                                        value="<?php echo e($obj->item_id); ?>">
                                                    <input type="hidden"
                                                        name="vendor[id]<?php echo e($bidder->details->vendor->id); ?>['bid_id']"
                                                        value="<?php echo e($obj->id); ?>">
                                                    <tbody>
                                                        <tr style="background-color:ghostwhite">
                                                            <td style="display:none;">
                                                                <input type="hidden" name=""
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_hfId_0"
                                                                    value="242">

                                                            </td>
                                                            <td><a id="">
                                                                    <span><?php echo e($obj->item ? $obj->item->code : ''); ?></span></a>
                                                            </td>
                                                            <td>
                                                                <span><?php echo e($obj->item ? $obj->item->unit->name : ''); ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?php echo e($obj->item ? $obj->item->regionPriceUnit->first()->region->name : ''); ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?php echo e($obj->item ? $obj->item->regionPriceUnit->first()->price : ''); ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?php echo e($obj->item ? $obj->item->regionPriceUnit->first()->item_unit : ''); ?></span>
                                                            </td>
                                                            <td><span
                                                                    class="leastStatus-<?php echo e($obj->least_status == 'L1' ? $obj->least_status : 'L'); ?>"><?php echo e($obj->least_status); ?>

                                                                </span>

                                                                <span><?php echo e($obj->bidding_price); ?></span>
                                                            </td>
                                                            <td style="width:8%;">
                                                                <input
                                                                    name="vendor[id][<?php echo e($bidder->details->vendor->id); ?>][item_id][acceptQty]"
                                                                    type="text"
                                                                    value="<?php echo e($obj->item ? $obj->item->regionPriceUnit->first()->item_unit : ''); ?>"
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_txtQty_0"
                                                                    class="qty form-control"
                                                                    onkeypress="return isNumberKey(event)"
                                                                    style="text-align:center;">
                                                            </td>
                                                            <td style="width:10%;">
                                                                <input
                                                                    name="vendor[id][<?php echo e($bidder->details->vendor->id); ?>][item_id][acceptAmount]"
                                                                    type="text"
                                                                    value="<?php echo e($obj->item ? $obj->item->regionPriceUnit->first()->item_unit * $obj->item->regionPriceUnit->first()->price : ''); ?>"
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_txtPrice_0"
                                                                    class="form-control"
                                                                    onkeypress="return isNumberKey(event)"
                                                                    style="text-align:center;">
                                                            </td>
                                                            <td>
                                                                <select
                                                                    name="vendor[id][<?php echo e($bidder->details->vendor->id); ?>][item_id][decision]"
                                                                    class="form-control">
                                                                    <option value="Pending">Select</option>
                                                                    <option value="Accepted">Accept</option>
                                                                    <option value="Rejected">Reject</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input name="remark[]" type="text" maxlength="150"
                                                                    class="remarks-<?php echo e($obj->least_status == 'L1' ? $obj->least_status : 'L'); ?> form-control">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div id="ContentPlaceHolder1_div_btn" class="box">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-12" style="text-align:center;">
                                            <input type="submit" name="" value="Final Submit" id="submit_btn"
                                                class="btn btn-sm btn-success">
                                            <a href="<?php echo e(route('event.closed')); ?>" class="btn btn-sm btn-primary"
                                                style="color: White; margin-left: 4px">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php else: ?>
                    <span class="text-center">No Data found</span>
                <?php endif; ?>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('td').find(".leastStatus-L1").parent().parent().css({
                'background-color': '#d5f7d5c2'
            });

            $('td').find(".leastStatus-L1").parent().parent().find('select').val('Accepted').change();

            $("#btn_auto_update").click(function(e) {

                if ($("#l1RemarkSource").val()) {
                    $('td').find(".remarks-L1").val($("#l1RemarkSource").val());
                }
                $('td').find(".remarks-L").val($("#rejectedRemark").val());
                $('td').find(".leastStatus-L").parent().parent().find('select').val('Rejected').change();

            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/event/decision.blade.php ENDPATH**/ ?>