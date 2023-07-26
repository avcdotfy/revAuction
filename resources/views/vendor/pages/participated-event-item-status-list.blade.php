@extends('vendor.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Events | View Participated Event Items Status <small id="ContentPlaceHolder1_hTag">List</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5><span id="ContentPlaceHolder1_lbl_event_title"
                                        title="69">{{ count($decisions) > 0 ? $decisions->first()->event->title : '' }}</span>
                                </h5>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 35.375px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 108.354px;">Item Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 29.9375px;">UoM</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 84.8021px;">Region Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 77.5521px;">Quantity</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 204.104px;">Item Status &amp; Last Bidding Price</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 73.625px;">Accept Qty.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 98.0521px;">Accept Amount</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 63.6146px;">Decision</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 57.25px;">Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background-color:ghostwhite" role="row" class="odd">
                                            @foreach ($decisions as $key => $d)
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $d->item->code }}</td>
                                                <td>{{ $d->item->unit->name }}</td>
                                                <td>{{ $d->item->regionPriceUnit->first()->region->name }}</td>
                                                <td>{{ $d->item->regionPriceUnit->first()->item_unit }}</td>
                                                <td>{{ $d->bid->least_status . ' & ' . $d->bid->bidding_price }}</td>
                                                <td><span>{{ $d->accepted_qty }}</span> </td>
                                                <td><span id=" ">{{ $d->accepted_amount }}</span> </td>
                                                <td><span>{{ $d->decision_status }}</span> </td>
                                                <td><span>{{ $d->remarks }}</span> </td>
                                            @endforeach

                                        </tr>
                                    </tbody>
                                </table>
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
@endpush
