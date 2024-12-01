<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert('insert into produtos(nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)', array('Camisa Naruto', 50, 25.00, 'Camisa em algodão, nos tamanhos P, M e G, estampa feita em silkscreen com slasticidade na estampa'));

        DB::insert('insert into produtos(nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)', array('Camisa Goku', 50, 35.00, 'Camisa em algodão, nos tamanhos PP, P, M e G, estampa feita em silkscreen com slasticidade na estampa'));
    }
}
