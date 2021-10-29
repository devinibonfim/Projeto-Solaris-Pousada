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
        User::factory()->count(10)->create();
        Pessoa::factory()->count(10)->create();
        Hospede::factory()->count(10)->create();
        Funcionario::factory()->count(10)->create();
    }
}
