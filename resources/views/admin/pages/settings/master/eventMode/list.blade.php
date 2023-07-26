@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Event Mode List</h3>
        <ol class="breadcrumb">
            <a href="{{ route('eventmode.create') }}" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">
                + Create New Event Mode</a>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        @include('admin.partials.alerts')
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
                                                style="width:100.812px;">Event Mode </th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.156px;">Updated on</th>


                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($eventModes as $key => $ev)
                                            <tr role="row" class="even">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $ev->mode }}</td>
                                                <td>{{ $ev->updated_at }}</td>
                                                <td><label
                                                        class="label {{ $ev->is_active ? 'label-success' : 'label-danger' }}"
                                                        style="font-size: 11px; font-weight: 600;text-transform:capitalize;">{{ $ev->is_active ? 'Active' : 'Deactive' }}</label>
                                                </td>
                                                <td><a href="{{ route('eventmode.edit', $ev->id) }}"><i
                                                            class="fa fa-edit"></i> Edit</a></td>
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
