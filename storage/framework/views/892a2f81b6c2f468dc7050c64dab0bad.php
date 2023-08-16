<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Role <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
            Employee Role</span>
        <input type="hidden" name="id" value="<?php echo e($employee ? $employee->id : ''); ?>">
        <input type="hidden" name="emp_user_id" value="<?php echo e($employee ? $employee->user->id : ''); ?>">
        <select class="form-control" name="role_id" required>
            <option value="">Select Employee Role</option>
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($role->id); ?>"
                    <?php echo e($employee ? ($employee->role_id == $role->id ? 'selected' : '') : ''); ?>><?php echo e($role->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Department <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator5"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
            Employee Department</span>
        <select class="form-control" name="department_id" required>
            <option value="">Select Employee Department</option>
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($d->id); ?>"
                    <?php echo e($employee ? ($employee->department_id == $d->id ? 'selected' : '') : ''); ?>>
                    <?php echo e($d->code . ' | ' . $d->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Designation <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input class="form-control" name="designation" placeholder="Employee Designation" required
            value="<?php echo e($employee ? $employee->designation : old('designation')); ?>">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input class="form-control" name="employee_id" placeholder="Employee ID" required
            value="<?php echo e($employee ? $employee->employee_id : old('employee_id')); ?>">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input class="form-control" name="name" placeholder="Employee Name" required
            value="<?php echo e($employee ? $employee->user->name : old('name')); ?>">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Mobile No. <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input class="form-control" name="phone" placeholder="Mobile No." required
            value="<?php echo e($employee ? $employee->user->phone : old('phone')); ?>">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">User name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <input name="username" type="text" id="ContentPlaceHolder1_txt_email_id" class="form-control" required
            placeholder="Username" value="<?php echo e($employee ? $employee->user->username : old('username')); ?>">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Email ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input name="email" type="email" id="ContentPlaceHolder1_txt_email_id" class="form-control" required
            placeholder="Email ID" value="<?php echo e($employee ? $employee->user->email : old('email')); ?>">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Password <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input name="password" type="text" id="ContentPlaceHolder1_txt_password" class="form-control" required
            placeholder="Password" value="<?php echo e(old('password')); ?>">
    </div>
</div>
<div class="col-sm-12" style="padding: 0px;">

    <label for="inputPassword3" class="col-sm-12 control-label">Assigning Category <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select name="cat_ids[]" style="width: 100% ; important" multiple class="select2" required>
            <option value="">Select Category</option>
            <?php $__currentLoopData = CategoryHelper::getCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cat->id); ?>"
                    <?php if($employee): ?> <?php $__currentLoopData = $employee->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $empCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($empCat->id == $cat->id ? 'selected' : ''); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>>
                    <?php echo e($cat->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 20px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit" id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
        <a href="<?php echo e(route('employee.list')); ?>" class="btn btn-sm btn-primary"
            style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\resources\views/admin/partials/employee-form.blade.php ENDPATH**/ ?>