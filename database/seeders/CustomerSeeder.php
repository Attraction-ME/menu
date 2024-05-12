<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{

    public function run()
    {
        Customer::create([
            "name" => "One",
            "email" => "one@gmail.com",
            "password" => Hash::make("123456"),
            "is_active" => 1
        ]);

        Customer::create([
            "name" => "Two",
            "email" => "two@gmail.com",
            "password" => Hash::make("123456"),
            "is_active" => 0
        ]);
    }
}