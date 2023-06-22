<?php

namespace Database\Factories;
use App\Models\Member;
use Illuminate\Support\Facades\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
        'firstname' =>$this->faker->firstName,
        'lastname' =>$this->faker->lastName,
        'email' =>$this->faker->unique()->safeEmail,
        'password' => bcrypt('password'), // Assuming a default password of 'password'
        'staffnumber' =>$this->faker->unique()->randomNumber(5),
        'phonenumber' => $this->faker->phoneNumber,
        'is_active' => $this->faker->boolean,//
        ];
    }
}
