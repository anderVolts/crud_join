<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();
        $dt = Carbon::now();
        $datetime = $dt->toDateTimeString();

        $categorias = [
            [
                'nome_categoria'=> 'Alimentício',
                'created_at'=> $datetime,
                'updated_at'=> $datetime
            ],
            [
                'nome_categoria'=> 'Vestuário',
                'created_at'=> $datetime,
                'updated_at'=> $datetime
            ]
        ];
        DB::table('categorias')->insert($categorias);
    }
}
