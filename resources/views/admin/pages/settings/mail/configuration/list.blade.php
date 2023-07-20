@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | Mail Setting | Configuration <small id="ContentPlaceHolder1_hTag">List</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('config.mail.create') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">+ Create New Mail Configuration</a>
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
                                                style="width: 29.6771px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 116.083px;">Service Type</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3646px;">SMTP Host</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 58.0625px;">SMTP Port</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 122.375px;">Mail From</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 116.083px;">Display Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 122.375px;">Username</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 55.125px;">EnableSsl</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 65.9583px;">Status</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 39.8958px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>New Event Invitation</td>
                                            <td>smtp.gmail.com</td>
                                            <td>587</td>
                                            <td>services@sysaler.com</td>
                                            <td>New Event Invitation</td>
                                            <td>services@sysaler.com</td>
                                            <td>True</td>
                                            <td><label class="label label-success" title="True"
                                                    style="font-size:11px;font-weight:600;">Activated</label></td>
                                            <td><a href="mail-configuration.aspx?r=4B1QmJBAsAaLln5kYbI+JA=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>2</td>
                                            <td>Profile Changed</td>
                                            <td>smtp.gmail.com</td>
                                            <td>587</td>
                                            <td>services@sysaler.com</td>
                                            <td>Profile Changed</td>
                                            <td>services@sysaler.com</td>
                                            <td>True</td>
                                            <td><label class="label label-success" title="True"
                                                    style="font-size:11px;font-weight:600;">Activated</label></td>
                                            <td><a href="mail-configuration.aspx?r=Y7Ubn6c7hvLjihiwyLyQ/w=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>3</td>
                                            <td>Request Rejected</td>
                                            <td>smtp.gmail.com</td>
                                            <td>587</td>
                                            <td>services@sysaler.com</td>
                                            <td>Request Rejected</td>
                                            <td>services@sysaler.com</td>
                                            <td>True</td>
                                            <td><label class="label label-success" title="True"
                                                    style="font-size:11px;font-weight:600;">Activated</label></td>
                                            <td><a href="mail-configuration.aspx?r=Tg3R3dzL5d8qh2W0SyphdQ=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>4</td>
                                            <td>Request Accepted</td>
                                            <td>smtp.gmail.com</td>
                                            <td>587</td>
                                            <td>services@sysaler.com</td>
                                            <td>Request Accepted</td>
                                            <td>services@sysaler.com</td>
                                            <td>True</td>
                                            <td><label class="label label-success" title="True"
                                                    style="font-size:11px;font-weight:600;">Activated</label></td>
                                            <td><a href="mail-configuration.aspx?r=ydRRTTxkdt6Trx91pX1+cA=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>5</td>
                                            <td>Forgot Password</td>
                                            <td>smtp.gmail.com</td>
                                            <td>587</td>
                                            <td>services@sysaler.com</td>
                                            <td>Forgot Password</td>
                                            <td>services@sysaler.com</td>
                                            <td>True</td>
                                            <td><label class="label label-success" title="True"
                                                    style="font-size:11px;font-weight:600;">Activated</label></td>
                                            <td><a href="mail-configuration.aspx?r=BOII5FUynjpl5RZJJ8nW1g=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>6</td>
                                            <td>New Registration</td>
                                            <td>smtp.gmail.com</td>
                                            <td>587</td>
                                            <td>services@sysaler.com</td>
                                            <td>New Registration</td>
                                            <td>services@sysaler.com</td>
                                            <td>True</td>
                                            <td><label class="label label-success" title="True"
                                                    style="font-size:11px;font-weight:600;">Activated</label></td>
                                            <td><a href="mail-configuration.aspx?r=mELirpUhRYksFj7k8/XBcQ=="><i
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

@push('scripts')
@endpush
