@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Settings | Mail Setting | Template Update Information </h3>
        <ol class="breadcrumb">
            <a href="{{ route('template.email.list') }}" style="color: white; font-weight: 600"
                class="btn-block btn-primary btn-sm">
                Go Back To List</a>
        </ol>
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

                            <form action="{{ route('template.email.update') }}" method="post">
                                @csrf
                                @include('admin.pages.settings.mail.template.form')
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
@endpush
