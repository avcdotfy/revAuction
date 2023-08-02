<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function bid()
    {
        return $this->belongsTo(Bid::class);
    }

    public function rpu()
    {
        return $this->belongsTo(ItemRPUModel::class, 'item_r_p_u_model_id');
    }
}
