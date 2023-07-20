@extends('admin.layout.base')


@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Closed Event List </h3>

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
                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 38.5104px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 44.7292px;">Event ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 170.583px;">Event Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.6354px;">Posted Event</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.6354px;">Consolidate Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 76.0521px;">L1 Report</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 76.0521px;">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($events as $key => $event)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>

                                                <td> {{ 'AVCDOTFYREVAUC000' . $event->id }}</td>
                                                <td>{{ $event->title }}</td>

                                                <td><a
                                                        href="view-posted-event-information.aspx?r=AfI07azv6nWhAj0qw/RJ5A==&amp;eT=kLkMeyff8/FYRoQs8uY1vA==">View
                                                        Information</a></td>

                                                <td><a id="ContentPlaceHolder1_lvCe_btn_generate_report_0"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvCe$ctrl0$btn_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a id="ContentPlaceHolder1_lvCe_btn_l1_generate_report_2"
                                                        href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvCe$ctrl2$btn_l1_generate_report','')">Generate
                                                        Report</a></td>
                                                <td><a href="take-event-decision.aspx?r=CLIrTXTdl+a2DIaNNlvA4g=="
                                                        target="_blank">Take Decision</a></td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
