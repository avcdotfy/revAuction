@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Reports | Running Event Wise Report <small id="ContentPlaceHolder1_hTag">List</small></h1>
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
                                                                        <label>14-07-2023 05:17 PM</label>
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
                                                                        <label>31-07-2023 06:01 PM</label>
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
                                                                        <label>14-07-2023 05:16:49 PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Updated By : </label>
                                                                    <div class="col-sm-8">
                                                                        <label></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Updated Date :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <label>14-07-2023 05:16:49 PM</label>
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
                                <div class="modal fade" id="model_edit_2">
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
                                                                        <label>14-07-2023 03:40 PM</label>
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
                                                                        <label>21-07-2023 06:14 PM</label>
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
                                                                        <label>14-07-2023 03:39:40 PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Updated By :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <label></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                                                </div>
                                                                <div class="col-sm-12" style="display:none">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-4 control-label">Updated Date :
                                                                    </label>
                                                                    <div class="col-sm-8">
                                                                        <label>14-07-2023 03:39:40 PM</label>
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
                                <div id="dtable_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length" id="dtable_length"><label>Show <select
                                                name="dtable_length" aria-controls="dtable" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <div id="dtable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                class="" placeholder="" aria-controls="dtable"></label></div>
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
                                                    <div class="col-sm-3" style="text-align:left;">
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
                                                    style="width: 570.323px;">Event Title</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 103.74px;">Generate</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 91.5104px;">Posted Event</th>
                                            </tr>
                                        </thead>
                                        <tbody>







                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td><a data-toggle="modal" href="#model_edit_1">ST021407202370</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Fri 14-Jul-2023 05:17 PM
                                                    and Closing Date &amp; Time - Mon 31-Jul-2023 06:15 PM (Daily)</td>
                                                <td><a href="live-event-statistics.aspx?r=1Hfi36hfD/k22fm5fqmuag==">View
                                                        Event Statistics</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=1Hfi36hfD/k22fm5fqmuag==&amp;eT=ej8NHLe8/2A+Axxkq/Ca9w==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>2</td>
                                                <td><a data-toggle="modal" href="#model_edit_2">ST021407202369</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Fri 14-Jul-2023 03:40 PM
                                                    and Closing Date &amp; Time - Fri 21-Jul-2023 06:14 PM (Daily)</td>
                                                <td><a href="live-event-statistics.aspx?r=FCyb5bBSyh7u/N2ox4o6mQ==">View
                                                        Event Statistics</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=FCyb5bBSyh7u/N2ox4o6mQ==&amp;eT=ej8NHLe8/2A+Axxkq/Ca9w==">View
                                                        Information</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dataTables_info" id="dtable_info" role="status" aria-live="polite">
                                        Showing 1 to 2 of 2 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="dtable_paginate"><a
                                            class="paginate_button previous disabled" aria-controls="dtable"
                                            data-dt-idx="0" tabindex="0" id="dtable_previous">Previous</a><span><a
                                                class="paginate_button current" aria-controls="dtable" data-dt-idx="1"
                                                tabindex="0">1</a></span><a class="paginate_button next disabled"
                                            aria-controls="dtable" data-dt-idx="2" tabindex="0"
                                            id="dtable_next">Next</a></div>
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
