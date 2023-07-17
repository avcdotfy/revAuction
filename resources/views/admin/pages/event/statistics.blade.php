@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Live Auction Items Statistics List </h3>

    </section>
    <!-- Main content -->
    <section class="content" style="min-height: auto">
        <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px">
            <div class="box">
                <div class="box-body">
                    <h5 style=" margin-top: 10px; padding-bottom: 0px;"> {{ $event->title }} <span
                            style="padding-left: 12px;"><a href="#" style="text-decoration: underline;">
                                {{ 'AVCDOTFYREVAUC000' . $event->id }}</a></span></h5>
                </div>
            </div>
        </div>
    </section>

    @if (count($data) > 0 && $data['isTodaysBidAvailable'] == true)
        @foreach ($event->items as $key => $item)
            @if (in_array($item->id, $data['itemsIdOnWhichBidHasStarted']) &&
                    $item->id == $data['itemsIdOnWhichBidHasStarted'][$key]
            )
                <section class="content" style="min-height: auto">
                    <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px">
                        <div class="box">
                            <div class="box-body">
                                {{-- iTEM DETAILS SECTION  STARTS --}}
                                <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px">
                                    <table class="table table-bordered dataTable">
                                        <thead>
                                            <tr style="background-color: #d5f7d5c2;">
                                                <th style="text-align: justify; border-top: 0px;">Item Code :
                                                    <span id="ContentPlaceHolder1_lvIl_lbl_item_code_0"
                                                        title="HDHDHDH">{{ $item->code }}</span>
                                                    <br />
                                                    UoM :
                                                    <span
                                                        id="ContentPlaceHolder1_lvIl_lbl_uom_0">{{ $item->unit->name }}</span>
                                                </th>
                                                <th style="text-align: justify; border-top: 0px;">Item Region :
                                                    <span
                                                        id="ContentPlaceHolder1_lvIl_lbl_item_region_0">{{ $item->regionPriceUnit->first()->region->name }}</span>
                                                    <br />
                                                    Item Price : Rs.
                                                    <span
                                                        id="ContentPlaceHolder1_lvIl_lbl_item_price_0">{{ $item->regionPriceUnit->first()->price }}</span>
                                                </th>
                                                <th style="text-align: justify; border-top: 0px;">Item Unit :
                                                    <span
                                                        id="ContentPlaceHolder1_lvIl_lbl_item_unit_0">{{ $item->regionPriceUnit->first()->item_unit }}</span>
                                                    Unit
                                                    <br />
                                                    Item Unit Details :
                                                    <span
                                                        id="ContentPlaceHolder1_lvIl_lbl_item_unit_details_0">{{ $item->regionPriceUnit->first()->item_unit_details }}</span>
                                                </th>
                                                <th style="text-align: justify; border-top: 0px;">Company Name :
                                                    <span id="mostLeastBidCompanyName">Zenith Lab
                                                        Ltd.</span>
                                                    <br />
                                                    Item Rank : L1 & Price : Rs.
                                                    <span
                                                        id="ContentPlaceHolder1_lvIl_lbl_l1_item_price_0">-995000.00</span>
                                                </th>
                                                <th style="border-top: 0px;">

                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <hr>
                                </div>
                                {{-- iTEM DETAILS SECTION ENDS --}}

                                {{-- BIDDERS LIST --}}
                                <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px">
                                    <table class="table table-bordered dataTable">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Company Name</th>
                                                <th>Username</th>
                                                <th>Quantity</th>
                                                <th>Bidder Price</th>
                                                <th>Item Rank</th>
                                                <th
                                                    title="Capping Price => The minimum amount at which the vendor can accept the deal but not below this amount.">
                                                    Set Capping Price</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr style="background-color:#d5f7d5c2">
                                                <td>1</td>
                                                <td>
                                                    <span>Zenith Lab Ltd.</span>
                                                    (9876543210)
                                                </td>
                                                <td>
                                                    <span>bidder3</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>-995000.00</span>
                                                </td>
                                                <td>
                                                    <span>L1</span>
                                                    <span><img src='{{ asset('images/up_icon.png') }}'
                                                            style='height:12px;float:right;' /></span>
                                                </td>
                                                <td>
                                                    <span>-</span>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <tbody>
                                            <tr style="background-color:ghostwhite">
                                                <td>2</td>
                                                <td>
                                                    <span>MKP IT Solutions</span>
                                                    (09069042875)
                                                </td>
                                                <td>
                                                    <span>bidder1</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>-495000.00</span>
                                                </td>
                                                <td>
                                                    <span>L2</span>
                                                    <span><img src='{{ asset('images/down_icon.png') }}'
                                                            style='height:12px;float:right;' /></span>
                                                </td>
                                                <td>
                                                    <span>-</span>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                {{-- bIDDER LIST ENDS --}}
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            {{-- @push('scripts')
                <script>
                    $(document).ready(function() {
                        setInterval(() => {
                            $.ajax({
                                type: "get",
                                url: "{{ route('liveBidderStatus') }}",
                                data: {
                                    'eId': {{ $event->id }},
                                    'iId': {{ $item->id }},
                                },
                                success: function(res) {
                                    console.log(res);
                                },
                                error: function(err) {
                                    console.log(err);
                                }
                            });
                        }, 2000);
                    });
                </script>
            @endpush --}}
        @endforeach
    @else
        <h6 class="text-center" style="margin-top: 60px !important"> Bidding has not started yet </h6>
    @endif

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-body">


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
                                                style="font-weight: bold;">&nbsp;</span><span style="color: red;">2 working
                                                days of the bid acceptance which will be adjusted against your last lifting
                                                of the respective lot</span><span style="font-size: 10pt;"></span></li>
                                        <li class="MsoNormal" style=" line-height: normal;"><span style="color: red;">Stock
                                                quantity material payment to be deposited within&nbsp;2 working days of
                                                acceptance of your bid</span><span style="font-size: 10pt;"></span></li>
                                        <li class="MsoNormal" style=" line-height: normal;"><span
                                                style="color: red;">Arising quantity payment to be made as per arising basis
                                                within&nbsp;3 working days from the date of intimation of stock
                                                availability.</span><span style="font-size: 10pt;"></span></li>
                                    </ul>
                                    <p class="MsoNormal"
                                        style="font-size: 13.3333px; margin-bottom: 0.0001pt; line-height: normal;"><b><span
                                                style="font-size: 10pt;">4.&nbsp;</span></b><b>Lifting&nbsp; Rules –</b>No
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
    <script>
        $(document).ready(function() {
            Echo.channel('bidderStatus').listen('BidEvent', function(data) {
                console.log(data);
            })
        });
    </script>
@endpush
