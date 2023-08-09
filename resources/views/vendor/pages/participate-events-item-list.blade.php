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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <hr style="margin-top:5px;margin-bottom:5px;">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
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
                                                style="width: 60.969px;">Region </th>
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
                                                <td>{{ $p->rpu->item_unit }}</td>
                                                <td>{{ $p->rpu->region->name }}</td>
                                                <td>{{ $p->rpu->price }}</td>
                                                <td>{{ (BidHelper::getLastBidderPrice($p->event_id, $p->item_id, $p->rpu->id) ? BidHelper::getLastBidderPrice($p->event_id, $p->item_id, $p->rpu->id)->least_status : '' . '' . BidHelper::getLastBidderPrice($p->event_id, $p->item_id, $p->rpu->id)) ? BidHelper::getLastBidderPrice($p->event_id, $p->item_id, $p->rpu->id)->bidding_price : '' }}
                                                </td>
                                                <td><b>{{ CappingHelper::getCappingPrice($p->event_id, $p->rpu->id, $p->item_id, $p->vendor_id) }}</b>
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
                                    {{ $participates->first()->event->term_condition }}
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
