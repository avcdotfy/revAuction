<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">State name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
            State name *</span>

        <input type="hidden" name="id" value="{{ $state ? $state->id : '' }}">
        <input type="text" name="name" class="form-control" placeholder="Enter State Name"
            value="{{ $state ? $state->name : '' }}">
    </div>
</div>
<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">State Code <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <input type="text" name="code" class="form-control" placeholder="Enter  Code"
            value="{{ $state ? $state->code : '' }}">
    </div>
</div>
<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Description <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">please enter some description *</span>
        <input type="text" name="description" class="form-control" placeholder="Enter description "
            value="{{ $state ? $state->description : '' }}">
    </div>
</div>

<div class="col-sm-12" style="padding: 5px;">
    <label for="inputPassword3" class="col-sm-12 control-label"> Country <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select class="form-control" name="country_id">
            <option value="">--select country--</option>
            @foreach ($countries as $c)
                <option value="{{ $c->id }}"
                    {{ $state ? ($state->country_id == $c->id ? 'selected' : '') : '' }}>
                    {{ $c->name }} | {{ $c->code }}</option>
            @endforeach
        </select>

    </div>
</div>
<div class="col-sm-12" style="padding: 5px;">
    <label for="inputPassword3" class="col-sm-12 control-label"> Status <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select class="form-control" name="is_active">
            <option value=1 {{ $state ? ($state->is_active == 1 ? 'selected' : '') : '' }}>Activate</option>
            <option value=0 {{ $state ? ($state->is_active == 0 ? 'selected' : '') : '' }}>Deactive</option>
        </select>

    </div>
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="#" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
