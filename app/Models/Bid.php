<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    public function getLeastStatusAttribute($value)
    {
        return "L" . $value;
    }
}
