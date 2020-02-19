<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::insert([
            [
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'username' => 'admin',
                'password' => bcrypt('1234'),
            ],
        ]);
    }
}
