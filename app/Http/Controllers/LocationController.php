<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Property;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $property = Property::find($id);
        
        return view('locations.create')->with('id', $property->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // add location
        $location = new Location([
            'property_id' => $request->get('property_id'),
            'location_postal_code' => $request->get('location_postal_code'),
            'location_city' => $request->get('location_city'),
            'location_address' => $request->get('location_address'),
            'geox' => $request->get('geox'),
            'geoy' => $request->get('geoy')
        ]);
        
        $location->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);

        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // find location
        $location = Location::find($id);

        // update location
        $location->location_postal_code = $request->get('location_postal_code');
        $location->location_city = $request->get('location_city');
        $location->location_address = $request->get('location_address');
        $location->geox = $request->get('geox');
        $location->geoy = $request->get('geoy');

        // save location
        $location->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function choose()
    {
        $properties = Property::all();

        return view('locations.choose', compact('properties'));
    }

    public function updater()
    {
        $locations = Location::all();

        return view('locations.update', compact('locations'));
    }
}
