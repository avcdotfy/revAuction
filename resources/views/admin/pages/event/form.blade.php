 <div class="col-lg-12" style="padding:13px">
     <div class="col-sm-12">
         <label for="inputPassword3" class="col-sm-2 control-label">Event Mode</label>
         <div class="col-sm-10">
             <select name="eventmode_id" class="form-control">
                 <option value="0">Select Event Mode</option>
                 @foreach ($eventModes as $em)
                     <option value="{{ $em->id }}">{{ $em->mode }}</option>
                 @endforeach

             </select>
         </div>
     </div>
     <div class="col-sm-12">
         <label for="inputPassword3" class="col-sm-2 control-label">Opening Date &amp;
             Time</label>
         <div class="col-sm-5">
             <input name="opening_date" id="opening_date" type="" value="2023-07-04" class="form-control"
                 placeholder="Enter Opening Date">
         </div>
         <div class="col-sm-1">
             <select id="opening_hrs" class="form-control">
                 <option selected="selected" value="">00</option>
                 <option value="01">01</option>
                 <option value="02">02</option>
                 <option value="03">03</option>
                 <option value="04">04</option>
                 <option value="05">05</option>
                 <option value="06">06</option>
                 <option value="07">07</option>
                 <option value="08">08</option>
                 <option value="09">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>

             </select>
         </div>
         <div class="col-sm-1">
             <select id="opening_minutes" class="form-control" required>
                 <option selected="selected" value="">00</option>
                 <option value="01">01</option>
                 <option value="02">02</option>
                 <option value="03">03</option>
                 <option value="04">04</option>
                 <option value="05">05</option>
                 <option value="06">06</option>
                 <option value="07">07</option>
                 <option value="08">08</option>
                 <option value="09">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="26">26</option>
                 <option value="27">27</option>
                 <option value="28">28</option>
                 <option value="29">29</option>
                 <option value="30">30</option>
                 <option value="31">31</option>
                 <option value="32">32</option>
                 <option value="33">33</option>
                 <option value="34">34</option>
                 <option value="35">35</option>
                 <option value="36">36</option>
                 <option value="37">37</option>
                 <option value="38">38</option>
                 <option value="39">39</option>
                 <option value="40">40</option>
                 <option value="41">41</option>
                 <option value="42">42</option>
                 <option value="43">43</option>
                 <option value="44">44</option>
                 <option value="45">45</option>
                 <option value="46">46</option>
                 <option value="47">47</option>
                 <option value="48">48</option>
                 <option value="49">49</option>
                 <option value="50">50</option>
                 <option value="51">51</option>
                 <option value="52">52</option>
                 <option value="53">53</option>
                 <option value="54">54</option>
                 <option value="55">55</option>
                 <option value="56">56</option>
                 <option value="57">57</option>
                 <option value="58">58</option>
                 <option value="59">59</option>

             </select>
         </div>
         <div class="col-sm-1">
             <select name="opening_ampm" id="opening_ampm" class="form-control">
                 <option selected="selected" value="">select</option>
                 <option value="AM">AM</option>
                 <option value="PM">PM</option>

             </select>
         </div>
         <div class="col-sm-2">
             <input name="opening_time" id="full_opening_time" type="text" value="" required
                 class="form-control">
             <input name="opening_date_time" id="opening_date_time_millis" type="hidden" value="" required
                 class="form-control">
         </div>
     </div>
     {{-- //////////////////////////////////////////////////////////// Closing Date --}}
     <div class="col-sm-12">
         <label for="inputPassword3" class="col-sm-2 control-label">Closing Date &amp;
             Time</label>
         <div class="col-sm-5">
             <input name="closing_date" id="closing_date" type="" value="2023-07-04" class="form-control"
                 placeholder="Enter Closing Date">
         </div>
         <div class="col-sm-1">
             <select id="closing_hrs" class="form-control" required>
                 <option selected="selected" value="">00</option>
                 <option value="01">01</option>
                 <option value="02">02</option>
                 <option value="03">03</option>
                 <option value="04">04</option>
                 <option value="05">05</option>
                 <option value="06">06</option>
                 <option value="07">07</option>
                 <option value="08">08</option>
                 <option value="09">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>

             </select>
         </div>
         <div class="col-sm-1">
             <select id="closing_minutes" class="form-control">
                 <option selected="selected" value="">00</option>
                 <option value="01">01</option>
                 <option value="02">02</option>
                 <option value="03">03</option>
                 <option value="04">04</option>
                 <option value="05">05</option>
                 <option value="06">06</option>
                 <option value="07">07</option>
                 <option value="08">08</option>
                 <option value="09">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="26">26</option>
                 <option value="27">27</option>
                 <option value="28">28</option>
                 <option value="29">29</option>
                 <option value="30">30</option>
                 <option value="31">31</option>
                 <option value="32">32</option>
                 <option value="33">33</option>
                 <option value="34">34</option>
                 <option value="35">35</option>
                 <option value="36">36</option>
                 <option value="37">37</option>
                 <option value="38">38</option>
                 <option value="39">39</option>
                 <option value="40">40</option>
                 <option value="41">41</option>
                 <option value="42">42</option>
                 <option value="43">43</option>
                 <option value="44">44</option>
                 <option value="45">45</option>
                 <option value="46">46</option>
                 <option value="47">47</option>
                 <option value="48">48</option>
                 <option value="49">49</option>
                 <option value="50">50</option>
                 <option value="51">51</option>
                 <option value="52">52</option>
                 <option value="53">53</option>
                 <option value="54">54</option>
                 <option value="55">55</option>
                 <option value="56">56</option>
                 <option value="57">57</option>
                 <option value="58">58</option>
                 <option value="59">59</option>

             </select>
         </div>
         <div class="col-sm-1">
             <select id="closing_ampm" class="form-control">
                 <option selected value="">select</option>
                 <option value="AM">AM</option>
                 <option value="PM">PM</option>
             </select>
         </div>
         <div class="col-sm-2">
             <input name="closing_time" id="full_closing_time" type="text" value="" required
                 class="aspNetDisabled form-control">

             <input name="closing_date_time" id="closing_date_time_millis" type="hidden" value=""
                 class="form-control">
         </div>
     </div>
     <div class="col-sm-12">
         <label for="inputPassword3" class="col-sm-2 control-label">Product Range</label>
         <div class="col-sm-10">

             <select name="category_id" class="form-control" id="categorySelect">
                 <option selected="selected" value="0">Select Product Range</option>

                 @foreach ($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
             </select>
         </div>
     </div>
     <div class="col-sm-12">
         <label for="inputPassword3" class="col-sm-2 control-label">Event Title</label>
         <div class="col-sm-10">

             <input type="text" name="title" class="form-control" value="SOme Event Title">
         </div>
     </div>
 </div>

 <div class="col-sm-12" style="margin-bottom: 5px;">
     <div class="col-lg-12">
         <h4>List of Vendors</h4>
     </div>
     <div class="col-sm-12">
         <div id="dtable_wrapper" class="dataTables_wrapper no-footer">
             <div class="dataTables_length col-lg-9" id="dtable_length"
                 style="padding-left: 0px;padding-right: 0px;margin-bottom: 10px;">
                 <label>Show <select name="dtable_length" aria-controls="dtable" class="">
                         <option value="10">10</option>
                         <option value="25">25</option>
                         <option value="50">50</option>
                         <option value="100">100</option>
                     </select> entries</label>
             </div>
             <div class="dataTables_filter col-lg-3">
                 <input type="text" placeholder="Search"
                     style="border: 1px solid #747474;font-size: 11px;padding: 5px;border-radius: 2px;width: 100%;"
                     name="">
             </div>
             <table id="dtable" class="table table-bordered table-striped dataTable no-footer" role="grid"
                 aria-describedby="dtable_info">
                 <thead>
                     <tr role="row">
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 38.5104px;">
                             S.No.</th>
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44.7292px;">
                             Select</th>
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170.583px;">
                             Company Name</th>

                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 76.0521px;">
                             User Name</th>
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.6562px;">
                             Mobile No.</th>
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 145.896px;">
                             Email ID</th>

                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 46.6875px;">
                             Profile</th>

                     </tr>
                 </thead>
                 <tbody id="vendorTableBody">


                 </tbody>
             </table>

             <div class="col-lg-12 " style="padding-left: 0px; padding-right: 0px">
                 <p class="col-lg-6" style="text-align: left;padding-left: 8px; line-height: 30px">Showing 1 to
                     4 of 4 entries</p>
                 <div class="col-lg-6" style="text-align: right;">
                     <div class="pagination " style="margin: 0px 0; ">
                         <!--  <a href="#">&laquo;</a> -->
                         <a href="#">Previous </a>&nbsp;
                         <a class="active" href="#">1</a>&nbsp;
                         <a href="#">Next</a>
                         <!-- <a href="#">4</a>
                                                                                                                                                                                                                                                                            <a href="#">5</a>
                                                                                                                                                                                                                                                                            <a href="#">6</a> -->
                         <!-- <a href="#">&raquo;</a> -->
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>



 <div class="col-sm-12" style="margin-bottom: 5px;">
     <div class="col-lg-12">
         <h4>List of Items, Region & Price</h4>
     </div>
     <div class="col-sm-12">
         <div id="dtable_wrapper" class="dataTables_wrapper no-footer">
             <div class="dataTables_length col-lg-9" id="dtable_length"
                 style="padding-left: 0px;padding-right: 0px;margin-bottom: 10px;">
                 <label>Show <select name="dtable_length" aria-controls="dtable" class="">
                         <option value="10">10</option>
                         <option value="25">25</option>
                         <option value="50">50</option>
                         <option value="100">100</option>
                     </select> entries</label>
             </div>
             <div class="dataTables_filter col-lg-3">
                 <input type="text" placeholder="Search"
                     style="border: 1px solid #747474;font-size: 11px;padding: 5px;border-radius: 2px;width: 100%;"
                     name="">
             </div>
             <table id="dtable" class="table table-bordered table-striped dataTable no-footer" role="grid"
                 aria-describedby="dtable_info" style="border:1px solid #eaeaea">
                 <thead>
                     <tr role="row">
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 38.5104px;">
                             S.No.</th>
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44.7292px;">
                             Select</th>
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170.583px;">
                             Item Code & Description</th>

                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 76.0521px;">UoM
                         </th>
                         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.6562px;">
                             Item Region, Price & Unit Details</th>
                     </tr>
                 </thead>
                 <tbody id="itemTableBody">
                     {{-- @foreach ($itemRpus as $key => $rpu)
                         <tr role="row" class="odd">
                             <td>{{ $key + 1 }}</td>
                             <td>
                                 <input type="checkbox" name="itemRpu[]" value="{{ $rpu->id }}">
                             </td>
                             <td><span>{{ $rpu->item->code }}-{{ $rpu->item->name }}</span>
                             </td>
                             <td><span>{{ $rpu->item->unit->name }}</span></td>
                             <td>
                                 <div class="col-sm-12"
                                     style="border: 1px solid #d2d6de; border-radius: 6px; padding-top:5px;padding-bottom:5px;">
                                     <span class="label label-success" style="white-space: unset;"> </span>
                                     <div>
                                         <span
                                             id="ContentPlaceHolder1_lvIl_lvIRP_0_lbl_region_name_0">{{ $rpu->region->name }}</span>
                                         :
                                         <span id="ContentPlaceHolder1_lvIl_lvIRP_0_lbl_item_region_price_0"
                                             title="151">{{ $rpu->price }}</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                     @endforeach --}}


                 </tbody>
             </table>

             <div class="col-lg-12 " style="padding-left: 0px; padding-right: 0px">
                 <p class="col-lg-6" style="text-align: left;padding-left: 8px; line-height: 30px">Showing 1 to
                     4 of 4 entries</p>
                 <div class="col-lg-6" style="text-align: right;">
                     <div class="pagination " style="margin: 0px 0; ">
                         <!--  <a href="#">&laquo;</a> -->
                         <a href="#">Previous </a>&nbsp;
                         <a class="active" href="#">1</a>&nbsp;
                         <a href="#">Next</a>
                         <!-- <a href="#">4</a>
                                                                                                                                                                                                                                                                            <a href="#">5</a>
                                                                                                                                                                                                                                                                            <a href="#">6</a> -->
                         <!-- <a href="#">&raquo;</a> -->
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>


 <div class="col-sm-12" style="margin-bottom: 5px;">
     <div class="col-sm-12" style="padding: 5px;">
         <div class="col-lg-12">
             <h4>Terms & Conditions</h4>
         </div>
         <div class="col-sm-12" style="margin-bottom: 5px;">
             <textarea id="default" name="terms_condition" style="height: 80px">Hello, World!</textarea>

         </div>
     </div>
     <div class="col-sm-12" style="margin-bottom: 5px;">
         <h4>Email Notification</h4>

         <label for="inputPassword3" class="col-sm-12 control-label" style="padding: 0px">Subject Line <span
                 style="color: red; font-size: 13px; ">*</span></label>
         <div class="col-sm-12" style=" padding: 0px">
             <input type="text" class="form-control" value="subject line"
                 placeholder="Preparation of Event for Aluminium Pipe" name="subject_line">

         </div>
     </div>

     <div class="col-sm-12" style="padding: 5px;">
         <div class="col-lg-12">
             <h4>Mail Format</h4>
         </div>
         <div class="col-sm-12" style="margin-bottom: 5px;">
             <textarea id="default" style="height: 80px">Hello, World!</textarea>

         </div>
     </div>

     <div class="col-sm-12" style="text-align: center;">
         <div class="col-sm-12">
             <input type="button" value="Validate" class="btn btn-sm btn-primary">
             <input type="submit" value="Submit" class="btn btn-sm btn-success">
             <a href="#" class="btn btn-sm btn-primary" style="margin-left: 4px">Back</a>
         </div>
     </div>
 </div>
