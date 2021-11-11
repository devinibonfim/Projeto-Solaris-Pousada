<?php

namespace Database\Seeders;

use App\Models\Quarto;
use App\Models\TipoQuarto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuartosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $i=0;
        for($i=1;$i<=8;$i++){
            DB::table('quartos')->insert([
                'tipoQuarto_id' => 1,
                'andar' => 1,
                'numero' => $i,
            ]);
        }
        for($i=1;$i<=6;$i++){
            DB::table('quartos')->insert([
                'tipoQuarto_id' => 2,
                'andar' => 2,
                'numero' => $i,
            ]);
        }
        for($i=1;$i<=6;$i++){
            DB::table('quartos')->insert([
                'tipoQuarto_id' => 3,
                'andar' => 3,
                'numero' => $i,
            ]);
        }
    }
}
