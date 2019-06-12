<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin->givePermissionTo(Permission::all());

        $adminUser = User::create([
            'first_name' => "Will",
            'last_name' => ' Nguyễn',
            'username' => 'nguyenhuutuananh',
            'email' => "nguyenhuutuananh2@gmail.com",
            'password' => bcrypt("admin123!@#"),
        ]);
        $adminUser->assignRole('super-admin');
    }
}
