<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function remark()
    {
        return $this->hasOne(Remark::class)->latest();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
