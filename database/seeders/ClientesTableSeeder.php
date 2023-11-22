<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $numeroDeClientes = 50 ;

        for ($i = 100; $i < $numeroDeClientes; $i++) {
            DB::table('clientes')->insert([
                'nome' => $faker->name,
                'email' => $faker->email,
                'telefone' => $faker->phoneNumber,
                'endereco' => $faker->address,
            ]);
        }
    }
}
