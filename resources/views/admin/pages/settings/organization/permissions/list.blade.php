@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Organization Setting | Role & Permissions </h3>
        <ol class="breadcrumb">
            <a href="{{ route('permission_role.create') }}" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">

                + Create New Role & Permissions</a>
        </ol>
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
                                                style="width: 80.812px;">Role Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 80.156px;">Role Description</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 586.156px;">Assigned Permissions</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($rolePermissions as $key => $role)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->description }}</td>

                                                <td>
                                                    <div class="row">
                                                        @foreach ($role->permissions as $item)
                                                            <div class="col-sm-4 col-md-4 col-lg-4"
                                                                style="padding: 4px; text-align: left;">
                                                                <div class="mN"><label>{{ $item->name }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </td>

                                                <td><label class="label label-success"
                                                        style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                </td>

                                                <td><a href="{{ route('permission_role.edit', $role->id) }}"><i
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
