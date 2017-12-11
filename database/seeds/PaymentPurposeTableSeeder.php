<?php

use Illuminate\Database\Seeder;
use App\PaymentPurpose;

class PaymentPurposeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purposes = [
            [
                'name' => 'Registration'
            ],
            [
                'name' => 'School Fee'
            ],
        ];

        foreach ($purposes as $purpose => $value)
        {
            PaymentPurpose::create($value);
        }
    }
}
