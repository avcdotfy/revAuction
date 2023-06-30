<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Role <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
            Employee Role</span>
        <select class="form-control" name="role_id">
            <option value="">Select Employee Role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach

        </select>
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Department <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator5"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
            Employee Department</span>
        <select class="form-control" name="department_id">
            <option value="">Select Employee Department</option>
            @foreach ($departments as $d)
                <option value="{{ $d->id }}">{{ $d->code | $d->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Designation <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator6"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Employee
            Designation</span>
        <input class="form-control" name="designation" placeholder="Employee Designation">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator2"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Employee
            ID</span>
        <input class="form-control" name="employee_id" placeholder="Employee ID">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator4"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Employee
            Name</span>
        <input class="form-control" name="name" placeholder="Employee Name">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Mobile No. <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator7"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Mobile
            No.</span>
        <input class="form-control" placeholder="Mobile No.">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Email ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator8"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Email
            ID</span>
        <input name="ctl00$ContentPlaceHolder1$txt_email_id" type="text" id="ContentPlaceHolder1_txt_email_id"
            class="form-control" placeholder="Email ID">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Password <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator3"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
            Password</span>
        <input name="ctl00$ContentPlaceHolder1$txt_password" type="text" id="ContentPlaceHolder1_txt_password"
            class="form-control" placeholder="Password">
    </div>
</div>
<div class="col-sm-12" style="padding: 0px;">

    <label for="inputPassword3" class="col-sm-12 control-label">Assigning Category <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator10"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
            Category</span>
        <span class="multiselect-native-select"><select size="4"
                name="ctl00$ContentPlaceHolder1$lb_product_category" multiple="multiple"
                id="ContentPlaceHolder1_lb_product_category">
                <option value="1">Aluminium Pipe</option>
                <option value="5">Cotton</option>
                <option value="3">Iron</option>
                <option value="6">Plastic</option>
                <option value="4">Stainless Steel</option>
                <option value="2">Steel</option>

            </select>
            <div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default"
                    data-toggle="dropdown" title="Select Category"><span class="multiselect-selected-text">Select
                        Category</span> <b class="caret"></b></button>
                <ul class="multiselect-container dropdown-menu">
                    <li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label
                                class="checkbox"><input type="checkbox" value="multiselect-all"> Select
                                all</label></a></li>
                    <li><a tabindex="0"><label class="checkbox" title="Aluminium Pipe"><input type="checkbox"
                                    value="1">
                                Aluminium Pipe</label></a></li>
                    <li><a tabindex="0"><label class="checkbox" title="Cotton"><input type="checkbox"
                                    value="5"> Cotton</label></a></li>
                    <li><a tabindex="0"><label class="checkbox" title="Iron"><input type="checkbox"
                                    value="3"> Iron</label></a></li>
                    <li><a tabindex="0"><label class="checkbox" title="Plastic"><input type="checkbox"
                                    value="6"> Plastic</label></a></li>
                    <li><a tabindex="0"><label class="checkbox" title="Stainless Steel"><input type="checkbox"
                                    value="4"> Stainless Steel</label></a></li>
                    <li><a tabindex="0"><label class="checkbox" title="Steel"><input type="checkbox"
                                    value="2"> Steel</label></a></li>
                </ul>
            </div>
        </span>
    </div>
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 20px;">
    <div class="col-sm-12">
        <input type="button" name="ctl00$ContentPlaceHolder1$btn_submit" value="Submit"
            onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_submit','')"
            id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
        <a href="employee.aspx" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
