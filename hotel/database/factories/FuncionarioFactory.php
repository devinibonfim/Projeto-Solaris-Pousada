<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Funcionario;
use App\Models\Pessoa;


class FuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Funcionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pessoa_id' => Pessoa::all()->random()->id,

            'ra' => $this->faker->numberBetween($min = 0, $max = 99),

            'rg' => $this->faker->numberBetween($min = 0, $max = 9).
                '.'.$this->faker->numberBetween($min = 0, $max = 999).
                '.'.$this->faker->numberBetween($min = 0, $max = 999),

            'pis_pasep' => $this->faker->numberBetween($min = 0, $max = 99).
                ','.$this->faker->numberBetween($min = 0, $max = 99999).
                ','.$this->faker->numberBetween($min = 0, $max = 99).
                '-'.$this->faker->numberBetween($min = 0, $max = 9),
        ];
    }
}
 