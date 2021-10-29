<?php

namespace Database\Seeders;

use App\Models\Quarto;
use App\Models\TipoQuarto;
use Illuminate\Database\Seeder;

class QuartosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoQuarto::factory()->count(3)->create();
        Quarto::factory()->count(10)->create();
    }
}
