@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>View Decision Taken Event <small id="ContentPlaceHolder1_hTag">List</small>
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
                                    <span id="ContentPlaceHolder1_lbl_event_title"
                                        title="72">{{ $decisions->first()->event->title }}</span>
                                </h5>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Company Name</th>
                                            <th>Username</th>
                                            <th>Mobile Number</th>
                                            <th>Email ID</th>
                                        </tr>
                                    </thead>
                                    @foreach ($decisions as $key => $d)
                                        <tbody>
                                            <tr style="background-color:ghostwhite">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $d->vendor->company_name }}</td>
                                                <td>
                                                    <span
                                                        id="ContentPlaceHolder1_lvVl_lblusername_0">{{ $d->vendor->user->username }}</span>
                                                    <input type="hidden" name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$hf"
                                                        id="ContentPlaceHolder1_lvVl_hf_0" value="8">
                                                    <input type="hidden"
                                                        name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$hfemail"
                                                        id="ContentPlaceHolder1_lvVl_hfemail_0" value="bidder2@gmail.com">
                                                </td>
                                                <td>{{ $d->vendor->user->phone }}
                                                </td>
                                                <td>{{ $d->vendor->user->email }}</td>
                                            </tr>


                                            @foreach (DHelper::getDecisionRowsFromVendorId($d->vendor->id, $d->event_id) as $d)
                                                <tr>
                                                    <td colspan="5">
                                                        <table
                                                            class="table table-bordered table-striped dataTable no-footer">
                                                            <thead>
                                                                <tr>
                                                                    <th>Item Name</th>
                                                                    <th>UoM</th>
                                                                    <th>Region</th>
                                                                    <th>Item Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Item Status &amp; Bidder Amount</th>
                                                                    <th>Accept Qty.</th>
                                                                    <th>Accept Amount</th>
                                                                    <th>Decision</th>
                                                                    <th>Remarks</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>

                                                                    <td><a id="ContentPlaceHolder1_lvVl_lvIl_0_btn_download_log_report_0"
                                                                            href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvVl$ctrl0$lvIl$ctrl0$btn_download_log_report','')"><span
                                                                                id="ContentPlaceHolder1_lvVl_lvIl_0_lbl_item_description_0">{{ $d->item->code }}</span>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            id="">{{ $d->item->unit->code }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            id="">{{ $d->item->regionPriceUnit->first()->region->name }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            id="">{{ $d->item->regionPriceUnit->first()->price }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            id="">{{ $d->item->regionPriceUnit->first()->item_unit }}</span>
                                                                    </td>
                                                                    <td class="leastStatus-{{ $d->bid->least_status }}">
                                                                        {{ $d->bid->least_status }} &amp;
                                                                        <span
                                                                            id="">{{ $d->bid->bidding_price }}</span>
                                                                    </td>

                                                                    <td>
                                                                        <span id=""
                                                                            class="aspNetDisabled">{{ $d->accepted_qty }}</span>
                                                                    </td>
                                                                    <td><span id=""
                                                                            class="aspNetDisabled">{{ $d->accepted_amount }}</span>
                                                                    </td>
                                                                    <td style="width: 6%;">
                                                                        <span
                                                                            id="">{{ $d->decision_status }}</span>

                                                                    </td>
                                                                    <td>
                                                                        <span id="">{{ $d->remarks }}</span>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <hr>
                                <div class="col-sm-12" style="text-align:center;">
                                    <a href="{{ route('event.decisionTaken') }}" class="btn btn-sm btn-primary"
                                        style="color: White; margin-left: 4px">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $('td').find(".leastStatus-L1").parent().css({
            'background-color': '#d5f7d5c2'
        });
    </script>
@endpush
