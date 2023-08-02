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
                                    role="grid" aria-describedby="dtable_info" style="width: 985px;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 64.3333px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 117.333px;">Type</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 117.333px;">User Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 266.333px;">Login Date Time</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 267.333px;">Logout Date Time</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 187px;">Public IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logins as $key => $l)
                                            @if ($l->user->user_type == USER_TYPES[2])
                                                <tr role="row" class="odd">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $l->user->user_type }}</td>
                                                    <td>{{ $l->user->username }}</td>
                                                    <td><span>{{ $l->login_date_time }}</span>
                                                    </td>
                                                    <td><span>{{ $l->logout_date_time ? $l->logout_date_time : '-' }}</span>
                                                    </td>
                                                    <td>{{ $l->public_ip }}</td>
                                                </tr>
                                            @endif
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
