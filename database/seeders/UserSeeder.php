<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Jesus',
            'last_name' => 'Arraras',
            'email' => 'jesusarraras@admin.es',
            'email_verified_at' => now(),
            'password' => 'J1111j', // password
            'remember_token' => Str::random(10),
            'cod_emp' => 1,
            'work_hours' => 8,
            'phone' => '661177686',
            'created_at' => now(),
        ])->assignRole('Super Admin');

        User::create([
            'first_name' => 'Eduardo',
            'last_name' => 'Arraras',
            'email' => 'edumontana@manager.es',
            'email_verified_at' => now(),
            'password' => 'J1111j', // password
            'remember_token' => Str::random(10),
            'cod_emp' => 2,
            'work_hours' => 8,
            'phone' => '618012345',
            'created_at' => now(),
        ])->assignRole('Manager');

        User::create([
            'first_name' => 'Steve',
            'last_name' => 'Rogers',
            'email' => 'Rogers@admin.es',
            'email_verified_at' => now(),
            'password' => 'J1111j', // password
            'remember_token' => Str::random(10),
            'cod_emp' => 3,
            'work_hours' => 8,
            'phone' => '661177686',
            'created_at' => now(),
        ])->assignRole('Admin');

        User::create([
            'first_name' => 'Rorbert',
            'last_name' => 'Downey',
            'email' => 'ironman@manager.es',
            'email_verified_at' => now(),
            'password' => 'J1111j', // password
            'remember_token' => Str::random(10),
            'cod_emp' => 3,
            'work_hours' => 8,
            'phone' => '618012345',
            'created_at' => now(),
        ])->assignRole('Manager');
    }
}
