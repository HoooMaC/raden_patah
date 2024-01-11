<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(4, 15),
            'caption' => fake()->sentence(6, 20),
            'body' => fake()->paragraph(2,6),
            'date' => fake()->dateTime(),
            'role_id' => fake()->numberBetween(2,6)
        ];
    }
}
