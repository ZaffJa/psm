<?php

namespace App\Http\Controllers\Api;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function getLocations()
    {
        return response()->json([
            'code' => 200,
            'message' => 'List of locations',
            'data' => Location::all()
        ]);
    }

}
