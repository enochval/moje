<?php

use Illuminate\Database\Seeder;

class AccountPurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('account_purposes')->truncate();
      DB::table('account_purposes')->insert([
        [
          'name'=>'Registration',
          'created_at'=>\Carbon\Carbon::now(),
          'updated_at'=>\Carbon\Carbon::now()
        ],
        [
          'name'=>'Admission',
          'created_at'=>\Carbon\Carbon::now(),
          'updated_at'=>\Carbon\Carbon::now()
        ]
      ]);
    }
}
