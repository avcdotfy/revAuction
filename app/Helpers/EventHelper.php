<?php

namespace App\Helpers;

use App\Models\Bid;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

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

    public static function checkEventExist($eId)
    {
        $country = Event::find($eId);
        if (!$country) {
            switch (Auth::user()->user_type) {
                case ADMIN:
                    $route = 'admin-dashboard';
                    break;
                default:
                    $route = 'vendor.dashboard';
                    break;
            }
            return redirect()->route($route)->with('error', 'Event you are trying to access, does not exist');
        }
    }
}
