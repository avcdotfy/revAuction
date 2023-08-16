<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Organization Setting | Employee </h3>
        <ol class="breadcrumb">
            <a href="<?php echo e(route('employee.create')); ?>" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">
                + Create New Employee</a>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php echo $__env->make('admin.partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 43.3333px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 109.812px;">Employee Role</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Employee ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 109.812px;">Employee Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Department</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Designation</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Mobile No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Email ID</th>



                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($emp->role); ?></td>
                                                <td><?php echo e($emp->employee_id); ?></td>
                                                <td><?php echo e($emp->name); ?></td>
                                                <td><?php echo e($emp->department); ?></td>
                                                <td><?php echo e($emp->designation); ?></td>
                                                <td><?php echo e($emp->phone); ?></td>
                                                <td><?php echo e($emp->email); ?></td>

                                                

                                                <td><label class="label label-success"
                                                        style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                </td>

                                                <td><a href="<?php echo e(route('employee.edit', $emp->id)); ?>"><i
                                                            class="fa fa-edit"></i> Edit</a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/admin/pages/settings/organization/employee/list.blade.php ENDPATH**/ ?>