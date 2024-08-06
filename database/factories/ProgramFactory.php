<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(3, 10),
            'description' => fake()->sentence(10, 50),
            // 'time' => fake()->sentence(3, 10),
            'icon' => '',
            'isActive' => true,
            'RoleID' => 1,
            'program_category_id' => fake()->numberBetween(1, 4)
        ];
    }
}
