<?php

namespace Database\Seeders;

use App\Models\Consumo;
use App\Models\ListaConsumo;
use App\Models\Produto;
use Illuminate\Database\Seeder;

class ConsumoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::factory()->count(30)->create();
        ListaConsumo::factory()->count(15)->create();
    }
}
