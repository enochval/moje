<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable =  [];

    protected $table = 'facultys';

    public function department()
    {
        return $this->hasMany(Department::class);
    }
    public static function faculty()
    {
        $faculty_list = Faculty::all();
        $faculty = array();
        foreach ($faculty_list as $f){
            $faculty[$f->id] = $f->faculty;
        }
        return $faculty;
    }
}
