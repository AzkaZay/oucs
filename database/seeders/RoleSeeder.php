<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        Role::create(['name' => 'admin']); // super admin in UML
        Role::create(['name' => 'teacher']); // admins in UML
        Role::create(['name' => 'student']); // user in UML
    }
}
