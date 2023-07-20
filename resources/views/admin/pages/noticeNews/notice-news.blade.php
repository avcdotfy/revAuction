@extends('admin.layout.base')


@section('main_section')
    <section class="content-header">
        <h1>Home | Notice &amp; News <small id="ContentPlaceHolder1_hTag">List</small></h1>
        <ol class="breadcrumb">
            <a href="notice-news.aspx?r=new" id="ContentPlaceHolder1_aCN" style="color: white"
                class="btn-block btn-primary btn-sm">+ Create New Notice &amp; News</a>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">


                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="overflow: auto;">
                                <div id="dtable_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length" id="dtable_length"><label>Show <select
                                                name="dtable_length" aria-controls="dtable" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <div id="dtable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                class="" placeholder="" aria-controls="dtable"></label></div>
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



                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td> Leading player in the industry for our commitment to innovation and
                                                    exceptional customer satisfaction</td>
                                                <td><label class="label label-success" title="True"
                                                        style="font-size:11px;font-weight:600;">Activated</label></td>
                                                <td>09-07-2023</td>
                                                <td><a href="notice-news.aspx?r=mELirpUhRYksFj7k8/XBcQ=="><i
                                                            class="fa fa-edit"></i> Edit</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dataTables_info" id="dtable_info" role="status" aria-live="polite">Showing
                                        1 to 1 of 1 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="dtable_paginate"><a
                                            class="paginate_button previous disabled" aria-controls="dtable" data-dt-idx="0"
                                            tabindex="0" id="dtable_previous">Previous</a><span><a
                                                class="paginate_button current" aria-controls="dtable" data-dt-idx="1"
                                                tabindex="0">1</a></span><a class="paginate_button next disabled"
                                            aria-controls="dtable" data-dt-idx="2" tabindex="0" id="dtable_next">Next</a>
                                    </div>
                                </div>
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
