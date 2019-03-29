<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_listed', 'property_type', 'listing_type', 'property_size', 'land_size',
        'price', 'title', 'description', 'title_en', 'description_en', 'title_de', 'description_de',
        'link', 'energy_efficiency',
    ];

    /**
     * Get the locations for the property.
     */
    public function locations()
    {
        return $this->hasMany('App\Location');
    }

    /**
     * Get the contacts for the property.
     */
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }

    /**
     * Get the features for the property.
     */
    public function features()
    {
        return $this->hasMany('App\Feature');
    }

    /**
     * Get the images for the property.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Get the videos for the property.
     */
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    /**
     * Get the tags for the property.
     */
    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
}
