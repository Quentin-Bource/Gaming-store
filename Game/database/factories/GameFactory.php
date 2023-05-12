<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->sentence(3),
            'console' => fake()->sentence(2),
            'content' => fake()->paragraph(),
            'jeu' => fake()->imageUrl(640, 480, true),
            'prix' => fake()->numberBetween(20, 100),
            'created_at' => now()
        ];
    }
}
