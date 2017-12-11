<?php

use Illuminate\Database\Seeder;
//use Carbon;
use Illuminate\Support\Facades\DB;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->truncate();
        DB::table('titles')->insert([
            ['title'=>'Mr', 'created_at'=> \Carbon\Carbon::now(), 'updated_at'=> \Carbon\Carbon::now()],
            ['title'=>'Mrs', 'created_at'=> \Carbon\Carbon::now(), 'updated_at'=> \Carbon\Carbon::now()],
            ['title'=>'Miss', 'created_at'=> \Carbon\Carbon::now(), 'updated_at'=> \Carbon\Carbon::now()],
            ['title'=>'Prof', 'created_at'=> \Carbon\Carbon::now(), 'updated_at'=> \Carbon\Carbon::now()]
        ]);
    }
}
