@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Login Trail | Vendor Login Report <small id="ContentPlaceHolder1_hTag">List</small></h1>
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
                                                style="width: 117.333px;">Login ID</th>
                                            <th style="display: none; width: 0px;" class="sorting_disabled" rowspan="1"
                                                colspan="1">Month</th>
                                            <th style="display: none; width: 0px;" class="sorting_disabled" rowspan="1"
                                                colspan="1">Year</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 266.333px;">Login Date Time</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 267.333px;">Logout Date Time</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 187px;">Public IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>bidder2</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_0">19-Jul-2023
                                                    06:57:32 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_0"
                                                    title="19-Jul-2023 06:57:32 PM">-</span></td>
                                            <td>162.158.110.53</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>2</td>
                                            <td>bidder2</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_1">19-Jul-2023
                                                    06:31:15 PM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_1"
                                                    title="19-Jul-2023 06:31:15 PM">-</span></td>
                                            <td>162.158.110.105</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>3</td>
                                            <td>bidder1</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_2">15-Jul-2023
                                                    11:13:44 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_2"
                                                    title="15-Jul-2023 11:14:31 AM">15-Jul-2023 11:14:31 AM</span></td>
                                            <td>172.70.246.137</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>4</td>
                                            <td>bidder1</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_3">15-Jul-2023
                                                    11:11:30 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_3"
                                                    title="15-Jul-2023 11:11:30 AM">-</span></td>
                                            <td>162.158.110.14</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>5</td>
                                            <td>bidder8</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_4">15-Jul-2023
                                                    10:46:07 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_4"
                                                    title="15-Jul-2023 10:46:07 AM">-</span></td>
                                            <td>172.69.33.6</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>6</td>
                                            <td>bidder5</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_5">15-Jul-2023
                                                    10:43:57 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_5"
                                                    title="15-Jul-2023 10:45:54 AM">15-Jul-2023 10:45:54 AM</span></td>
                                            <td>162.158.91.45</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>7</td>
                                            <td>kumarajay</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_6">15-Jul-2023
                                                    10:19:52 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_6"
                                                    title="15-Jul-2023 10:19:52 AM">-</span></td>
                                            <td>172.70.147.107</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>8</td>
                                            <td>kumarajay</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_7">15-Jul-2023
                                                    10:13:48 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_7"
                                                    title="15-Jul-2023 10:13:48 AM">-</span></td>
                                            <td>172.70.92.239</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>9</td>
                                            <td>bidder2</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_8">14-Jul-2023
                                                    11:36:41 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_8"
                                                    title="14-Jul-2023 11:36:41 AM">-</span></td>
                                            <td>162.158.94.88</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>10</td>
                                            <td>bidder1</td>
                                            <td style="display: none;">July</td>
                                            <td style="display: none;">2023</td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_l_date_time_9">14-Jul-2023
                                                    11:36:12 AM</span></td>
                                            <td><span id="ContentPlaceHolder1_lvVlr_lbl_so_date_time_9"
                                                    title="14-Jul-2023 11:36:12 AM">-</span></td>
                                            <td>172.69.150.152</td>
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