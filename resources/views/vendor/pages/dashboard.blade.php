@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom:  20px;">
        <h1 style="text-align:center;text-decoration-line:underline;font-weight:700; text-transform: capitalize;">Welcome
            back to your dashboard </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body" style="padding-bottom: 0px;">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-yellow">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Upcoming Event</span>
                                        <span class="info-box-number">1</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-blue">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Running Event</span>
                                        <span id="ContentPlaceHolder1_lbl_ReC" class="info-box-number">0</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-navy">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">PARTICIPATED EVENTS</span>
                                        <span id="ContentPlaceHolder1_lbl_CeC" class="info-box-number">13</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">PARTICIPATED EVENTS Status</span>
                                        <span id="ContentPlaceHolder1_lbl_DTeC" class="info-box-number">4</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row div-display">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="upcoming-event.aspx" style="color: #000;">Upcoming Events</a>
                        </h4>
                        <hr / style="margin-bottom: 14px;
">
                        <div class="holder">
                            <ul id="ticker01">
                                <li><span><img src="images/new.png" style="width: 30px"></span>
                                    <a href="#" style="color: #000">Event for [Steel] : Opening Date & Time - Thu
                                        29-Jun-2023 09:00 AM and Closing Date & Time - Thu 29-Jun-2023 06:11 PM (Daily)</a>
                                </li>

                                <li><span><img src="images/new.png" style="width: 30px"></span>
                                    <a href="#" style="color: #000">Event for [Steel] : Opening Date & Time - Thu
                                        29-Jun-2023 09:00 AM and Closing Date & Time - Thu 29-Jun-2023 06:11 PM (Daily)</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="running-event.aspx" style="color: #000;">Running Events</a>
                        </h4>
                        <hr />
                        <!-- <div class="holder">
            <ul id="ticker01">
                    <li><span><img src="images/new.png" style="width: 30px"></span>
                      <a href="#" style="color: #000">Event for [Steel] : Opening Date & Time - Thu 29-Jun-2023 09:00 AM and Closing Date & Time - Thu 29-Jun-2023 06:11 PM (Daily)</a></li>

                      <li><span><img src="images/new.png" style="width: 30px"></span>
                      <a href="#" style="color: #000">Event for [Steel] : Opening Date & Time - Thu 29-Jun-2023 09:00 AM and Closing Date & Time - Thu 29-Jun-2023 06:11 PM (Daily)</a></li>
                                    
                          </ul>
            </div> -->
                        <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events </h4>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="closed-event.aspx" style="color: #000;">Closed Events</a>
                        </h4>
                        <hr />

                        <div class="holder">
                            <ul id="ticker01">
                                <li><a href="#" style="color: #000"> Event for [Steel] : Opening Date & Time - Wed
                                        28-Jun-2023 03:49 PM and Closing Date & Time - Wed 28-Jun-2023 04:11 PM (Daily)</a>
                                </li>

                                <li><a href="#" style="color: #000"> Event for [Steel] : Opening Date & Time - Mon
                                        19-Jun-2023 12:40 AM and Closing Date & Time - Mon 19-Jun-2023 01:01 AM (Daily)</a>
                                </li>


                                <li><a href="#" style="color: #000"> Event for [Steel] : Opening Date & Time - Thu
                                        08-Jun-2023 07:10 PM and Closing Date & Time - Thu 08-Jun-2023 07:25 PM (Daily)</a>
                                </li>


                                <li><a href="#" style="color: #000"> Event for [Steel] : Opening Date & Time - Tue
                                        30-May-2023 02:57 PM and Closing Date & Time - Tue 30-May-2023 06:03 PM (Daily)</a>
                                </li>

                                <li><a href="#" style="color: #000"> Event for [Steel] : Opening Date & Time - Thu
                                        25-May-2023 02:10 PM and Closing Date & Time - Thu 25-May-2023 05:11 PM (Daily)</a>
                                </li>

                                <li><a href="#" style="color: #000"> Event for Steel : Opening Date & Time
                                        10-05-2023 10:40 PM (IST) and Closing Date & Time 10-05-2023 11:00 PM (IST)</a></li>



                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection


@push('scripts')
@endpush
