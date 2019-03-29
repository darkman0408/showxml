<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'image',
    ];


    // inverse relationships

    /**
     * Get the property that owns the image.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
