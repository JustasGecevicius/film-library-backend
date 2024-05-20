<?php

namespace Database\Seeders;

use App\Models\WishlistedSeries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WishlistedSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WishlistedSeries::factory()
            ->count(5)
            ->hasMovies(1)
            ->create();
    }
}
