<table>
    <tr>
        <td>Event ID</td>
        <td>Event Title</td>
        <td>Company Name</td>
        <td>Username</td>
        <td>Item Name</td>
        <td>UoM</td>
        <td>Region Name</td>
        <td>Base Price</td>
        <td>Item Unit</td>
        <td>Item Unit Details</td>
        <td>Item Status</td>
        <td>Quantity</td>
        <td>Last Bidding Price</td>
        <td>Capping Price</td>
    </tr>

    @foreach ($bids as $bid)
        <tr>
            <td>{{ EVENT_ID_PREFIX . $bid->event->id }}</td>
            <td>{{ $bid->event->title }}</td>
            <td>{{ $bid->vendor->company_name }}</td>
            <td>{{ $bid->vendor->user->username }}</td>
            <td>{{ $bid->item->code }}</td>
            <td>{{ $bid->item->unit->name }}</td>
            <td>{{ $bid->rpu->region->name }}</td>
            <td>{{ $bid->rpu->price }}</td>
            <td>{{ $bid->rpu->item_unit }}</td>
            <td>{{ $bid->rpu->item_unit_details }}</td>
            <td>{{ $bid->least_status }} </td>
            <td>{{ $bid->rpu->item_unit }}</td>
            <td>{{ $bid->bidding_price }}
            </td>
            <td>{{ CappingHelper::getCappingPrice($bid->event_id, $bid->rpu->id, $bid->item_id, $bid->vendor->id) }}
            </td>

        </tr>
    @endforeach


</table>