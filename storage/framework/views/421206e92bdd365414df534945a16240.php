

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>Home | Catalog | Category <small id="ContentPlaceHolder1_hTag">List</small></h4>
        <ol class="breadcrumb">
            <a href="<?php echo e(route('category.create')); ?>" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">+ Create New
                Category</a>
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
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 43.3333px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 109.812px;">Category Code</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Category Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 358.625px;">Is Enable Item Time Trigger?</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 104.052px;">Updated Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($cat->code); ?></td>
                                                <td><?php echo e($cat->name); ?></td>
                                                <td><b><?php echo e($cat->item_time_trigger == 0 ? 'No' : 'yes'); ?></b> | TG <i
                                                        class="fa fa-arrows-h"></i> Each Item is
                                                    <b><?php echo e($cat->time_gap_between_each_item); ?></b>
                                                    Min
                                                    | CT <i class="fa fa-arrow-up"></i> in Last <b>
                                                        <?php echo e($cat->last_minute_closing_time_increment); ?></b> Min
                                                </td>
                                                <?php if($cat->is_active): ?>
                                                    <td><label class="label label-success"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                    </td>
                                                <?php else: ?>
                                                    <td><label class="label label-danger"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Deactivated</label>
                                                    </td>
                                                <?php endif; ?>

                                                <td><?php echo e($cat->updated_at); ?></td>
                                                <td><a href="<?php echo e(route('category.edit', $cat->id)); ?>"><i
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


            <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/catalog/category/list.blade.php ENDPATH**/ ?>