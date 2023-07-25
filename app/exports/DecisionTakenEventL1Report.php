<?php


namespace App\Exports;

use App\Helpers\BidHelper;
use App\Models\Bid;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;


class DecisionTakenEventL1Report implements FromView
{
    private $eId;
    private $iId;

    function __construct($eId)
    {
        $this->eId = $eId;
    }

    public function view(): View
    {
        // dd($this->id);
        $bids = Bid::select('*')->groupBy('item_id')->where(['event_id' => $this->eId, 'decision_status' => 'Accepted'])->orderby('bidding_price', 'asc')->get();
        $bidGroupByVendorId = Bid::select('*',  DB::raw('MIN(bidding_price) as bidding_price'))->groupBy('vendor_id')->get();
        echo json_encode($bids);
        dd();
        $event_id = $this->eId;
        return view('exports.decision-taken-event-l1', compact('bids'));
    }
}
