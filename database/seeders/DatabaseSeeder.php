<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeed::class);
        $this->command->info('Categoria adicionado com sucesso!');

        $this->call(ProdutoSeed::class);
        $this->command->info('Produtos adicionados com sucesso!');
    }
}
