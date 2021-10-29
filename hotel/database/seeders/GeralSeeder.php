<?php

namespace Database\Seeders;

use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Consumo;
use App\Models\Endereco;
use App\Models\Estado;
use App\Models\Funcionario;
use App\Models\Hospede;
use App\Models\Pais;
use App\Models\Pessoa;
use App\Models\Produto;
use App\Models\Quarto;
use App\Models\TipoQuarto;
use App\Models\User;
use Illuminate\Database\Seeder;

class GeralSeeder extends Seeder
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

        User::factory()->count(10)->create();
        Pessoa::factory()->count(10)->create();
        Hospede::factory()->count(10)->create();
        Funcionario::factory()->count(10)->create();

        TipoQuarto::factory()->count(3)->create();
        Quarto::factory()->count(10)->create();

        Produto::factory()->count(30)->create();
        Consumo::factory()->count(40)->create();

        TipoQuarto::factory()->count(3)->create();
        Quarto::factory()->count(10)->create();
    }
}
