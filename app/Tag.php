<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'tag',
    ];


    // inverse relationships

    /**
     * Get the property that owns the tag.
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
