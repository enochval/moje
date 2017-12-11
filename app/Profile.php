<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function local_govt()
    {
        return $this->belongsTo(LocalGovernment::class);
    }

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
