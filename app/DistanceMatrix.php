<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistanceMatrix extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'origin_id','destination_id','distance','duration','last_synced_at'
    ];


}
