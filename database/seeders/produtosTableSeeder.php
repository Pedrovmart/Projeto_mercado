<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class produtosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can adjust the number of products you want to seed
        $numberOfProducts =100 ;

        // Using a loop to create and save sample products
        for ($i = 1; $i <= $numberOfProducts; $i++) {
            Produto::create([
                'descricao' => 'Produto ' . $i,
                'preco_unitario' => rand(10, 100),
                'estoque' => rand(5, 50),
                'data_vencimento' => now()->addDays(rand(1, 30)),
            ]);
        }
    }
}
