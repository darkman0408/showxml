<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Contact;

class ContactController extends Controller
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
        
        return view('contacts.create')->with('id', $property->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // add contact
        $contact = new Contact([
            'property_id' => $request->get('property_id'),
            'contact_title' => $request->get('contact_title'),
            'business_title' => $request->get('business_title'),
            'contact_name' => $request->get('contact_name'),
            'contact_surname' => $request->get('contact_surname'),
            'contact_address' => $request->get('contact_address'),
            'contact_addressno' => $request->get('contact_addressno'),
            'contact_zipcode' => $request->get('contact_zipcode'),
            'contact_city' => $request->get('contact_city'),
            'contact_phone' => $request->get('contact_phone'),
            'contact_mobile' => $request->get('contact_mobile'),
            'contact_fax' => $request->get('contact_fax'),
            'contact_email' => $request->get('contact_email')
        ]);
        
        $contact->save();

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
        $contact = Contact::find($id);

        return view('contacts.edit', compact('contact'));
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
        // find contact
        $contact = Contact::find($id);

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
        $contact->save();

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

        return view('contacts.choose', compact('properties'));
    }

    public function updater()
    {
        $contacts = Contact::all();

        return view('contacts.update', compact('contacts'));
    }
}
