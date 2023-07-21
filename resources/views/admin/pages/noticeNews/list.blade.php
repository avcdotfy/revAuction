@extends('admin.layout.base')


@section('main_section')
    <section class="content-header">
        <h1>Home | Notice &amp; News <small id="ContentPlaceHolder1_hTag">List</small></h1>
        <ol class="breadcrumb">
            <a href="{{ route('notice.create') }}" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">+ Create New Notice &amp; News</a>
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
                                                style="width: 37.0417px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 643px;">Notice &amp; News Title</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 79.0938px;">Status</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 91.3958px;">Updated Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 48.8021px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notices as $key => $n)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $n->title }}</td>
                                                <td><label class="label label-success" title="True"
                                                        style="font-size:11px;font-weight:600;">Activated</label></td>
                                                <td>{{ $n->created_at }}</td>
                                                <td><a href="{{ route('notice.edit', $n->id) }}"><i class="fa fa-edit"></i>
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
