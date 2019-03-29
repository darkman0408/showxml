<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'bedrooms', 'bathrooms', 'rooms', 'condition', 'age', 'floor',
    ];


    // inverse relationships

    /**
     * Get the property that owns the feature.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
