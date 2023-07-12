<?php

namespace App\Helpers;

use App\Models\Bid;
use App\Models\Event;

class EventHelper
{
    public static function isEventFinished($event_id)
    {
        $event = Event::where('id', $event_id)->first();
        if ($event->status == COMPLETED) return true;
        return false;
    }

    public static function getLastBidderPrice($event_id, $item_id)
    {
        $bid = Bid::orderBy('created_at', 'desc')->where(['event_id' => $event_id, 'item_id' => $item_id])->first();

        return $bid;
    }
}
