@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px; text-align: center; text-decoration: underline;">Notice & News
        </h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">


                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="padding: 20px; padding-top: 0px;  padding-bottom: 0px">
                                <h4 style="border-bottom: 1px solid #eaeaea; padding-bottom: 15px">{{ $notice->title }}</h4>
                                <p>{{!! $notice->msg !!}}</p>
                            </div>

                            <div class="col-sm-12" style="text-align: center;">
                                <hr>
                                <a href="{{ route('vendor.notice-news') }}" class="btn btn-sm btn-sm btn-primary"
                                    style="color: White; margin-left: 4px">Back</a>
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
