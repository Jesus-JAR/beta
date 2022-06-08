<?php

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
        // \App\Models\User::factory(10)->create();

        // iniciamos las empresas para poder registrar usuarios
        // bussines
        $this->call(BusinessSeeder::class);

        // Roles y permisos
        $this->call(RoleSeeder::class);


        // iniciamos los usuarios solo para debug
        // users
        $this->call(UserSeeder::class);
    }
}
