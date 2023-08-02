<?php

namespace App\Helpers;

use App\Models\Bid;
use App\Models\Decision;

class DecisionHelper
{
    public static function getDecisionDetails($event_id, $item_id, $vendor_id, $rpuId = null)
    {
        $d = Decision::where(['item_id' => $item_id, 'vendor_id' => $vendor_id, 'event_id' => $event_id]);

        if ($rpuId) {
            $d->where('item_r_p_u_model_id', $rpuId);
        }
        $d = $d->first();
        return $d;
    }

    public static function getDecisionRowsFromVendorId($vendor_id, $event_id)
    {
        $d = Decision::where(['vendor_id' => $vendor_id, 'event_id' => $event_id])->get();
        return $d;
    }

    public static function checkIfDecisionTakenForEventVendor($event_id, $item_id, $rpuId, $vendor_id)
    { //checks if the decision has been taken for a vendor in a given event , RPU and Item id
        $bid = Bid::where(['event_id' => $event_id, 'item_id' => $item_id, 'item_r_p_u_model_id' => $rpuId, 'vendor_id' => $vendor_id,])->whereIn('decision_status', ['Accepted', 'Rejected'])->first();
        // dd($bid);

        if ($bid) {
            return true;
        }
        return false;
    }
}
