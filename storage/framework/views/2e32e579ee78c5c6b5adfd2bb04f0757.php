<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Accept Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Modal content -->
                <h4 style="margin-top: 0px; margin-bottom: 0px; text-align: center;">Update Vendor Profile Status
                </h4>
                <hr>

                <div class="" style="border:1px solid #eaeaea; padding: 12px">
                    <h6 style="margin-top: 0px; margin-bottom: 4px;">Accept Reason</h6>
                    <textarea class="form-control" name="remark" id="remark" rows="2" placeholder="Please write reason "
                        style="margin-bottom: 0px; "></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="acceptReq()" class="btn btn-success">Accept Request</button>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\resources\views/admin/partials/accept-request-remark-modal.blade.php ENDPATH**/ ?>