<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->truncate();
        DB::table('states')->insert([
           ['state'=>'Abia', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Adamawa', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Akwa Ibom', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Anambra', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Bauchi', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Bayelsa', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Benue', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Borno', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Cross River', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Delta', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Ebonyi', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Edo', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Ekiti', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Enugu', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Federal Capital Territory', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Gombe', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Imo', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Jigawa', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Kaduna', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Kano', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Kastina', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Kebbi', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Kogi', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Kwara', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Lagos', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Nasarawa', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Niger', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Ogun', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Ondo', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Osun', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Oyo', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Plateau', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Rivers', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Sokoto', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Taraba', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Yobe', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
           ['state'=>'Zamfara', 'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()]
        ]);
    }
}
