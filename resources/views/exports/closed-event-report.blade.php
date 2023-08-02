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
            <tr>
                <td>{{ $bid->vendor->user->username }}</td>
                <td>{{ $bid->item->code }}</td>
                <td>{{ $bid->item->unit->code }}</td>
                <td>{{ $bid->rpu->region->name }}</td>
                <td>{{ $bid->rpu->price }}</td>
                <td>{{ $bid->rpu->item_unit }}</td>
                <td>{{ $bid->rpu->item_unit_details }}</td>
                <td>{{ $bid->least_status }}</td>
                <td>{{ $bid->item->total_unit }}</td>
                <td>{{ $bid->bidding_price }}</td>
                <td>{{ CappingHelper::getCappingPrice($bid->event_id, $bid->item_r_p_u_model_id, $bid->item_id) }}
                </td>
                <td>{{ BidHelper::getNumberOfBidsOf($event_id, $bid->item_id, $bid->rpu->id) }}</td>
            </tr>
        @endforeach
    </tbody>


</table>
