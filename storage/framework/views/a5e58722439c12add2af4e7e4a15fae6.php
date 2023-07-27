<div class="row">

    <?php if($company): ?>
        <input type="hidden" name="company_id" value="<?php echo e($company->id); ?>">
    <?php endif; ?>

    <div class="col-sm-12" style="padding:0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Company Name <span
                style="color: red; font-size: 13px">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Company
                Name</span>
            <input type="text" class="form-control" name="name" placeholder="Enter Company Name"
                value="<?php echo e($company ? $company->name : ''); ?>">
        </div>
    </div>
    <div class="col-sm-12" style="padding:0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">App Name</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="app_name" placeholder="Enter App Name"
                value="<?php echo e($company ? $company->app_name : ''); ?>">
        </div>
    </div>
    <div class="col-sm-12" style="padding:0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Company Logo</label>
        <div class="col-sm-12">
            <input type="file" name="logo" class="form-control">

        </div>
    </div>
    <div class="col-sm-12" style="padding:0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Company Favicon Icon</label>
        <div class="col-sm-12">
            <input type="file" name="fav_icon" class="form-control">

        </div>
    </div>
    <div class="col-sm-12" style="padding:0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Company Website Url </label>
        <div class="col-sm-12">
            <input type="text" name="web_url" class="form-control" placeholder="Enter Company Website Url"
                value="<?php echo e($company ? $company->web_url : ''); ?>">
        </div>
    </div>
    <div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
        <div class="col-sm-12">
            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
            <a href="#" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/partials/company-form.blade.php ENDPATH**/ ?>