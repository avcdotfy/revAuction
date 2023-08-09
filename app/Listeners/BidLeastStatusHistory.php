<?php

namespace App\Listeners;

use App\Events\BidEvent;
use App\Helpers\BidHelper;
use App\Models\Bid;
use App\Models\Bidhistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class BidLeastStatusHistory
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BidEvent $ev): void
    {
        $ev->event_id;
        $ev->item_id;
        $ev->rpu_id;
        $ev->cat_id;

        // dd($ev->bid_id);

        $bid = Bid::where(['event_id' => $ev->event_id, 'item_id' => $ev->item_id, 'item_r_p_u_model_id' => $ev->rpu_id, 'vendor_id' => Auth::user()->vendor->id]);

        $least_status = $bid->min('least_status');
        // dd($least_status);
        $maxLeastStatusValue = $bid->orderBy('least_status', 'asc')->first()->event->vendors()->count();

        // dd($maxLeastStatusValue);

        if ($maxLeastStatusValue <  $ev->pre_status) {
            $lstatus = $least_status;
            $prev_status = $maxLeastStatusValue;
        } else {
            $lstatus = $least_status;
            $prev_status = $ev->pre_status;
        }

        Bidhistory::create([
            'bid_id' => $ev->bid_id,
            'vendor_id' => Auth::user()->vendor->id,
            'event_id' => $ev->event_id,
            'previous_state' => $prev_status,
            'new_state' => $lstatus
        ]);
        // dd($bid);
    }
}
