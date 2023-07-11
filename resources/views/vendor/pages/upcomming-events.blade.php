@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Events | Upcoming Events List </h3>

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
                                <div id="dtable_wrapper" class="dataTables_wrapper no-footer">

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
                                                    style="width: 70.6354px;">Documents</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($events as $key => $event)
                                                @if ($event->status == 'SCHEDULED')
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td> <a href="">{{ $event->id }} </a></td>

                                                        <td>
                                                            {{ $event->title }} <span class="badge "
                                                                style="background-color: yellow ; color:black !important">{{ $event->status }}</span>
                                                        </td>
                                                        <td>-</td>
                                                    </tr>
                                                    @php
                                                        $i = $i + 1;
                                                    @endphp
                                                @endif
                                            @endforeach


                                        </tbody>
                                    </table>



                                </div>
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
