<?php

namespace Database\Factories;
use App\Models\Member;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

     public function definition()
     {
         return [
             'name' => $this->faker->name(),
             'membership_type' => $this->faker->randomElement(['dnevna', 'mjesecna', 'godisnja']),
             'phone' => $this->faker->phoneNumber(),
             'email' => $this->faker->unique()->safeEmail(),
             'join_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
             // Add more fields as needed
         ];
     }
}
