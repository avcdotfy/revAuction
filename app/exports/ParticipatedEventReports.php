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


class ParticipatedEventReports implements FromView
{
    private $eId;
    private $iId;

    function __construct($eId)
    {
        $this->eId = $eId;
    }

    public function view(): View
    {
        $bids = Bid::select('*')->where(['event_id' => $this->eId, 'vendor_id' => Auth::user()->vendor->id])->orderby('bidding_price', 'desc')->get();
        // dd($bids);
        return view('exports.participated-event-report', compact('bids'));
    }
}
