

<?php $__env->startSection('main_section'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Catalog | Items List </h3>
        <ol class="breadcrumb">
            <a href="<?php echo e(route('item.create')); ?>" style="color: white; font-weight: 600" class="btn-block btn-primary btn-sm">
                + Create New Item</a>
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
                                                style="width: 109.812px;">Product Range</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 230.156px;">Item Code & Description</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 59.812px;">UoM</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Item Region & Price</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Updates on</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($i->cat_name); ?></td>
                                                <td><?php echo e($i->item_code); ?>/<?php echo e($i->description); ?></td>
                                                <td><?php echo e($i->unit); ?></td>

                                                <td>
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="getDetails(<?php echo e($i->id); ?>)">
                                                        View
                                                    </button>

                                                    
                                                </td>

                                                <?php if($i->is_active): ?>
                                                    <td>
                                                        <label class="label label-success"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <label class="label label-danger"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Deactivated</label>
                                                    </td>
                                                <?php endif; ?>
                                                <td><?php echo e($i->updated_at); ?></td>
                                                <td><a href="<?php echo e(route('item.edit', $i->id)); ?>"><i class="fa fa-edit"></i>
                                                        Edit</a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make('admin.partials.item-details-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script>
        function getDetails(iId) {
            $.ajax({
                type: "get",
                url: "<?php echo e(route('item.rpu-details')); ?>",
                data: {
                    "item_id": iId
                },
                success: function(res) {
                    $("#decrement_price").text(res.item.decrement_price);
                    $("#item_title").text(res.item.code + " " + res.item.description);
                    $("#category").text(res.category.name);
                    $("#total_base_price").text(res.item.total_base_price);
                    $("#total_unit").text(res.item.total_unit);

                    $("#is_manually_change_bidding_price").text(res.item.is_manually_change_bidding_price == 1 ?
                        "Yes" : "No");
                    $("#itemDetailModel").modal('show');

                    appendRowToTable(res.itemRpu)
                    console.log(res)
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }


        function appendRowToTable(itemRpus) {
            $("#tblebody").empty();
            console.log(itemRpus);
            itemRpus.forEach((rpu, key) => {
                let row = `
                        <tr>
                            <td>${key + 1}</td>
                            <td>${rpu.price}</td>
                            <td>${rpu.region}</td>
                            <td>${rpu.unit}</td>
                            <td>${rpu.unit_details}</td>
                            <td></td>
                        </tr>
                `;

                $("#tblebody").append(row);

            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/pages/catalog/item/list.blade.php ENDPATH**/ ?>