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


                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_0">20-Jul-2023
                                                    02:09:34 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_0"
                                                    title="20-Jul-2023 02:09:34 PM">-</span></td>
                                            <td>172.70.242.58</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>2</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_1">20-Jul-2023
                                                    11:54:32 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_1"
                                                    title="20-Jul-2023 11:54:32 AM">-</span></td>
                                            <td>162.158.110.56</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>3</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_2">19-Jul-2023
                                                    06:33:23 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_2"
                                                    title="19-Jul-2023 06:33:34 PM">19-Jul-2023 06:33:34 PM</span></td>
                                            <td>162.158.110.104</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>4</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_3">19-Jul-2023
                                                    06:32:57 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_3"
                                                    title="19-Jul-2023 06:33:10 PM">19-Jul-2023 06:33:10 PM</span></td>
                                            <td>162.158.110.104</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>5</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_4">18-Jul-2023
                                                    05:13:13 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_4"
                                                    title="18-Jul-2023 05:13:13 PM">-</span></td>
                                            <td>::1</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>6</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_5">18-Jul-2023
                                                    03:52:15 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_5"
                                                    title="18-Jul-2023 03:52:15 PM">-</span></td>
                                            <td>::1</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>7</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_6">18-Jul-2023
                                                    01:40:05 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_6"
                                                    title="18-Jul-2023 01:40:05 PM">-</span></td>
                                            <td>::1</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>8</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_7">18-Jul-2023
                                                    01:00:29 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_7"
                                                    title="18-Jul-2023 01:00:29 PM">-</span></td>
                                            <td>::1</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>9</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_8">18-Jul-2023
                                                    10:11:29 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_8"
                                                    title="18-Jul-2023 10:11:29 AM">-</span></td>
                                            <td>::1</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>10</td>
                                            <td>admin</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_l_date_time_9">18-Jul-2023
                                                    09:47:35 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvElr_lbl_so_date_time_9"
                                                    title="18-Jul-2023 09:47:35 AM">-</span></td>
                                            <td>::1</td>
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