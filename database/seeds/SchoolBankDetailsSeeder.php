<?php

use Illuminate\Database\Seeder;

class SchoolBankDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('school_bank_details')->truncate();
      DB::table('school_bank_details')->insert([
        [
          'bank_id'=>'1',
          'account_name'=>'Moje College',
          'account_number'=>'0091220930',
          'account_purpose_id'=>'1',
          'created_at'=>\Carbon\Carbon::now(),
          'updated_at'=>\Carbon\Carbon::now()
        ],
        [
          'bank_id'=>'5',
          'account_name'=>'Moje College',
          'account_number'=>'3002103302',
          'account_purpose_id'=>'2',
          'created_at'=>\Carbon\Carbon::now(),
          'updated_at'=>\Carbon\Carbon::now()
        ]
      ]);
    }
}
