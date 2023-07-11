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

    public function events(){
        return $this->belongsToMany(Event::class , 'event_vendor');
    }
}
