<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countrys';

    public static function country()
    {
        $country_list = Country::all();
        $country = array();
        foreach($country_list as $c){
            $country[$c->id] = $c->country;
        }
        return $country;
    }
}
