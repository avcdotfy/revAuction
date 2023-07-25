@extends('admin.layout.base')


@section('main_section')
    <section class="content-header">
        <h1>Home | Events | Decision Taken Events <small id="ContentPlaceHolder1_hTag">List</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <div class="modal fade" id="model_edit_7">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="border-radius: 4px;">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" style="font-weight: 600;text-align:center">
                                                    Event Basic Information</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="box">
                                                            <div class="box-body">
                                                                <div class="col-sm-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Open Date &amp;
                                                                        Time : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 04:48 PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Close Date &amp;
                                                                        Time : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 05:14 PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Created By :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <label>admin</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Created Date :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 04:48:38 PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" style="display:block">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12" style="display:block">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Updated By :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <label>admin</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" style="display:block">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12" style="display:block">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Updated Date :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 05:11:57 PM</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="col-sm-12">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 29.6771px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 104.083px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 411.521px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 84.3542px;">Posted Event</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 88.7396px;">Consolidate Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 80.0312px;">L1 Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 67.5938px;">Decision Taken</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bids as $key => $bid)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <a data-toggle="modal"
                                                        href="#model_edit_{{ $key }}">{{ EVENT_ID_PREFIX . $bid->event->id }}</a>
                                                </td>
                                                <td> {{ $bid->event->title }} </td>
                                                <td>
                                                    <a href="{{ route('event.postedEventInformation', $bid->event->id) }}">View
                                                        Information</a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('report.decisionTakenEventConsolidateReport', $bid->event->id) }} ">Download
                                                        Report</a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('report.decisionTakenEvenL1Report', $bid->event->id) }}">Download
                                                        Report</a>
                                                </td>
                                                <td><a href="{{ route('event.decisionTakenEventStatus', $bid->event->id) }}"
                                                        target="_blank">View Status</a></td>
                                            </tr>

                                            <div class="modal fade" id="model_edit_{{ $key }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="border-radius: 4px;">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title"
                                                                style="font-weight: 600;text-align:center">Event Basic
                                                                Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="box">
                                                                        <div class="box-body">
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Open
                                                                                    Date &amp; Time : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>{{ $bid->event->opening_date }} -
                                                                                        {{ $bid->event->opening_time }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Close
                                                                                    Date &amp; Time : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>{{ $bid->event->closing_date }}
                                                                                        -
                                                                                        {{ $bid->event->closing_time }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Created
                                                                                    By : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>{{ $bid->event->user->name }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Created
                                                                                    Date : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>{{ $bid->event->created_at }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Updated
                                                                                    By : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Updated
                                                                                    Date : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>14-07-2023 11:35:41 AM</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="col-sm-12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        @endforeach

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
