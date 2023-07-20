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

                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td><a data-toggle="modal" href="#model_edit_1">ST021507202371</a>
                                            </td>
                                            <td>Event for [Steel] : Opening Date &amp; Time - Sat 15-Jul-2023 10:15
                                                AM and Closing Date &amp; Time - Sat 15-Jul-2023 10:34 AM (Daily)
                                            </td>
                                            <td><a
                                                    href="view-posted-event-information.aspx?r=AfI07azv6nWhAj0qw/RJ5A==&amp;eT=Xu+SLs7u54ea5dayzg7tGQ==">View
                                                    Information</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_generate_report_0"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl0$btn_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_l1_generate_report_0"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl0$btn_l1_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a href="view-decision-taken-event.aspx?r=AfI07azv6nWhAj0qw/RJ5A=="
                                                    target="_blank">View Status</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>2</td>
                                            <td><a data-toggle="modal" href="#model_edit_2">ST021407202368</a>
                                            </td>
                                            <td>Event for [Steel] : Opening Date &amp; Time - Fri 14-Jul-2023 11:36
                                                AM and Closing Date &amp; Time - Mon 17-Jul-2023 06:12 PM (Daily)
                                            </td>
                                            <td><a
                                                    href="view-posted-event-information.aspx?r=zkmnXSPZczYoUeu52uotXg==&amp;eT=Xu+SLs7u54ea5dayzg7tGQ==">View
                                                    Information</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_generate_report_1"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl1$btn_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_l1_generate_report_1"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl1$btn_l1_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a href="view-decision-taken-event.aspx?r=zkmnXSPZczYoUeu52uotXg=="
                                                    target="_blank">View Status</a></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>3</td>
                                            <td><a data-toggle="modal" href="#model_edit_3">ST021107202365</a>
                                            </td>
                                            <td>Event for [Steel] : Opening Date &amp; Time - Tue 11-Jul-2023 04:24
                                                PM and Closing Date &amp; Time - Tue 11-Jul-2023 04:42 PM (Daily)
                                            </td>
                                            <td><a
                                                    href="view-posted-event-information.aspx?r=0MswJ7K3Fk9sU9jfq22ecg==&amp;eT=Xu+SLs7u54ea5dayzg7tGQ==">View
                                                    Information</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_generate_report_2"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl2$btn_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_l1_generate_report_2"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl2$btn_l1_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a href="view-decision-taken-event.aspx?r=0MswJ7K3Fk9sU9jfq22ecg=="
                                                    target="_blank">View Status</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>4</td>
                                            <td><a data-toggle="modal" href="#model_edit_4">ST021105202316</a>
                                            </td>
                                            <td>Event for Steel : Opening Date &amp; Time 11-05-2023 10:30 AM (IST)
                                                and Closing Date &amp; Time 11-05-2023 10:45 AM (IST)</td>
                                            <td><a
                                                    href="view-posted-event-information.aspx?r=WHYf4alVgNJY/X917pnZ3w==&amp;eT=Xu+SLs7u54ea5dayzg7tGQ==">View
                                                    Information</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_generate_report_3"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl3$btn_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_l1_generate_report_3"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl3$btn_l1_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a href="view-decision-taken-event.aspx?r=WHYf4alVgNJY/X917pnZ3w=="
                                                    target="_blank">View Status</a></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>5</td>
                                            <td><a data-toggle="modal" href="#model_edit_5">ST021105202315</a>
                                            </td>
                                            <td>Event for Steel : Opening Date &amp; Time 11-05-2023 08:08 AM (IST)
                                                and Closing Date &amp; Time 11-05-2023 08:20 AM (IST)</td>
                                            <td><a
                                                    href="view-posted-event-information.aspx?r=EvsdnH+UlJpTVhFYh+i13g==&amp;eT=Xu+SLs7u54ea5dayzg7tGQ==">View
                                                    Information</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_generate_report_4"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl4$btn_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_l1_generate_report_4"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl4$btn_l1_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a href="view-decision-taken-event.aspx?r=EvsdnH+UlJpTVhFYh+i13g=="
                                                    target="_blank">View Status</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>6</td>
                                            <td><a data-toggle="modal" href="#model_edit_6">ST021005202312</a>
                                            </td>
                                            <td>Event for Steel : Opening Date &amp; Time 10-05-2023 05:24 PM (IST)
                                                and Closing Date &amp; Time 10-05-2023 05:42 PM (IST)</td>
                                            <td><a
                                                    href="view-posted-event-information.aspx?r=5iI8NvAvmYV/ZdipUw3e0Q==&amp;eT=Xu+SLs7u54ea5dayzg7tGQ==">View
                                                    Information</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_generate_report_5"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl5$btn_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_l1_generate_report_5"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl5$btn_l1_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a href="view-decision-taken-event.aspx?r=5iI8NvAvmYV/ZdipUw3e0Q=="
                                                    target="_blank">View Status</a></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>7</td>
                                            <td><a data-toggle="modal" href="#model_edit_7">ST021005202311</a>
                                            </td>
                                            <td>Event for Steel : Opening Date &amp; Time 10-05-2023 04:48 PM (IST)
                                                and Closing Date &amp; Time 11-05-2023 05:00 PM (IST)</td>
                                            <td><a
                                                    href="view-posted-event-information.aspx?r=mEzZBKPOkXLjMUDj1TaO/Q==&amp;eT=Xu+SLs7u54ea5dayzg7tGQ==">View
                                                    Information</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_generate_report_6"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl6$btn_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a id="ContentPlaceHolder1_lvDTe_btn_l1_generate_report_6"
                                                    href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvDTe$ctrl6$btn_l1_generate_report','')">Download
                                                    Report</a></td>
                                            <td><a href="view-decision-taken-event.aspx?r=mEzZBKPOkXLjMUDj1TaO/Q=="
                                                    target="_blank">View Status</a></td>
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
