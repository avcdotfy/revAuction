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

                            <form action="{{ route('event.store') }}" method="post" id="eventForm">
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
        $('#opening_date').datepicker({
            minDate: 0
        });
        $('#closing_date').datepicker({
            minDate: 0
        });

        $(document).ready(function() {
            let openingHrs = '';
            let openingMinutes = '';
            let openingAmPM = '';



            $('#opening_hrs').on('change', function(ev) {
                console.log(ev.target.value);
                openingHrs = ev.target.value
                $('#full_opening_time').val(openingHrs + " : ");
            })
            $('#opening_minutes').on('change', function(ev) {
                console.log(ev.target.value);
                openingMinutes = ev.target.value;
                $('#full_opening_time').val(openingHrs + ":" + openingMinutes);
            })
            $('#opening_ampm').on('change', function(ev) {
                openingAmPM = ev.target.value;
                $('#full_opening_time').val(openingHrs + ":" + openingMinutes + " " + openingAmPM);

                $('#opening_date_time_millis').val(convertDateTimeToMillis($('#opening_date').val() + " " +
                    $('#full_opening_time').val()))

                console.log($('#opening_date').val() + " " + $('#full_opening_time').val())
                console.log(convertDateTimeToMillis($('#opening_date').val() + " " +
                    $('#full_opening_time').val()))

                // var dateTimeString = '07/10/2023 01:01 AM';
                // var millis = convertDateTimeToMillis(dateTimeString);
                // console.log("TEST" ,millis);

            })


            /* Closing time section */
            let closingHrs = '';
            let closingMinutes = '';
            let closingAmPM = '';

            $('#closing_hrs').on('change', function(ev) {
                console.log(ev.target.value);
                closingHrs = ev.target.value
                $('#full_closing_time').val(closingHrs + " : ");
            })
            $('#closing_minutes').on('change', function(ev) {
                console.log(ev.target.value);
                closingMinutes = ev.target.value;
                $('#full_closing_time').val(closingHrs + ":" + closingMinutes);
            })
            $('#closing_ampm').on('change', function(ev) {
                closingAmPM = ev.target.value;
                $('#full_closing_time').val(closingHrs + ":" + closingMinutes + " " + closingAmPM);

                $('#closing_date_time_millis').val(convertDateTimeToMillis($('#closing_date').val() + " " +
                    $('#full_closing_time').val()))

                // console.log($('#closing_date').val() + " " + $('#full_closing_time').val())
                // console.log(convertDateTimeToMillis($('#closing_date').val() + " " +
                //     $('#full_closing_time').val()))

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
                        console.log(res.vendors);
                        res.vendors.forEach((vendor, key) => {
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
                                    <td><a href="${vendor.profileUrl}" target="blank">View</a></td>
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
                        res.items.forEach((rpu, key) => {
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

        function convertDateTimeToMillis(dateTimeString) {
            var dateTimeParts = dateTimeString.split(' ');

            var dateParts = dateTimeParts[0].split('/');
            var month = parseInt(dateParts[0], 10) - 1; // Month is zero-based in JavaScript						
            var day = parseInt(dateParts[1], 10);
            var year = parseInt(dateParts[2], 10);

            var timeParts = dateTimeParts[1].split(':');
            var hour = parseInt(timeParts[0], 10);
            var minute = parseInt(timeParts[1], 10);
            var period = dateTimeParts[2].toUpperCase();

            console.log(period);
            if (period === 'PM' && hour !== 12) {
                hour += 12;
            } else if (period === 'AM' && hour === 12) {
                hour = 0;
            }

            var dateTime = new Date(year, month, day, hour, minute);
            var milliseconds = dateTime.getTime();

            return milliseconds;
        }
    </script>

    <script>
        function setTitle() {

            let title = "Event for " + $("#categorySelect :selected").text() + " " + "Opening date " + $(
                "#opening_date").val() + " " + $(
                "#full_opening_time").val() + " " + "& Closing Date " + $("#closing_date").val() + " " + $(
                "#full_closing_time").val() + " " + "(" + $("#eventMode :selected").text() + ")"

            $("#title_box").val(title);

        }
    </script>
@endpush
