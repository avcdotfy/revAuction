<?php

namespace App\Helpers;

use App\Models\Cappingprice;

class CappingPriceHelper
{

    public static function saveCappingPrice($data)
    {
        if ($data['capping_price']) {
            $match = $data;
            unset($match['capping_price']);
            Cappingprice::updateOrCreate($match, $data);
        }
    }
}
