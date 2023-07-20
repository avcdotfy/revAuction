@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Reports | Closed Event Wise Report <small id="ContentPlaceHolder1_hTag">List</small></h1>
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
                                                                        <label>14-07-2023 11:36 AM</label>
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
                                                                        <label>17-07-2023 06:04 PM</label>
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
                                                                        <label>14-07-2023 11:35:41 AM</label>
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
                                <div class="modal fade" id="model_edit_3">
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
                                                                        <label>13-07-2023 04:30 PM</label>
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
                                                                        <label>13-07-2023 07:04 PM</label>
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
                                                                        <label>13-07-2023 04:30:53 PM</label>
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
                                                                        <label>13-07-2023 04:30:53 PM</label>
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
                                <div class="modal fade" id="model_edit_4">
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
                                                                        <label>13-07-2023 03:30 PM</label>
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
                                                                        <label>14-07-2023 06:03 PM</label>
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
                                                                        <label>13-07-2023 03:26:09 PM</label>
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
                                                                        <label>14-07-2023 09:25:50 AM</label>
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
                                <div class="modal fade" id="model_edit_5">
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
                                                                        <label>11-07-2023 04:20 PM</label>
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
                                                                        <label>12-07-2023 06:08 PM</label>
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
                                                                        <label>11-07-2023 04:16:20 PM</label>
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
                                                                        <label>11-07-2023 04:16:20 PM</label>
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
                                <div class="modal fade" id="model_edit_6">
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
                                                                        <label>11-07-2023 04:10 PM</label>
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
                                                                        <label>12-07-2023 06:05 PM</label>
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
                                                                        <label>11-07-2023 04:05:32 PM</label>
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
                                                                        <label>11-07-2023 04:05:32 PM</label>
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
                                <div class="modal fade" id="model_edit_7">
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
                                                                        <label>11-07-2023 04:10 PM</label>
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
                                                                        <label>12-07-2023 06:03 PM</label>
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
                                                                        <label>11-07-2023 04:02:37 PM</label>
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
                                                                        <label>11-07-2023 04:02:37 PM</label>
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
                                <div class="modal fade" id="model_edit_8">
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
                                                                        <label>11-07-2023 03:55 PM</label>
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
                                                                        <label>12-07-2023 03:58 PM</label>
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
                                                                        <label>11-07-2023 03:50:25 PM</label>
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
                                                                        <label>11-07-2023 03:50:25 PM</label>
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
                                <div class="modal fade" id="model_edit_9">
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
                                                                        <label>09-07-2023 08:18 PM</label>
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
                                                                        <label>09-07-2023 09:01 PM</label>
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
                                                                        <label>09-07-2023 08:17:49 PM</label>
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
                                                                        <label>09-07-2023 08:17:49 PM</label>
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
                                <div class="modal fade" id="model_edit_10">
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
                                                                        <label>09-07-2023 11:55 AM</label>
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
                                                                        <label>09-07-2023 06:07 PM</label>
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
                                                                        <label>09-07-2023 11:52:56 AM</label>
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
                                                                        <label>09-07-2023 11:52:56 AM</label>
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
                                <div class="modal fade" id="model_edit_11">
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
                                                                        <label>28-06-2023 03:49 PM</label>
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
                                                                        <label>28-06-2023 04:01 PM</label>
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
                                                                        <label>28-06-2023 03:47:48 PM</label>
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
                                                                        <label>28-06-2023 03:47:48 PM</label>
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
                                <div class="modal fade" id="model_edit_12">
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
                                                                        <label>19-06-2023 12:40 AM</label>
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
                                                                        <label>19-06-2023 12:59 AM</label>
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
                                                                        <label>19-06-2023 12:40:01 AM</label>
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
                                                                        <label>19-06-2023 12:40:01 AM</label>
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
                                <div class="modal fade" id="model_edit_13">
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
                                                                        <label>08-06-2023 07:10 PM</label>
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
                                                                        <label>08-06-2023 07:25 PM</label>
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
                                                                        <label>08-06-2023 07:10:12 PM</label>
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
                                                                        <label>08-06-2023 07:10:12 PM</label>
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
                                <div class="modal fade" id="model_edit_14">
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
                                                                        <label>08-06-2023 06:58 PM</label>
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
                                                                        <label>08-06-2023 07:07 PM</label>
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
                                                                        <label>08-06-2023 06:56:55 PM</label>
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
                                                                        <label>08-06-2023 06:56:55 PM</label>
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
                                <div class="modal fade" id="model_edit_15">
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
                                                                        <label>30-05-2023 02:57 PM</label>
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
                                                                        <label>30-05-2023 06:03 PM</label>
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
                                                                        <label>30-05-2023 02:56:37 PM</label>
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
                                                                        <label>30-05-2023 02:56:37 PM</label>
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
                                <div class="modal fade" id="model_edit_16">
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
                                                                        <label>25-05-2023 02:10 PM</label>
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
                                                                        <label>25-05-2023 05:12 PM</label>
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
                                                                        <label>25-05-2023 02:08:20 PM</label>
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
                                                                        <label>25-05-2023 04:04:55 PM</label>
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
                                <div class="modal fade" id="model_edit_17">
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
                                                                        <label>10-05-2023 10:40 PM</label>
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
                                                                        <label>10-05-2023 11:02 PM</label>
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
                                                                        <label>10-05-2023 10:36:23 PM</label>
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
                                                                        <label>10-05-2023 10:36:23 PM</label>
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
                                <div class="modal fade" id="model_edit_18">
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
                                                                        class="col-sm-4 control-label">Open Date &amp;
                                                                        Time : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 05:24 PM</label>
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
                                                                        <label>10-05-2023 05:44 PM</label>
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
                                                                        <label>10-05-2023 05:24:06 PM</label>
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
                                                                        <label>10-05-2023 05:24:06 PM</label>
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
                                <div class="modal fade" id="model_edit_19">
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
                                <div class="modal fade" id="model_edit_20">
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
                                                                        class="col-sm-4 control-label">Open Date &amp;
                                                                        Time : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 03:40 PM</label>
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
                                                                        <label>10-05-2023 03:52 PM</label>
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
                                                                        <label>10-05-2023 03:39:33 PM</label>
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
                                                                        <label>10-05-2023 03:39:33 PM</label>
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
                                <div class="modal fade" id="model_edit_21">
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
                                                                        class="col-sm-4 control-label">Open Date &amp;
                                                                        Time : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>11-05-2023 09:00 AM</label>
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
                                                                        <label>11-05-2023 06:02 PM</label>
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
                                                                        <label>10-05-2023 01:14:54 PM</label>
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
                                                                        <label>10-05-2023 01:14:54 PM</label>
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
                                <div class="modal fade" id="model_edit_22">
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
                                                                        class="col-sm-4 control-label">Open Date &amp;
                                                                        Time : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 10:00 AM</label>
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
                                                                        <label>10-05-2023 06:04 PM</label>
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
                                                                        <label>10-05-2023 12:44:50 PM</label>
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
                                                                        <label>10-05-2023 05:23:33 PM</label>
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
                                <div class="modal fade" id="model_edit_23">
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
                                                                        class="col-sm-4 control-label">Open Date &amp;
                                                                        Time : </label>
                                                                    <div class="col-sm-8">
                                                                        <label>10-05-2023 12:09 PM</label>
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
                                                                        <label>10-05-2023 12:18 PM</label>
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
                                                                        <label>10-05-2023 12:09:36 PM</label>
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
                                                                        <label>10-05-2023 12:09:36 PM</label>
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
                                    <div id="dtable_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="" placeholder=""
                                                aria-controls="dtable"></label></div>
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
                                                        <label for="inputPassword3"
                                                            class="col-sm-5 control-label">Closed From Date :</label>
                                                        <div class="col-sm-7">
                                                            <input name="ctl00$ContentPlaceHolder1$txt_fromdate"
                                                                type="date" id="ContentPlaceHolder1_txt_fromdate"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4" style="padding: 0px;">
                                                        <label for="inputPassword3"
                                                            class="col-sm-5 control-label">Closed To Date :</label>
                                                        <div class="col-sm-7">
                                                            <input name="ctl00$ContentPlaceHolder1$txt_todate"
                                                                type="date" id="ContentPlaceHolder1_txt_todate"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="text-align:right;">
                                                        <input type="button"
                                                            name="ctl00$ContentPlaceHolder1$btn_search" value="Search"
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
                                                    style="width: 488.854px;">Event Title</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 92.8958px;">Consolidate Report</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 79.8125px;">L1 Report</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 87.3438px;">Posted Event</th>
                                            </tr>
                                        </thead>
                                        <tbody>






































































                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td><a data-toggle="modal" href="#model_edit_1">ST021507202371</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Sat 15-Jul-2023 10:15 AM
                                                    and Closing Date &amp; Time - Sat 15-Jul-2023 10:34 AM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_0"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl0$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_0"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl0$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=AfI07azv6nWhAj0qw/RJ5A==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>2</td>
                                                <td><a data-toggle="modal" href="#model_edit_2">ST021407202368</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Fri 14-Jul-2023 11:36 AM
                                                    and Closing Date &amp; Time - Mon 17-Jul-2023 06:12 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_1"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl1$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_1"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl1$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=zkmnXSPZczYoUeu52uotXg==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>3</td>
                                                <td><a data-toggle="modal" href="#model_edit_3">ST021307202367</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Thu 13-Jul-2023 04:30 PM
                                                    and Closing Date &amp; Time - Thu 13-Jul-2023 07:12 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_2"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl2$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_2"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl2$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=CLIrTXTdl+a2DIaNNlvA4g==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>4</td>
                                                <td><a data-toggle="modal" href="#model_edit_4">ST021307202366</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Thu 13-Jul-2023 03:30 PM
                                                    and Closing Date &amp; Time - Fri 14-Jul-2023 06:04 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_3"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl3$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_3"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl3$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=x1Wat4R4YVmt60uJyR/peA==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>5</td>
                                                <td><a data-toggle="modal" href="#model_edit_5">ST021107202364</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Tue 11-Jul-2023 04:20 PM
                                                    and Closing Date &amp; Time - Wed 12-Jul-2023 06:12 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_4"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl4$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_4"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl4$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=aainfsNuS3WuZ1KeQTuO/g==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>6</td>
                                                <td><a data-toggle="modal" href="#model_edit_6">ST021107202363</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Tue 11-Jul-2023 04:10 PM
                                                    and Closing Date &amp; Time - Wed 12-Jul-2023 06:12 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_5"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl5$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_5"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl5$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=kvTE+ELS/LvdZAvBWi4FZg==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>7</td>
                                                <td><a data-toggle="modal" href="#model_edit_7">ST021107202362</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Tue 11-Jul-2023 04:10 PM
                                                    and Closing Date &amp; Time - Wed 12-Jul-2023 06:12 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_6"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl6$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_6"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl6$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=2Naq7AgFfSwdHjL0CyQTzQ==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>8</td>
                                                <td><a data-toggle="modal" href="#model_edit_8">ST021107202361</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Tue 11-Jul-2023 03:55 PM
                                                    and Closing Date &amp; Time - Wed 12-Jul-2023 04:07 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_7"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl7$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_7"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl7$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=n9wnPK4y9LqvmWsiqrfoeg==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>9</td>
                                                <td><a data-toggle="modal" href="#model_edit_9">ST020907202357</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Sun 09-Jul-2023 08:18 PM
                                                    and Closing Date &amp; Time - Sun 09-Jul-2023 09:01 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_8"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl8$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_8"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl8$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=QEplZnIey/BLiy955it4lQ==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>10</td>
                                                <td><a data-toggle="modal" href="#model_edit_10">ST020907202354</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Sun 09-Jul-2023 11:55 AM
                                                    and Closing Date &amp; Time - Sun 09-Jul-2023 06:12 PM (Daily)</td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_generate_report_9"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl9$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvUe_btn_l1_generate_report_9"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvUe$ctrl9$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a
                                                        href="view-posted-event-information.aspx?r=lwl6UwIDuAsYcXG9ZLFieA==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dataTables_info" id="dtable_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 23 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="dtable_paginate"><a
                                            class="paginate_button previous disabled" aria-controls="dtable"
                                            data-dt-idx="0" tabindex="0" id="dtable_previous">Previous</a><span><a
                                                class="paginate_button current" aria-controls="dtable" data-dt-idx="1"
                                                tabindex="0">1</a><a class="paginate_button " aria-controls="dtable"
                                                data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                                aria-controls="dtable" data-dt-idx="3" tabindex="0">3</a></span><a
                                            class="paginate_button next" aria-controls="dtable" data-dt-idx="4"
                                            tabindex="0" id="dtable_next">Next</a></div>
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
