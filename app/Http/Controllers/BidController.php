<?php

namespace App\Http\Controllers;

use App\Events\BidEvent;
use App\Helpers\BidHelper;
use App\Helpers\CappingPriceHelper;
use App\Helpers\EventHelper;
use App\Helpers\ItemHelper;
use App\Models\Bid;
use App\Models\Cappingprice;
use App\Models\Event;
use App\Models\Item;
use App\Models\Participant;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidController extends Controller
{
    //

    function store(Request $req)
    {
        // dd($req->item_id);
        if (EventHelper::isEventFinished($req->event_id)) {
            return redirect()->back()->with('error', 'event is no longer running');
        }
        // dd($req->all());
        $minBidAmount = BidHelper::getLowestPrice($req->event_id, $req->item_id, $req->item_rpu_id);

        // dd($minBidAmount);
        if ($req->capping_price) {
            if ($req->capping_price > $minBidAmount && $minBidAmount != null) {
                return redirect()->route('vendor.liveAuction', $req->event_id)->with('error', 'Capping price should be less than last bid price :' . $minBidAmount);
            }
        }

        if ($req->bidding_price < $req->capping_price) {
            return redirect()->route('vendor.liveAuction', $req->event_id)->with('error', 'Capping price should be less than your bidding price  :' . $req->bidding_price);
        }

        if ($req->bidding_price > $minBidAmount && $minBidAmount != null) {
            return redirect()->route('vendor.liveAuction', $req->event_id)->with('error', 'Bidding price should be less than last bid price :' . $minBidAmount);
        } else {

            try {
                $bid = Bid::create([
                    'event_id' => $req->event_id,
                    'item_id' => $req->item_id,
                    'item_r_p_u_model_id' => $req->item_rpu_id,
                    'bidding_price' => $req->bidding_price,
                    'capping_price' => $req->capping_price ?? 0,
                    'region_id' => $req->region_id ?? 0,
                    'vendor_id' => Auth::user()->vendor->id
                ]);
                Auth::user()->vendor->bids()->attach($bid->id);

                $totalBids = Bid::where(['event_id' => $req->event_id, 'item_id' => $req->item_id, 'item_r_p_u_model_id' => $req->item_rpu_id])->orderBy('bidding_price', 'asc')->get();
                $bidsWithCappingPrice = Bid::where(['event_id' => $req->event_id, 'item_id' => $req->item_id, 'item_r_p_u_model_id' => $req->item_rpu_id])->orderBy('bidding_price', 'asc')->orderBy('capping_price', 'asc')->where('capping_price', '!=', '0')->get();
                $bidsWithoutCappingPrice = Bid::where(['event_id' => $req->event_id, 'item_id' => $req->item_id, 'item_r_p_u_model_id' => $req->item_rpu_id])->orderBy('bidding_price', 'asc')->orderBy('capping_price', 'asc')->where('capping_price', '=', '0')->get();

                $bidsWithCappingPriceCount = count($bidsWithCappingPrice);
                $bidsWithoutCappingPriceCount = count($bidsWithoutCappingPrice);

                $leasStatusValue = 1;
                if ($bidsWithCappingPriceCount > 0) {
                    $leasStatusValue = 1;
                    foreach ($bidsWithCappingPrice as $key => $bid) {
                        $bid->update(['least_status' =>  $leasStatusValue]);
                        $leasStatusValue += 1;
                    }
                }

                if ($bidsWithoutCappingPriceCount > 0) {
                    foreach ($bidsWithoutCappingPrice as $key => $bid) {
                        $bid->update(['least_status' =>  $leasStatusValue]);
                        $leasStatusValue += 1;
                    }
                }

                $data['bids'] = BidHelper::getLiveBidStatistics($req->event_id, $req->item_id, $req->item_rpu_id);
                $data['item_id'] = $req->item_id;
                $data['event_id'] = $req->event_id;
                $data['rpu_id'] = $req->item_rpu_id;
                event(new BidEvent($data));

                return redirect()->route('vendor.liveAuction', $req->event_id)->with('success', 'Bid placed successfully');
            } catch (QueryException $e) {
                return redirect()->route('vendor.liveAuction',  $req->event_id)->with('error', $e->getMessage());
            }
        }
    }


    function getLiveDataVendorSite(Request $r)
    {
        // dd($r->all());
        $data = [
            'event_status' => Event::find($r->eId)->status,
            'lowestBid' => BidHelper::getLowestPrice($r->eId, $r->iId, $r->iRpuId) ? BidHelper::getLowestPrice($r->eId, $r->iId, $r->iRpuId) : 0,
            'isMyBidIsLowest' => BidHelper::checkIfVendorhasLowestBid($r->eId, $r->iId, $r->iRpuId) ? BidHelper::checkIfVendorhasLowestBid($r->eId, $r->iId, $r->iRpuId) : 0,
            'lastBidderPrice' => BidHelper::getLastBidderPrice($r->eId, $r->iId, $r->iRpuId) ? BidHelper::getLastBidderPrice($r->eId, $r->iId, $r->iRpuId)->bidding_price : 0,
            'decrementAmount' => Item::find($r->iId)->decrement_price,
            'least_status' => BidHelper::getVendorsLeastStatus($r->eId, $r->iId, Auth::user()->vendor->id)
        ];
        return response()->json($data);
    }

    function getStaticData($eId, $iId)
    {
        $bids = Bid::where(['event_id' => $eId, 'item_id' => $iId])->get();
        $bidGroupByVendorId = Bid::select('vendor_id',  DB::raw('MIN(bidding_price) as bidding_price'))->groupBy('vendor_id')->get();
        $vendors = [];
        foreach ($bids as $key => $bid) {
            $vendor = $bid->vendor;
            $vendors[] = $vendor;
        }
        return  response()->json(['vendors' => $vendors, 'bidsGrupBy' => $bidGroupByVendorId]);
    }
}
