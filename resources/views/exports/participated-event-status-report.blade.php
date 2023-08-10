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
        <td>Previous Status</td>
        <td></td>
        <td>Latest Status</td>
        <td>Quantity</td>
        <td>Last Bidding Price</td>
        <td>Capping Price</td>
        <td>Accept Quantity</td>
        <td>Accept Amount</td>
        <td>Admin Decision</td>
        <td>Admin Remarks</td>
    </tr>
    @foreach ($bids as $bid)
        <tr>
            <td>{{ EVENT_ID_PREFIX . $bid->event->id }}</td>
            <td>{{ $bid->event->title }}</td>
            <td>{{ $bid->vendor->company_name }}</td>
            <td>{{ $bid->vendor->user->username }}</td>
            <td>{{ $bid->item->description }}</td>
            <td>{{ $bid->item->unit->name }}</td>
            <td>{{ $bid->rpu->region->name }}</td>
            <td>{{ $bid->rpu->price }}</td>
            <td>{{ $bid->rpu->item_unit }}</td>
            <td>{{ $bid->rpu->item_unit_details }}</td>
            <td>{{ BidHistoryHelper::getBidLeastStatus($bid->id) ? BidHistoryHelper::getBidLeastStatus($bid->id)->previous_state : 'N/A' }}
            </td>
            <td> -> </td>
            <td>{{ BidHistoryHelper::getBidLeastStatus($bid->id) ? BidHistoryHelper::getBidLeastStatus($bid->id)->new_state : 'N/A' }}
            </td>
            <td>{{ $bid->rpu->item_unit }}</td>
            <td>{{ $bid->bidding_price }}
            </td>
            <td> {{ $bid->capping_price }}
            </td>
            <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->accepted_qty }}
            </td>
            <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->accepted_amount }}
            </td>
            <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->decision_status }}
            <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->remarks }}
            </td>
    @endforeach




</table>
