@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Events | Empty Events <small id="ContentPlaceHolder1_hTag">List</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="overflow: auto;">

                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 29.6771px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 104.083px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 686.292px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 95.9479px;">Posted Event</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($eventsEmpty as $key => $event)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td><a data-toggle="modal"
                                                        href="#model_edit_{{ $key }}">{{ EVENT_ID_PREFIX . $event->id }}</a>
                                                </td>
                                                <td>{{ $event->title }}</td>
                                                <td><a href="{{ route('event.postedEventInformation', $event->id) }}">View
                                                        Information</a></td>
                                            </tr>

                                            <div class="modal fade" id="model_edit_{{ $key }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="border-radius: 4px;">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title"
                                                                style="font-weight: 600;text-align:center">
                                                                Event
                                                                Basic Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="box">
                                                                        <div class="box-body">
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Open Date
                                                                                    &amp;
                                                                                    Time : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>11-05-2023 11:30 AM</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Close
                                                                                    Date
                                                                                    &amp;
                                                                                    Time : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>11-05-2023 06:02 PM</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Created
                                                                                    By :
                                                                                </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>admin</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Created
                                                                                    Date
                                                                                    :
                                                                                </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>10-05-2023 01:09:33 PM</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Updated
                                                                                    By :
                                                                                </label>
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
                                                                                    Date
                                                                                    :
                                                                                </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>10-05-2023 01:09:33 PM</label>
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
