<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalGovernment extends Model
{
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public static function getLocalGovernments($id){
        $local_governments = LocalGovernment::where('state_id',$id)->pluck('local_government','id')->all();
        return json_encode($local_governments);
    }
}
