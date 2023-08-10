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
            @foreach ($bid->event->vendors as $v)
                <tr>
                    <td>{{ EVENT_ID_PREFIX . $bid->event->id }}</td>
                    <td>{{ $bid->event->title }}</td>
                    <td>{{ $bid->vendor->company_name }}</td>
                    <td>{{ $v->user->username }}</td>
                    <td>{{ $bid->item->description }}</td>
                    <td>{{ $bid->item->unit->code }}</td>
                    <td>{{ $bid->rpu ? $bid->rpu->region->name : 'N/A' }}</td>
                    <td>{{ $bid->rpu ? $bid->rpu->price : 'N/A' }}</td>
                    <td>{{ $bid->rpu ? $bid->rpu->item_unit : 'N/A' }}</td>
                    <td>{{ $bid->rpu ? $bid->rpu->item_unit_details : 'N/A' }}</td>
                    <td>{{ BidHelper::getVendorsLeastStatus($bid->event->id, $bid->item_id, $v->id, $bid->rpu->id) }}
                    </td>
                    <td>{{ $bid->rpu ? $bid->rpu->price : 'N/A' }}</td>
                    <td>{{ BidHelper::getBidAmount($bid->event->id, $bid->item_id, $v->id, $bid->rpu->id) ? BidHelper::getBidAmount($bid->event->id, $bid->item_id, $v->id, $bid->rpu->id)->bidding_price : 'N/A' }}
                    </td>
                    <td>{{ CappingHelper::getCappingPrice($bid->event_id, $bid->item_r_p_u_model_id, $bid->item_id, $v->id) }}
                    <td>{{ BidHelper::getNumberOfBidsOf($bid->event_id, $bid->item_id, $bid->rpu->id, $v->id) }}</td>
                    <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id) ? DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id)->accepted_qty : 'N/A' }}
                    </td>
                    <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id) ? DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id)->accepted_amount : 'N/A' }}
                    </td>
                    <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id) ? DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id)->decision_status : 'N/A' }}
                    <td>{{ DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id) ? DHelper::getDecisionDetails($bid->event_id, $bid->item_id, $v->id, $bid->rpu->id)->remarks : 'N/A' }}
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody>

</table>
