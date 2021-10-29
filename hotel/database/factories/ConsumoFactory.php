<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Consumo;
use App\Models\Produto;

class ConsumoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consumo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'produto_id' => Produto::all()->random()->id,
            'quantidade' => $this->faker->numberBetween($min = 0 , $max = 30),
        ];
    }
}
