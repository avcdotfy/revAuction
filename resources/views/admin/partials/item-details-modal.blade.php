<!-- Modal -->
<div class="modal fade" id="itemDetailModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content" style="border-radius: 4px;">
            <div class="modal-header" style="padding-bottom: 0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title" style="font-weight: 600; text-align: center; text-decoration-line: underline;">
                    Material Information</h4>
                <h5 style="text-align: center" id="item_title">Stainless steel 120 mm (S02)</h5>
                <div class="col-sm-12" style="padding: 0px;">
                    <div class="col-sm-4">
                        <span>Decrement Price :
                            <label id="decrement_price"> 100</label>
                        </span><br>
                        <span>
                            Category :
                            <label id="category">
                            </label>
                        </span>
                    </div>

                    <div class="col-sm-4">
                        <span>Total Base Price :
                            <label id="total_base_price">200 INR</label>
                        </span><br>
                        <span>Total Unit :
                            <label id="total_unit"> 200 Unit</label>
                        </span>
                    </div>
                    <div class="col-sm-4" style="text-align: right;">
                        <span>Is manually change bidding price :
                            <label id="is_manually_change_bidding_price"> </label>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Region , Price & Unit Details</h4>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Region</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Unit Details</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tblebody">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="text-align: center;">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
