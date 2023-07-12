<?php

namespace App\Http\Controllers;

use App\Helpers\EventHelper;
use App\Models\Bid;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BidController extends Controller
{
    //

    function store(Request $req)
    {
        // dd($req->all());
        // $data =
        if (EventHelper::isEventFinished($req->event_id)) {
            return redirect()->back()->with('error', 'event is no longer running');
        } else {
            try {
                $bid = Bid::create([
                    'event_id' => $req->event_id,
                    'item_id' => $req->item_id,
                    'bidding_price' => $req->bidding_price,
                    'least_status' => '0',
                ]);

                Auth::user()->vendor->bids()->attach($bid->id);
                return redirect()->back()->with('success', 'Bid placed successfully');
            } catch (QueryException $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
    }
}
