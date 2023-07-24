<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Decision;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DecisionController extends Controller
{
    function index($eId)
    {
        $bidGroupByVendorId = Bid::select('vendor_id')->groupBy('vendor_id')->where('event_id', $eId)->orderBy('bidding_price', 'asc')->get();
        // dd($bidGroupByVendorId);
        $bidders = [];
        $event = Event::find($eId);

        foreach ($bidGroupByVendorId as $key => $value) {
            $bidder = new stdClass;
            $bidder->details = $value;

            // $bidder->items =  Bid::select('*', DB::raw('MIN(bidding_price) as bidding_price'))->groupBy('item_id')->where(['event_id' => $eId,  'vendor_id' => $value->vendor_id])->orderBy('bidding_price' , 'asc')->get();

            $bidder->items =  Bid::select("*", DB::raw('MIN(least_status) as least_status'), DB::raw('MIN(bidding_price) as bidding_price'))->orderBy('bidding_price', 'asc')->groupBy('item_id')->where(['event_id' => $eId,  'vendor_id' => $value->vendor_id])->get();

            // dd($bidder->items[0]->item);
            $bidders[] =  $bidder;
        }
        // dd($bidders);
        return view('admin.pages.event.decision', compact('bidders', 'event'));
    }

    function store(Request $r)
    {
        dd($r->all());

       

         
                // $d = Decision::create([
                //     'event_id'=> $r->event_id  ,
                //     'vendor_id'=> $vid  ,
                //     'item_id'=>$iId  ,
                //     'bid_id'=>$r->   ,
                //     'remarks'=>$r->   ,
                //     'accepted_qty'=>$r->   ,
                //     'accepted_amount'=>$r->   ,
                //     'decision_status'=>$r->   ,
                // ])
            
       
    }
}
