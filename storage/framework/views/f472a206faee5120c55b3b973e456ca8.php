<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Region Name <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator3"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Region Name</span>
            <input type="hidden" name="id" value="<?php echo e($region ? $region->id : ''); ?>">
            <input name="name" type="text" value="<?php echo e($region ? $region->name : old('name')); ?>"
                class="form-control" placeholder="Enter Region Name">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Region Message <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Region Message</span>
            <textarea rows="2" cols="20" name="description" class="form-control" placeholder="Enter Region Message"><?php echo e($region ? $region->description : old('description')); ?></textarea>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Is Alert ? <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <select class="form-control" name="is_alert">
                <option value=0 <?php echo e($region ? ($region->is_alert == 0 ? 'selected' : '') : ''); ?>>No</option>
                <option value=1 <?php echo e($region ? ($region->is_alert == 1 ? 'selected' : '') : ''); ?>>Yes</option>

            </select>
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Region Status <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <select class="form-control" name="is_active">
                <option value=1 <?php echo e($region ? ($region->is_active == 0 ? 'selected' : '') : ''); ?>>Activate</option>
                <option value=0 <?php echo e($region ? ($region->is_active == 0 ? 'selected' : '') : ''); ?>>Deactivate</option>

            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="text-align: right;">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="#" class="btn btn-sm btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/settings/master/region/form.blade.php ENDPATH**/ ?>