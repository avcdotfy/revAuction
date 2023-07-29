<?php

namespace App\Helpers;

use App\Models\Leaststatus;

class LeastStatusHelper
{
    public static function saveNewStatus($data)
    {
        $match = $data;
        unset($match['rank']);
        Leaststatus::updateOrCreate($match, $data);
    }

    public static function updateRanks($req)
    {
        $status = Leaststatus::where(['event_id' => $req->event_id, 'item_id' => $req->item_id])->orderBy('bidding_price', 'asc')->get();

        // dd($bids);
        if (count($status) != 0) {
            $leasStatusValue = 2;
            foreach ($status as $key => $s) {
                // if ($key == 0) continue;
                $s->update(['rank' =>  $leasStatusValue]);
                $leasStatusValue += 1;
            }
        }
    }
}
