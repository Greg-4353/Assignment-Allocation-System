<?php

namespace Database\Factories;
use App\Models\Assignment;
use App\Models\Admin;
use Illuminate\Support\Facades\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
            'name' => $this->faker->sentence,
            'requesttype' => $this->faker->randomElement(['Type A', 'Type B', 'Type C']),
            'companyname' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'phonenumber' => $this->faker->phoneNumber,
            'admin_id' => function () {
                return Admin::inRandomOrder()->first()->id;
            }, //
        ];
    }
}
