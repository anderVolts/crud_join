<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->delete();
        $dt = Carbon::now();
        $datetime = $dt->toDateTimeString();

        $produtos = [
            [
                'id_categoria_produto'=> 1,
                'nome_produto' => 'Café',
                'valor_produto' => 15.00,
                'created_at'=> $datetime,
                'updated_at'=> $datetime
            ],
            [
                'id_categoria_produto'=> 2,
                'nome_produto' => 'Camiseta',
                'valor_produto' => 150.00,
                'created_at'=> $datetime,
                'updated_at'=> $datetime
            ]
        ];
        DB::table('produtos')->insert($produtos);
    }
}
