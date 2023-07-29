<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function request()
    {
        $this->hasMany(Request::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_vendor');
    }

    public function bids()
    {
        return $this->belongsToMany(Bid::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'preference_region');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'preference_category');
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
