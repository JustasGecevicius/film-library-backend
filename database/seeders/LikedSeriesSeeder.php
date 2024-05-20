<?php

namespace Database\Seeders;

use App\Models\LikedSeries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikedSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LikedSeries::factory()
            ->count(5)
            ->hasSeries(1)
            ->create();
    }
}
