<?php

namespace Database\Factories;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

     public function definition()
     {
         return [
             'name' => $this->faker->name(),
             'position' => $this->faker->jobTitle(),
             'phone' => $this->faker->phoneNumber(),
             'email' => $this->faker->unique()->safeEmail(),
             'hire_date' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
             
         ];
     }
}