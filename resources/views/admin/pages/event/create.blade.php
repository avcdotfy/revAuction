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
