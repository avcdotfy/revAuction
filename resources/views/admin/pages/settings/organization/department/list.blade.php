@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Department List </h3>
        <ol class="breadcrumb">
            <a href="{{ route('department.create') }}" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">
                + Create New Department</a>
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
                                                style="width: 109.812px;">Department Code</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Department Name</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($departments as $key => $d)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $d->code }}</td>
                                                <td>{{ $d->name }}</td>

                                                @if ($d->is_active)
                                                    <td><label class="label label-success"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                    </td>
                                                @else
                                                    <td><label class="label label-danger"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Deactived</label>
                                                    </td>
                                                @endif

                                                <td><a href="{{ route('department.edit', $d->id) }}"><i
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
