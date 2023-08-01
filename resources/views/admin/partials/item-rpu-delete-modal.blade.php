<div id="myModal{{ $rpu->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">RPU Delete </h4>
            </div>
            <div class="modal-body">
                <p>Event using this RPU may have issue if you delete . This action is irriversible , Are you sure you
                    want to Delete this Variant of Item ?? </p>
            </div>
            <div class="modal-footer">
                <a href="{{ route('item.rpuDelete', [$rpu->id, $item->id, $rpu->region->id]) }}"
                    class="btn btn-danger">Yes</a>
                <a class="btn btn-primary" data-dismiss="modal">No</a>

            </div>

        </div>

    </div>
</div>
