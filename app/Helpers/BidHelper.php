<?php

namespace App\Helpers;

use App\Models\Bid;

class BidHelper
{
    public static function getLowestPrice($event_id, $item_id)
    {
        $bid = Bid::where(['event_id' => $event_id, 'item_id' => $item_id])->min('bidding_price');
        return $bid;
    }

    public static function getLastBidderPrice($event_id, $item_id)
    {
        $bid = Bid::orderBy('created_at', 'desc')->where(['event_id' => $event_id, 'item_id' => $item_id])->first();
        
        return $bid;
    }
}
