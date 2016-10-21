<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','views','likes','country_id'
    ];

    public function scopePopular($query, $take=3)
    {
    	return $query->orderBy('views','desc')->take($take)->get();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
