<?php

namespace Database\Seeders;

use App\Models\LikedMovies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikedMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LikedMovies::factory()
            ->count(5)
            ->hasMovies(1)
            ->create();
    }
}
