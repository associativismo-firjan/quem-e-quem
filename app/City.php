<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function state()
    {
        return $this->belongsTo('App\State', 'state_id');
    }

    public function syndicates_cities()
    {
        return $this->belongsToMany('App\Syndicate', 'syndicates_cities')->withTimestamps();
    }
}
