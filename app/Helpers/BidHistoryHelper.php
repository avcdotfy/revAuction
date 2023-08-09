<?php

namespace App\Helpers;

use App\Models\Bidhistory;

class BidHistoryHelper
{
    public static function getBidLeastStatus($bidId)
    {
        $bid_history = Bidhistory::where('bid_id', $bidId)->first();
        return $bid_history;
    }
}
