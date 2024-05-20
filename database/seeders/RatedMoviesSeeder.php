<?php

namespace Database\Seeders;

use App\Models\RatedMovies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatedMoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RatedMovies::factory()
            ->count(5)
            ->hasMovies(1)
            ->create();
    }
}
