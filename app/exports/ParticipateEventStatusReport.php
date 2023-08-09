<?php


namespace App\Exports;

use App\Helpers\BidHelper;
use App\Models\Bid;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;


class ParticipateEventStatusReport implements FromView
{
    private $eId;
    private $iId;

    function __construct($eId)
    {
        $this->eId = $eId;
    }

    public function view(): View
    {
        $bids = Bid::select('*')->groupBy('item_r_p_u_model_id')->where(['event_id' => $this->eId, 'vendor_id' => Auth::user()->vendor->id])->where('decision_status', '!=', null)->orderby('bidding_price', 'asc')->get();
        return view('exports.participated-event-status-report', compact('bids'));
    }
}
