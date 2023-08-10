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
        @foreach ($bids as $bid)
            <tr>
                <td>{{ $bid->vendor->user->username }}</td>
                <td>{{ $bid->item->description }}</td>
                <td>{{ $bid->item->unit->code }}</td>
                <td>{{ $bid->item->regionPriceUnit->first()->region->name }}</td>
                <td>{{ $bid->item->regionPriceUnit->first()->price }}</td>
                <td>{{ $bid->item->regionPriceUnit->first()->item_unit }}</td>
                <td>{{ $bid->item->regionPriceUnit->first()->item_unit_details }}</td>
                <td>{{ $bid->least_status }}</td>
                <td>{{ $bid->item->total_unit }}</td>
                <td>{{ $bid ? $bid->bidding_price : 'N/A'}}</td>
                <td>{{ $bid ? $bid->capping_price : 'N/A'}}</td>
                <td>{{ BidHelper::getNumberOfBidsOf($event_id, $bid->item_id) }}</td>
            </tr>
        @endforeach
    </tbody>


</table>
