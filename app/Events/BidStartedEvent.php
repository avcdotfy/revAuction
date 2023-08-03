<?php

namespace App\Events;

use App\Models\Bid;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BidStartedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    public $event_id;
    public $item_id;
    public $rpu_id;
    public $count;

    public function __construct($data)
    {
        $this->event_id = $data['event_id'];
        $this->item_id = $data['item_id'];
        $this->rpu_id = $data['rpu_id'];
        $this->count = Bid::where(['event_id' => $this->event_id, 'item_r_p_u_model_id' => $this->rpu_id, 'item_id' => $this->item_id])->count();
        // dd($this->count);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return  new PrivateChannel('bidStarted.' . $this->event_id . '.' . $this->rpu_id . '.' . $this->item_id);
    }
}
