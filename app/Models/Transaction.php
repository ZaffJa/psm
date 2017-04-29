<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id','location_id','car_id','request_type','price','pickup_time','pickup_location','duration','owner_id',
        'status','pickup_lat','pickup_lng'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'owner_id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}
