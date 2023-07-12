<div id="bidModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 4px;">
            <div class="modal-header" style="padding-bottom: 0px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title" style="font-weight: 600; text-align: center; text-decoration-line: underline;">
                    Material Information</h4>
                <h5 style="text-align: center">Stainless steel 120 mm (S02)</h5>
                <div class="col-sm-12" style="padding: 0px;">
                    <div class="col-sm-6">
                        <span>
                            <label>Quantity : </label>
                        </span>
                        <span>
                            <label>200 Unit</label>
                            |
                            <label>1 Unit = 1 Ton</label>
                        </span>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <span>
                            <label>Time Left : </label>
                        </span>

                        <span>
                            <label id="time_left0">

                                <span class="countDown" title="12-07-2023 06:08:PM"></span>

                            </label>
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="col-sm-12">
                                </div>
                                <div class="col-sm-12">
                                    <label for="inputPassword3" class="col-sm-3">Base Price </label>

                                    <div class="col-sm-3">
                                        <label>25000</label>
                                    </div>
                                    <label for="inputPassword3" class="col-sm-3">Last Bidder Price </label>

                                    <div class="col-sm-3">
                                        <label id="lbl_last_bidder_price0">0.00</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="inputPassword3" class="col-sm-3" title="Minimum Bidding Price Limit">Set
                                        Capping Price </label>

                                    <div class="col-sm-3">
                                        <input type="number" id="txt_auto_biding_price0"
                                            onchange="checking_capping_bidding_price_0()" maxlength="10"
                                            class="form-control" style="height: 25px; color: red"
                                            placeholder="Capping Price" title="1">
                                    </div>
                                    <label for="inputPassword3" class="col-sm-3" style="color: green;">Bidding Price
                                    </label>

                                    <div class="col-sm-3" style="display:none">
                                        <label style="color: green;" id="lbl_bidding_price0"
                                            title="Yes">24500.00</label>
                                    </div>
                                    <div class="col-sm-3" style="display:block">
                                        <input type="number" id="txt_bidding_price0"
                                            onchange="checking_manual_bidding_price_0()" maxlength="10"
                                            class="form-control" style="height: 25px; color: green"
                                            placeholder="Bidding Price" title="24500.00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="text-align: center;">
                <div class="col-sm-12">
                    <input type="button" id="btn_save0" value="Submit the Bid" class="btn btn-sm btn-primary">
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
