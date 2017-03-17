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
        $cars = Car::paginate(1);
        $locations = Location::paginate(1);

        return view('setting',compact('cars','locations'));
    }
}
