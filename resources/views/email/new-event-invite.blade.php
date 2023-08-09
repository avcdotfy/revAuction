<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>New Event at {{ $data['company_name'] }}</h1>
    <p>
        hi , You have been invited for the event at {{ $data['company_name'] }}
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe repellat debitis provident ipsam ut eius odio
        odit dolorem assumenda explicabo. Repudiandae accusamus nam consectetur possimus. Quas earum excepturi natus
        eaque?
    </p>

    <h1>Details of Events</h1>

    <p>opening Time : {{ $data['opening_time'] }}</p>
    <p> Opening Date : {{ $data['opening_date'] }}</p>
    <p> Closing Time : {{ $data['closing_date'] }}</p>
    <p>Closing Date : {{ $data['closing_time'] }}</p>

    <h1>Item Details </h1>
    <table id="dtable" class="table table-bordered table-striped dataTable no-footer" role="grid"
        aria-describedby="dtable_info" style="border:1px solid #eaeaea">
        <thead>
            <tr role="row">
                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 38.5104px;">
                    S.No.</th>

                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 170.583px;">
                    Item Code & Description</th>

                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 76.0521px;">UoM
                </th>
                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93.6562px;">
                    Item Region, Price & Unit Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['items'] as $key => $rpu)
                <tr role="row" class="odd">
                    <td>{{ $key + 1 }}</td>
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
            @endforeach

        </tbody>
    </table>

    <p>Thanks and regards !</p>
    <p>{{ $data['company_name'] }}</p>


</body>

</html>
