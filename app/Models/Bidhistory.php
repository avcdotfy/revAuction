<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidhistory extends Model
{
    use HasFactory;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function bid()
    {
        return $this->belongsTo(Bid::class);
    }
}
