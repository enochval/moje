<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TitlesTableSeeder::class);
        $this->call(LocalGovernmentTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(AdmissionWorkflowPositionTableSeeder::class);
        $this->call(FacultyTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(PaymentPurposeTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(SchoolBankDetailsSeeder::class);
        $this->call(AccountPurposeSeeder::class);
    }
}
