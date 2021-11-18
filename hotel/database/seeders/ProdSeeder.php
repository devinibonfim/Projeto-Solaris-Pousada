<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('produtos')->insert([
            'nome' => 'Manuteção',
            'validade' => '01.01.2000',
            'valor' => '0',
            'descricao' => 'Consumo detalhe',
        ]);
        Produto::factory()->count(50)->create();
    }
}
