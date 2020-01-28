<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syndicate extends Model
{
    //
    protected $fillable = [
        'name',
        'initial',
        'address',
        'neighborhood',
        'zip_code'
    ];

    public function syndicates_sectors()
    {
        return $this->belongsToMany('App\Sector', 'syndicates_sectors')->withTimestamps();
    }

    public function syndicates_states()
    {
        return $this->belongsToMany('App\State', 'syndicates_states')->withTimestamps();
    }

    public function syndicates_cities()
    {
        return $this->belongsToMany('App\City', 'syndicates_cities')->withTimestamps();
    }

    public function regional()
    {
        return $this->belongsTo('App\Regional', 'regional_id');
    }
}
