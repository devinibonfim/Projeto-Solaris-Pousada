<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use App\Models\Hospede;
use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hospede::factory()->count(50)->create();
        Funcionario::factory()->count(20)->create();
    }
}
