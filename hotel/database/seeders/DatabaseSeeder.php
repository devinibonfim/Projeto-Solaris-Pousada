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
            ProdSeeder::class,
            PessoaSeeder::class,
            AdminSeeder::class,
            QuartosSeeder::class,
            // ReservaSeeder::class,
        ]);
    }
    
}
