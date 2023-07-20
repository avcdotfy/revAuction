@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Catalog | Items List </h3>
        <ol class="breadcrumb">
            <a href="{{ route('item.create') }}" style="color: white; font-weight: 600" class="btn-block btn-primary btn-sm">
                + Create New Item</a>
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
                                                style="width: 109.812px;">Product Range</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 230.156px;">Item Code & Description</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 59.812px;">UoM</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 120.156px;">Item Region & Price</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Status</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 90.3125px;">Updates on</th>

                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 56.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $key => $i)
                                            <tr role="row" class="odd">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $i->cat_name }}</td>
                                                <td>{{ $i->item_code }}/{{ $i->description }}</td>
                                                <td>{{ $i->unit }}</td>

                                                <td>
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="getDetails({{ $i->id }})">
                                                        View
                                                    </button>

                                                    {{-- <a data-toggle="modal" data-target="#exampleModalLong">View</a> --}}
                                                </td>

                                                @if ($i->is_active)
                                                    <td>
                                                        <label class="label label-success"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Activated</label>
                                                    </td>
                                                @else
                                                    <td>
                                                        <label class="label label-danger"
                                                            style="font-size: 11px; font-weight: 600;text-transform:capitalize;">Deactivated</label>
                                                    </td>
                                                @endif
                                                <td>{{ $i->updated_at }}</td>
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

            @include('admin.partials.item-details-modal')

    </section>
    <!-- /.content -->
@endsection


@push('scripts')
    <script>
        function getDetails(iId) {
            $.ajax({
                type: "get",
                url: "{{ route('item.rpu-details') }}",
                data: {
                    "item_id": iId
                },
                success: function(res) {
                    $("#decrement_price").text(res.item.decrement_price);
                    $("#item_title").text(res.item.code + " " + res.item.description);
                    $("#category").text(res.category.name);
                    $("#total_base_price").text(res.item.total_base_price);
                    $("#total_unit").text(res.item.total_unit);

                    $("#is_manually_change_bidding_price").text(res.item.is_manually_change_bidding_price == 1 ?
                        "Yes" : "No");
                    $("#itemDetailModel").modal('show');

                    appendRowToTable(res.itemRpu)
                    console.log(res)
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }


        function appendRowToTable(itemRpus) {
            $("#tblebody").empty();
            console.log(itemRpus);
            itemRpus.forEach((rpu, key) => {
                let row = `
                        <tr>
                            <td>${key + 1}</td>
                            <td>${rpu.price}</td>
                            <td>${rpu.region}</td>
                            <td>${rpu.unit}</td>
                            <td>${rpu.unit_details}</td>
                            <td></td>
                        </tr>
                `;

                $("#tblebody").append(row);

            });
        }
    </script>
@endpush
