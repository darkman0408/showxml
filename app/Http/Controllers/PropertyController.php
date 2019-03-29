<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Location;
use App\Contact;
use App\Feature;
use App\Image;
use App\Video;
use App\Tag;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::with('locations', 'contacts', 'features', 'images', 'videos', 'tags')->get();

        $content = view('properties.index', compact('properties'));

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'date_listed' => 'required',
            'property_type' => 'required',
            'listing_type' => 'required',
            'property_size' => 'required|integer',
            'land_size' => 'required|integer',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'title' => 'required',
            'description' => 'required',
        ]);

        // add properties
        $property = new Property([
            'date_listed' => $request->get('date_listed'),
            'property_type' => $request->get('property_type'),
            'listing_type' => $request->get('listing_type'),
            'property_size' => $request->get('property_size'),
            'land_size' => $request->get('land_size'),
            'price' => $request->get('price'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'title_en' => $request->get('title_en'),
            'description_en' => $request->get('description_en'),
            'title_de' => $request->get('title_de'),
            'description_de' => $request->get('description_de'),
            'link' => $request->get('link'),
            'energy_efficiency' => $request->get('energy_efficiency')
        ]);

        // save properties into database
        $property->save();

        return redirect('/properties')->with('success', 'Property has been added');
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
        $property = Property::with('locations', 'contacts', 'features', 'images', 'videos', 'tags')->get()->find($id);

        return view('properties.edit', compact('property'));
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
        // find property
        $property = Property::find($id);

        // update property
        $property->date_listed = $request->get('date_listed');
        $property->property_type = $request->get('property_type');
        $property->listing_type = $request->get('listing_type');
        $property->property_size = $request->get('property_size');
        $property->land_size = $request->get('land_size');
        $property->price = $request->get('price');
        $property->title = $request->get('title');
        $property->description = $request->get('description');
        $property->title_en = $request->get('title_en');
        $property->description_en = $request->get('description_en');
        $property->title_de = $request->get('title_de');
        $property->description_de = $request->get('description_de');
        $property->link = $request->get('link');
        $property->energy_efficiency = $request->get('energy_efficiency');
        
        // save property into database
        $property->save();

        // find locations related to property
        /* $location = Location::where('property_id', $id)->first();

        // update location
        $location->location_postal_code = $request->get('location_postal_code');
        $location->location_city = $request->get('location_city');
        $location->location_address = $request->get('location_address');
        $location->geox = $request->get('geox');
        $location->geoy = $request->get('geoy');

        // save location
        $property->locations()->save($location);

        // find contact related to property
        $contact = Contact::where('property_id', $id)->first();

        // update contact
        $contact->contact_title = $request->get('contact_title');
        $contact->business_title = $request->get('business_title');
        $contact->contact_name = $request->get('contact_name');
        $contact->contact_surname = $request->get('contact_surname');
        $contact->contact_address = $request->get('contact_address');
        $contact->contact_addressno = $request->get('contact_addressno');
        $contact->contact_zipcode = $request->get('contact_zipcode');
        $contact->contact_city = $request->get('contact_city');
        $contact->contact_phone = $request->get('contact_phone');
        $contact->contact_mobile = $request->get('contact_mobile');
        $contact->contact_fax = $request->get('contact_fax');
        $contact->contact_email = $request->get('contact_email');

        // save contact
        $property->contacts()->save($contact);

        // find feature related to property
        $feature = Feature::where('property_id', $id)->first();

        // update feature
        $feature->bedrooms = $request->get('bedrooms');
        $feature->bathrooms = $request->get('bathrooms');
        $feature->rooms = $request->get('rooms');
        $feature->condition = $request->get('condition');
        $feature->age = $request->get('age');
        $feature->floor = $request->get('floor');

        // save feature
        $property->fetures()->save($feature);

        // image update
        $image = Image::where('property_id', $id)->first();
        $image->image = $request->get('image');
        $property->images()->save($image);

        // video update
        $video = Video::where('property_id', $id)->first();
        $video->video = $request->get('video');
        $property->videos()->save($video);

        // tag update
        $tag = Tag::where('property_id', $id)->first();
        $tag->tag = $request->get('tag');
        $property->tags()->save($tag); */

        return redirect('/properties')->with('success', 'Property has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect('/properties')->with('success', 'Stock has been deleted Successfully');
    }

    public function choose()
    {
        $properties = Property::all();

        return view('properties.choose', compact('properties'));
    }

    public function delete()
    {
        $properties = Property::all();

        return view('properties.delete', compact('properties'));
    }
}
