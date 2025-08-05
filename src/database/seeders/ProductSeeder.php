<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nome' => 'Smartphone Samsung Galaxy S21',
                'descricao' => 'Smartphone Samsung Galaxy S21 com 128GB, 8GB RAM, Tela 6.2"',
                'preco' => 2999.99,
                'quantidade' => 50,
                'category_id' => 1, // Eletrônicos
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Notebook Dell Inspiron 15',
                'descricao' => 'Notebook Dell Inspiron 15" Intel Core i5, 8GB RAM, 256GB SSD',
                'preco' => 3499.99,
                'quantidade' => 25,
                'category_id' => 1, // Eletrônicos
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Camiseta Básica Masculina',
                'descricao' => 'Camiseta 100% algodão, disponível em várias cores',
                'preco' => 29.99,
                'quantidade' => 100,
                'category_id' => 2, // Roupas
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Vaso de Cerâmica Decorativo',
                'descricao' => 'Vaso de cerâmica para plantas, tamanho médio',
                'preco' => 45.50,
                'quantidade' => 30,
                'category_id' => 3, // Casa e Jardim
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Bola de Futebol Profissional',
                'descricao' => 'Bola de futebol oficial, tamanho 5, material sintético',
                'preco' => 89.99,
                'quantidade' => 40,
                'category_id' => 4, // Esportes
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('products')->insert($products);
    }
} 