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

    @if ($bidStarted > 0)
        @foreach ($event->items as $key => $item)
            <section class="content" style="min-height: auto">
                <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px">
                    <div class="box">
                        <div class="box-body">

                            @push('scripts')
                                <script>
                                    $(document).ready(function() {
                                        Echo.private('bidderStatus.' + {{ $event->id }} + '.' + {{ $item->id }}).listen('BidEvent',
                                            function(data) {
                                                console.log(data);
                                            })
                                    });
                                </script>
                            @endpush

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
                                                <span id="ContentPlaceHolder1_lvIl_lbl_uom_0">{{ $item->unit->name }}</span>
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
                                                <span
                                                    id="mostLeastBidCompanyName">{{ $item->availableBids->first()->vendor->company_name }}</span>
                                                <br />
                                                Item Rank : L1 & Price : Rs.
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_l1_item_price_0">{{ $item->availableBids->first()->bidding_price }}</span>
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

                                    @foreach ($item->availableBids as $keyBid => $bid)
                                        <tbody>
                                            <tr style="{{ $keyBid == 0 ? 'background-color: #d5f7d5c2;' : '' }}">
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <span>{{ $bid->vendor->company_name }}</span>
                                                    ({{ $bid->vendor->user->phone }})
                                                </td>
                                                <td>
                                                    <span>{{ $bid->vendor->user->username }}</span>
                                                </td>
                                                <td>
                                                    <span>5</span>
                                                </td>
                                                <td>
                                                    <span>{{ $bid->bidding_price }}</span>
                                                </td>
                                                <td>
                                                    <span>{{ $key == 0 ? 'L1' : 'L2' }}</span>
                                                    <span><img src='{{ asset('images/up_icon.png') }}'
                                                            style='height:12px;float:right;' /></span>
                                                </td>
                                                <td>
                                                    <span>-</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach



                                </table>
                            </div>
                            {{-- bIDDER LIST ENDS --}}
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    @else
        <h6 class="text-center" style="margin-top: 60px !important"> Bidding has not started yet </h6>
    @endif

    @include('admin.partials.terms-condition')
@endsection
