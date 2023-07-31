<?php

namespace App\Helpers;

use App\Events\BidEvent;
use App\Models\Bid;
use App\Models\Cappingprice;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\Configuration\Merger;
use stdClass;

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

        $lowestBidRow = Bid::where(['event_id' => $eId, 'item_id' => $iId, 'least_status' => '1'])->first();

        if ($lowestBidRow) {
            return $lowestBidRow->vendor_id == Auth::user()->vendor->id;
        } else {
            return false;
        }
    }
    public static function checkIfVendorhasLowestCappingPrice($eId, $iId)
    {
        $lowestCappingPrice = Bid::where(['event_id' => $eId, 'item_id' => $iId])->where('capping_price', '!=', 0)->min('capping_price');
        $lowestCappingPriceRow = Bid::where(['event_id' => $eId, 'item_id' => $iId, 'capping_price' => $lowestCappingPrice])->first();

        if ($lowestCappingPriceRow) {
            if ($lowestCappingPrice > 0)
                return $lowestCappingPriceRow->vendor_id == Auth::user()->vendor->id;
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
                    $item->availableBids = Bid::select('*', DB::raw('MIN(least_status) as least_status'), DB::raw('MIN(bidding_price) as bidding_price'))->where('item_id', $item->id)->orderBy('bidding_price', 'asc')->groupBy('vendor_id')->get();
                } else {
                    $item->availableBids = null;
                    unset($event->items[$key]);
                }
            }
        }

        // dd($item->availableBids);
        return [$event, $bidStarted];
    }

    public static function getLiveBidStatistics($eId, $iId)
    {
        $item = new stdClass;

        $item->availableBids = Bid::select('*', DB::raw('MIN(least_status) as least_status'),  DB::raw('MIN(capping_price)  as capping_price'),  DB::raw('MIN(bidding_price) as bidding_price'))->where(['item_id' => $iId, 'event_id' => $eId])->orderBy('bidding_price', 'asc')->orderBy('capping_price', 'asc')->groupBy('vendor_id')->get();

        return $item;
    }

    public static function getNumberOfBidsOf($eId, $iId)
    {
        return  Bid::where(['event_id' => $eId, 'item_id' => $iId])->count();
    }

    public static function getVendorsLeastStatus($eId, $iId, $vId)
    {
        // dd($vId);
        $bid = Bid::select('*', DB::raw('MIN(least_status) as least_status'))->where(['event_id' => $eId, 'item_id' => $iId, 'vendor_id' => $vId])->orderBy('least_status', 'asc')->first();
        // dd($bid);
        return $bid ? $bid->least_status : null;
    }


    public static function getLeastStatusOfVendr($eId, $iId, $vId)
    {
        return Bid::where(['event_id' => $eId, 'item_id' => $iId, 'vendor_id' => $vId])->orderBy('least_status', 'asc')->first();
    }
}
