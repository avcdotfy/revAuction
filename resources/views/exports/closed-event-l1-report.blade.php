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
                @if (BidHelper::getVendorsLeastStatus($event_id, $bid->item_id, $v->id, $bid->rpu ? $bid->rpu->id : '') == 'L1')
                    <tr>
                        <td>{{ $v->user->username }}</td>
                        <td>{{ $bid->item->description }}</td>
                        <td>{{ $bid->item->unit->code }}</td>
                        <td>{{ $bid->rpu ? $bid->rpu->region->name : 'N/A' }}</td>
                        <td>{{ $bid->rpu ? $bid->rpu->price : 'N/A' }}</td>
                        <td>{{ $bid->rpu ? $bid->rpu->item_unit : 'N/A' }}</td>
                        <td>{{ $bid->rpu ? $bid->rpu->item_unit_details : 'N/A' }}</td>
                        <td>{{ BidHelper::getVendorsLeastStatus($event_id, $bid->item_id, $v->id, $bid->rpu ? $bid->rpu->id : 'N/A') }}
                        </td>
                        <td>{{ $bid->rpu ? $bid->rpu->item_unit : 'N/A' }}</td>
                        <td>{{ BidHelper::getBidAmount($event_id, $bid->item_id, $v->id, $bid->rpu ? $bid->rpu->id : 'N/A')->bidding_price }}
                        </td>
                        <td>{{ CappingHelper::getCappingPrice($event_id, $bid->rpu->id, $bid->item_id, $v->id) }}
                        </td>
                        <td>{{ BidHelper::getNumberOfBidsOf($event_id, $bid->item_id, $bid->rpu->id, $v->id) }}</td>
                    </tr>
                @endif
            @endforeach
        @endforeach
    </tbody>


</table>
