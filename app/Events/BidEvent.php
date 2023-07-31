<?php

namespace App\Events;

use App\Helpers\BidHelper;
use App\Helpers\CappingHelper;
use App\Models\Bid;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class BidEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    public $event_id;
    public $item_id;
    public $vendors;

    public function __construct($data)
    {

        $this->event_id = $data['event_id'];
        $this->item_id = $data['item_id'];

        $vendors = [];

        foreach ($data['bids']->availableBids as $key => $bid) {

            // dd($vendor);
            $v = new stdClass;
            $v->phone = $bid->vendor->user->phone;
            $v->company =  $bid->vendor->company_name;
            $v->username   =    $bid->vendor->user->username;
            $v->bidd_price  =    $bid->bidding_price;
            $v->least_status  =    BidHelper::getVendorsLeastStatus($this->event_id, $this->item_id, $bid->vendor->id);
            $v->capping_price  =   CappingHelper::getCappingPrice($this->event_id, $this->item_id, $bid->vendor->id);
            $v->vendor_id  =  $bid->vendor->id;
            $vendors[] = $v;
        }

        $this->vendors = $vendors;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return  new PrivateChannel('bidderStatus.' . $this->event_id . '.' . $this->item_id);
    }
}
