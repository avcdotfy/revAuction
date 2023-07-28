<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Role Name * <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Role
            Name</span>
        <input type="text" name="name" class="form-control" placeholder="Enter Role Name">
    </div>
</div>
<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Role Description *</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" name="description" placeholder="Enter Role Description">
    </div>
</div>

<div class="col-sm-12" style="padding:0px;">
    <label for="inputPassword3" class="col-sm-12 control-label" style="margin-bottom: 15px">Assigning Permissions
        *</label>

    @foreach ($permissions as $p)
        <div class="col-sm-3" style="font-size: 12px;font-weight: 500;margin-bottom: 3px;">
            <input type="checkbox" checked="" name="permission[]" value="{{ $p->id }}">
            <label class="tr">
                {{ $p->name }}
            </label>
        </div>
    @endforeach
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 30px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="{{ route('permission_role.list') }}" class="btn btn-sm btn-primary"
            style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
