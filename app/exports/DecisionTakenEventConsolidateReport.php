<?php


namespace App\Exports;

use App\Helpers\BidHelper;
use App\Models\Bid;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;


class DecisionTakenEventConsolidateReport implements FromView
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
        $bids = Bid::select('*')->groupBy('item_r_p_u_model_id')->where(['event_id' => $this->eId, 'decision_status' => 'Accepted'])->orderby('bidding_price', 'asc')->get();
        $bidGroupByVendorId = Bid::select('*',  DB::raw('MIN(bidding_price) as bidding_price'))->groupBy('vendor_id')->get();
        // echo json_encode($bids);
        // dd('');
        // foreach ($bids as $key => $bid) {
        //     echo '<pre>';
        //     var_dump($bid->vendor->user->username);
        //     var_dump($bid->item->name);
        //     var_dump($bid->item->unit->code);
        //     var_dump($bid->item->regionPriceUnit->first()->region->name);
        //     var_dump($bid->item->regionPriceUnit->first()->price);
        //     var_dump($bid->item->regionPriceUnit->first()->item_unit);
        //     var_dump($bid->item->regionPriceUnit->first()->item_unit_details);
        //     var_dump($bid->least_status);
        //     var_dump($bid->item->total_unit);
        //     var_dump($bid->bidding_price);
        //     var_dump($bid->capping_price);
        //     var_dump(BidHelper::getNumberOfBidsOf(2, $bid->item_id));
        //     echo '</pre>';
        // };

        // dd();

        $event_id = $this->eId;

        return view('exports.decision-taken-event-consolidated', compact('bids'));
    }
}
