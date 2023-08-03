@extends('admin.layout.base')


@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Running Event List </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 38.5104px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 44.7292px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 170.583px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.6354px;">Event Mode</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.6354px;">Live Auction</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 76.0521px;">Posted Event</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($events as $key => $event)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>

                                                <td>{{ EVENT_ID_PREFIX . $event->id }}</td>
                                                <td>{{ $event->title }}</td>

                                                <td>{{ $event->eventmode->mode }}</td>
                                                <td><a href="{{ route('event.statistics', $event->id) }}">View
                                                        Statistics</a></td>
                                                <td><a href="{{ route('event.postedEventInformation', $event->id) }}">View
                                                        Information</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
