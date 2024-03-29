<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $numeroDeClientes = 60;

        for ($i = 0; $i < $numeroDeClientes; $i++) {
            \DB::table('Clientes')->insert([
                'nome' => $faker->name,
                'data_nascimento' => $faker->date,
                'nacionalidade' => $faker->country,
            ]);
        }
    }
}
// Comando para rodar as Seeders
//php artisan db:seed --class=ClientesTableSeeder