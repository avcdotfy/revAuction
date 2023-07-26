<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Role <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
            Employee Role</span>
        <input type="hidden" name="id" value="{{ $employee ? $employee->id : '' }}">
        <input type="hidden" name="emp_user_id" value="{{ $employee ? $employee->user->id : '' }}">
        <select class="form-control" name="role_id">
            <option value="">Select Employee Role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}"
                    {{ $employee ? ($employee->role_id == $role->id ? 'selected' : '') : '' }}>{{ $role->name }}
                </option>
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
                <option value="{{ $d->id }}"
                    {{ $employee ? ($employee->department_id == $d->id ? 'selected' : '') : '' }}>
                    {{ $d->code . ' | ' . $d->name }}</option>
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
        <input class="form-control" name="designation" placeholder="Employee Designation"
            value="{{ $employee ? $employee->designation : old('designation') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator2"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Employee
            ID</span>
        <input class="form-control" name="employee_id" placeholder="Employee ID"
            value="{{ $employee ? $employee->employee_id : old('employee_id') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator4"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Employee
            Name</span>
        <input class="form-control" name="name" placeholder="Employee Name"
            value="{{ $employee ? $employee->user->name : old('name') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Mobile No. <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator7"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Mobile
            No.</span>
        <input class="form-control" name="phone" placeholder="Mobile No."
            value="{{ $employee ? $employee->user->phone : old('phone') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">User name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator8"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Username</span>
        <input name="username" type="text" id="ContentPlaceHolder1_txt_email_id" class="form-control"
            placeholder="Username" value="{{ $employee ? $employee->user->username : old('username') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Email ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator8"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Email
            ID</span>
        <input name="email" type="email" id="ContentPlaceHolder1_txt_email_id" class="form-control"
            placeholder="Email ID" value="{{ $employee ? $employee->user->email : old('email') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Password <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator3"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
            Password</span>
        <input name="password" type="text" id="ContentPlaceHolder1_txt_password" class="form-control"
            placeholder="Password" value="{{ old('password') }}">
    </div>
</div>
<div class="col-sm-12" style="padding: 0px;">

    <label for="inputPassword3" class="col-sm-12 control-label">Assigning Category <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select name="cat_ids[]"  style="width: 100% ; important" multiple class="select2" required>
            <option value="">Select Category</option>
            @foreach (CategoryHelper::getCategories() as $cat)
                <option value="{{ $cat->id }}"
                    @if ($employee) @foreach ($employee->categories as $key => $empCat) {{ $empCat->id == $cat->id ? 'selected' : '' }} @endforeach @endif>
                    {{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 20px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit"
            onclick="if(Page_ClientValidate('IU')){this.disabled=true;this.value='Please wait ...';};__doPostBack('ctl00$ContentPlaceHolder1$btn_submit','')"
            id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
        <a href="employee.aspx" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
