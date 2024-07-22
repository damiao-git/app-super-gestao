<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteContato::create(['nome' => 'Sistema SG','telefone' => '(62)95874-9666','email' => 'contato@sg.com.br','motivo' => '1','mensagem' => 'Seja bem-vindo ao Super Gestão!',]);
    }
}
