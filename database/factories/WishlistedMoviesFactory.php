<?php

namespace Database\Factories;

use App\Models\Movies;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WishlistedMovies>
 */
class WishlistedMoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => Movies::factory(),
            'user_id' => User::factory(),
        ];
    }
}
