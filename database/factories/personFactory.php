<?php

namespace Database\Factories;

use App\Models\person;
use Illuminate\Database\Eloquent\Factories\Factory;

class personFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_no' => $this->faker->ean8(),
            'dob' => $this->faker->date(),
            'offce' => $this->faker->word,
            'registred' => rand(0, 1),
        ];
    }
}
