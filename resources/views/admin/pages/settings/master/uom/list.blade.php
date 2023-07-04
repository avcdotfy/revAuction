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
                                <div id="dtable_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length col-lg-9" id="dtable_length"
                                        style="padding-left: 0px;padding-right: 0px;margin-bottom: 10px;">
                                        <label>Show <select name="dtable_length" aria-controls="dtable" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label>
                                    </div>
                                    <div class="dataTables_filter col-lg-3">
                                        <input type="text" placeholder="Search"
                                            style="border: 1px solid #747474;font-size: 11px;padding: 5px;border-radius: 2px;width: 100%;"
                                            name="">
                                    </div>
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
                                                    <td><label class="label label-success"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                    </td>
                                                    <td><a href="#"><i class="fa fa-edit"></i> Edit</a></td>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>

                                    <div class="col-lg-12 " style="padding-left: 0px; padding-right: 0px">
                                        <p class="col-lg-6" style="text-align: left;padding-left: 8px; line-height: 30px">
                                            Showing 1 to 4 of 4 entries</p>
                                        <div class="col-lg-6" style="text-align: right;">
                                            <div class="pagination " style="margin: 0px 0; ">
                                                <!--  <a href="#">&laquo;</a> -->
                                                <a href="#">Prev</a>
                                                <a class="active" href="#">1</a>
                                                <a href="#">Next</a>
                                                <!-- <a href="#">4</a>
                                                  <a href="#">5</a>
                                                  <a href="#">6</a> -->
                                                <!-- <a href="#">&raquo;</a> -->
                                            </div>
                                        </div>
                                    </div>

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
