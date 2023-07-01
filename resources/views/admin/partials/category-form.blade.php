<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Category Code <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator2"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Category Code</span>
            <input name="code" type="text" class="form-control" placeholder="Enter Category Code">
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Category Name <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator3"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Category Name</span>
            <input name="name" type="text" class="form-control" placeholder="Enter Category Name">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 5px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Terms &amp; Conditions
        </label>
        <div class="col-sm-12" style="margin-bottom: 5px;">
            <textarea id="default" name="terms_condition" style="height: 80px">Hello, World!</textarea>

        </div>
    </div>
    <div class="col-sm-12" style="margin-bottom: 5px;">
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">Is Enable Item Time
                Trigger? <span style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <select name="item_time_trigger" class="form-control">
                    <option value=0>No</option>
                    <option value=1>Yes</option>

                </select>
            </div>
        </div>
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">Time Gap Between
                Each Item (In Minutes) <span style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <span id="ContentPlaceHolder1_RequiredFieldValidator1"
                    style="font-size:12px;color:red;font-weight:600;display:none;">Please
                    Enter Time Gap Between Each Item (In Minutes)</span>
                <input name="time_gap_between_each_item" type="number" value="0" class="form-control"
                    placeholder="Enter Time Gap Between Each Item (In Minutes)">
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="margin-bottom:20px;">
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">In Which Last
                Minutes Closing Time Will be Increment? <span style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <span id="ContentPlaceHolder1_RequiredFieldValidator4"
                    style="font-size:12px;color:red;font-weight:600;display:none;">Please
                    Enter In Which Last Minutes Time Will be Increment?</span>
                <input type="number" name="last_minute_closing_time_increment" value="0" class="form-control"
                    placeholder="Enter In Which Last Minutes Time Will be Increment?">
            </div>
        </div>
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">Category Status
                <span style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <select class="form-control" name="is_active">
                    <option value=1>Activate</option>
                    <option value=0>Deactivate</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-12" style="text-align: center;">
        <div class="col-sm-12">
            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
            <a href="category.aspx" class="btn btn-sm btn-primary" style="margin-left: 4px">Back</a>
        </div>
    </div>
</div>
