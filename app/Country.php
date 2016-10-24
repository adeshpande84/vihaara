<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Country extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function cities()
    {
    	return $this->hasMany(City::class);
    }

    public function scopePopular($query,$take=3)
    {
        
        return Country::join('cities','countries.id','=','cities.country_id')->select(DB::raw('countries.id,countries.name,sum(cities.views) as totalLikes'))->groupBy('countries.id','countries.name')->orderBy('totalLikes','desc')->get();


    }
}
