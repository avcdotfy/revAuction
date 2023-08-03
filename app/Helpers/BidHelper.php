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
    public static function getLowestPrice($event_id, $item_id, $itemRpu_id = null)
    {
        $bid = Bid::where(['event_id' => $event_id, 'item_id' => $item_id, 'item_r_p_u_model_id' => $itemRpu_id])->min('bidding_price');
        return $bid;
    }

    public static function getLastBidderPrice($event_id, $item_id, $itemRpu_id = null)
    {

        $bid = Bid::orderBy('created_at', 'desc')->where(['event_id' => $event_id, 'item_id' => $item_id, 'item_r_p_u_model_id' => $itemRpu_id])->first();
        // $bid = Bid::orderBy('created_at', 'desc')->where(['event_id' => 3, 'item_id' => 22, 'item_r_p_u_model_id' => 1])->first();
        return $bid;
    }

    public static function checkIfVendorhasLowestBid($eId, $iId, $iRpuId = null)
    {

        $lowestBidRow = Bid::where(['event_id' => $eId, 'item_id' => $iId, 'least_status' => '1', 'item_r_p_u_model_id' => $iRpuId])->first();

        if ($lowestBidRow) {
            return $lowestBidRow->vendor_id == Auth::user()->vendor->id;
        } else {
            return false;
        }
    }
    public static function checkIfVendorhasLowestCappingPrice($eId, $iId, $iRpuId = null)
    {
        $lowestCappingPrice = Bid::where(['event_id' => $eId, 'item_id' => $iId, 'item_r_p_u_model_id' => $iRpuId])->where('capping_price', '!=', 0)->min('capping_price');
        $lowestCappingPriceRow = Bid::where(['event_id' => $eId, 'item_id' => $iId, 'capping_price' => $lowestCappingPrice, 'item_r_p_u_model_id' => $iRpuId])->first();

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

        $bids = Bid::where('event_id', $eId)->groupBy('item_r_p_u_model_id')->get();
        $bidStarted = false;
        $rpuOnWhichBidStarted = [];

        if (count($bids) > 0) {
            $bidStarted = true;
            foreach ($bids as $key => $bid) {
                // if (date('Y-m-d') == date('Y-m-d', strtotime($bid->created_at))) {
                // $isTodaysBidAvailable = true;
                $rpuOnWhichBidStarted[] =  $bid->item_r_p_u_model_id;
                // }
            }

            foreach ($event->items as $key => $itemRpu) {

                if (in_array($itemRpu->id, $rpuOnWhichBidStarted)) {
                    $itemRpu->availableBids  = Bid::select('*', DB::raw('MIN(least_status) as least_status'), DB::raw('MIN(bidding_price) as bidding_price'))->where('item_r_p_u_model_id', $itemRpu->id)->orderBy('bidding_price', 'asc')->groupBy('vendor_id')->get();
                } else {
                    unset($event->items[$key]);
                }
            }
        }

        $eventWithAllRPus = Event::find($eId);
        return [$event, $bidStarted, $eventWithAllRPus];
    }

    public static function getLiveBidStatistics($eId, $iId, $rpuId)
    {
        $item = new stdClass;

        $item->availableBids = Bid::select('*', DB::raw('MIN(least_status) as least_status'),  DB::raw('MIN(capping_price)  as capping_price'),  DB::raw('MIN(bidding_price) as bidding_price'))->where(['item_id' => $iId, 'event_id' => $eId, 'item_r_p_u_model_id' => $rpuId])->orderBy('bidding_price', 'asc')->orderBy('capping_price', 'asc')->groupBy('vendor_id')->get();

        return $item;
    }

    public static function getNumberOfBidsOf($eId, $iId, $rpuId = null, $vId = null)
    {
        return  Bid::where(['event_id' => $eId, 'item_id' => $iId, 'item_r_p_u_model_id' => $rpuId, 'vendor_id' => $vId])->count();
    }

    public static function getVendorsLeastStatus($eId, $iId, $vId,  $iRpuId = null)
    {
        // dd($vId);
        $bid = Bid::select('*', DB::raw('MIN(least_status) as least_status'))->where(['event_id' => $eId, 'item_id' => $iId, 'vendor_id' => $vId, 'item_r_p_u_model_id' => $iRpuId])->orderBy('least_status', 'asc')->first();
        // dd($bid);
        return $bid ? $bid->least_status : null;
    }

    public static function getLeastStatusOfVendr($eId, $iId, $vId)
    {
        return Bid::where(['event_id' => $eId, 'item_id' => $iId, 'vendor_id' => $vId])->orderBy('least_status', 'asc')->first();
    }


    public static function getBidAmount($eId, $iId, $vId, $rpuId)
    {
        return Bid::where(['event_id' => $eId, 'item_id' => $iId, 'item_r_p_u_model_id' => $rpuId, 'vendor_id' => $vId])->orderBy('bidding_price', 'asc')->first();
    }
}
