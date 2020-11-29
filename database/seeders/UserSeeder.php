<?php
# @Date:   2020-11-03T09:46:46+00:00
# @Last modified time: 2020-11-28T21:39:08+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();



        $admin = new User();
        $admin->name = 'Jon Jones';
        $admin->email = 'admin@mmapix.ie';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'Chael P. Sonnen';
        $user->email = 'user@mmapix.ie';
        $user->password = Hash::make('secret');
        $user->save();
        $admin->roles()->attach($role_user);
    }
}
