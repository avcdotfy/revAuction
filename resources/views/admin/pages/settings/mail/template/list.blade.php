@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | Mail Setting | Template <small id="ContentPlaceHolder1_hTag">List</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('template.email.create') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">+ Create New Mail Template</a>
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
                                                style="width: 54.4167px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 186.99px;">Service Type</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.76px;">Template For</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 340.698px;">Mail Subject Line</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 110.062px;">Status</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 69.7396px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>New Event Invitation</td>
                                            <td>Admin Side</td>
                                            <td>New Event Invitation</td>
                                            <td>
                                                <label class="label label-success" title="True"
                                                    style="font-size: 11px; font-weight: 600;">Activated</label>
                                            </td>
                                            <td><a href="mail-template.aspx?r=4B1QmJBAsAaLln5kYbI+JA=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>2</td>
                                            <td>New Event Invitation</td>
                                            <td>Vendor Side</td>
                                            <td>New Event Invitation</td>
                                            <td>
                                                <label class="label label-success" title="True"
                                                    style="font-size: 11px; font-weight: 600;">Activated</label>
                                            </td>
                                            <td><a href="mail-template.aspx?r=Y7Ubn6c7hvLjihiwyLyQ/w=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>3</td>
                                            <td>Request Rejected</td>
                                            <td>Vendor Side</td>
                                            <td>Vendor Registration Request Rejected </td>
                                            <td>
                                                <label class="label label-success" title="True"
                                                    style="font-size: 11px; font-weight: 600;">Activated</label>
                                            </td>
                                            <td><a href="mail-template.aspx?r=Tg3R3dzL5d8qh2W0SyphdQ=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>4</td>
                                            <td>Request Accepted</td>
                                            <td>Vendor Side</td>
                                            <td>Vendor Regsitration Request Accepted</td>
                                            <td>
                                                <label class="label label-success" title="True"
                                                    style="font-size: 11px; font-weight: 600;">Activated</label>
                                            </td>
                                            <td><a href="mail-template.aspx?r=ydRRTTxkdt6Trx91pX1+cA=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>5</td>
                                            <td>Forgot Password</td>
                                            <td>Vendor Side</td>
                                            <td>Forgot Password</td>
                                            <td>
                                                <label class="label label-success" title="True"
                                                    style="font-size: 11px; font-weight: 600;">Activated</label>
                                            </td>
                                            <td><a href="mail-template.aspx?r=BOII5FUynjpl5RZJJ8nW1g=="><i
                                                        class="fa fa-edit"></i> Edit</a></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>6</td>
                                            <td>New Registration</td>
                                            <td>Vendor Side</td>
                                            <td>Vendor Registration Request Submitted</td>
                                            <td>
                                                <label class="label label-success" title="True"
                                                    style="font-size: 11px; font-weight: 600;">Activated</label>
                                            </td>
                                            <td><a href="mail-template.aspx?r=mELirpUhRYksFj7k8/XBcQ=="><i
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
