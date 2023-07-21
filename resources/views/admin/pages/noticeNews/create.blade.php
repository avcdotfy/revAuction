@extends('admin.layout.base')


@section('main_section')
    <section class="content-header">
        <h1>Home | Notice &amp; News <small id="ContentPlaceHolder1_hTag">Create</small></h1>
        <ol class="breadcrumb">

        </ol>
    </section>
    <section class="content">
        @include('admin.partials.alerts')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="ContentPlaceHolder1_div_nr" class="row">
                            <form action="{{ route('notice.store') }}" method="post">
                                @csrf

                                <div class="col-sm-12" style="padding:0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Notice &amp; News Title
                                        <span style="color: red; font-size: 13px">*</span></label>
                                    <div class="col-sm-12">
                                        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                                            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                                            Notice &amp; News Title</span>
                                        <input name="title" type="text" id="ContentPlaceHolder1_txt_notice_news_title"
                                            class="form-control" placeholder="Enter Notice &amp; News Title">
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding:0px;">
                                    <label for="inputPassword3" class="col-sm-12 control-label">Notice &amp; News Message
                                        <span style="color: red; font-size: 13px">*</span></label>
                                    <textarea name="msg" id="default"></textarea>
                                </div>

                                <div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 20px;">
                                    <div class="col-sm-12">
                                        <input type="submit" id="ContentPlaceHolder1_btn_submit"
                                            class="btn btn-sm btn-primary">
                                        <a href="{{ route('notice.list') }}" class="btn btn-sm btn-primary"
                                            style="color: White; margin-left: 4px">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection
