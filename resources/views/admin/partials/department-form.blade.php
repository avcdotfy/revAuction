<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Department Code * <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
            Department Code</span>
        <input type="hidden" name="id" value="{{ $department ? $department->id : '' }}">

        <input type="text" name="code" class="form-control" placeholder="Enter Department Code"
            value="{{ $department ? $department->code : '' }}">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Department Name *</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="name" placeholder="Enter Department Name"
            value="{{ $department ? $department->name : '' }}">
    </div>
</div>

<div class="col-sm-12" style="padding: 5px;">
    <label for="inputPassword3" class="col-sm-12 control-label"> Status <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select class="form-control" name="is_active">
            <option value=1 {{ $department ? ($department->is_active == 1 ? 'selected' : '') : '' }}>Activate</option>
            <option value=0 {{ $department ? ($department->is_active == 0 ? 'selected' : '') : '' }}>Deactive</option>
        </select>
    </div>
</div>
<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="{{ route('department.list') }}" class="btn btn-sm btn-primary"
            style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
