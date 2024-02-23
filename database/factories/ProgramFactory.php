<?php

namespace Database\Factories;
use App\Models\Program;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Program::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

     public function definition()
     {
        return [
            'name' => $this->faker->name(),
            'duration' => $this->faker->numberBetween(30, 120), 
            'price' => $this->faker->randomFloat(2, 10, 100), 
            'description' => $this->faker->sentence(), 
            'member' => $this->faker->numberBetween(1,10),
            'employee' => $this->faker->numberBetween(1,10),
        ];
     }
}
