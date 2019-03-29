<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Property;

class FeatureController extends Controller
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
        
        return view('features.create')->with('id', $property->id);
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
        $feature = new Feature([
            'property_id' => $request->get('property_id'),
            'bedrooms' => $request->get('bedrooms'),
            'bathrooms' => $request->get('bathrooms'),
            'rooms' => $request->get('rooms'),
            'condition' => $request->get('condition'),
            'age' => $request->get('age'),
            'floor' => $request->get('floor')
        ]);
        
        $feature->save();

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
        $feature = Feature::find($id);

        return view('features.edit', compact('feature'));
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
        // find feature
        $feature = Feature::find($id);

        // update feature
        $feature->bedrooms = $request->get('bedrooms');
        $feature->bathrooms = $request->get('bathrooms');
        $feature->rooms = $request->get('rooms');
        $feature->condition = $request->get('condition');
        $feature->age = $request->get('age');
        $feature->floor = $request->get('floor');

        // save feature
        $feature->save();

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

        return view('features.choose', compact('properties'));
    }

    public function updater()
    {
        $features = Feature::all();

        return view('features.update', compact('features'));
    }
}
