@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Take Event Decision <small id="ContentPlaceHolder1_hTag">List</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @if ($bidders)
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>

                                        <span id="ContentPlaceHolder1_lbl_event_title"
                                            title="69">{{ $event->title }}</span>

                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="" method="post">
                        @csrf

                        <div id="ContentPlaceHolder1_div_auto_decision" class="box">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12" style="padding:0px;">
                                        <div class="col-sm-2">
                                            <input id="ContentPlaceHolder1_chk_auto_decision" type="checkbox"
                                                name="ctl00$ContentPlaceHolder1$chk_auto_decision" checked="checked">
                                            <label>Auto Decision</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <label>L1 Remarks</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="ctl00$ContentPlaceHolder1$txt_auto_l1_remarks" type="text"
                                                id="ContentPlaceHolder1_txt_auto_l1_remarks" class="form-control"
                                                placeholder="Enter L1 Remarks">
                                        </div>
                                        <div class="col-sm-1">
                                            <label>Rejected Remarks</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input name="ctl00$ContentPlaceHolder1$txt_auto_rejected_remarks" type="text"
                                                id="ContentPlaceHolder1_txt_auto_rejected_remarks" class="form-control"
                                                placeholder="Enter Rejected Remarks">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="button" name="ctl00$ContentPlaceHolder1$btn_auto_update"
                                                value="Update Decision for All"
                                                onclick="this.disabled=true;this.value='Please wait ...';__doPostBack('ctl00$ContentPlaceHolder1$btn_auto_update','')"
                                                id="ContentPlaceHolder1_btn_auto_update" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @foreach ($bidders as $key => $bidder)
                            <div class="box box-default">
                                <div class="box-header with-border" style="padding-bottom:0px;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>S.No.</th>
                                                        <th>Select</th>
                                                        <th>Company Name</th>
                                                        <th>Username</th>
                                                        <th>Mobile Number</th>
                                                        <th>Email ID</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="background-color:ghostwhite">
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            <input id="ContentPlaceHolder1_lvVl_chvc_0" type="checkbox"
                                                                name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$chvc">
                                                        </td>
                                                        <td><span
                                                                id="ContentPlaceHolder1_lvVl_lbl_company_name_0">{{ $bidder->details->vendor->company_name }}</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                id="ContentPlaceHolder1_lvVl_lblusername_0">{{ $bidder->details->vendor->user->username }}</span>
                                                            <input type="hidden"
                                                                name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$hf"
                                                                id="ContentPlaceHolder1_lvVl_hf_0" value="1">
                                                            <input type="hidden"
                                                                name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$hfemail"
                                                                id="ContentPlaceHolder1_lvVl_hfemail_0"
                                                                value="mithkumarsah@gmail.com">
                                                        </td>
                                                        <td><span
                                                                id="ContentPlaceHolder1_lvVl_lblcmobile_0">{{ $bidder->details->vendor->user->phone }}</span>
                                                        </td>
                                                        <td>

                                                            {{ $bidder->details->vendor->user->email }}
                                                        </td>
                                                        <td>
                                                            <div class="box-tools">
                                                                <button type="button" class="btn btn-box-tool"
                                                                    data-widget="collapse"><i
                                                                        class="fa fa-minus"></i></button>
                                                                <button type="button" style="display: none;"
                                                                    class="btn btn-box-tool" data-widget="remove"><i
                                                                        class="fa fa-remove"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                {{-- {{ dd($bidder->items) }} --}}

                                <div class="box-body" style="padding-top:0px;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable">
                                                <thead>
                                                    <tr>
                                                        <th style="display:none;">#</th>
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
                                                @foreach ($bidder->items as $iKey => $item)
                                                    <tbody>
                                                        <tr style="background-color:ghostwhite">
                                                            <td style="display:none;">
                                                                <input type="hidden"
                                                                    name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$lvIl$ctrl0$hfId"
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_hfId_0"
                                                                    value="242">

                                                            </td>
                                                            <td><a id="ContentPlaceHolder1_lvVl_lvIl_0_btn_download_log_report_0"
                                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvVl$ctrl0$lvIl$ctrl0$btn_download_log_report','')"><span
                                                                        id="ContentPlaceHolder1_lvVl_lvIl_0_lbl_item_description_0">{{ $item->item->code }}</span></a>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_lbl_unit_name_0">{{ $item->item->unit->name }}</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_lbl_region_name_0">{{ $item->item->regionPriceUnit->first()->region->name }}</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_lbl_fob_price_0">{{ $item->item->regionPriceUnit->first()->price }}</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_lblbidqty_0">{{ $item->item->regionPriceUnit->first()->item_unit }}</span>
                                                            </td>
                                                            <td><span
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_lbl_item_rank_0">{{ $item->least_status }}
                                                                </span>
                                                                &amp;
                                                                <span
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_lblBP_0">{{ $item->bidding_price }}</span>
                                                            </td>
                                                            <td style="width:8%;">
                                                                <input
                                                                    name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$lvIl$ctrl0$txtQty"
                                                                    type="text"
                                                                    value="{{ $item->item->regionPriceUnit->first()->item_unit }}"
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_txtQty_0"
                                                                    class="qty form-control"
                                                                    onkeypress="return isNumberKey(event)"
                                                                    style="text-align:center;">
                                                            </td>
                                                            <td style="width:10%;">
                                                                <input
                                                                    name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$lvIl$ctrl0$txtPrice"
                                                                    type="text"
                                                                    value="{{ $item->item->regionPriceUnit->first()->item_unit * $item->item->regionPriceUnit->first()->price }}"
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_txtPrice_0"
                                                                    class="form-control"
                                                                    onkeypress="return isNumberKey(event)"
                                                                    style="text-align:center;">
                                                            </td>
                                                            <td>

                                                                <select
                                                                    name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$lvIl$ctrl0$ddl_decision"
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_ddl_decision_0"
                                                                    class="form-control">
                                                                    <option value="Pending">Select</option>
                                                                    <option value="Accepted">Accept</option>
                                                                    <option value="Rejected">Reject</option>

                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input
                                                                    name="ctl00$ContentPlaceHolder1$lvVl$ctrl0$lvIl$ctrl0$txtRemark"
                                                                    type="text" maxlength="150"
                                                                    id="ContentPlaceHolder1_lvVl_lvIl_0_txtRemark_0"
                                                                    class="remarks form-control">

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach

                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.box-body -->
                            </div>
                        @endforeach




                        <div id="ContentPlaceHolder1_div_btn" class="box">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-12" style="text-align:center;">
                                            <input type="submit" name="ctl00$ContentPlaceHolder1$btn_submit"
                                                value="Final Submit" id="submit_btn" class="btn btn-sm btn-success">
                                            <a href="{{ route('event.closed') }}" class="btn btn-sm btn-primary"
                                                style="color: White; margin-left: 4px">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @else
                    <span class="text-center">No Data found</span>
                @endif
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection

@push('scripts')
@endpush
