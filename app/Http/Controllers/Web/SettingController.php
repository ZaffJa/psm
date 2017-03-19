<?php

namespace App\Http\Controllers\Web;

use App\Models\Car;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function view()
    {
        $cars = Car::paginate(50);
        $locations = Location::paginate(50);

        return view('setting',compact('cars','locations'));
    }
}
