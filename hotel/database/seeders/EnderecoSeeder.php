<?php

namespace Database\Seeders;

use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Endereco;
use App\Models\Estado;
use App\Models\Pais;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::factory()->count(20)->create();
        Estado::factory()->count(40)->create();
        Cidade::factory()->count(80)->create();
        Bairro::factory()->count(160)->create();
        // Endereco::factory()->count(250)->create();
    }
}
