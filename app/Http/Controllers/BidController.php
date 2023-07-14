<?php

namespace App\Http\Controllers;

use App\Helpers\BidHelper;
use App\Helpers\EventHelper;
use App\Helpers\ItemHelper;
use App\Models\Bid;
use App\Models\Item;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        }
        // if ($req->bidding_price > ItemHelper::getBasePrice($req->item_id)) {
        // } 
        else {
            try {
                $bid = Bid::create([
                    'event_id' => $req->event_id,
                    'item_id' => $req->item_id,
                    'item_r_p_u_model_id' => $req->item_rpu_id,
                    'bidding_price' => $req->bidding_price,
                    'least_status' => '0',
                    'vendor_id' => Auth::user()->vendor->id
                ]);

                Auth::user()->vendor->bids()->attach($bid->id);
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
}
