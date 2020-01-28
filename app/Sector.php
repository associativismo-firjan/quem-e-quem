<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //

    protected $fillable = ['nome'];

    public function syndicates_sectors()
    {
        return $this->belongsToMany('App\Syndicate', 'syndicates_sectors')->withTimestamps();
    }
}
