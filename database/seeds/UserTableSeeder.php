<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin_role = Role::where('name', '=', 'super-admin')->first();

        $admin_role = Role::where('name', '=', 'admin')->first();

        $all_permissions = Permission::all();

        $super_admin = User::create([
            'school_id' => 'super-admin',
            'registration_number' => 'super-admin',
            'email' => 'super-admin@touchcore.xyz',
            'password' => bcrypt('super-admin'),
        ]);

        $admin = User::create([
            'school_id' => 'admin',
            'registration_number' => 'admin',
            'email' => 'admin@moje.com',
            'password' => bcrypt('admin'),
        ]);

        $super_admin->attachRole($super_admin_role);
        $admin->attachRole($admin_role);

        $super_admin_role->attachPermissions($all_permissions);
    }
}
