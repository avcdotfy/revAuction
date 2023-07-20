@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Rejected Vendor List </h3>
        <ol class="breadcrumb">
            <button id="myBtn" style="color: white; font-weight: 600" class="btn-block btn-primary btn-sm"
                data-toggle="modal" data-target="#exampleModalLong"> Accept Vendor </button>
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
                                    role="grid" aria-describedby="dtable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 38.5104px;">S.No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 44.7292px;">Select</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 170.583px;">Company Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 70.6354px;">Vendor Type</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 76.0521px;">User Name</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 93.6562px;">Mobile No.</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 145.896px;">Email ID</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 108.917px;">Registered Date</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.917px;">Rejection Reason</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 46.6875px;">Profile</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($requests as $key => $req)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <input type="checkbox" name="ids" value="{{ $req->id }}">
                                                </td>
                                                <td>{{ $req->vendor->company_name }}</td>
                                                <td>{{ $req->vendor->vendor_type }}</td>
                                                <td><span
                                                        id="ContentPlaceHolder1_lvNvR_lblusername_0">{{ $req->vendor->user->username }}</span>
                                                </td>
                                                <td><span
                                                        id="ContentPlaceHolder1_lvNvR_lblmobile_0">{{ $req->vendor->user->phone }}</span>
                                                </td>
                                                <td><span
                                                        id="ContentPlaceHolder1_lvNvR_lblemail_0">{{ $req->vendor->user->email }}</span>
                                                </td>
                                                <td>{{ $req->vendor->created_at }}</td>
                                                <td>{{ $req->remark->message }}</td>
                                                <td><a href="{{ route('vendor.profile', $req->vendor->id) }}">View</a>
                                                </td>
                                            </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.partials.accept-request-remark-modal')
    </section>
@endsection

@push('scripts')
    <script>
        function setIds() {

            let val = $("input[name='ids']:checked").map(function() {
                return this.value;
            }).get().join(",");

            return val;
        }

        function acceptReq(ids) {
            let msg = $('#remark').val();
            $.ajax({
                type: "get",
                url: "{{ route('request.accept') }}",
                data: {
                    "ids": setIds(),
                    "msg": msg
                },
                success: function(res) {
                    console.log(res.status);
                    if (res.status) {
                        $('#exampleModalLong').modal(
                            'hide'
                        )
                        showToast(res.messages);
                        setTimeout(() => {
                            location.reload();

                        }, 2000);
                    }
                },
                error: function(er) {
                    console.log(er);
                }
            });
        }
    </script>
@endpush
