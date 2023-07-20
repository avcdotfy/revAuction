@extends('admin.layout.base')


@section('main_section')
    <section class="content-header">
        <h1>Home | Vendors | New Items Update To All Vendors</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <div id="ContentPlaceHolder1_div_list" class="row">
                            <div class="col-sm-12" style="padding: 0px;">
                                <div class="col-sm-5">
                                    <span id="ContentPlaceHolder1_RequiredFieldValidator4"
                                        style="font-size:12px;color:red;font-weight:600;display:none;">Please Select Product
                                        Range</span>
                                    <select name="ctl00$ContentPlaceHolder1$ddl_product_range_list"
                                        id="ContentPlaceHolder1_ddl_product_range_list" class="form-control">
                                        <option value="0">Select Product Range</option>
                                        <option value="2">Steel</option>

                                    </select>
                                </div>
                                <div class="col-sm-7">
                                    <input type="button" name="ctl00$ContentPlaceHolder1$btn_search" value="Fetch"
                                        onclick="if(Page_ClientValidate('S')){this.disabled=true;this.value='Fetching...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_search','')"
                                        id="ContentPlaceHolder1_btn_search" class="btn btn-primary btn-sm">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btn_item_update" value="Update"
                                        id="ContentPlaceHolder1_btn_item_update" class="btn btn-success btn-sm">
                                </div>
                            </div>
                            <div class="col-sm-12" style="padding: 0px;">
                                <div class="col-sm-5">
                                    <div class="col-sm-12" style="padding: 0px;">
                                        <h4>Item List</h4>
                                        <div class="box" style="overflow: auto;max-height:750px;">
                                            <div class="box-body">
                                                <div id="dtable_eIl_wrapper" class="dataTables_wrapper no-footer">
                                                    <div id="dtable_eIl_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class="" placeholder=""
                                                                aria-controls="dtable_eIl"></label>
                                                    </div>
                                                    <table id="dtable_eIl"
                                                        class="table table-bordered table-striped dataTable no-footer"
                                                        role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    style="width: 26.8438px;">#</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    style="width: 115.833px;">Item Code</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    style="width: 178.323px;">Item Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr class="odd">
                                                                <td valign="top" colspan="3" class="dataTables_empty">
                                                                    No data available in table</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="col-sm-12" style="padding: 0px;">
                                        <h4>Vendor List</h4>
                                        <div class="box" style="overflow: auto;max-height:750px;">
                                            <div class="box-body">
                                                <div id="dtable_eVl_wrapper" class="dataTables_wrapper no-footer">
                                                    <div id="dtable_eVl_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class="" placeholder=""
                                                                aria-controls="dtable_eVl"></label>
                                                    </div>
                                                    <table id="dtable_eVl"
                                                        class="table table-bordered table-striped dataTable no-footer"
                                                        role="grid">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    style="width: 35.375px;">#</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    style="width: 74.0625px;">Logo</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    style="width: 191.594px;">Company Info.</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    style="width: 171.969px;">Contact Info.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr class="odd">
                                                                <td valign="top" colspan="4"
                                                                    class="dataTables_empty">No data available in table
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
