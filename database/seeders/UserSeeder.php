<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name'=>'Jhon Sebastian',
            'email'=>'sebastiansanta@gmail.com',
            'password'=>bcrypt('Js123456')
        ])->assignRole('Admin');



        User::create([
            'name'=>'sebastian',
            'email'=>'sebastian@gmail.com',
            'password'=>bcrypt('sa123456')
        ])->assignRole('Dispatcher');

        User::factory(10)->create();

    }
}
