<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'name' => 'super-admin',
                'display_name' => 'Super Admin',
                'description' => 'Touchcore ltd developer',
            ],
            [
                'name' => 'admin',
                'display_name' => 'School Admin',
                'description' => 'Controls and manages the school system',
            ],
            [
                'name' => 'registrar',
                'display_name' => 'Registrar',
                'description' => 'Manages the registration process',
            ],
            [
                'name' => 'admin-officer',
                'display_name' => 'Admin Officer',
                'description' => 'Works under the registrar, to make the registration process smooth and easy',
            ],
            [
                'name' => 'account-officer',
                'display_name' => 'Account Officer',
                'description' => 'Manage all the payment of the school',
            ],
            [
                'name' => 'applicant',
                'display_name' => 'Applicant',
                'description' => 'Prospective students',
            ],
        ];

        foreach ($role as $key => $value)
        {
            Role::create($value);
        }
    }
}
