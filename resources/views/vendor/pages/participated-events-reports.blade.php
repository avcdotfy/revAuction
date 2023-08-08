@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Events | Participated Events Report List </h3>
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
                                            <td colspan="6" rowspan="1">
                                                <form method="get"
                                                    action="{{ route('vendor.filter-participated-event-reports') }}">
                                                    <div class="col-sm-3">
                                                        <select name="cat_id" class="form-control" required>
                                                            <option selected disabled value="">Select Category
                                                            </option>
                                                            @foreach ($categories as $cat)
                                                                <option value="{{ $cat->id }}">{{ $cat->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4" style="padding: 0px;">
                                                        <label for="inputPassword3" class="col-sm-5 control-label">Closed
                                                            From Date :</label>
                                                        <div class="col-sm-7">
                                                            <input name="fromdate" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4" style="padding: 0px;">
                                                        <label for="inputPassword3" class="col-sm-5 control-label">Closed To
                                                            Date :</label>
                                                        <div class="col-sm-7">
                                                            <input name="todate" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1" style="text-align:right;">
                                                        <input type="submit" value="Search" class="btn btn-sm btn-primary">
                                                    </div>

                                                </form>
                                            </td>
                                        </tr>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 38.5104px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 44.7292px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 300.583px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 30px;">
                                                Action </th>
                                        </tr>
                                        @foreach ($participatedEvents as $key => $p)
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 38.5104px;">{{ $key + 1 }}</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 44.7292px;">{{ EVENT_ID_PREFIX . $p->event->id }}</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 300.583px;">{{ $p->event->title }}</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 30px;">
                                                    Download Report </th>
                                            </tr>
                                        @endforeach

                                    </thead>
                                    <tbody>

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
