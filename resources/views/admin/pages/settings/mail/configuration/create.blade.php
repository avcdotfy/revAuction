@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | Mail Setting | Configuration <small id="ContentPlaceHolder1_hTag">Create
                Information</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('config.mail.list') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">Go Back To List</a>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="{{ route('config.mail.store') }}" method="post">
                                @csrf
                                @include('admin.pages.settings.mail.configuration.form')
                            </form>
                            {{-- <div class="col-sm-3" style="padding: 0px;">
                                <div class="col-sm-12" style="padding: 0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Test Mail
                                        Configuration</label>
                                    <div class="col-sm-12">
                                        <input name="ctl00$ContentPlaceHolder1$txt_test_email_id" type="text"
                                            id="ContentPlaceHolder1_txt_test_email_id" class="form-control"
                                            placeholder="Enter Test Email ID">
                                    </div>
                                    <div class="col-sm-12" style="text-align: center;">

                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btn_send_test_mail"
                                            value="Send Test Mail" id="ContentPlaceHolder1_btn_send_test_mail"
                                            class="btn btn-primary btn-sm">
                                    </div>
                                </div>
                            </div> --}}
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
