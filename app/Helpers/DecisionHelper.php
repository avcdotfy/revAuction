<?php

namespace App\Helpers;

use App\Models\Decision;

class DecisionHelper
{
    public static function getDecisionDetails($event_id, $item_id, $vendor_id)
    {
        $d = Decision::where(['item_id' => $item_id, 'vendor_id' => $vendor_id, 'event_id' => $event_id])->first();
        return $d;
    }
}
