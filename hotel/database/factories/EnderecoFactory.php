<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bairro;
use App\Models\Endereco;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bairro_id' => Bairro::all()->random()->id,
            'cep' => $this->faker->postcode,
            'complemento' => $this->faker->streetName,
            'numero_casa' => $this->faker->numberBetween($min = 0, $max = 40),
        ];
    }
}
