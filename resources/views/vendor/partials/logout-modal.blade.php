<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Logout </h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to logout ?? </p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('logout') }}" class="btn btn-danger">Yes</a>
                <a class="btn btn-primary" data-dismiss="modal">No</a>

            </div>


        </div>

    </div>
</div>
