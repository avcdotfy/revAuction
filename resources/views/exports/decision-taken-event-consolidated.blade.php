<table>
    <thead>
        <tr>
            <td>Event ID</td>
            <td>Event Title</td>
            <td>Company Name</td>
            <td>Username</td>
            <td>Item Name</td>
            <td>UoM</td>
            <td>Region Name</td>
            <td>Item Price</td>
            <td>Item Unit</td>
            <td>Item Unit Details</td>
            <td>Bidder Item Rank</td>
            <td>Bidder Quantity</td>
            <td>Bidder Amount</td>
            <td>Set Capping Price</td>
            <td>Total No. of Bid Placed</td>
            <td>Accept Quantity</td>
            <td>Accept Amount</td>
            <td>Admin Decision</td>
            <td>Admin Remarks</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($bids as $bid)
            <tr>
                <td>{{ EVENT_ID_PREFIX . $bid->event->id }}</td>
                <td>{{ $bid->event->title }}</td>
                <td>{{ $bid->vendor->company_name }}</td>
                <td>{{ $bid->vendor->user->username }}</td>
                <td>{{ $bid->item->code }}</td>
                <td>{{ $bid->item->unit->code }}</td>
                <td>{{ $bid->rpu->region->name }}</td>
                <td>{{ $bid->rpu->price }}</td>
                <td>{{ $bid->rpu->item_unit }}</td>
                <td>{{ $bid->rpu->item_unit_details }}</td>
                <td>{{ $bid->least_status }}</td>
                <td>{{ $bid->rpu->item_unit }}</td>
                <td>{{ $bid->bidding_price }}
                </td>
                <td>{{ CappingHelper::getCappingPrice($bid->event_id, $bid->item_r_p_u_model_id, $bid->item_id) }}
                <td>{{ BidHelper::getNumberOfBidsOf($bid->event_id, $bid->item_id, $bid->rpu->id) }}</td>
                <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->accepted_qty }}
                </td>
                <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->accepted_amount }}
                </td>
                <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->decision_status }}
                <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $bid->vendor_id, $bid->rpu->id)->remarks }}
                </td>


            </tr>
        @endforeach

    </tbody>

</table>
