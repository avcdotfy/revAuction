<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">UoM Code <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter UoM Code
            *</span>
        <input type="hidden" name="id" value="{{ $uom ? $uom->id : '' }}">
        <input type="text" value="{{ $uom ? $uom->code : old('code') }} " class="form-control" name="code"
            placeholder="Enter UOM code">
    </div>
</div>
<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">UoM Name *</label>
    <div class="col-sm-12">
        <input type="text" class="form-control" value="{{ $uom ? $uom->name : old('name') }}" name="name"
            placeholder="Enter UoM Name *">
    </div>
</div>

<div class="col-sm-12" style="padding: 5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">UoM Status <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select class="form-control" name="is_active">
            <option value=1 {{ $uom ? ($uom->is_active == 1 ? 'selected' : '') : '' }}>Activate</option>
            <option value=0 {{ $uom ? ($uom->is_active == 0 ? 'selected' : '') : '' }}>Deactive</option>
        </select>
    </div>
</div>
<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
    <div class="col-sm-12">
        <input type="submit" class="btn btn-sm btn-primary">
        <a href="#" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
