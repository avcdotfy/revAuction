<?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo e(Session::get('success')); ?><br />
    </div>
<?php endif; ?>
<?php if(Session::has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo e(Session::get('error')); ?><br />
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\revAuction\resources\views/admin/partials/alerts.blade.php ENDPATH**/ ?>