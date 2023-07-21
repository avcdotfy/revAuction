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
                                                    <form action="{{ route('report.runningEvent') }}" id="categoryForm"
                                                        method="get">
                                                        <select id="categorySelect" class="form-control" name="cat_id">
                                                            <option {{ $catId == null ? 'selected' : '' }} value="">
                                                                Select Category
                                                            </option>
                                                            @foreach ($categories as $cat)
                                                                <option {{ $cat->id == $catId ? 'selected' : '' }}
                                                                    value="{{ $cat->id }}">
                                                                    {{ $cat->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </form>

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
                                    <tbody id="eventList">
                                        @foreach ($events as $key => $event)
                                            <tr role="row" class="even">
                                                <td>2</td>
                                                <td><a data-toggle="modal"
                                                        href="#model_{{ $event->id }}">{{ EVENT_ID_PREFIX . $event->id }}</a>
                                                </td>
                                                <td>{{ $event->title }}</td>
                                                <td><a href="{{ route('event.statistics', $event->id) }}">View Event
                                                        Statistics</a></td>
                                                <td><a href="">View Information</a></td>
                                            </tr>

                                            {{-- Modal Starts --}}
                                            <div class="modal fade" id="model_{{ $event->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="border-radius: 4px;">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title"
                                                                style="font-weight: 600;text-align:center">Event
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
                                                                                    &amp; Time
                                                                                    : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>{{ $event->opening_date }}
                                                                                        {{ $event->opening_time }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Close
                                                                                    Date &amp; Time
                                                                                    : </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>{{ $event->closing_date }}
                                                                                        {{ $event->closing_time }}</label>
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
                                                                                    <label>{{ $event->user->name }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <label for="inputEmail3"
                                                                                    class="col-sm-4 control-label">Created
                                                                                    Date :
                                                                                </label>
                                                                                <div class="col-sm-8">
                                                                                    <label>{{ $event->created_at }}</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12" style="display:none">
                                                                                <hr
                                                                                    style="margin-top: 5px; margin-bottom: 5px;">
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
                                            {{-- Modal Ends --}}
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


@push('scripts')
    <script>
        $(document).ready(function() {
            $("#categorySelect").change(function(e) {

                $("#categoryForm").submit();

            });
        });
    </script>
@endpush
