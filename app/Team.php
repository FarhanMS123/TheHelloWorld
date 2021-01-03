<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Team extends Model
{
    protected $fillable = ["name", "type", "password", "payment", "verified_at", "status"];

    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function getAuthPassword(){
        return $this->password;
    }

    public function members(){
        return $this->hasMany(Member::class, "tid");
    }
}
