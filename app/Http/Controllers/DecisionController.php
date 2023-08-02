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
        $bidGroupByVendorId = Bid::select('vendor_id')->groupBy('vendor_id')->where('event_id', $eId)->where('decision_status', null)->orderBy('bidding_price', 'asc')->get();
        // dd($bidGroupByVendorId);
        $bidders = [];
        $event = Event::find($eId);

        foreach ($bidGroupByVendorId as $key => $value) {
            $bidder = new stdClass;
            $bidder->details = $value;
            $bidder->bids =  Bid::select("*", DB::raw('MAX(id) as id'), DB::raw('MIN(least_status) as least_status'), DB::raw('MIN(bidding_price) as bidding_price'))->orderBy('bidding_price', 'ASC')->groupBy('item_r_p_u_model_id')->where(['event_id' => $eId,  'vendor_id' => $value->vendor_id, 'decision_status' => null])->get();
            $bidders[] =  $bidder;
        }
        // dd($bidders);
        // dd($bidders[1]->items[0]);
        return view('admin.pages.event.decision', compact('bidders', 'event'));
    }

    function store(Request $r)
    {
        // dd($r->all());
        foreach ($r->vendor as $ukey => $v) {
            // dd($v['item']);
            foreach ($v['item'] as $lkey => $itm) {

                $d = Decision::create([
                    'event_id' => $r->event_id,
                    'vendor_id' => $v['id'],
                    'item_id' => $itm['id'],
                    'bid_id' => $itm['bid_id'],
                    'remarks' => $itm['remark'],
                    'accepted_qty' => $itm['acceptQty'],
                    'accepted_amount' => $itm['acceptAmount'],
                    'decision_status' => $itm['decision'],
                    'item_r_p_u_model_id' => $itm['rpuId']
                ]);

                if ($d instanceof Decision) {
                    $bid = Bid::find($itm['bid_id'])->update([
                        'decision_status' => $itm['decision'],
                    ]);
                }
            }
        }

        if ($bid) {
            return redirect()->route('event.closed')->with('success', 'decision has been stored successfully');
        }
    }
}
