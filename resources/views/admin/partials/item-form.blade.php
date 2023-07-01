<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Product Range <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span id="ContentPlaceHolder1_RequiredFieldValidator4"
                style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                Product Range</span>
            <select name="category_id" class="form-control">
                <option value="">Select Product Range</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Code <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">
                Please Enter Item Code</span>
            <input type="text" name="code" class="form-control" placeholder="Enter Item Code">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">UoM <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">Please Select
                UoM</span>
            <select class="form-control" name="unit_of_measure_id">
                <option value="">Select UoM</option>
                @foreach ($uOm as $u)
                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                @endforeach

                {{-- <option value="107">Acre(ACR)</option>  
                <option value="108">Ampere(A)</option>  
                <option value="110">Arpent(ARP)</option>
                <option value="112">Box</option>
                <option value="111">Bucket(BCK)</option>
                <option value="109">Bundle(BE)</option>
                <option value="115">Centimeter(CM)</option>
                <option value="114">Cubic centimeter (CM3)</option>
                <option value="116">Cubic decimeter(DM3)</option>
                <option value="121">Cubic foot (FT3)</option>
                <option value="127">Cubic inch (IN3)</option>
                <option value="135">Cubic meter (M3)</option>
                <option value="141">Cubic yard (YD3)</option>
                <option value="117">Decimeter (DM)</option>
                <option value="118">Dozen (DZN)</option>
                <option value="119">Foot (FT)</option>
                <option value="123">Gram (G)</option>
                <option value="124">Gross (GRO)</option>
                <option value="125">Inch (IN)</option>
                <option value="101">Kg</option>
                <option value="128">Kilogram (KG)</option>
                <option value="130">Kilometer (KM)</option>
                <option value="131">Liter (L)</option>
                <option value="143">LUG</option>
                <option value="136">Meter (M)</option>
                <option value="105">Microliter(μL)</option>
                <option value="106">Micrometer (μM)</option>
                <option value="138">Mile (MI)</option>
                <option value="132">Milligram (MG)</option>
                <option value="144">MT</option>
                <option value="137">Ounce (OZ)</option>
                <option value="104">Piece</option>
                <option value="139">Square (SQ)</option>
                <option value="113">Square centimeter (CM2)</option>
                <option value="120">Square foot (FT2)</option>
                <option value="126">Square inch (IN2)</option>
                <option value="129">Square kilometer (KM2)</option>
                <option value="134">Square meter (M2)</option>
                <option value="133">Square mile (MI2)</option>
                <option value="140">Square yard (YD2)</option>
                <option value="100">Ton</option>
                <option value="102">Unit</option>
                <option value="122">US gallon (GAL)</option>
                <option value="142">Yard (YD)</option> --}}

            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
    <div class="col-sm-12" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Description <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Item Description</span>
            <input type="text" name="description" class="form-control" placeholder="Enter Item Description">
        </div>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 5px;">
</div>
<div class="col-sm-12" style="overflow:auto;">
    <div class="col-sm-12">

        <table id="dynamic_tbl" class="table table-bordered dataTable">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Item Region</th>
                    <th>Item Price</th>
                    <th>Item Unit</th>
                    <th>Item Unit Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <tr>
                    <td>1</td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Select Item Region</span>
                        <select class="form-control" name="region[]">
                            <option value="">Select Region</option>
                            @foreach ($regions as $reg)
                                <option value="{{ $reg->id }}">{{ $reg->name }}</option>
                            @endforeach

                        </select>
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Price</span>
                        <input type="number" name='price[]' class="form-control">
                    </td>
                    <td>
                        <span style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit</span>
                        <input type="number" name='unit[]' class="form-control">
                    </td>
                    <td>
                        <span id="ContentPlaceHolder1_RequiredFieldValidator8"
                            style="font-size:11px;color:red;font-weight:600;display:none;">Please
                            Enter Item Unit Details</span>
                        <input type="text" name='unit_details[]' class="form-control">
                    </td>
                    <td>
                        <button id="add_btn" type="button" class="btn btn-sm btn-primary"><span
                                class="plus-icon">+</span> Add Item
                            Region, Price &amp;
                            Unit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="col-sm-12" style="margin-bottom: 10px;">
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Decrement Price <span
                style="color: red; font-size: 13px;">*</span></label>
        <div class="col-sm-12">
            <span style="font-size:12px;color:red;font-weight:600;display:none;">Please Enter
                Decrement Price</span>
            <input type="number" name="decrement_price" class="form-control" placeholder="Enter Item Decrement Price">
        </div>
    </div>
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Is Enable To Manually
            Change Bidding Price? <span style="color: red; font-size: small">*</span></label>
        <div class="col-sm-12">
            <select class="form-control" name="is_manually_change_bidding_price">
                <option value=0>No</option>
                <option value=1>Yes</option>

            </select>
        </div>
    </div>
    <div class="col-sm-4" style="padding: 0px;">
        <label for="inputPassword3" class="col-sm-12 control-label">Item Status <span
                style="color: red; font-size: small">*</span></label>
        <div class="col-sm-12">
            <select name="is_active" class="form-control">
                <option value="0">Activate</option>
                <option value="1">Deactivate</option>

            </select>
        </div>
    </div>
</div>
<div class="col-sm-12" style="text-align: right;">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
        <a href="items.html" class="btn btn-sm btn-primary" style="color: White; margin-left: 4px">Back</a>
    </div>
</div>
