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
                                        <span class="info-box-number">{{ count($upcomingEvents) }}</span>
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
                                        <span id="ContentPlaceHolder1_lbl_ReC"
                                            class="info-box-number">{{ count($runningEvents) }}</span>
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
                                        <span id="ContentPlaceHolder1_lbl_CeC"
                                            class="info-box-number">{{ count($participatedEvents) }}</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </div>
                            <!-- ./col -->
                            {{-- <div class="col-lg-3 col-6">
                                 
                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="bx bx-calendar"
                                            style="font-size: 44px;"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">PARTICIPATED EVENTS Status</span>
                                        <span id="ContentPlaceHolder1_lbl_DTeC" class="info-box-number">4</span>
                                    </div>
                                   
                                </div>
                            </div> --}}
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
                            <a href="{{ route('vendor.upcoming-events') }}" style="color: #000;">Upcoming Events</a>
                        </h4>
                        <hr style="margin-bottom: 14px;" />

                        <div class="holder">
                            @if (count($upcomingEvents))
                                <marquee direction="up" Scrollamount=4>
                                    <ul id="ticker01">
                                        @foreach ($upcomingEvents as $e)
                                            <li><span><img src="{{ asset('images/new.png') }}" style="width: 30px"></span>
                                                <a href="#" style="color: #000"> {{ $e->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </marquee>
                            @else
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="{{ route('vendor.running-events') }}" style="color: #000;">Running Events</a>
                        </h4>
                        <hr style="margin-bottom: 14px;" />
                        <div class="holder">
                            @if (count($runningEvents))
                                <marquee direction="up" Scrollamount=4>
                                    <ul id="ticker01">
                                        @foreach ($runningEvents as $e)
                                            <li><span><img src="{{ asset('images/new.png') }}" style="width: 30px"></span>
                                                <a href="#" style="color: #000"> {{ $e->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </marquee>
                            @else
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 small_box" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4
                            style="text-align: center; text-decoration-line: underline;text-transform:uppercase;font-weight:700;">
                            <a href="#" style="color: #000;">Closed Events</a>
                        </h4>
                        <hr style="margin-bottom: 14px;" />
                        <div class="holder">
                            @if (count($closedEvents))
                                <marquee direction="up" Scrollamount=4>
                                    <ul id="ticker01">
                                        @foreach ($closedEvents as $e)
                                            <li><span><img src="{{ asset('images/new.png') }}" style="width: 30px"></span>
                                                <a href="#" style="color: #000"> {{ $e->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </marquee>
                            @else
                                <h4 style="text-align: center;color: #5e5e5e; padding-top: 3em;">Currently No Events
                                </h4>
                            @endif
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
