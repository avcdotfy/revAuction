<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Product Range <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator4"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                Product Range</span>
            <input type="hidden" name="id" value="<?php echo e($item ? $item->id : ''); ?>">
            <select name="category_id" class="form-control" required>
                <option value="">Select Product Range</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($cat->id); ?>"
                        <?php echo e($item ? ($item->category_id == $cat->id ? 'selected' : '') : ''); ?>>
                        <?php echo e($cat->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Code <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">
                Please Enter Item Code</span>
            <input type="text" name="code" class="form-control" required placeholder="Enter Item Code"
                value="<?php echo e($item ? $item->code : ''); ?>">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">UoM <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                UoM</span>
            <select class="form-control" name="unit_of_measure_id" required>
                <option value="">Select UoM</option>
                <?php $__currentLoopData = $uOm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($u->id); ?>"
                        <?php echo e($item ? ($item->unit_of_measure_id == $u->id ? 'selected' : '') : ''); ?>>
                        <?php echo e($u->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Description <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Item Description</span>
            <input type="text" name="description" class="form-control" placeholder="Enter Item Description" required
                value="<?php echo e($item ? $item->description : ''); ?>">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
</div>
<div class="col-sm-12" style="overflow:auto;">
    <div class="col-sm-12">

        <table id="dynamic_tbl" class="table table-bordered dataTable">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Item Region</th>
                    <th>Item Price</th>
                    <th>Item Unit</th>
                    <th>Item Unit Details</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody id="tbody">
                <?php if($item): ?>
                    <?php $__currentLoopData = $item->regionPriceUnit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rpu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td>
                                <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                                    Select Item Region</span>
                                <select class="form-control" name="region[]">
                                    <option value="">Select Region</option>
                                    <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($reg->id); ?>"
                                            <?php echo e($rpu->region->id == $reg->id ? 'selected' : ''); ?>><?php echo e($reg->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </td>
                            <td>
                                <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                                    Enter Item Price</span>
                                <input type="number" name='price[]' class="form-control" required
                                    value="<?php echo e($rpu->price); ?>">
                            </td>
                            <td>
                                <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                                    Enter Item Unit</span>
                                <input type="number" name='unit[]' class="form-control" required
                                    value="<?php echo e($rpu->item_unit); ?>">
                            </td>
                            <td>
                                <span id="ContentPlaceHolder1_RequiredFieldValidator8"
                                    style="font-size:11px;color:red;font-weight:600;display:none;">Please
                                    Enter Item Unit Details</span>
                                <input type="text" name='unit_details[]' class="form-control" required
                                    value="<?php echo e($rpu->item_unit_details); ?>">
                            </td>
                            <td>
                                <button id="remove_btn" onClick="$(this).parent().parent().remove();" type="button"
                                    class="btn btn-sm btn-danger"><span class="plus-icon"> - </span> Remove</button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <tr>
                    <td>1</td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Select Item Region</span>
                        <select class="form-control" name="region[]" <?php echo e($item ? '' : 'required'); ?>>
                            <option value="">Select Region</option>
                            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($reg->id); ?>"><?php echo e($reg->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Price</span>
                        <input type="number" name='price[]' class="form-control"<?php echo e($item ? '' : 'required'); ?>>
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit</span>
                        <input type="number" name='unit[]' class="form-control" <?php echo e($item ? '' : 'required'); ?>>
                    </td>
                    <td>
                        <span id="ContentPlaceHolder1_RequiredFieldValidator8"
                            style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit Details</span>
                        <input type="text" name='unit_details[]' class="form-control"
                            <?php echo e($item ? '' : 'required'); ?>>
                    </td>
                    <td>
                        <button id="add_btn" type="button" class="btn btn-sm btn-primary"><span
                                class="plus-icon">+</span> Add Item
                            Region, Price &amp;
                            Unit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 10px;">
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Decrement Price <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Decrement Price</span>
            <input type="number" name="decrement_price" class="form-control"
                value="<?php echo e($item ? $item->decrement_price : ''); ?>" placeholder="Enter Item Decrement Price" required>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Is Enable To Manually
            Change Bidding Price? <span style="color: red; font-size: small">*</span></label>
        <div class="col-sm-12">
            <select class="form-control" name="is_manually_change_bidding_price" required>
                <option value=0 <?php echo e($item ? ($item->is_manually_change_bidding_price == 0 ? 'selected' : '') : ''); ?>>No
                </option>
                <option value=1 <?php echo e($item ? ($item->is_manually_change_bidding_price == 1 ? 'selected' : '') : ''); ?>>Yes
                </option>

            </select>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Status <span
                style="color: red; font-size: small">*</span></label>
        <div class="col-sm-12">
            <select name="is_active" class="form-control">
                <option value=1 <?php echo e($item ? ($item->is_active == 1 ? 'selected' : '') : ''); ?>>
                    Activate</option>
                <option value=0 <?php echo e($item ? ($item->is_active == 0 ? 'selected' : '') : ''); ?>>
                    Deactivate</option>
            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="text-align: right;">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="items.html" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/partials/item-form.blade.php ENDPATH**/ ?>