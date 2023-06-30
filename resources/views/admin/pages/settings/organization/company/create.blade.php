@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3 style="margin-top: 10px; margin-bottom: 20px">Home | Settings | Organization Setting |Company Setup </h3>
    </section>
    <!-- Main content -->
    <section class="content">
        @include('admin.partials.alerts')
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('admin.partials.company-form')
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>


                <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
