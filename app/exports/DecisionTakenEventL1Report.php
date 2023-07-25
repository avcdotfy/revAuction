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
        $bids = Bid::select('*')->groupBy('item_id')->where(['event_id' => $this->eId, 'decision_status' => 'Accepted', 'least_status' => '1'])->orderby('bidding_price', 'asc')->get();
        return view('exports.decision-taken-event-l1', compact('bids'));
    }
}
