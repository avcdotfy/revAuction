@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Events | View Participated Event Items List </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5><span id="ContentPlaceHolder1_lbltitle"
                                        title="58">{{ $participates->first()->event->title }}</span>
                                </h5>
                                <hr>
                                <div class="col-sm-6" style="padding:0px;">
                                    <small style="font-size: 15px; font-weight: bold;">Material Information</small>
                                </div>
                                <span style="float: right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Region:
                                    <select name="ctl00$ContentPlaceHolder1$ddl_region_list"
                                        id="ContentPlaceHolder1_ddl_region_list">
                                        <option selected="selected" value="PAN India">PAN India</option>
                                    </select></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <hr style="margin-top:5px;margin-bottom:5px;">
                                <table class="table table-bordered table-striped dataTable no-footer" role="grid"
                                    aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 29.6771px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 170.083px;">Item Code & Description</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 60.969px;">UoM</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 121.271px;">Quantity</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 60.969px;">Base Price </th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 121.271px;">Item Status & Last Bidding Price</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 80.271px;">Capping Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participates as $key => $p)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $p->item->code . ' | ' . $p->item->description }}</td>
                                                <td>{{ $p->item->unit->code }}</td>
                                                <td>{{ $p->item->regionPriceUnit->first()->item_unit }}</td>
                                                <td>{{ $p->item->regionPriceUnit->first()->price }}</td>
                                                <td>{{ BidHelper::getLastBidderPrice($p->event_id, $p->item_id)->least_status . ' & ' . BidHelper::getLastBidderPrice($p->event_id, $p->item_id)->bidding_price }}
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <strong id="ContentPlaceHolder1_terms">Terms &amp; Conditions</strong><br><br><span
                                    id="ContentPlaceHolder1_lblterms">
                                    <p class="MsoNormal" style="font-size: 13.3333px;  line-height: normal;"><b><u>IMPORTANT
                                                NOTES, TERMS &amp; CONDITION</u></b><br>
                                        <span style="font-size: 10pt;"></span>
                                    </p>
                                    <p class="MsoNormal" style="font-size: 13.3333px;  line-height: normal;"><b><span
                                                style="font-size: 10pt;">1.</span></b><span
                                            style="font-size: 10pt;">&nbsp;</span>Material condition – Stock Arising,
                                        “AS-IS-WHERE-IS&amp; NO-COMPLAINT” basis<span style="font-size: 10pt;"></span></p>
                                    <p class="MsoNormal" style="font-size: 13.3333px;  line-height: normal;"><b>2.</b>We
                                        reserve the rights to cancel any approved lots/delivery order without assigning any
                                        reason whatsoever we reserve the right to partially or totally accept or reject
                                        any/all bids placed in the online auction without assigning any reason whatsoever.
                                        The decision of WE would be final and binding on the bidder in any such cases</p>
                                    <p class="MsoNormal" style="font-size: 13.3333px;  line-height: normal;"><b><span
                                                style="font-size: 10pt;">3.&nbsp;</span></b><b><u>PAYMENT
                                                RULES</u></b><b><span style="font-size: 10pt;"></span></b></p>
                                    <ul type="disc" style="font-size: 13.3333px; text-align: justify;">
                                        <li class="MsoNormal" style=" line-height: normal;">Minimum5% of your accepted bid
                                            value to be paid as security deposit within<span
                                                style="font-weight: bold;">&nbsp;</span><span style="color: red;">2
                                                working days of the bid acceptance which will be adjusted against your last
                                                lifting of the respective lot</span><span style="font-size: 10pt;"></span>
                                        </li>
                                        <li class="MsoNormal" style=" line-height: normal;"><span style="color: red;">Stock
                                                quantity material payment to be deposited
                                                within&nbsp;2 working days of acceptance of your bid</span><span
                                                style="font-size: 10pt;"></span></li>
                                        <li class="MsoNormal" style=" line-height: normal;"><span
                                                style="color: red;">Arising quantity payment to be made as per arising
                                                basis within&nbsp;3 working days from the date of intimation of stock
                                                availability.</span><span style="font-size: 10pt;"></span></li>
                                    </ul>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;">
                                        <b><span style="font-size: 10pt;">4.&nbsp;</span></b><b>Lifting&nbsp; Rules –</b>No
                                        Guarantee for full truck load quantity<br>
                                        <br>
                                        5.&nbsp;<b><u>Last date of lifting –</u></b><span
                                            style="font-size: 12pt; font-family: times new roman, serif;"></span>
                                    </p>
                                    <ul type="disc" style="font-size: 13.3333px;">
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">Last date of lifting for Stock Quantity
                                                is&nbsp;</span><b><span style="font-size: 10pt; color: red;">4 working days
                                                    from the date of approval for stock material</span></b><span
                                                style="font-size: 10pt;"></span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><b><span
                                                    style="font-size: 10pt; color: #330033;">Full material to be lifted
                                                    within 20 days from the acceptance of your bid</span></b><span
                                                style="font-size: 10pt;"></span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><b><span
                                                    style="font-size: 10pt; color: #330033;">Due to any reason if customer
                                                    fails to complete the entire lifting within stipulated timeline then
                                                    the</span></b><b><span style="font-size: 10pt; color: red;">&nbsp;10%
                                                    amount paid by you will be forfeited and customer may be debarred from
                                                    participating in all future auctions</span></b><span
                                                style="font-size: 10pt;"></span></li>
                                    </ul>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;"><span
                                            style="font-size: 10pt;">6.&nbsp;</span>Any dispute on quality of material and
                                        bid cancellation shall not be entertained at any point after the auction<br>
                                        <br>
                                        8.&nbsp;The terms &amp; condition contained in this mail may be changed without any
                                        prior notice<br>
                                        <br>
                                        <br>
                                        <span style="font-size: 12pt; font-family: times new roman, serif;"></span>
                                    </p>
                                    <p class="MsoNormal" align="center"
                                        style="font-size: 13.3333px; margin-bottom: 0.0001pt; text-align: center; line-height: normal;">
                                        <b><u>METHODOLOGYFOR ALLOCATION OF QUANTITY</u></b><span
                                            style="font-size: 10pt;"><br>
                                            <br>
                                        </span>
                                    </p>
                                    <ul type="disc" style="font-size: 13.3333px;">
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">First preference is given to highest bid
                                                price</span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">If two or more parties bid the same price then
                                                preference for allocation is given to party that placed the bid for a higher
                                                quantity</span></li>
                                        <li class="MsoNormal" style="line-height: normal;"><span
                                                style="font-size: 10pt;">In case two or more parties bid the same price and
                                                quantity, then preference Is given to the party that placed the bid
                                                earlier</span></li>
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


            <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
@endpush
