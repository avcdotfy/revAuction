@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px; text-align: center; text-decoration: underline;">Help & Support
        </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-xs-12" style=" text-align: center;">
                <h4 style="padding-bottom: 15px"> {!! $hs->msg !!}</h4>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-2">

            </div>
            <div class="col-xs-4">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12"
                                style="padding: 20px; padding-top: 0px;  padding-bottom: 0px; text-align: center;">
                                <h4 style="padding-bottom: 4px"> <i class='bx bx-phone-call' style="font-size: 40px"></i>
                                </h4>
                                <h4 style="padding-bottom: 15px">Call Us : {{ $hs->phone }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12"
                                style="padding: 20px; padding-top: 0px;  padding-bottom: 0px; text-align: center;">
                                <h4 style="padding-bottom: 4px"> <i class='bx bx-mail-send' style="font-size: 40px"></i>
                                </h4>
                                <h4 style="padding-bottom: 15px">customer.{{ $hs->email }}</h4>
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
