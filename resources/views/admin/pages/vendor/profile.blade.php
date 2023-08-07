@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Vendor Profile Information </h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @include('admin.partials.alerts')
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 5px;">
                                <form action="{{ route('vendor.profile-update') }}" method="post"
                                    enctype="multipart/form-data" id="registerForm">
                                    @csrf
                                    <input type="hidden" name="vendor_id" value="{{ $v->id }}">
                                    @include('public.pages.register.form')

                                    <div class="col-sm-12" style="text-align: right;">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" value="Update" class="btn btn-sm btn-primary">
                                            <a href="{{ route('vendor.new_requests') }}"
                                                class="btn btn-sm btn-sm btn-primary"
                                                style="color: White; margin-left: 4px">Back</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="padding:0px;">

                                        <div class="col-sm-12">
                                            <span class="multiselect-native-select">
                                                <div class="btn-group">
                                                    <b>Documents</b>
                                                    @foreach (UploadHelper::listDocs($v->id) as $doc)
                                                        <div>
                                                            <a href="{{ Storage::url('document/' . $doc->path) }}" download
                                                                __target="blank"
                                                                class="multiselect-selected-text">{{ $doc->path }}</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </span>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $('#countrySelect').on('change', function(ev) {
                fetchStates(ev.target.value);
            })

            function fetchStates(country_id) {
                $.ajax({
                    type: "get",
                    url: `{{ route('states.byCountry') }}`,
                    data: {
                        'country_id': country_id
                    },

                    success: function(res) {
                        $('#stateSelect').empty();
                        $('#stateSelect').append(
                            `<option value="">-- select state--</option>`
                        );

                        console.log(res.state);
                        res.state.forEach(state => {
                            $('#stateSelect').append(
                                `<option value=${state.id}>${state.name}</option>`
                            );
                        });
                        //
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }

            $(document).ready(function() {
                $('.select2').select2();
            });
        });
    </script>
@endpush
