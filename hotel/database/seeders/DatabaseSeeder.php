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
            EnderecoSeeder::class,
            PessoaSeeder::class,
            Produto::factory()->count(98)->create(),
            Consumo::factory()->count(5)->create(),
            // ConsumoSeeder::class,
            // QuartosSeeder::class,
            // ReservaSeeder::class,
        ]);
    }
    
}
