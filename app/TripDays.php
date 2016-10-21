<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripDays extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'origin_id','destination_id','num_days','last_synced_at'
    ];
}
