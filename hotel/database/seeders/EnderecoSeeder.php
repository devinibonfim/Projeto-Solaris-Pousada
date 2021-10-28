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
        Pais::factory()->count(25)->create();
        Estado::factory()->count(25)->create();
        Cidade::factory()->count(25)->create();
        Bairro::factory()->count(25)->create();
        Endereco::factory()->count(25)->create();
    }
}
