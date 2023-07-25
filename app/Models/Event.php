<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function vendors()
    {
        return $this->belongsToMany(Vendor::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function eventmode()
    {
        return $this->belongsTo(Eventmode::class);
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }

    public function decisions()
    {
        return $this->hasMany(Decision::class);
    }
}
