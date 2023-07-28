@extends('admin.layout.base')

@section('main_section')
    <section class="content-header">
        <h1>Home | Settings | Mail Setting | Template <small id="ContentPlaceHolder1_hTag">List</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('template.email.create') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">+ Create New Mail Template</a>
        </ol>
    </section>
    <section class="content">
        @include('admin.partials.alerts')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="overflow: auto;">

                                <table id="dtable" class="table table-bordered table-striped dataTable no-footer"
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 54.4167px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 186.99px;">Service Type</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.76px;">Template For</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 340.698px;">Mail Subject Line</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 110.062px;">Status</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 69.7396px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($templates as $key => $t)
                                            <tr role="row" class="even">

                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $t->service_type }}</td>
                                                <td>{{ $t->template_for }}</td>
                                                <td>{{ $t->subject }}</td>
                                                <td>
                                                    <label class="label label-{{ $t->is_active ? 'success' : 'danger' }}"
                                                        title="True"
                                                        style="font-size: 11px; font-weight: 600;">{{ $t->is_active ? 'Active' : 'Deactive' }}</label>
                                                </td>
                                                <td><a href="{{ route('template.email.edit', $t->id) }}"><i
                                                            class="fa fa-edit"></i>
                                                        Edit</a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection
