<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SiteContato::factory()->count(50)->create();
       // SiteContato::create(['nome' => 'Sistema SG','telefone' => '(62)95874-9666','email' => 'contato@sg.com.br','motivo' => '1','mensagem' => 'Seja bem-vindo ao Super Gestão!',]);
    }
}
