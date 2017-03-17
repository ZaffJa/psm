<?php

namespace App\Http\Controllers\Web;

use App\Models\Car;
use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function view()
    {
        return view('add_car');
    }

    public function store(CarRequest $request)
    {
        Car::create($request->all());
        return back()->with('status', 'Successfully added a new car');
    }

    public function update(Car $car, Request $request)
    {
        $car->update($request->all());
        return back()->with('status', 'Successfully updated ' . $car->name);
    }

    public function edit(Car $car)
    {
        return view('edit_car', compact('car'));
    }
}
