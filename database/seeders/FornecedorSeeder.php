<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fornecedor::create(['nome' => 'Forn 200', 'site' => 'forn200.com', 'uf' => 'SP', 'email' => 'contato@forn200.com.br']);
        Fornecedor::create(['nome' => 'Forn 300', 'site' => 'forn300.com', 'uf' => 'SP', 'email' => 'contato@forn300.com.br']);
        Fornecedor::create(['nome' => 'Forn 400', 'site' => 'forn400.com', 'uf' => 'SP', 'email' => 'contato@forn400.com.br']);
        Fornecedor::create(['nome' => 'Forn 500', 'site' => 'forn500.com', 'uf' => 'SP', 'email' => 'contato@forn500.com.br']);
    }
}
