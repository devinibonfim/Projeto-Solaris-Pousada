<?php

namespace Database\Factories;

use App\Models\Bairro;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cidade;

class BairroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bairro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cidade_id' => Cidade::all()->random()->id,
            'nome' => $this->faker->unique->streetName(),
        ];
    }
}
