<?php

namespace App\Listeners;

use App\Events\BidEvent;
use App\Models\Participant;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class BidListener
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
    public function handle(BidEvent $event): void
    {
        if (!Participant::where(['event_id' => $event->event_id, 'item_id' => $event->item_id, 'vendor_id' => Auth::user()->vendor->id])->first()) {
            Participant::create(['event_id' => $event->event_id, 'item_id' => $event->item_id, 'vendor_id' => Auth::user()->vendor->id]);
        }
    }
}
