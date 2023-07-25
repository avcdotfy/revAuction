@extends('vendor.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Notice & News List </h3>

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
                                    role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 43.3333px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width:250.812px;">Notice & News Title</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.156px;">Updated Date </th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 40.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notices as $key => $notice)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $notice->title }}</td>

                                                <td>{{ $notice->created_at }}</td>

                                                <td><a href="{{ route('vendor.details-News', $notice->id) }}"><i
                                                            class="fa fa-eye"></i>
                                                        View</a></td>
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
