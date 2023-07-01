@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>Home | Catalog | Category <small id="ContentPlaceHolder1_hTag">List</small></h4>
        <ol class="breadcrumb">
            <a href="{{ route('category.create') }}" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">+ Create New
                Category</a>
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
                                        role="grid" aria-describedby="dtable_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 43.3333px;">S.No.</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 109.812px;">Category Code</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 120.156px;">Category Name</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 358.625px;">Is Enable Item Time Trigger?</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 90.3125px;">Status</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 104.052px;">Updated Date</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 56.375px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key => $cat)
                                                <tr role="row" class="odd">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $cat->code }}</td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td><b>{{ $cat->item_time_trigger == 0 ? 'No' : 'yes' }}</b> | TG <i
                                                            class="fa fa-arrows-h"></i> Each Item is
                                                        <b>{{ $cat->time_gap_between_each_item }}</b>
                                                        Min
                                                        | CT <i class="fa fa-arrow-up"></i> in Last <b>
                                                            {{ $cat->last_minute_closing_time_increment }}</b> Min
                                                    </td>
                                                    @if ($cat->is_active)
                                                        <td><label class="label label-success"
                                                                style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                        </td>
                                                    @else
                                                        <td><label class="label label-danger"
                                                                style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Deactivated</label>
                                                        </td>
                                                    @endif

                                                    <td>{{ $cat->updated_at }}</td>
                                                    <td><a href="#"><i class="fa fa-edit"></i> Edit</a></td>
                                                </tr>
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
