<?php

namespace App\Helpers;

use App\Models\Bid;
use App\Models\Leaststatus;
use Illuminate\Support\Facades\DB;

class CappingHelper
{
    public static function getCappingPrice($eId, $rpuId, $iId, $vId = null)
    {
        $cap =  Bid::select('capping_price', DB::raw('MIN(capping_price) as capping_price'))->where(['event_id' => $eId, 'item_r_p_u_model_id' => $rpuId, 'item_id' => $iId])->where('capping_price', '!=', 0);

        if ($vId) {
            $cap->where(['vendor_id' => $vId]);
        }

        $cap = $cap->first();
        // dd($cap);
        return $cap ? $cap->capping_price : null;
    }

    // public static function getCappingPriceForReport($eId, $rpuId, $iId, $vId)
    // {
    //     var_dump($eId);
    //     var_dump($iId);
    //     var_dump($rpuId);
    //     var_dump($vId);
    //     $cap =  Bid::where(['event_id' => $eId, 'item_r_p_u_model_id' => $rpuId, 'item_id' => $iId, 'vendor_id' => $vId])->orderBy('capping_price', 'asc')->where('capping_price', '!=', 0)->first();

    //     return $cap ? $cap->capping_price : null;
    // }
}
