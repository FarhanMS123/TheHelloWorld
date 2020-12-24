<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ["fullname", "type", "email", "place_of_birth", "date_of_birth",
                           "lineid", "whatsapp", "git_account", "identity", "cv"];

    public function team(){
        return $this->belongsTo(Team::class, "tid", "id");
    }
}
