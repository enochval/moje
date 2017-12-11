<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->truncate();
      DB::table('departments')->insert([
          ['id'=>'1','faculty_id'=>'1','department_code'=>'Department of nursing','department_name'=>'Department of nursing','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
          ['id'=>'2','faculty_id'=>'2','department_code'=>'Department of nursing','department_name'=>'Department of accounting','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
          ['id'=>'3','faculty_id'=>'3','department_code'=>'Department of nursing','department_name'=>'Department of music','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]
      ]);
    }
}
