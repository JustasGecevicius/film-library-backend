<?php

namespace Database\Seeders;

use App\Models\WishlistedMovies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishlistedMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WishlistedMovies::factory()
            ->count(5)
            ->hasMovies(1)
            ->create();
    }
}
