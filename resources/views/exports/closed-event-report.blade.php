<table>
    <thead>
        <tr>
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
        </tr>
    </thead>

    <tbody>
        {{-- {{ dd($bids) }} --}}
        @foreach ($bids as $bid)
            @foreach ($bid->event->vendors as $v)
                <tr>
                    <td>{{ $v->user->username }}</td>
                    <td>{{ $bid->item->code }}</td>
                    <td>{{ $bid->item->unit->code }}</td>
                    <td>{{ $bid->rpu->region->name }}</td>
                    <td>{{ $bid->rpu->price }}</td>
                    <td>{{ $bid->rpu->item_unit }}</td>
                    <td>{{ $bid->rpu->item_unit_details }}</td>
                    <td>{{ BidHelper::getVendorsLeastStatus($event_id, $bid->item_id, $v->id, $bid->rpu->id) }}</td>
                    <td>{{ $bid->rpu->item_unit }}</td>
                    <td>{{ BidHelper::getBidAmount($event_id, $bid->item_id, $v->id, $bid->rpu->id) ? BidHelper::getBidAmount($event_id, $bid->item_id, $v->id, $bid->rpu->id)->bidding_price : 'N/A' }}
                    </td>
                    <td>{{ CappingHelper::getCappingPrice($event_id, $bid->rpu->id, $bid->item_id, $v->id) }}
                    </td>
                    <td>{{ BidHelper::getNumberOfBidsOf($event_id, $bid->item_id, $bid->rpu->id, $v->id) }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>


</table>
