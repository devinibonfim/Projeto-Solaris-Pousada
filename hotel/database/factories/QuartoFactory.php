<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Quarto;
use App\Models\TipoQuarto;

class QuartoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quarto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipoQuarto_id' => TipoQuarto::all()->random()->unique()->id,
            'numero' => $this->faker->numberBetween($min= 0 , $max = 9),
            'andar' => $this->faker->numberBetween($min= 0 , $max = 20),
            'anotacoes' => $this->faker->text($maxNBChars = 200),
        ];
    }
}
