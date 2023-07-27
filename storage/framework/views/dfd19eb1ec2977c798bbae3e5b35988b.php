

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px">
        <h1>Items | Create New Item </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="<?php echo e(route('item.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('admin.partials.item-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        let row = `<tr>
                    <td>1</td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Select Item Region</span>
                            <select class="form-control" name="region[]">
                            <option value="">Select Region</option>
                             <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($reg->id); ?>"><?php echo e($reg->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                        </select>
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Price</span>
                        <input type="number" name='price[]' class="form-control">
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit</span>
                        <input type="number" name='unit[]' class="form-control">
                    </td>
                    <td>
                        <span id="ContentPlaceHolder1_RequiredFieldValidator8" style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit Details</span>
                        <input type="text" name='unit_details[]' class="form-control">
                    </td>
                    <td>
                        <button id="remove_btn" onClick="$(this).parent().parent().remove();" type="button" class="btn btn-sm btn-danger"><span
                                class="plus-icon"> - </span> Remove</button>
                    </td>
                </tr>`;


        $(document).ready(function() {
            $('#add_btn').on('click', function() {
                $('#tbody').append(row);
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/catalog/item/create.blade.php ENDPATH**/ ?>