<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $a = new User();
        $a->name = "Aditya";
        $a->email = "adi123@gmail.com";
        $a->password = "adi12345";
        $a->usertype = "admin";
        $a->save();
        User::factory()->count(3)->create();
    }
}
