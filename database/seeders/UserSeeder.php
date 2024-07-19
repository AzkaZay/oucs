<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create roles if they do not exist
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $teacherRole = Role::firstOrCreate(['name' => 'teacher']);
        $studentRole = Role::firstOrCreate(['name' => 'student']);

        // Create permissions if necessary
        // Example: Permission::firstOrCreate(['name' => 'some_permission']);

        // Create users and assign roles
        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('azkazay1')
        ]);
        $admin->assignRole($adminRole);

        $teacher = User::create([
            'name' => 'Admin',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('azkazay2')
        ]);
        $teacher->assignRole($teacherRole);

        $student = User::create([
            'name' => 'User',
            'email' => 'student@gmail.com',
            'password' => bcrypt('azkazay3')
        ]);
        $student->assignRole($studentRole);
    }
}
