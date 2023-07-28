<?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible fade in" style="margin: 20px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo e(Session::get('success')); ?><br />
    </div>
<?php endif; ?>
<?php if(Session::has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade in" style="margin: 20px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo e(Session::get('error')); ?><br />
    </div>
<?php endif; ?>
<?php if(Session::has('warning')): ?>
    <div class="alert alert-warning alert-dismissible fade in" style="margin: 20px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo e(Session::get('warning')); ?><br />
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/partials/alerts.blade.php ENDPATH**/ ?>