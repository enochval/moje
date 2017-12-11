<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function faculty()
    {
        $this->belongsTo(Faculty::class,'faculty_id');
    }

    public static function getDepartments($id)
    {
        $departments = Department::where('faculty_id',$id)->pluck('department_name','id')->all();
        return json_encode($departments);
    }

    public static function departments()
    {
        $department_list = Department::all();
        $department = array();
        foreach ($department_list as $d)
        {
            $department[$d->id] = $d->department_name;
        }
        return $department;
    }
}
