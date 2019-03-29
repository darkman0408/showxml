<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'location_postal_code', 'location_city', 'location_address', 'geox', 'geoy',
    ];


    // inverse relationships

    /**
     * Get the property that owns the location.
     */
    public function propertyId()
    {
        return $this->belongsTo('App\Property');
    }
}
