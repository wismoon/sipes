<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' => '1',
            'password' => bcrypt('12345'),
        ]
    ];

    foreach ($user as $key => $value){
        User::create($value);
    }
    }
}
