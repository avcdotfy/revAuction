<?php

namespace App\Http\Controllers;

use App\Events\BidEvent;
use App\Helpers\BidHelper;
use App\Helpers\EventHelper;
use App\Helpers\ItemHelper;
use App\Models\Bid;
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
        // dd($req->all());
        if (EventHelper::isEventFinished($req->event_id)) {
            return redirect()->back()->with('error', 'event is no longer running');
        }
        $minBidAmount = BidHelper::getLowestPrice($req->event_id, $req->item_id);

        if ($req->bidding_price > $minBidAmount && $minBidAmount != null) {
            return redirect()->back()->with('error', 'Bidding price should be less than last bid price :' . $minBidAmount);
        } else {
            // event(new BidEvent());

            $bids = Bid::where(['event_id' => $req->event_id, 'item_id' => $req->item_id])->orderBy('bidding_price', 'asc')->get();

            // dd($bids);
            if (count($bids) != 0) {
                $leasStatusValue = 2;
                foreach ($bids as $key => $bid) {
                    // if ($key == 0) continue;
                    $bid->update(['least_status' =>  $leasStatusValue]);
                    $leasStatusValue += 1;
                }
            }

            try {
                $bid = Bid::create([
                    'event_id' => $req->event_id,
                    'item_id' => $req->item_id,
                    'item_r_p_u_model_id' => $req->item_rpu_id,
                    'bidding_price' => $req->bidding_price,
                    'least_status' => 1,
                    'vendor_id' => Auth::user()->vendor->id
                ]);

                Auth::user()->vendor->bids()->attach($bid->id);

                $data['bids'] = BidHelper::getLiveBidStatistics($req->event_id, $req->item_id);
                $data['item_id'] = $req->item_id;
                $data['event_id'] = $req->event_id;
                event(new BidEvent($data));

                return redirect()->back()->with('success', 'Bid placed successfully');
            } catch (QueryException $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    }


    function getLiveDataVendorSite(Request $r)
    {
        $data = [
            'lowestBid' => BidHelper::getLowestPrice($r->eId, $r->iId),
            'isMyBidIsLowest' => BidHelper::checkIfVendorhasLowestBid($r->eId, $r->iId),
            'lastBidderPrice' => BidHelper::getLastBidderPrice($r->eId, $r->iId)->bidding_price,
            'decrementAmount' => Item::find($r->iId)->decrement_price
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
