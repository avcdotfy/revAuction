@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Organization Setting | Employee </h3>
        <ol class="breadcrumb">
            <a href="{{ route('employee.create') }}" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">
                + Create New Employee</a>
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
                                                style="width: 109.812px;">Employee Role</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Employee ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 109.812px;">Employee Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Department</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Designation</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Mobile No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Email ID</th>



                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $key => $emp)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $emp->role }}</td>
                                                <td>{{ $emp->employee_id }}</td>
                                                <td>{{ $emp->name }}</td>
                                                <td>{{ $emp->department }}</td>
                                                <td>{{ $emp->designation }}</td>
                                                <td>{{ $emp->phone }}</td>
                                                <td>{{ $emp->email }}</td>

                                                {{-- <td>{{ $emp->password }}</td> --}}

                                                @if ($emp->is_active)
                                                    <td><label class="label label-success"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                    </td>
                                                @else
                                                    <td><label class="label label-danger"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Deactived</label>
                                                    </td>
                                                @endif

                                                <td><a href="{{ route('employee.edit', $emp->id) }}"><i
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
    </section>
    <!-- /.content -->
@endsection
