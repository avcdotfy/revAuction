@extends('vendor.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Events | Running Events | Live Auction Items <small id="ContentPlaceHolder1_hTag">List</small>
        </h1>
    </section>
    <section class="content">

        @include('vendor.partials.alerts')

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>
                                    <span id="ContentPlaceHolder1_lbltitle">{{ $event->title }}</span>
                                </h5>
                                <hr style="margin-bottom:5px;">
                            </div>
                        </div>
                        <div class="row" style="overflow: auto;">
                            <div class="col-sm-12">
                                <div id="dtable_Il_wrapper" class="dataTables_wrapper no-footer">
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
                                                                <select name="region" id="region_select">
                                                                    {{-- @foreach ($event->items as $item) --}}
                                                                    @foreach ($event->items as $rpu)
                                                                        <option value="{{ $rpu->region->id }}">
                                                                            {{ $rpu->region->name }}
                                                                        </option>
                                                                    @endforeach
                                                                    {{-- @endforeach --}}
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
                                            @foreach ($event->items as $key => $item)
                                                <tr style="font-weight: 600;" role="row" class="odd">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->item->code }} (<span id="lblitem0"
                                                            title="18">{{ $item->item->description }}</span>)
                                                    </td>
                                                    {{-- {{dd($item->item)}} --}}
                                                    <td><span id="lbl_uom_type0"
                                                            title="65">{{ $item->item->unit->name }}</span></td>
                                                    <td style="text-align: center"><span id="lbl_item_qty0"
                                                            title="1 Unit = Rs. 25000">{{ $item->item_unit }}</span>
                                                        Unit | <span id="lbl_lot_number0">1 Unit = Rs.
                                                            {{ $item->price }}</span>

                                                    </td>
                                                    <td style="text-align: center; width: 82px">
                                                        <span id="lbl_fob_price0" title="0.00">{{ $item->price }}</span>
                                                    </td>
                                                    {{-- {{ $item->id }} --}}
                                                    <td style="text-align: center">
                                                        <span class="clsbidPrice{{ $item->id }}"
                                                            id="bidPrice{{ $item->id }}">{{ BidHelper::getLowestPrice($event->id, $item->item->id, $item->id) ?? 0 }}</span>
                                                    </td>
                                                    <td style="text-align: center">
                                                        <span class="countDown" title=""></span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary "
                                                            id="statusBtn{{ $item->id }}"
                                                            style="padding:8px 9px; display:{{ !BidHelper::checkIfVendorhasLowestBid($event->id, $item->item->id, $item->id) || !BidHelper::checkIfVendorhasLowestCappingPrice($event->id, $item->id) || $event->status == COMPLETED ? 'none' : '' }}">
                                                            {{ BidHelper::getVendorsLeastStatus($event->id, $item->id, Auth::user()->vendor->id, $item->id) ? 'L1' : '' }}</a>

                                                        {{-- {{ $event->status }} --}}
                                                        {{-- {{ BidHelper::checkIfVendorhasLowestCappingPrice($event->id, $item->id) }} --}}
                                                        <a href="#" data-toggle="modal" class="btn btn-success"
                                                            data-target="#bidModal{{ $item->id }}"
                                                            id="btn_bid{{ $item->id }}"
                                                            style="padding:8px 9px; display:{{ $event->status == COMPLETED || BidHelper::checkIfVendorhasLowestBid($event->id, $item->item->id, $item->id) || BidHelper::checkIfVendorhasLowestCappingPrice($event->id, $item->item->id, $item->id) ? 'none' : '' }}">
                                                            Bid Now </a>

                                                        <a href="#" class="btn btn-danger"
                                                            id="btn_closed{{ $item->id }}"
                                                            style="padding:8px 9px; display:{{ $event->status == RUNNING ? 'none' : '' }}">
                                                            Closed </a>
                                                    </td>
                                                </tr>

                                                {{-- Bidding Modal Starts --}}
                                                <div id="bidModal{{ $item->id }}" class="modal fade" role="dialog">
                                                    <form action="{{ route('vendor.submit-bid') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="event_id"
                                                            value="{{ $event->id }}">
                                                        <input type="hidden" name="item_id"
                                                            value="{{ $item->item->id }}">
                                                        <input type="hidden" name="item_rpu_id"
                                                            value={{ $item->id }}>
                                                        <input type="hidden" name="region_id"
                                                            value={{ $item->region->id }}>
                                                        <input type="hidden" name="rpu_price" value={{ $item->price }}>

                                                        <div class="modal-dialog">
                                                            <div class="modal-content" style="border-radius: 4px;">
                                                                <div class="modal-header" style="padding-bottom: 0px;">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span></button>
                                                                    <h4 class="modal-title"
                                                                        style="font-weight: 600; text-align: center; text-decoration-line: underline;">
                                                                        Material Information</h4>
                                                                    <h5 style="text-align: center">{{ $item->item->code }}
                                                                        (<span id="lblitem0"
                                                                            title="18">{{ $item->item->description }}</span>)
                                                                    </h5>
                                                                    <div class="col-sm-12" style="padding: 0px;">
                                                                        <div class="col-sm-6">
                                                                            <span>
                                                                                <label>Quantity : </label>
                                                                            </span>
                                                                            <span>
                                                                                <label>
                                                                                    {{ $item->item_unit }}
                                                                                    Unit
                                                                                </label>
                                                                                |
                                                                                <label>1 Unit = 1
                                                                                    {{ $item->item->unit->name }}</label>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-sm-6" style="text-align: right;">
                                                                            <span>
                                                                                <label>Time Left : </label>
                                                                            </span>

                                                                            <span>
                                                                                <label id="time_left0">

                                                                                    <span class="countDown"
                                                                                        title="12-07-2023 06:08:PM"></span>

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
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3">Base Price
                                                                                        </label>

                                                                                        <div class="col-sm-3">
                                                                                            <label>{{ $item->price }}</label>
                                                                                        </div>
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3">Last Bidder
                                                                                            Price
                                                                                        </label>

                                                                                        <div class="col-sm-3">
                                                                                            <label
                                                                                                id="lastBidderPrice{{ $item->id }}">{{ BidHelper::getLastBidderPrice($event->id, $item->item->id, $item->id) ? BidHelper::getLastBidderPrice($event->id, $item->item->id, $item->id)->bidding_price : '00' }}</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3"
                                                                                            title="Minimum Bidding Price Limit">Set
                                                                                            Capping Price </label>

                                                                                        <div class="col-sm-3">
                                                                                            <input type="number"
                                                                                                id="txt_auto_biding_price0"
                                                                                                onchange="checking_capping_bidding_price_0()"
                                                                                                maxlength="10"
                                                                                                name="capping_price"
                                                                                                class="form-control"
                                                                                                style="height: 25px; color: red"
                                                                                                placeholder="Capping Price"
                                                                                                title="1">
                                                                                        </div>
                                                                                        <label for="inputPassword3"
                                                                                            class="col-sm-3"
                                                                                            style="color: green;">Bidding
                                                                                            Price
                                                                                        </label>

                                                                                        @if ($item->item->is_manually_change_bidding_price)
                                                                                            <div class="col-sm-3"
                                                                                                style="display:block">
                                                                                                <input type="number"
                                                                                                    id="txt_bidding_price0"
                                                                                                    maxlength="10"
                                                                                                    name="bidding_price"
                                                                                                    required
                                                                                                    class="form-control"
                                                                                                    style="height: 25px; color: green"
                                                                                                    placeholder="Bidding Price"
                                                                                                    title="24500.00">
                                                                                            </div>
                                                                                        @else
                                                                                            {{-- {{ BidHelper::getLastBidderPrice($event->id, $item->item->id, $item->id) }} --}}
                                                                                            <div class="col-sm-3">
                                                                                                <label
                                                                                                    style="color: green;"
                                                                                                    id="lbl_bidding_price{{ $item->id }}">{{ BidHelper::getLastBidderPrice($event->id, $item->item->id, $item->id) != null ? BidHelper::getLastBidderPrice($event->id, $item->item->id, $item->id)->bidding_price - $item->item->decrement_price : $item->price - $item->item->decrement_price }}</label>
                                                                                                <input type="hidden"
                                                                                                    id="bidding_price_hidden{{ $item->id }}"
                                                                                                    name="bidding_price"
                                                                                                    class="form-control"
                                                                                                    style="height: 25px; color: green"
                                                                                                    placeholder="Bidding Price"
                                                                                                    required
                                                                                                    value="{{ BidHelper::getLastBidderPrice($event->id, $item->item->id, $item->id) != null ? BidHelper::getLastBidderPrice($event->id, $item->item->id, $item->id)->bidding_price - $item->item->decrement_price : $item->price - $item->item->decrement_price }}">
                                                                                            </div>
                                                                                        @endif


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer" style="text-align: center;">
                                                                    <div class="col-sm-12">
                                                                        <button id="btn_save0" type="submit"
                                                                            href="" value="Submit the Bid"
                                                                            class="btn btn-sm btn-primary"> Submit Bid
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                    </form>

                                                </div>
                                                {{-- Bidding Modal Ends --}}

                                                @push('scripts')
                                                    <script>
                                                        setInterval(() => {

                                                            $.ajax({
                                                                type: "post",
                                                                url: "{{ route('vendor.live-data') }}",
                                                                data: {
                                                                    '_token': "{{ csrf_token() }}",
                                                                    'eId': '{{ $event->id }}',
                                                                    'iId': '{{ $item->item->id }}',
                                                                    'iRpuId': '{{ $item->id }}',
                                                                },

                                                                success: function(res) {
                                                                    // console.log(res.lowestBid)
                                                                    $("#bidPrice{{ $item->id }}").text(res.lowestBid);
                                                                    $("#lastBidderPrice{{ $item->id }}").text(res.lastBidderPrice);

                                                                    if (res.event_status != "COMPLETED") {
                                                                        $("#btn_closed{{ $item->id }}").hide();
                                                                        if (res.isMyBidIsLowest) {
                                                                            $("#statusBtn{{ $item->id }}").show();

                                                                            $("#btn_bid{{ $item->id }}").hide();
                                                                        } else {
                                                                            $("#statusBtn{{ $item->id }}").hide();

                                                                            $("#btn_bid{{ $item->id }}").show();
                                                                        }

                                                                        if (res.lastBidderPrice != 0 && res.lastBidderPrice != null) {
                                                                            $("#bidding_price_hidden{{ $item->id }}").val(res.lastBidderPrice - res
                                                                                .decrementAmount);
                                                                            $("#lbl_bidding_price{{ $item->id }}").text(res.lastBidderPrice - res
                                                                                .decrementAmount);
                                                                        }

                                                                    } else {
                                                                        $("#btn_bid{{ $item->id }}").hide();
                                                                        $("#btn_closed{{ $item->id }}").show();
                                                                        $("#statusBtn{{ $item->id }}").hide();

                                                                    }
                                                                },
                                                                error: function(err) {
                                                                    console.log("ERR", err);
                                                                }
                                                            });
                                                        }, 1500);
                                                    </script>
                                                @endpush
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div style="margin:20px">
                            {!! $event->terms_condition !!}
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

    <form action="{{ route('vendor.filterLiveAuction') }}" method="post" id="filterForm">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <input type="hidden" name="region_id" value="" id="reg_id">
    </form>
