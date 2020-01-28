<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //

    protected $fillable = [
        'name',
        'fu'
    ];

    public function syndicates_states()
    {
        return $this->belongsToMany('App\Syndicate', 'syndicates_states')->withTimestamps();
    }
}
