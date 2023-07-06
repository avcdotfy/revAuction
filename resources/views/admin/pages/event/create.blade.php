@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Events | Create New Event </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        @include('admin.partials.alerts')
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">

                            <form action="{{ route('event.store') }}" method="post">
                                @csrf
                                @include('admin.pages.event.form')
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>


                <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $('#opening_hrs').on('change', function(ev) {
                console.log(ev.target.value);
            })
            $('#opening_minutes').on('change', function(ev) {
                console.log(ev.target.value);
            })
            $('#opening_ampm').on('change', function(ev) {
                console.log(ev.target.value);
            })

            // closing_minutes
            // closing_hrs
            // closing_ampm
        });


        $(document).ready(function() {
            $('#categorySelect').on('change', function(ev) {
                getVendors(ev.target.value);
                getItemsRpu(ev.target.value);
            })

            function getVendors(catId) {
                $.ajax({
                    type: "get",
                    url: "{{ route('event.vendors') }}",
                    data: {
                        'cat_id': catId
                    },
                    success: function(res) {
                        console.log(res.vendors)
                        $("#vendorTableBody").empty();

                        res.vendors.forEach((vendor , key) => {
                            $('#vendorTableBody').append(
                                `<tr role="row" class="odd">
                                    <td> ${key+1} </td>
                                    <td> <input type="checkbox" name="vendor_id[]" value= ${vendor.id}> </td>
                                    <td>${vendor.company_name}</td>
                                    <td><span>${vendor.username}</span>
                                    </td>
                                    <td><span>${vendor.phone}</span>
                                    </td>
                                    <td><span>${vendor.email }</span>
                                    </td>
                                    <td><a href="profile-view.html">View</a></td>
                                </tr>`
                            );


                        });
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }

            function getItemsRpu(catId) {
                $.ajax({
                    type: "get",
                    url: "{{ route('event.itemsRpu') }}",
                    data: {
                        'cat_id': catId
                    },
                    success: function(res) {
                        console.log(res.items)
                        $("#itemTableBody").empty();
                        res.items.forEach((rpu  , key)=> {
                            $("#itemTableBody").append(
                                ` <tr role="row" class="odd">
                                    <td> ${ key +1  }</td>
                                    <td>
                                        <input type="checkbox" name="itemRpu[]" value="${rpu.id}">
                                    </td>
                                    <td><span>${rpu.code}-${rpu.description}</span>
                                    </td>
                                    <td><span>${rpu.unit_name}</span></td>
                                    <td>
                                        <div class="col-sm-12"
                                            style="border: 1px solid #d2d6de; border-radius: 6px; padding-top:5px;padding-bottom:5px;">
                                            <span class="label label-success" style="white-space: unset;"> </span>
                                            <div>
                                                <span
                                                    id="ContentPlaceHolder1_lvIl_lvIRP_0_lbl_region_name_0">${rpu.region}</span>
                                                :
                                                <span id="ContentPlaceHolder1_lvIl_lvIRP_0_lbl_item_region_price_0"
                                                    title="151">${rpu.price}</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                            )
                        });
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }
        });
    </script>
@endpush
