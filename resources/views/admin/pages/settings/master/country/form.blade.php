<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Country name <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <input type="hidden" name="id" value="{{ $country ? $country->id : '' }}">

        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
            Country name *</span>
        <input type="text" name="name" class="form-control" placeholder="Enter Country Name" required
            value="{{ $country ? $country->name : '' }}">
    </div>
</div>
<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Country Code <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
            Country Code *</span>
        <input type="text" name="code" class="form-control" placeholder="Enter Country Code" required
            value=" {{ $country ? $country->code : '' }}">
    </div>
</div>
<div class="col-sm-12" style="padding:5px;">
    <label for="inputPassword3" class="col-sm-12 control-label">Description <span
            style="color: red; font-size: 13px">*</span></label>
    <div class="col-sm-12">
        <span id="ContentPlaceHolder1_RequiredFieldValidator1"
            style="font-size:12px;color:red;font-weight:600;display:none;">please enter some description *</span>
        <input type="text" name="description" class="form-control" placeholder="Enter description " required
            value="{{ $country ? $country->description : '' }}">
    </div>
</div>

<div class="col-sm-12" style="padding: 5px;">
    <label for="inputPassword3" class="col-sm-12 control-label"> Status <span
            style="color: red; font-size: 13px;">*</span></label>
    <div class="col-sm-12">
        <select class="form-control" name="is_active" required>
            <option value=1 {{ $country ? ($country->is_active == 1 ? 'selected' : '') : '' }}>Activate</option>
            <option value=0 {{ $country ? ($country->is_active == 0 ? 'selected' : '') : '' }}>Deactive</option>
        </select>

    </div>
</div>

<div class="col-sm-12" style="text-align: center; padding: 0px; margin-top: 10px;">
    <div class="col-sm-12">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="{{ route('country.list') }}" class="btn btn-sm btn-primary"
            style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
