<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'video',
    ];


    // inverse relationships

    /**
     * Get the property that owns the video.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
