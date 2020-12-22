<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Team extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
        'passhash', 'remember_token',
    ];

    public function getAuthPassword(){
        return $this->passhash;
    }
}
