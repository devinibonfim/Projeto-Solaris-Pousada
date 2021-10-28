<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pessoa;
use App\Models\User;

class PessoaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pessoa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'endereco_id' => '1',
            'data_nascimento' => $this->faker->date($format= 'Y-m-d',$max = 'now'),
            'telefone' => $this->faker->phoneNumber,
            'nacionalidade' => $this->faker->state,
        ];
    }
}
