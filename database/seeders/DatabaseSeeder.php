<?php
# @Date:   2020-11-28T20:11:08+00:00
# @Last modified time: 2020-11-28T21:30:17+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
    }
}
