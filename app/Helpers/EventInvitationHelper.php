<?php

namespace App\Helpers;

use App\Mail\EventInviteMail;
use App\Models\ItemRPUModel;
use App\Models\Vendor;
use Illuminate\Support\Facades\Mail;

class EventInvitationHelper
{
    public static function inviteViaEmail($data)
    {

        if ($data['vendor_ids']) {
            $vendors = Vendor::whereIn('id', $data['vendor_ids'])->get();

            $items = ItemRPUModel::whereIn('id', $data['item_ids'])->get();
            $data['items'] = $items;


            foreach ($vendors as $key => $v) {
                Mail::to($v->user->email)->send(new EventInviteMail($data));
            }
        }
    }
}
