@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Events | Participated Events Status List </h3>

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
                                <div id="dtable_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length col-lg-9" id="dtable_length"
                                        style="padding-left: 0px;padding-right: 0px;margin-bottom: 10px;">
                                        <label>Show <select name="dtable_length" aria-controls="dtable" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label>
                                    </div>
                                    <div class="dataTables_filter col-lg-3">
                                        <input type="text" placeholder="Search"
                                            style="border: 1px solid #747474;font-size: 11px;padding: 5px;border-radius: 2px;width: 100%;"
                                            name="">
                                    </div>
                                    <table class="table table-bordered table-striped dataTable no-footer" role="grid"
                                        aria-describedby="dtable_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 29.6771px;">S.No.</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 104.083px;">Event ID</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 660.969px;">Event Title</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 121.271px;">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td><a href="view-posted-event-information.html">ST020907202357</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Sun 09-Jul-2023 08:18 PM
                                                    and Closing Date &amp; Time - Sun 09-Jul-2023 09:01 PM (Daily)</td>
                                                <td><a href="view-participated-event-item-list.html"
                                                        target="_blank">Participated Items List</a></td>
                                            </tr>

                                            <tr role="row" class="even">
                                                <td>2</td>
                                                <td><a href="view-posted-event-information.html">ST020806202344</a></td>
                                                <td>Event for [Steel] : Opening Date &amp; Time - Thu 08-Jun-2023 06:58 PM
                                                    and Closing Date &amp; Time - Thu 08-Jun-2023 07:08 PM (Daily)</td>
                                                <td><a href="view-participated-event-item-list.html"
                                                        target="_blank">Participated Items List</a></td>
                                            </tr>



                                        </tbody>
                                    </table>
                                    <div class="col-lg-12 " style="padding-left: 0px; padding-right: 0px">
                                        <p class="col-lg-6" style="text-align: left;padding-left: 8px; line-height: 30px">
                                            Showing 1 to 4 of 4 entries</p>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <div class="pagination " style="margin: 0px 0; ">
                                                <!--  <a href="#">&laquo;</a> -->
                                                <a href="#">Prev</a>
                                                <a class="active" href="#">1</a>
                                                <a href="#">Next</a>
                                                <!-- <a href="#">4</a>
          <a href="#">5</a>
          <a href="#">6</a> -->
                                                <!-- <a href="#">&raquo;</a> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
@endpush
