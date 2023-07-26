@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Reports | Decision Taken Event Wise Report <small id="ContentPlaceHolder1_hTag">List</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <div class="modal fade" id="model_edit_1">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="border-radius: 4px;">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" style="font-weight: 600;text-align:center">Event
                                                    Basic Information</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="box">
                                                            <div class="box-body">
                                                                <div class="col-sm-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Open Date &amp; Time
                                                                        : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>15-07-2023 10:15 AM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Close Date &amp; Time
                                                                        : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>15-07-2023 10:34 AM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Created By : </label>
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
                                                                        <label>15-07-2023 10:12:57 AM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" style="display:block">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12" style="display:block">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Updated By : </label>
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
                                                                        <label>15-07-2023 11:06:19 AM</label>
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
                                            <td colspan="6" rowspan="1">
                                                <div class="col-sm-2" style="display:none;">
                                                    <select name="ctl00$ContentPlaceHolder1$ddl_eSlist"
                                                        id="ContentPlaceHolder1_ddl_eSlist" class="form-control">
                                                        <option selected="selected" value="Re">Running Events
                                                        </option>
                                                        <option value="Ce">Closed Events</option>
                                                        <option value="DTe">Decision Taken Events</option>

                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select name="ctl00$ContentPlaceHolder1$ddl_product_range_list"
                                                        id="ContentPlaceHolder1_ddl_product_range_list"
                                                        class="form-control">
                                                        <option selected="selected" value="0">Select Category
                                                        </option>
                                                        <option value="2">Steel</option>

                                                    </select>
                                                </div>
                                                <div class="col-sm-4" style="padding: 0px;">
                                                    <label for="inputPassword3" class="col-sm-5 control-label">Closed
                                                        From Date :</label>
                                                    <div class="col-sm-7">
                                                        <input name="ctl00$ContentPlaceHolder1$txt_fromdate" type="date"
                                                            id="ContentPlaceHolder1_txt_fromdate" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4" style="padding: 0px;">
                                                    <label for="inputPassword3" class="col-sm-5 control-label">Closed
                                                        To Date :</label>
                                                    <div class="col-sm-7">
                                                        <input name="ctl00$ContentPlaceHolder1$txt_todate" type="date"
                                                            id="ContentPlaceHolder1_txt_todate" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-1" style="text-align:right;">
                                                    <input type="button" name="ctl00$ContentPlaceHolder1$btn_search"
                                                        value="Search"
                                                        onclick="this.disabled=true;this.value='Searching';__doPostBack('ctl00$ContentPlaceHolder1$btn_search','')"
                                                        id="ContentPlaceHolder1_btn_search"
                                                        class="btn btn-sm btn-primary">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 29.6771px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 104.083px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 483.688px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 93.2396px;">Consolidate Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 84.3958px;">L1 Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 87.5833px;">Posted Event</th>
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
                                                    <a
                                                        href="{{ route('report.decisionTakenEventConsolidateReport', $bid->event->id) }} ">Download
                                                        Report</a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ route('report.decisionTakenEvenL1Report', $bid->event->id) }}">Download
                                                        Report</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('event.postedEventInformation', $bid->event->id) }}">View
                                                        Information</a>
                                                </td>
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
