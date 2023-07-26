<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Event Mode <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter Event
            Mode *</span>
        <input type="hidden" name="id" value="{{ $eventmode ? $eventmode->id : '' }}">
        <input type="text" class="form-control" name="mode" placeholder="Enter Event Mode "
            value="{{ $eventmode ? $eventmode->mode : '' }}">
    </div>
</div>

<div class="col-sm-12" style="padding: 5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Event Status (*) <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select class="form-control" name="is_active">
            <option value=1 {{ $eventmode ? ($eventmode->is_active == 1 ? 'selected' : '') : '' }}>Activate</option>
            <option value=0 {{ $eventmode ? ($eventmode->is_active == 0 ? 'selected' : '') : '' }}>Deactive</option>
        </select>

    </div>
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="#" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
