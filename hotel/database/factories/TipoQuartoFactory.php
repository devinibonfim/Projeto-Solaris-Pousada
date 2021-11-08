<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TipoQuarto;

class TipoQuartoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoQuarto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nome' => $this->faker->name,
            'valor' => $this->faker->numberBetween($min= 1 , $max = 5000),
            'tamanho' => $this->faker->numberBetween($min= 1 , $max = 500).'X'.$this->faker->numberBetween($min= 0 , $max = 500),
            'limite_pessoa' => $this->faker->numberBetween($min= 1 , $max = 50),
            'descricao' => $this->faker->text($maxNbChars = 250),
            
        ];
    }
}
