<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'description', 'price_from_utm', 'file_path','lat','lng'
    ];

    public function getFilePathAttribute($value)
    {
        if ($value != null) {
            return config('app.url') . $value;
        }
        return $value;
    }
}
