<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'contact_title', 'business_title', 'contact_name', 'contact_surname', 'contact_address', 'contact_addressno',
        'contact_zipcode', 'contact_city', 'contact_phone', 'contact_mobile', 'contact_fax', 'contact_email',
    ];


    // inverse relationships

    /**
     * Get the property that owns the contact.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