@endsection

@push('scripts')
    <script>
        function convertMillisecondsToHMS(milliseconds) {
            //Get hours from milliseconds
            var hours = milliseconds / (1000 * 60 * 60);
            var absoluteHours = Math.floor(hours);
            var h = absoluteHours > 9 ? absoluteHours : '0' + absoluteHours;

            //Get remainder from hours and convert to minutes
            var minutes = (hours - absoluteHours) * 60;
            var absoluteMinutes = Math.floor(minutes);
            var m = absoluteMinutes > 9 ? absoluteMinutes : '0' + absoluteMinutes;

            //Get remainder from minutes and convert to seconds
            var seconds = (minutes - absoluteMinutes) * 60;
            var absoluteSeconds = Math.floor(seconds);
            var s = absoluteSeconds > 9 ? absoluteSeconds : '0' + absoluteSeconds;


            return h + ':' + m + ':' + s;
        }

        $(document).ready(function() {
            var duration = {{ $event->closing_date_time_millis }}; // Duration in milliseconds				

            function updateTimer() {
                let remaing_time = duration - Date.now();
                if (remaing_time < 0) {
                    var formattedTime = 00;
                    // $('#btn_closed').show();
                    // $('#btn_bid').hide();
                } else {
                    var formattedTime = convertMillisecondsToHMS(remaing_time);
                }

                $('.countDown').text(formattedTime);
            }

            updateTimer();

            setInterval(function() {

                updateTimer();
            }, 1000);
        });
    </script>

    <script>
        $('#region_select').change(function(e) {
            $("#reg_id").val(e.target.value);
            $("#filterForm").submit();
        });
    </script>
@endpush
