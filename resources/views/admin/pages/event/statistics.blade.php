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
        @foreach ($event->items as $key => $rpuItem)
            <section class="content itemsBox" style="min-height: auto">
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
                                                    title="HDHDHDH">{{ $rpuItem->item->code }}</span>
                                                <br />
                                                UoM :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_uom_0">{{ $rpuItem->item->unit->name }}</span>
                                            </th>
                                            <th style="text-align: justify; border-top: 0px;">Item Region :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_region_0">{{ $rpuItem->region->name }}</span>
                                                <br />
                                                Item Price : Rs.
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_price_0">{{ $rpuItem->price }}</span>
                                            </th>
                                            <th style="text-align: justify; border-top: 0px;">Item Unit :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_unit_0">{{ $rpuItem->item_unit }}</span>
                                                Unit
                                                <br />
                                                Item Unit Details :
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lbl_item_unit_details_0">{{ $rpuItem->item_unit_details }}</span>
                                            </th>
                                            <th style="text-align: justify; border-top: 0px;">Company Name :
                                                <span id="mostLeastBidCompanyName{{ $rpuItem->id }}">
                                                    @foreach ($rpuItem->availableBids as $key => $value)
                                                        @if ($value->least_status == 'L1')
                                                            {{ $value->vendor->company_name }}
                                                        @endif
                                                    @endforeach
                                                </span>
                                                <br />
                                                Item Rank : L1 & Price : Rs.
                                                <span id="mostLeasBidPrice{{ $rpuItem->id }}">
                                                    <span id="mostLeastBidCompanyName{{ $rpuItem->id }}">
                                                        @foreach ($rpuItem->availableBids as $key => $value)
                                                            @if ($value->least_status == 'L1')
                                                                {{ $value->bidding_price }}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </span>
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
                                <table class="table table-bordered dataTable" id="vendor_table{{ $rpuItem->id }}">
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

                                    @foreach ($rpuItem->availableBids as $keyBid => $bid)
                                        <tbody>
                                            <tr
                                                style="{{ $bid->least_status == 'L1' ? 'background-color: #d5f7d5c2;' : '' }}">
                                                <td>{{ $keyBid + 1 }}</td>
                                                <td>
                                                    <span id="vendor_company{{ $bid->id }}">
                                                        {{ $bid->vendor->company_name }}
                                                    </span>
                                                    <span id="vendor_phone{{ $bid->id }}">
                                                        ({{ $bid->vendor->user->phone }})
                                                    </span>
                                                </td>
                                                <td>
                                                    <span id="vendor_username{{ $bid->id }}">
                                                        {{ $bid->vendor->user->username }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span id="vendor_unit{{ $bid->id }}">5</span>
                                                </td>
                                                <td>
                                                    <span id="vendor_bidding_price{{ $bid->id }}">
                                                        {{ $bid->bidding_price }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>{{ $bid->least_status }}</span>
                                                    @php
                                                        $image = $bid->least_status == 'L1' ? 'up.png' : 'down.png';
                                                    @endphp
                                                    <span><img src="{{ asset('media/logo/' . $image) }}"
                                                            style='height:12px;float:right;' /></span>
                                                </td>
                                                <td>
                                                    <span>{{ CappingHelper::getCappingPrice($event->id, $rpuItem->id, $rpuItem->item->id, $bid->vendor->id) ? CappingHelper::getCappingPrice($event->id, $rpuItem->id, $rpuItem->item->id, $bid->vendor->id) : '-' }}</span>
                                                </td>
                                            </tr>
                                        </tbody>

                                        @push('scripts')
                                            <script>
                                                $(document).ready(function() {
                                                    Echo.private('bidderStatus.' + {{ $event->id }} + '.' + {{ $rpuItem->id }} + '.' +
                                                        {{ $rpuItem->item->id }}).listen('BidEvent',
                                                        function(data) {
                                                            console.log(data);
                                                            // let vendors = data.bid_data.vendors.availableBids;

                                                            $(`#vendor_table${data.rpu_id} tbody`).remove();

                                                            data.vendors.forEach((v, k) => {
                                                                $image = v.least_status == 'L1' ? 'up.png' : 'down.png';
                                                                // console.log($image);
                                                                let vendorRow = `<tbody >
                                                                                    <tr style="${ v.least_status == "L1" ? 'background-color: #d5f7d5c2;' : '' }">
                                                                                        <td id="vendor_serial${data.rpu_id}">${k + 1 }</td>
                                                                                        <td>
                                                                                            <span id="vendor_company${data.rpu_id}">
                                                                                                ${v.company}
                                                                                            </span>
                                                                                            <span id="vendor_phone${data.rpu_id}">
                                                                                                (${v.phone})
                                                                                            </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span id="vendor_username${data.rpu_id}">
                                                                                                ${v.username}
                                                                                            </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span id="vendor_unit${data.rpu_id}">5</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span id="vendor_bidding_price${data.rpu_id}">
                                                                                                ${v.bidd_price}
                                                                                            </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span>${ v.least_status } </span>
                                                                                                                    
                                                                                            <span><img src="{{ asset('media/logo') }}/${$image}"
                                                                                                    style='height:12px;float:right;' /></span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <span>${v.capping_price ? v.capping_price : ''}</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>`;
                                                                // console.log(v.capping_price)
                                                                if (v.least_status == "L1") {
                                                                    $(`#mostLeasBidPrice${data.rpu_id}`).text(v.bidd_price);
                                                                    $(`#mostLeastBidCompanyName${data.rpu_id}`).text(v.company);
                                                                }


                                                                $(`#vendor_table${data.rpu_id}`).append(vendorRow);

                                                            });

                                                        })
                                                });
                                            </script>
                                        @endpush
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

    @foreach ($eventWithAllRPus->items as $rpu)
        {{-- {{ dd($event->items) }} --}}
        @push('scripts')
            <script>
                $(document).ready(function() {
                    Echo.private('bidStarted.' + {{ $event->id }} + '.' + {{ $rpu->id }} + '.' +
                        {{ $rpu->item->id }}).listen('BidStartedEvent',
                        function(data) {
                            console.log(data.count);
                            if (data.count == 1) {
                                location.reload();
                            }
                        })
                });
            </script>
        @endpush
    @endforeach

    <div class="row" style="margin: 20px">
        {!! $event->terms_condition !!}
    </div>
@endsection


