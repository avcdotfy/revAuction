@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Create New UoM </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <form action="{{ route('uom.store') }}" method="post">
                                @csrf
                                @include('admin.pages.settings.master.uom.form')
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
