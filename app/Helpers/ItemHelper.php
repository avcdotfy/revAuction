<?php

namespace App\Helpers;

use App\Models\Item;

class ItemHelper
{
    public  static function getBasePrice($iId)
    {
        $item = Item::find($iId);

        dd($item->regionPriceUnit);
    }
}
