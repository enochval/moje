<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public static function titles(){
        $title_list = Title::all();
        $titles = array();
        foreach($title_list as $t){
            $titles[$t->id] = $t->title;
        }
        return $titles;
    }
}
