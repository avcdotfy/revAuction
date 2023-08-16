@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h4>Create Category </h4>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        @include('admin.partials.alerts')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="{{ route('category.store') }}" method="post" id="categoryForm">
                                @csrf
                                @include('admin.partials.category-form')
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
    <script src="{{ asset('validations/category-validator.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#item_time_trigger').on('change', function(e) {
                if (e.target.value == 0) {
                    $('#last_minute_time_to_increment').prop('disabled', true);
                } else {
                    $('#last_minute_time_to_increment').prop('disabled', false);
                }
            });
        });
    </script>
@endpush
