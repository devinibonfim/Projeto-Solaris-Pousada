<?php

namespace Database\Factories;

use App\Models\Consumo;
use App\Models\Hospede;
use App\Models\Quarto;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reserva;

class ReservaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reserva::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quarto_id' => Quarto::all()->random()->unique()->id,
            'consumo_id' => Consumo::factory()->create(),
            'hospede_id' => Hospede::all()->random()->unique()->id,
            'valor' => $this->faker->numberBetween($min=0,$max=100).','.$this->faker->numberBetween($min=0,$max=100),
            'data_entrada' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'data_saida' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
