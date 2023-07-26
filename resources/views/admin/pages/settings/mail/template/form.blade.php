<div class="col-sm-12" style="margin-bottom: 5px;">
    <input type="hidden" name="id" value="{{ $template ? $template->id : '' }}">
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Service Type <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <select class="form-control" name="service_type">
                <option value="0">Select Service Type</option>
                @foreach (SERVICE_TYPE as $st)
                    <option value="{{ $st }}"
                        {{ $template ? ($template->service_type == $st ? 'selected' : '') : '' }}>
                        {{ $st }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Template For <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <select class="form-control" name="template_for">
                <option value="{{ USER_TYPES[0] }}"
                    {{ $template ? ($template->template_for == USER_TYPES[0] ? 'selected' : '') : '' }}>Admin
                    Side</option>
                <option value="{{ USER_TYPES[1] }}"
                    {{ $template ? ($template->template_for == USER_TYPES[1] ? 'selected' : '') : '' }}>Vendor Side
                </option>

            </select>

        </div>
    </div>
</div>

<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Mail Subject Line <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <input type="text" value="{{ $template ? $template->subject : '' }}" class="form-control"
                placeholder="Mail Subject Line" name="subject">
        </div>
    </div>
</div>

<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 5px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Terms &amp; Conditions
        </label>
        <div class="col-sm-12" style="margin-bottom: 5px;">
            <textarea id="default" style="height: 80px" name="body">{{ $template ? $template->body : '' }}</textarea>
        </div>
    </div>
    <div class="col-sm-12" style="margin-bottom: 5px;">
        <div class="col-sm-6" style="padding: 0px;">
            <label for="inputPassword3" class="col-sm-12 control-label">Status (*) <span
                    style="color: red; font-size: 13px;">*</span></label>
            <div class="col-sm-12">
                <select class="form-control" name="is_active">
                    <option value=1 {{ $template ? ($template->is_active == 1 ? 'selected' : '') : '' }}>Activate
                    </option>
                    <option value=0 {{ $template ? ($template->is_active == 0 ? 'selected' : '') : '' }}>Deactive
                    </option>
                </select>

            </div>
        </div>
        <div class="col-sm-6" style="padding: 0px;">
            <div class="col-sm-12" style="padding: 0px;">
                <label for="inputPassword3" class="col-sm-12 control-label">Test Mail Template
                    <span style="color: red; font-size: 13px;">*</span></label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" placeholder="Test Mail Template" name="">
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12" style="text-align: center;">
        <div class="col-sm-12">
            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
            <a href="#" class="btn btn-sm btn-primary" style="margin-left: 4px">Back</a>
        </div>
    </div>
</div>
