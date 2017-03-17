<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name','year','price_per_km','rent_per_hour'
    ];
}
