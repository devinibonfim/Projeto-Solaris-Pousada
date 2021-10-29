<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'descricao' => $this->faker->text($maxNbChars = 250),
            'validade' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'valor' => $this->faker->numberBetween($min=0,$max=100).','.$this->faker->numberBetween($min=0,$max=100),
        ];
    }
}
