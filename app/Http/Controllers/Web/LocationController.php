<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function view()
    {
        return view('add_location');
    }

    public function store(LocationRequest $request)
    {
        $file = $request->file('image');
        $filePath = '/locations/'.time() . $file->getClientOriginalName();
        $file->move('locations',$filePath);
        $request['file_path'] = $filePath;
        Location::create($request->all());
        return back()->with('status', 'Successfully added a new location');
    }

    public function update(Location $location, Request $request)
    {
        $location->update($request->all());
        return back()->with('status', 'Successfully updated ' . $location->name);
    }

    public function edit(Location $location)
    {
        return view('edit_location', compact('location'));
    }
}
