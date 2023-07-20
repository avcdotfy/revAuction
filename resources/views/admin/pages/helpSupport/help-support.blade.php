@extends('admin.layout.base')


@section('main_section')
    <section class="content-header">
        <h1>Home | Help &amp; Support <small id="ContentPlaceHolder1_hTag">Setup</small></h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12" style="padding: 0px;">
                                <label for="inputPassword3" class="col-sm-12 control-label">Help &amp; Support <span
                                        style="color: red; font-size: 13px">*</span></label>
                                <div class="col-sm-12" style="margin-bottom: 5px;">
                                    <textarea name="" id="default" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12" style="padding:0px;">
                                <label for="inputPassword3" class="col-sm-12 control-label">Vendor Registration |
                                    Banner Image <span style="color: red; font-size: 13px">*</span></label>
                                <div class="col-sm-12">
                                    <input type="file" name="ctl00$ContentPlaceHolder1$fu_banner_image"
                                        id="ContentPlaceHolder1_fu_banner_image" class="form-control">
                                    <a href="../images/banner_image/banner_image.jpg"
                                        id="ContentPlaceHolder1_aTag_Banner_Image" target="_blank"
                                        title="banner_image.jpg"><img id="ContentPlaceHolder1_img_banner_image"
                                            src="../images/banner_image/banner_image.jpg"
                                            style="height:90px;width:90px;"></a>
                                </div>
                            </div>
                            <div class="col-sm-12" style="padding:0px;">
                                <label for="inputPassword3" class="col-sm-12 control-label">Banner Image Reference
                                    Url</label>
                                <div class="col-sm-12">
                                    <input name="ctl00$ContentPlaceHolder1$txt_banner_image_reference_url" type="text"
                                        id="ContentPlaceHolder1_txt_banner_image_reference_url" class="form-control"
                                        placeholder="Enter Banner Image Reference Url">
                                </div>
                            </div>
                            <div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
                                <div class="col-sm-12">
                                    <input type="button" name="ctl00$ContentPlaceHolder1$btn_submit" value="Submit"
                                        onclick="this.disabled=true;this.value='Please wait ...';__doPostBack('ctl00$ContentPlaceHolder1$btn_submit','')"
                                        id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
                                    <a href="help-support.aspx" class="btn btn-sm btn-primary"
                                        style="color: White; margin-left: 4px">Back</a>
                                </div>
                            </div>
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
