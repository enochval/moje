<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [];

    public function localGovernement()
    {
        return $this->hasMany(LocalGovernment::class);
    }
    public static function states()
    {
        $state_list = State::all();
        $states = array();
        foreach ($state_list as $s){
            $states[$s->id] = $s->state;
        }
        return $states;
    }
}
