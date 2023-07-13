<?php

namespace App\Helpers;

use App\Models\Bid;
use Illuminate\Support\Facades\Auth;

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

    public static function checkIfVendorhasLowestBid($eId, $iId)
    {
        $lowestBid = Bid::where(['event_id' => $eId, 'item_id' => $iId])->min('bidding_price');
        $lowestBidRow = Bid::where(['event_id' => $eId, 'item_id' => $iId, 'bidding_price' => $lowestBid])->first();
        // dd($lowestBidRow->vendor->first()->id);
        if ($lowestBidRow) {
            return $lowestBidRow->vendor->first()->id == Auth::user()->vendor->id;
        } else {
            return false;
        }
    }
}
