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
                                <table class="table table-bordered table-striped dataTable no-footer" role="grid"
                                    id="dtable" aria-describedby="dtable_info">
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
                                        @foreach ($participates as $key => $p)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td><a
                                                        href="{{ route('vendor.posted-event-info', $p->event->id) }}">{{ EVENT_ID_PREFIX . $p->event->id }}</a>
                                                </td>
                                                <td>{{ $p->event->title }}</td>
                                                <td><a href="{{ route('vendor.participated-event-item-status-list', $p->event->id) }}"
                                                        target="_blank">Participated Items Status List</a></td>
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

@push('scripts')
@endpush
