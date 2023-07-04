@extends('admin.layout.base')

@section('main_section')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom: 20px">
        <h3>Home | Settings| Master Setting | Region </h3>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="{{ route('country.store') }}" method="post">
                                @csrf
                                @include('admin.pages.settings.master.region.form')
                            </form>
                        </div>


                    </div>
                </div>


                <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
@endpush
