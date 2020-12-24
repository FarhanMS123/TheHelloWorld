<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Team extends Model
{
    protected $fillable = ["name", "type", "passhash", "payment", "verified_at"];

    protected $guarded = ['id'];

    protected $hidden = [
        'passhash', 'remember_token',
    ];

    public function getAuthPassword(){
        return $this->password;
    }

    public function members(){
        return $this->hasMany(Member::class, "tid");
    }
}
