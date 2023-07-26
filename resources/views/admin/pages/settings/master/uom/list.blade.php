@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">UoM List </h3>
        <ol class="breadcrumb">
            <a href="{{ route('uom.create') }}" style="color: white; font-weight: 600" class="btn-block btn-primary btn-sm">
                + Create New UoM</a>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        @include('admin.partials.alerts')

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
                                                style="width:150.812px;">UoM Code</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">UoM Name </th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 150.156px;">Updated Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($uoms as $uom)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $uom->code }}</td>
                                                <td>{{ $uom->name }}</td>
                                                <td>{{ $uom->updated_at }}</td>
                                                <td><label class="label label-{{ $uom->is_active ? 'success' : 'danger' }}"
                                                        style="font-size: 11px; font-weight: 600;text-transform:capitalize;">{{ $uom->is_active ? 'Active' : 'Deactive' }}</label>
                                                </td>
                                                <td><a href="{{ route('uom.edit', $uom->id) }}"><i class="fa fa-edit"></i>
                                                        Edit</a></td>
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
