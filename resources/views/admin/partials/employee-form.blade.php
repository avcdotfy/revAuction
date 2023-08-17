<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Role <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
            Employee Role</span>
        <input type="hidden" name="id" value="{{ $employee ? $employee->id : '' }}">
        <input type="hidden" name="emp_user_id" value="{{ $employee ? $employee->user->id : '' }}">
        <select class="form-control" name="role_id" required>
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
        <select class="form-control" name="department_id" required>
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

        <input class="form-control" name="designation" placeholder="Employee Designation" required
            value="{{ $employee ? $employee->designation : old('designation') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input class="form-control" name="employee_id" placeholder="Employee ID" required
            value="{{ $employee ? $employee->employee_id : old('employee_id') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Employee Name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input class="form-control" name="name" placeholder="Employee Name" required
            value="{{ $employee ? $employee->user->name : old('name') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Mobile No. <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input class="form-control" name="phone" placeholder="Mobile No." required
            value="{{ $employee ? $employee->user->phone : old('phone') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">User name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <input name="username" type="text" id="ContentPlaceHolder1_txt_email_id" class="form-control" required
            placeholder="Username" value="{{ $employee ? $employee->user->username : old('username') }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Email ID <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">

        <input name="email" type="email" id="ContentPlaceHolder1_txt_email_id" class="form-control" required
            placeholder="Email ID" value="{{ $employee ? $employee->user->email : old('email') }}">
    </div>
</div>

@if (!$employee)
    <div class="col-sm-12" style="padding:0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Password <span
                style="color: red; font-size: 13px">*</span></label>
        <div class="col-sm-12">

            <input name="password" type="text" id="ContentPlaceHolder1_txt_password" class="form-control"
                required placeholder="Password" value="{{ old('password') }}">
        </div>
    </div>
@endif

<div class="col-sm-12" style="padding: 0px;">

    <label for="inputPassword3" class="col-sm-12 control-label">Assigning Category <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select name="cat_ids[]" style="width: 100% ; important" multiple class="select2" required>
            <option value="">Select Category</option>
            @foreach (CategoryHelper::getCategories() as $cat)
                <option value="{{ $cat->id }}"
                    @if ($employee) @foreach ($employee->categories as $key => $empCat) {{ $empCat->id == $cat->id ? 'selected' : '' }} @endforeach @endif>
                    {{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="col-sm-12" style="padding: 5px;">
    <label for="inputPassword3" class="col-sm-12 control-label"> Status <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select class="form-control" name="is_active" required>
            <option value=1 {{ $employee ? ($employee->is_active == 1 ? 'selected' : '') : 'selected' }}>Activate
            </option>
            <option value=0 {{ $employee ? ($employee->is_active == 0 ? 'selected' : '') : '' }}>Deactive</option>
        </select>
    </div>
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 20px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit" id="ContentPlaceHolder1_btn_submit" class="btn btn-sm btn-primary">
        <a href="{{ route('employee.list') }}" class="btn btn-sm btn-primary"
            style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
