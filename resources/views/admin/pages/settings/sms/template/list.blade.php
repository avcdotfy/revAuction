@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | SMS Setting | Template <small id="ContentPlaceHolder1_hTag">List</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('template.sms.create') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">+ Create New SMS Template</a>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.9062px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 122.208px;">Service Type</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 513.188px;">SMS Template</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 134.302px;">Status</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 72.7292px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>Login OTP</td>
                                            <td>Dear Sir, Account Login OTP is {login_otp}. BMM ISPAT LTD</td>
                                            <td><label class="label label-danger" title="False"
                                                    style="font-size:11px;font-weight:600;">Deactivated</label></td>
                                            <td><a href="sms-template.aspx?r=mELirpUhRYksFj7k8/XBcQ=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
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
