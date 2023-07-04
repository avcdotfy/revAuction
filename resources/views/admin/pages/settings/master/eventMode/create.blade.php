@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Create New Event Mode </h3>
    </section>
    <!-- Main content -->
    <section class="content">

        @include('admin.partials.alerts')

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <form action="{{ route('eventmode.store') }}" method="post">
                                @csrf
                                @include('admin.pages.settings.master.eventMode.form')
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
@endpush
