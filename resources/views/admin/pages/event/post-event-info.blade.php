@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | View Posted Event Information </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 style=" margin-top: 10px; padding-bottom: 0px;"> {{ $event->title }}</h5>
                            </div>

                            <div class="col-sm-12" style="overflow: auto;">
                                <hr style="margin-top:5px;margin-bottom:5px;">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 38.5104px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 30.7292px;">Item Code & Description</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 30.583px;">UoM</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width:300px;">
                                                Item Region, Price & Unit Details </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($event->items as $key => $rpuItem)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $rpuItem->item->code }}</td>
                                                <td>{{ $rpuItem->item->unit->code }}</td>
                                                <td>
                                                    <div class="col-sm-12"
                                                        style="border: 1px solid #d2d6de; border-radius: 6px; padding-top: 5px; padding-bottom: 5px;">
                                                        <div><span class="label label-success"
                                                                style="white-space: unset;">{{ $rpuItem->item_unit_details }}</span>
                                                            |
                                                            <span>{{ $rpuItem->region->name }}</span> :
                                                            <span title="23">{{ $rpuItem->price }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row "><br>
                            <div class="col-sm-12">
                                {!! $event->terms_condition !!}
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
