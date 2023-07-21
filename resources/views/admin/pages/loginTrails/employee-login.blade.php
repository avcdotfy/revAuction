@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Login Trail | Employee Login Report <small id="ContentPlaceHolder1_hTag">List</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info" style="width: 986px;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.3333px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 110.333px;">Login ID</th>
                                            <th style="display: none; width: 0px;" class="sorting_disabled" rowspan="1"
                                                colspan="1">Month</th>
                                            <th style="display: none; width: 0px;" class="sorting_disabled" rowspan="1"
                                                colspan="1">Year</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 267.333px;">Login Date Time</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 267.333px;">Logout Date Time</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 188px;">Public IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logins as $key => $l)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $l->login_id }}</td>

                                                <td><span
                                                        id="ContentPlaceHolder1_lvElr_lbl_l_date_time_0">{{ $l->login_date_time }}</span>
                                                </td>
                                                <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_0"
                                                        title="20-Jul-2023 02:09:34 PM">-</span></td>
                                                <td>{{ $l->public_ip }}</td>
                                            </tr>
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
