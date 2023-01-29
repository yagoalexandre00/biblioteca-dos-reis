<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Usuário 1',
            'email' => 'usuario1@teste',
            'password' => bcrypt('1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'Usuário 2',
            'email' => 'usuario2@teste',
            'password' => bcrypt('4321')
        ]);

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@teste',
            'password' => bcrypt('1234'),
            'is_admin' => 1
        ]);


    }
}
