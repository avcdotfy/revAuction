@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Role & Permissions </h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        @include('admin.partials.alerts')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <form action={{ route('permission_role.update') }} method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $role->id }}">
                                @include('admin.partials.permission-form')
                            </form>
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
            $('.parent_checkBox').change(function() {
                if (this.checked) {
                    $('.parent_id_' + this.value).prop('checked', true);
                } else {
                    $('.parent_id_' + this.value).prop('checked', false);
                }
                $('#textbox1').val(this.checked);
            });
        });
    </script>
@endpush
