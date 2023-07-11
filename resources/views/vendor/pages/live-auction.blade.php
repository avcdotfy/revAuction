@extends('vendor.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Events | Running Events | Live Auction Items <small id="ContentPlaceHolder1_hTag">List</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>
                                    <span id="ContentPlaceHolder1_lbltitle">Event for [Steel] : Opening Date &amp; Time
                                        - Tue 11-Jul-2023 04:20 PM and Closing Date &amp; Time - Wed 12-Jul-2023 06:12
                                        PM (Daily)</span>
                                </h5>
                                <hr style="margin-bottom:5px;">
                            </div>
                            <div class="col-sm-12" id="div_event_time_expired"
                                style="margin-top:-5px;color:red;display:none;">
                                <h6 id="h_msg" style="font-weight:600;">Event Time is Expired. <a
                                        href="participated-event.aspx" style="border-bottom:1px solid">Go to participate
                                        events.</a></h6>
                                <hr style="margin-bottom:5px;margin-top:5px;">
                            </div>
                        </div>
                        <div class="row" style="overflow: auto;">
                            <div class="col-sm-12">
                                <div class="modal fade" id="model_id_0">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="border-radius: 4px;">
                                            <div class="modal-header" style="padding-bottom: 0px;">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title"
                                                    style="font-weight: 600; text-align: center; text-decoration-line: underline;">
                                                    Material Information</h4>
                                                <h5 style="text-align: center">Stainless steel 129 mm (S07)</h5>
                                                <div class="col-sm-12" style="padding: 0px;">
                                                    <div class="col-sm-6">
                                                        <span>
                                                            <label>Quantity : </label>
                                                        </span>
                                                        <span>
                                                            <label>10 Unit</label>
                                                            |
                                                            <label>1 Unit = Rs. 25000</label>
                                                        </span>
                                                    </div>
                                                    <div class="col-sm-6" style="text-align: right;">
                                                        <span>
                                                            <label>Time Left : </label>
                                                        </span>

                                                        <span>
                                                            <label id="time_left0">23:59:51</label>
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
                                                                    <label for="inputPassword3" class="col-sm-3">Base
                                                                        Price : </label>

                                                                    <div class="col-sm-3">
                                                                        <label>250000</label>
                                                                    </div>
                                                                    <label for="inputPassword3" class="col-sm-3">Last
                                                                        Bidder Price : </label>

                                                                    <div class="col-sm-3">
                                                                        <label id="lbl_last_bidder_price0">250000.00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label for="inputPassword3" class="col-sm-3"
                                                                        title="Minimum Bidding Price Limit">Set Capping
                                                                        Price : </label>

                                                                    <div class="col-sm-3">
                                                                        <input type="number" id="txt_auto_biding_price0"
                                                                            onchange="checking_capping_bidding_price_0()"
                                                                            maxlength="10" class="form-control"
                                                                            style="height: 25px; color: red"
                                                                            placeholder="Capping Price" title="1">
                                                                    </div>
                                                                    <label for="inputPassword3" class="col-sm-3"
                                                                        style="color: green;">Bidding Price : </label>

                                                                    <div class="col-sm-3" style="display:block">
                                                                        <label style="color: green;" id="lbl_bidding_price0"
                                                                            title="No">250000.00</label>
                                                                    </div>
                                                                    <div class="col-sm-3" style="display:none">
                                                                        <input type="number" id="txt_bidding_price0"
                                                                            onchange="checking_manual_bidding_price_0()"
                                                                            maxlength="10" class="form-control"
                                                                            style="height: 25px; color: green"
                                                                            placeholder="Bidding Price" title="250000.00">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer" style="text-align: center;">
                                                <div class="col-sm-12">
                                                    <input type="button" id="btn_save0" value="Submit the Bid"
                                                        onclick="save_data_0()" class="btn btn-sm btn-primary">

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <div id="dtable_Il_wrapper" class="dataTables_wrapper no-footer">
                                    <div id="dtable_Il_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="" placeholder=""
                                                aria-controls="dtable_Il"></label></div>
                                    <table id="dtable_Il" class="table table-bordered table-striped dataTable no-footer"
                                        role="grid">
                                        <thead>
                                            <tr role="row">
                                                <td colspan="8" rowspan="1">
                                                    <div class="row">
                                                        <div class="col-sm-6" style="text-align: left;">
                                                            <small style="font-size: 15px; font-weight: bold;">Material
                                                                Information</small>
                                                        </div>
                                                        <div class="col-sm-6" style="text-align: right;">
                                                            <label for="inputPassword3"
                                                                class="col-sm-9 control-label">Region</label>
                                                            <div class="col-sm-3">
                                                                <select name="ctl00$ContentPlaceHolder1$ddlPort"
                                                                    onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlPort\',\'\')', 0)"
                                                                    id="ContentPlaceHolder1_ddlPort">
                                                                    <option selected="selected" value="PAN India">PAN
                                                                        India</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 40.2292px;">S.No.</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 190.781px;">Item Code &amp; Description</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 34.2812px;">UoM</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 179.198px;">Quantity</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 72px;">Base Price</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 146.229px;">Current Lowest Price</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 113.781px;">Remaining Time</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 72.8333px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <tr style="font-weight: 600;" role="row" class="odd">
                                                <td>1.</td>
                                                <td>Stainless steel 129 mm (<span id="lblitem0"
                                                        title="18">S07</span>)</td>
                                                <td><span id="lbl_uom_type0" title="65">Ton</span></td>
                                                <td style="text-align: center"><span id="lbl_item_qty0"
                                                        title="1 Unit = Rs. 25000">10</span> Unit | <span
                                                        id="lbl_lot_number0">1 Unit = Rs. 25000</span>

                                                </td>
                                                <td style="text-align: center; width: 82px">
                                                    <span id="lbl_fob_price0" title="0.00">250000</span>
                                                </td>
                                                <td style="text-align: center">
                                                    <span id="lbl_r1_price0">250000.00</span>
                                                </td>
                                                <td style="text-align: center">
                                                    <span id="spn_r_time0" title="12-07-2023 06:08:PM">23:59:51</span>

                                                </td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#bidModal" id="btn_bid"
                                                        style="padding:8px 9px;"> Bid Now </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <hr style="margin-top:5px;">
                                <strong id="ContentPlaceHolder1_terms">Terms &amp; Conditions</strong><br><br><span
                                    id="ContentPlaceHolder1_lblterms">
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;">
                                        <b><u>IMPORTANT NOTES, TERMS &amp; CONDITION</u></b><br>
                                        <span style="font-size: 10pt;">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;">
                                        <b><span style="font-size: 10pt;">1.</span></b><span
                                            style="font-size: 10pt;">&nbsp;</span>Material condition – Stock Arising,
                                        “AS-IS-WHERE-IS&amp; NO-COMPLAINT” basis<span style="font-size: 10pt;">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;">
                                        <b>2.</b>&nbsp;We reserve the rights to cancel any approved lots/delivery order
                                        without assigning any reason whatsoever we reserve the right to partially or
                                        totally accept or reject any/all bids placed in the online auction without
                                        assigning any reason whatsoever. &nbsp;&nbsp;&nbsp;&nbsp;The decision of WE
                                        would be final and binding on the bidder in any such cases&nbsp;&nbsp;<span
                                            style="font-size: 10pt;">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-right: -51.95pt; line-height: normal;">
                                        <b><span style="font-size: 10pt;">3.&nbsp;</span></b><b><u>PAYMENT
                                                RULES</u></b><b><span style="font-size: 10pt;">
                                                <o:p></o:p>
                                            </span></b>
                                    </p>
                                    <ul type="disc" style="font-size: 13.3333px; text-align: justify;">
                                        <li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;">
                                            Minimum5% of your accepted bid value to be paid as security deposit
                                            within<span style="font-weight: bold;">&nbsp;</span><span
                                                style="color: red;">2 working days of the bid acceptance which will be
                                                adjusted against your last lifting of the respective lot</span><span
                                                style="font-size: 10pt;">
                                                <o:p></o:p>
                                            </span></li>
                                        <li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;">
                                            <span style="color: red;">Stock quantity material payment to be deposited
                                                within&nbsp;2 working days of acceptance of your bid</span><span
                                                style="font-size: 10pt;">
                                                <o:p></o:p>
                                            </span>
                                        </li>
                                        <li class="MsoNormal" style="margin-right: -51.95pt; line-height: normal;">
                                            <span style="color: red;">Arising quantity payment to be made as per
                                                arising basis within&nbsp;3 working days from the date of intimation of
                                                stock availability.</span><span style="font-size: 10pt;">
                                                <o:p></o:p>
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;">
                                        <b><span style="font-size: 10pt;">4.&nbsp;</span></b><b>Lifting&nbsp; Rules
                                            –</b>No Guarantee for full truck load quantity<br>
                                        <br>
                                        5.&nbsp;<b><u>Last date of lifting –</u></b><span
                                            style="font-size: 12pt; font-family: times new roman, serif;">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                    <ul type="disc" style="font-size: 13.3333px;">
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">Last date of lifting for Stock Quantity
                                                is&nbsp;</span><b><span style="font-size: 10pt; color: red;">4 working
                                                    days from the date of approval for stock material</span></b><span
                                                style="font-size: 10pt;">
                                                <o:p></o:p>
                                            </span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><b><span
                                                    style="font-size: 10pt; color: #330033;">Full material to be lifted
                                                    within 20 days from the acceptance of your bid</span></b><span
                                                style="font-size: 10pt;">
                                                <o:p></o:p>
                                            </span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><b><span
                                                    style="font-size: 10pt; color: #330033;">Due to any reason if
                                                    customer fails to complete the entire lifting within stipulated
                                                    timeline then the</span></b><b><span
                                                    style="font-size: 10pt; color: red;">&nbsp;10% amount paid by you
                                                    will be forfeited and customer may be debarred from participating in
                                                    all future auctions</span></b><span style="font-size: 10pt;">
                                                <o:p></o:p>
                                            </span></li>
                                    </ul>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;">
                                        <span style="font-size: 10pt;">6.&nbsp;</span>Any dispute on quality of
                                        material and bid cancellation shall not be entertained at any point after the
                                        auction<br>
                                        <br>
                                        8.&nbsp;The terms &amp; condition contained in this mail may be changed without
                                        any prior notice<br>
                                        <br>
                                        <br>
                                        <span style="font-size: 12pt; font-family: times new roman, serif;">
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                    <p class="MsoNormal" align="center"
                                        style="font-size: 13.3333px; margin-bottom: 0.0001pt; text-align: center; line-height: normal;">
                                        <b><u>METHODOLOGYFOR ALLOCATION OF QUANTITY</u></b><span
                                            style="font-size: 10pt;"><br>
                                            <br>
                                            <o:p></o:p>
                                        </span>
                                    </p>
                                    <ul type="disc" style="font-size: 13.3333px;">
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">First preference is given to highest bid price
                                                <o:p></o:p>
                                            </span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">If two or more parties bid the same price then
                                                preference for allocation is given to party that placed the bid for a
                                                higher quantity<o:p></o:p></span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">In case two or more parties bid the same price
                                                and quantity, then preference Is given to the party that placed the bid
                                                earlier<o:p></o:p></span></li>
                                    </ul>
                                    <p class="MsoNormal" style="font-size: 13.3333px;">
                                        <o:p>&nbsp;</o:p>
                                    </p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        @include('vendor.partials.bidding-modal')
    </section>
@endsection

@push('scripts')
@endpush
