<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nome' => 'Eletrônicos',
                'descricao' => 'Produtos eletrônicos e tecnológicos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Roupas',
                'descricao' => 'Vestuário e acessórios',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Casa e Jardim',
                'descricao' => 'Produtos para casa e jardim',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Esportes',
                'descricao' => 'Equipamentos e roupas esportivas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Livros',
                'descricao' => 'Livros e materiais educacionais',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);
    }
} 