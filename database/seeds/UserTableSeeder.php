<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'gynleo@gmail.com',
                'email_verified_at' => now(),
                'password' => 'admin', // password
                'remember_token' => 'test',
            ]
        );
    }
}
