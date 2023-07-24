<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DecisionController extends Controller
{
    //

    function index($eId)
    {


        // $bidGroupByItemId = Bid::select('item_id')->groupBy('item_id')->where('event_id', $eId)->get();

        // $items = [];

        // foreach ($bidGroupByItemId as $key => $value) {
        //     $item = new stdClass;
        //     $item->details = $value;
        //     $item->bidder =  Bid::select('vendor_id', 'bidding_price')->groupBy('vendor_id')->orderBy('bidding_price', 'asc')->where(['event_id' => $eId, 'item_id' => $value->item_id])->limit(5)->get();
        //     $items[] =  $item;
        // }


        $bidGroupByVendorId = Bid::select('vendor_id')->groupBy('vendor_id')->where('event_id', $eId)->get();
        // dd($bidGroupByVendorId);

        $bidders = [];
        $event = Event::find($eId);
        foreach ($bidGroupByVendorId as $key => $value) {
            $bidder = new stdClass;
            $bidder->details = $value;
            $bidder->items =  Bid::select('item_id', 'bidding_price')->groupBy('item_id')->orderBy('bidding_price', 'asc')->where(['event_id' => $eId, 'vendor_id' => $value->vendor_id])->limit(5)->get();
            $bidders[] =  $bidder;
        }
        // dd($bidders);
        return view('admin.pages.event.decision', compact('bidders', 'event'));
    }
}
