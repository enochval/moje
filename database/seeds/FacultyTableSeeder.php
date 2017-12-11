<?php

use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('facultys')->truncate();
      DB::table('facultys')->insert([
          ['id'=>'1','faculty_code'=>'SC','faculty'=>'Faculty of science','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
          ['id'=>'2','faculty_code'=>'SB','faculty'=>'Faculty of business','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
          ['id'=>'3','faculty_code'=>'SA','faculty'=>'Faculty of art','created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]
      ]);
    }
}
