<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    public $vendor_id;
    public $event_title;

    public function __construct($data)
    {
        $this->vendor_id = $data['vendor_id'];
        $this->event_title = $data['event_title'];
    }

    public function broadcastOn()
    {
        return  new PrivateChannel('eventCreated.' . $this->vendor_id);
    }
}
