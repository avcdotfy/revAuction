<?php

namespace App\Helpers;

use App\Models\Bid;
use App\Models\Leaststatus;
use Illuminate\Support\Facades\DB;

class CappingHelper
{
    public static function getCappingPrice($eId, $rpuId, $iId, $vId)
    {
        $cap =  Bid::select('capping_price', DB::raw('MIN(capping_price) as capping_price'))->where(['event_id' => $eId, 'item_r_p_u_model_id' => $rpuId, 'item_id' => $iId, 'vendor_id' => $vId])->where('capping_price', '!=', 0)->first();
        return $cap ? $cap->capping_price : null;
    }
}
