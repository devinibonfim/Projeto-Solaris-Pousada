<?php

namespace Database\Seeders;

use App\Models\Consumo;
use App\Models\Produto;
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
        $this->call([
            PessoaSeeder::class,
            // ConsumoSeeder::class,
            QuartosSeeder::class,
            // ReservaSeeder::class,
        ]);
    }
    
}
