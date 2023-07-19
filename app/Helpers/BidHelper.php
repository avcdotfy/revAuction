<?php

namespace App\Helpers;

use App\Models\Bid;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        if ($lowestBidRow) {
            return $lowestBidRow->vendor_id == Auth::user()->vendor->id;
        } else {
            return false;
        }
    }


    public static function getBidStatistics($eId)
    {
        $event = Event::find($eId);
        $bids = Bid::where('event_id', $eId)->groupBy('item_id')->get();

        $bidStarted = false;

        $itemsIdOnWhichBidHasStarted = [];

        if (count($bids) > 0) {
            $bidStarted = true;
            foreach ($bids as $key => $bid) {
                // if (date('Y-m-d') == date('Y-m-d', strtotime($bid->created_at))) {
                // $isTodaysBidAvailable = true;
                $itemsIdOnWhichBidHasStarted[] =  $bid->item_id;
                // }
            }

            foreach ($event->items as $key => $item) {
                if (in_array($item->id, $itemsIdOnWhichBidHasStarted) && $item->id == $itemsIdOnWhichBidHasStarted[$key]) {
                    $item->availableBids = Bid::select('*',  DB::raw('MIN(bidding_price) as bidding_price'))->where('item_id', $item->id)->orderBy('bidding_price', 'asc')->groupBy('vendor_id')->get();
                } else {
                    $item->availableBids = null;
                    unset($event->items[$key]);
                }
            }
        }
        return [$event, $bidStarted];
    }
}
