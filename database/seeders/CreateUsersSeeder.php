<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'user@techsolutionstuff.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Super Admin',
                'email'=>'super-admin@elftooh.com',
                'type'=>1,
                'password'=> bcrypt('adminadmin'),
            ],
            [
               'name'=>'Manager',
               'email'=>'manager@techsolutionstuff.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
