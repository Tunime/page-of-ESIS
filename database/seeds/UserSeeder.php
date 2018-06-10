<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
           'name' => 'Admin',
           'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'avanzado',
            'email' => 'advanced@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => 3,
        ]);
    }
}
