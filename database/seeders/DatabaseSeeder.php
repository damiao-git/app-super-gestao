<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FornecedorSeeder::class);
        SiteContato::factory()->count(50)->create();
        $this->call(MotivoContato::class);
    }
}
