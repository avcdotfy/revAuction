@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px">
        <h3>Home | Settings| Employee Create </h3>

    </section>
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="" method="post">
                                @include('admin.partials.employee-form')
                            </form>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
